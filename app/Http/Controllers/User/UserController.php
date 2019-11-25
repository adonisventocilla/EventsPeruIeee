<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\Institute;
use App\Models\Phone;
use App\Repositories\Ubigeo;
use App\User;


class UserController extends Controller
{

    protected $ubigeo;

    public function __construct(Ubigeo $ubigeo)
    {
        $this->ubigeo = $ubigeo;
    }
 
    public function createPersonData(User $user)
    {
        

        $ubigeo = $this->ubigeo->all();//Consigue un array de Region/Provincia/distrito (Perú)

        
        
        $user['person'] = $user->person()->first();

        return view('users.create',[
            'user' => $user,
            'institutes' => Institute::all(),
        ]);
    }

    public function storePersonData(Request $request)
    {
        
        
        $data = $request->validate([
            'document' => 'required|unique:document,number|min:8|max:8',
            'phone' => 'required|min:8|max:9',
        ],[
            'document.required' => 'El documento de identidad es necesario',
            'phone.required' => 'El número teléfonico es necesario',
            'document.unique' => 'Este documente ha sido tomado',
            'document.min' => 'El número no puede ser de menos de 8',
            'document.max' => 'El número no puede ser de más de 8',

        ]);

        try {
            User::find(session()->get('userId'))->person()->first()->phone()->save(new Phone(['number' => $data['phone']]));
            User::find(session()->get('userId'))->person()->first()->document()->save(new Document([
                                                                                        'documentType_id' => 1,//Documento de identidad (DNI) peruano
                                                                                        'number' => $data['document'],
                                                                                        ]));
        } catch (\Throwable $th) {
            throw $th;
        }
        

        return ;

    }

}
