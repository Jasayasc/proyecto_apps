<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Paciente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PacienteController extends Controller
{
    public function edit(Request $request){
        //return $request->nombre;
        //return $request->nombre;
        //return ($request->id." A".Auth::user()->id);
        $paciente = Paciente::find(Auth::user()->id);
        $string = $request->nombre;
        $nombre = explode(' ', $string);     
        $paciente->nombre =   strval($nombre[0]);
        $paciente->apellido = strval($nombre[1]);
        $paciente->telefono = $request->telefono;
        $paciente->correo = $request->email;
        $paciente->direccion = $request->direccion;
        $paciente->fecha_nacimiento = $request->fecha_nacimiento;
        $paciente->ciudad = $request->ciudad;
        $paciente->save();
        $user = User::find($paciente->id_usuario);
        $user->name =  strval($nombre[0]);
        $user->email = $request->email;
        $user->save();
        return redirect()->route('home');
    }
}
