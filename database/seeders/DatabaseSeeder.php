<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Oficina;
use App\Models\Empleado;
use App\Models\Paciente;
use App\Models\Especialidad;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $especialidad = new Especialidad();
        $especialidad->id = 1;
        $especialidad->especialidad = 'Administrador';
        $especialidad->save();
        $especialidad2 = new Especialidad();
        $especialidad2->id = 2;
        $especialidad2->especialidad = 'Medicina General';
        $especialidad2->save();
        $oficina = new Oficina();
        $oficina->id = 1;
        $oficina->tipo = 'Oficina Administrador';
        $oficina->save();
        $user = new User();
        //$user->id = 1010;
        //$user->name = 'Admin';
        $user->email = 'admin@admin.com';
        $user->password =  Hash::make('12345678');
        $user->rol = 1;
        $user->save();
        $empleado = new Empleado();
        $empleado->nombre = 'Admin';
        $empleado->apellido = 'Admin';
        $empleado->fecha_nacimiento = '0001-01-01';
        $empleado->ciudad = 'Bogotá';
        $empleado->oficina = 1;
        $empleado->especialidad = 1;
        $empleado->direccion = 'Cra 0 # 0- 0';
        $empleado->telefono = '0000000000';
        $empleado->id_usuario=$user->id;
        $empleado->save();
        $user1 = new User();
        //$user1->name = 'Joel';
        $user1->email = 'joelandressayas@gmail.com';
        $user1->password =  Hash::make('12345678');
        $user1->save();
        $paciente = new Paciente();
        $paciente->nombre = 'Joel';
        $paciente->apellido = 'Sayas';
        $paciente->fecha_nacimiento = '2005-01-09';
        $paciente->ciudad = 'Bogotá';
        $paciente->telefono = '3025534564';
        $paciente->direccion = 'Cra 1 # 65 - 23';
        //$paciente->correo = $user1->email;
        $paciente->id_usuario = $user1->id;
        $paciente->save();
        

    }
}
