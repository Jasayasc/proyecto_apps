<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Horario;
use App\Models\Empleado;
use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\isEmpty;

class CitasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function newCita()
    {
        $doctores = Empleado::all();
        return view('user.citas.newCita', compact('doctores'));
    }
    public function modCita()
    {
        return 'Se modifica una cita';
    }
    public function delCita()
    {
        return view('user.citas.delita');
    }
    public function showCita()
    {
        // return date('Y-m-d');
        $paciente = Paciente::where('id_usuario', '=', Auth::user()->id)->first();
        $citas = DB::select('call lista_de_citas('.$paciente->id.')');
        return view('user.citas.showCita', compact('citas'));
    }

    public function fetchName(Request $request)
    {
        $empleados = Empleado::where('especialidad', '=', $request->id_tipo)->get();
        $cadena = "<label class='col-md-4 col-form-label text-md-end'>Doctores:</label> <div class='col-md-6'><select name='doctor' id='doctor' class='form-control' required>";
        $cadena .= "<option value='.'>Selecciona un doctor</option>";
        foreach ($empleados as $empleado) {
            $cadena .= "<option value='" . $empleado->id . "'>" . $empleado->nombre . "</option>";
        }
        $cadena .= "</select></div>";
        return response()->json($cadena);
    }

    public function addFecha()
    {
        $cadena = "<label class='col-md-4 col-form-label text-md-end'>Fecha</label>";
        $cadena .= "<div class='col-md-6'><input type='date' name='fecha' id='fecha' class='form-control' required></div>";
        return response()->json($cadena);
    }

    public function fetchHorario(Request $request)
    {
        // return $request;

        $horariosOcupados = Cita::select('hora')->where('id_medico', '=', $request->doctor)->where('fecha', '=', $request->fecha)->get();
        $horarios = Horario::all();
        $cadena = "<label class='col-md-4 col-form-label text-md-end' for='hora'>Hora:</label> <div class='col-md-6'> <select name='hora' id='hora' class='form-control' required>";
        $cadena .= "<option value='.'>Selecciona una hora</option>";
        $horariosDisponibles = [];
        foreach ($horarios as $horario) {
            $ocupado = false;
            foreach ($horariosOcupados as $horarioOcupado) {
                if ($horario->id == $horarioOcupado->hora) {
                    $ocupado = true;
                    break;
                }
            }
            if (!$ocupado) {
                $horariosDisponibles[] = $horario;
            }
        }
        foreach ($horariosDisponibles as $horario) {
            $cadena .= "<option value='{$horario->id}'>{$horario->hora}</option>";
        }
        $cadena .= "</select></div>";
        return response()->json($cadena);
    }

    public function addCita(Request $request)
    {
        $paciente = Paciente::where('id_usuario', '=', Auth::user()->id)->first();
        // return $paciente;
        $cita = new Cita();
        $cita->id_paciente = $paciente->id;
        $cita->fecha = $request->fecha;
        $cita->hora = $request->hora;
        $cita->id_medico = $request->doctor;
        $cita->save();
        return redirect()->route('home')->withSuccess('Cita agendada con exito');
    }
}
