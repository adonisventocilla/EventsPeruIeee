<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\Institute;
use App\Models\Phone;
use App\Repositories\Ubigeo;
use App\User;
use Auth;

class UserController extends Controller
{

    protected $ubigeo;

    /**
     * Block comment
     *
     * @return void
     */
    public function __construct(Ubigeo $ubigeo)
    {

        $this->ubigeo = $ubigeo;
    }

    /**
     * Block comment
     *
     * @return View
     */
    public function createPersonData(User $user)
    {

        //Consigue un array de Region/Provincia/distrito (Perú)
        $ubigeo = $this->ubigeo->all();

        $user['person'] = $user->person()->first();

        return view('users.create',[
            'user'       => $user,
            'institutes' => Institute::all(),
        ]);
    }

    /**
     * Block comment
     *
     * @return View
     */
    public function storePersonData(Request $request)
    {

        $id = Auth::id();

        $data = $request->validate([
            'document' => 'required|unique:document,number,'.$id.',person_id|min:8|max:8',
            'phone'    => 'required|min:8|max:9',
        ],[
            'document.required' => 'El documento de identidad es necesario',
            'phone.required'    => 'El número teléfonico es necesario',
            'document.unique'   => 'Este documente ha sido tomado',
            'document.min'      => 'El número no puede ser de menos de 8',
            'document.max'      => 'El número no puede ser de más de 8',
        ]);

        try {

            Auth::user()->person()->first()->phone()->save(
                new Phone([
                    'number' => $data['phone']
                ])
            );

            Auth::user()->person()->first()->document()->save(
                new Document([
                    'documentType_id' => 1,     //Documento de identidad (DNI) peruano
                    'number'          => $data['document'],
                ])
            );

        } catch (\Throwable $throw) {

            throw $throw;
        }

        return redirect()->route('register.create', ['user' => Auth::user()]);
    }

}
