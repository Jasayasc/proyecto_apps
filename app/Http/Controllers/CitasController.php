<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CitasController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function newCita(){
        
        return view('user.citas.newCita');
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
    public function fetchHorario(){
        
        return view('user.citas.index');
    }
}
