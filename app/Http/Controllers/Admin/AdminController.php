<?php

namespace App\Http\Controllers\Admin;
use App\Http\Middleware\Admin;
use App\Models\User;
use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth',Admin::class]);
    }
    //
    public function index()
    {
        return view('admin/index');
    }
    public function settings()
    {
        $id = Auth::user()->id;
        $admin = Empleado::where('id_usuario', $id)->first();
        return view('admin/settings', compact('admin'));
    }
    public function password()
    {
        return view('admin/password');
    }
    public function passwordUpdate(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);
        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors('¡La contraseña actual no coincide!');
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return back()->withSuccess('Contraseña cambiada correctamente');

    }
    public function listUsers(){
        $usuarios = DB::select('call lista_de_usuarios()');
        return view('admin/usuarios/listUsers', compact('usuarios'));
    }
    public function addAdmins()
    {
        return view('admin/usuarios/addAdmins');
    }
    public function addWorkers()
    {

        return view('admin/usuarios/addWorkers');
    }
    public function addPatients()
    {
        return view('admin/usuarios/addPatients');
    }
}
