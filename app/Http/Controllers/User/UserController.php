<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\Institute;
use App\Models\Phone;
use App\Repositories\Ubigeo;
use App\Repositories\Reniec;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    protected $ubigeo;

    /**
     * Block comment
     *
     * @return void
     */
    public function __construct(Ubigeo $ubigeo, Reniec $reniec)
    {
        try {
            $this->reniec = $reniec;
            $this->ubigeo = $ubigeo;
        }
        catch (\Throwable $throw) {
            session()
                    ->flash('status','¡Servicio temporalmente desactivado!');
            return redirect()
                            ->back();
        }
    }

    /**
     * Block comment
     *
     * @return View
     */
    public function createPersonData(User $user)
    {
        $user['person'] = $user
                                ->person()->first();

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

        $id = Auth::user()
                        ->person()
                        ->first()
                        ->id;

        $data = $request->validate([
            'firstname' => 'required',
            'middlename' => '',
            'nickname' => 'required',
            'lastname' => 'required',
            'document' => 'required|unique:document,number,' . $id . ',person_id|min:8|max:8',
            'phone'    => 'required|min:8|max:9',
        ],[
            'document.required' => 'El documento de identidad es necesario',
            'phone.required'    => 'El número teléfonico es necesario',
            'document.unique'   => 'Este documente ha sido tomado',
            'document.min'      => 'El número no puede ser de menos de 8',
            'document.max'      => 'El número no puede ser de más de 8',
        ]);

        DB::beginTransaction();
        try {

            Auth::user()
                        ->update([
                'nickname' => $data['nickname']
            ]);

            Auth::user()
                        ->person()
                        ->update([
                'firstName' => $data['firstname'],
                'middleName' => $data['middlename'],
                'lastName' => $data['lastname']
            ]);

            if (Auth::user()
                            ->person()->first()
                            ->phone()->first()
                            ) {
                    Auth::user()
                            ->person()->first()
                            ->phone()
                            ->update([
                    'number' => $data['phone']
                ]);
            } else {
                Auth::user()
                            ->person()->first()
                            ->phone()
                            ->save(
                    new Phone([
                        'number' => $data['phone']
                    ])
                );
            }

            if (condition) {
                # code...
            } else {
                # code...
            }
            
            
            if (Auth::user()
                            ->person()->first()
                            ->document()->first()
                            ) {
                Auth::user()
                            ->person()->first()
                            ->document()
                            ->update([
                    'documentType_id' => 1,     //Documento de identidad (DNI) peruano
                    'number'          => $data['document']
                ]);
            } else {
                Auth::user()
                    ->person()->first()
                    ->document()
                    ->save(
                    new Document([
                        'documentType_id' => 1,     //Documento de identidad (DNI) peruano
                        'number'          => $data['document']
                    ])
                );
            }
            

            

            

        } catch (\Throwable $throw) {
            DB::rollBack();
            session()
                    ->flash('status','¡Hubo un error!');
            return redirect()
                            ->back();
        }

        DB::commit();
        return redirect()
                        ->back();
    }

}
