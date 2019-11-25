<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckPersonData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->roles()->where('id', 2)) {
            return $next($request);
        }
        
        if(Auth::user()->person()->first()->document()->first() == null
        || Auth::user()->person()->first()->phone()->first() == null
        )
        {
            return redirect()->route('register.create',[
                'user' => Auth::user()->person()->first(),
            ]);
        }
        return $next($request);
    }
}
