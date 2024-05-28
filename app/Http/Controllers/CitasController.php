<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CitasController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function newCita(){
        $doctores = Empleado::all();
        return view('user.citas.newCita',compact('doctores'));
    }
    public function modCita(){
        return 'Se modifica una cita';
    }
    public function delCita(){
        return view('user.citas.delita');
    }
    public function showCita(){
        return view('user.citas.showCita');
    }

    public function fetchName(){
        $empleados = Empleado::all();
        $cadena = "<label  class='col-md-4 col-form-label text-md-end'>Doctores:</label> <select name='doctores' id='doctores' class='form-control' required>";
        $cadena .= "<option value='.'>Selecciona un doctor</option>";
        foreach($empleados as $empleado){
            $cadena.= "<option value='".$empleado->id."'>".$empleado->nombre."</option>";
        }
        $cadena.="</select>";
        return response()->json($cadena);
    }

    public function fetchHorario(){
        
        return view('user.citas.index');
    }
}
