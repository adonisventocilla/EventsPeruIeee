<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\UserType;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Socialite;
use App\User;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    
    public function redirectToProvider($provider)
    {
        
        return Socialite::driver($provider)->redirect();
    }

    
    public function handleProviderCallback($provider)
    {
        try {
            $user = Socialite::driver($provider)->stateless()->user();
        } catch (\Exception $e) {
            return redirect('/login');
        }
        
        /**
        * // Solo permitir a personas con @ieee.org para logearse
        * if(explode("@", $user->email)[1] !== 'ieee.org'){
        *    return redirect()->to('/');
        * }
        */

        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        return redirect($this->redirectTo);
    }

    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('provider_id', $user->id)->first();

        if($authUser) {
            return $authUser;
        }

        $u = User::create([
            'nickname' => $user->name,
            'email' => $user->email,
            'provider' => strtoupper($provider),
            'provider_id' => $user->id,
            'avatar' => $user->avatar,
            'avatar_original' => $user->avatar_original,
        ]);

        UserType::create([
            'user_id' => $u->id,
            'type' => 1,
        ]);


        return $u;


    }
}
