<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Paciente;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->rol == 1){
            return view('admin/index');
        }
        if(Auth::user()->rol == 3){
            $id_usuario = Auth::user()->id;
            $paciente = Paciente::where('id_usuario', $id_usuario)->first();
            return view('user/index', compact('paciente'));
        }
        
    }
}
