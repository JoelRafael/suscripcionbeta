<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Objeto;
use App\Models\Root;
class ObjetoController extends Controller
{
public function prueba(Request $request){
$repuesta=Root::create([
    "nombre"=>$request->get("nombre"),
    "apellido"=>$request->get("apellido")
]);
return response()->json([
'mensaje'=>'Usuario creado con exito',
'value'=>$repuesta

], 200);
    
}


}
