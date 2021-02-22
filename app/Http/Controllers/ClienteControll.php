<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Support\Facades\Hash;
use  App\Models\Cliente;

use Illuminate\Http\Request;


class ClienteControll extends Controller
{
    public function createcliente(Request $request){
try{
$validate=Validator::make($request->all(),[

'name'=>['required', 'string', 'max:50'],
'apellido'=>['required', 'string', 'max:50'],
'documentos'=>['required', 'string', 'max:13', 'min:8'],
'rnc'=>['required', 'max:10', 'min:10'],
'pais'=>['required', 'string', 'max:50'],
'ciudad'=>['required', 'string', 'max:50'],
'correo'=>['required', 'string', 'email','max:255', 'unique:clientes'],
'password'=>['required', 'string', 'min:8','max:50']
]);
                if($validate->fails()){
                  return response()->json([
                    "error"=>$validate->errors()
                           ],404);

}
   
    $cliente=Cliente::create([
                  "name"=>$request->get('name'),
                  "apellido"=>$request->get('apellido'),
                  "documentos"=>$request->get('documentos'),
                  "rnc"=>$request->get('rnc'),
                  "pais"=>$request->get('pais'),
                  "ciudad"=>$request->get('ciudad'),
                  "correo"=>$request->get('correo'),
                  "password"=>hash::make($request->get('password'))

                       
            
    ]);
    return response()->json([
        'resultado'=>"Cliente creado con exito"
    ],200);

}catch(Exection $e){    
        return response()->json([
            'error'=>"Upp error inesperado"
        ],400);


}
}
}