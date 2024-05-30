<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Models\Oficina;
use App\Models\Empleado;
use App\Models\Paciente;
use App\Models\Especialidad;
use Illuminate\Http\Request;
use App\Http\Middleware\Admin;
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
    public function addWorkers()
    {
        $oficinas = Oficina::all();
        $especialidades = Especialidad::all();
        return view('admin/usuarios/addWorkers', compact('oficinas', 'especialidades'));
    }
    public function addPatients()
    {
        return view('admin/usuarios/addPatients');
    }
    public function newWorkers(Request $request){
        //return $request;
        $usuario = new User();
        $usuario->email = $request->correo;
        if($request->contraseña == $request->confirmContraseña){
            $usuario->password = Hash::make($request->confirmContrasena);
        }else{
            return redirect()->route('admin.add.workers')->withErrors('Las contraseñas no coinciden');
        }
        
        $rol = $request->especialidad;
        $usuario->rol = ($rol == 1) ? 1 : 2;
        $usuario->save();
        $empleado = new Empleado();
        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->fecha_nacimiento = $request->nacimiento;
        $empleado->ciudad = $request->ciudad;
        $empleado->telefono = $request->telefono;
        $empleado->direccion = $request->direccion;
        $empleado->oficina = $request->oficina;
        $empleado->especialidad = $request->especialidad;
        $empleado->id_usuario = $usuario->id;
        $empleado->save();
        return redirect()->route('admin.list.users')->withSuccess('Empleado Añadido con exito');
    }

    public function newPatients(Request $request){
        $usuario = new User();
        $usuario->email = $request->correo;
        if($request->contraseña == $request->confirmContraseña){
            $usuario->password = Hash::make($request->confirmContrasena);
        }else{
            return redirect()->route('admin.add.patients')->withErrors('Las contraseñas no coinciden');
        }
        $usuario->save();
        $paciente = new Paciente();
        $paciente->nombre = $request->nombre;
        $paciente->apellido = $request->apellido;
        $paciente->fecha_nacimiento = $request->nacimiento;
        $paciente->ciudad = $request->ciudad;
        $paciente->telefono = $request->telefono;
        $paciente->direccion = $request->direccion;
        $paciente->id_usuario = $usuario->id;
        $paciente->save();
        return redirect()->route('admin.list.users')->withSuccess('Paciente Añadido con exito');
    }

}
