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
        // $especialidad = new Especialidad();
        // $especialidad->id = 1;
        // $especialidad->especialidad = 'Administrador';
        // $especialidad->save();

        // $especialidad1 = new Especialidad();
        // $especialidad1->id = 2;
        // $especialidad1->especialidad = 'Medicina General';
        // $especialidad1->save();

        // $especialidad2 = new Especialidad();
        // $especialidad2->id = 3;
        // $especialidad2->especialidad = 'Pediatria';
        // $especialidad2->save();

        // $especialidad3 = new Especialidad();
        // $especialidad3->id = 4;
        // $especialidad3->especialidad = 'Vacunacion';
        // $especialidad3->save();

        // $especialidad4 = new Especialidad();
        // $especialidad4->id = 5;
        // $especialidad4->especialidad = 'Atencion Neonatal';
        // $especialidad4->save();

        // $especialidad5 = new Especialidad();
        // $especialidad5->id = 6;
        // $especialidad5->especialidad = 'Crecimiento y Desarrollo';
        // $especialidad5->save();

        // $oficina = new Oficina();
        // $oficina->id = 1;
        // $oficina->tipo = 'Oficina Administrador';
        // $oficina->save();

        // $oficina2 = new Oficina();
        // $oficina2->id = 2;
        // $oficina2->tipo = 'Medicina General';
        // $oficina2->save();

        // $oficina3 = new Oficina();
        // $oficina3->id = 3;
        // $oficina3->tipo = 'Pediatria';
        // $oficina3->save();

        // $oficina4 = new Oficina();
        // $oficina4->id = 4;
        // $oficina4->tipo = 'Vacunacion';
        // $oficina4->save();

        // $oficina5 = new Oficina();
        // $oficina5->id = 5;
        // $oficina5->tipo = 'Atencion Neonatal';
        // $oficina5->save();

        // $oficina6 = new Oficina();
        // $oficina6->id = 6;
        // $oficina6->tipo = 'Crecimiento y Desarrollo';
        // $oficina6->save();

        // $user = new User();
        // $user->email = 'admin@admin.com';
        // $user->password =  Hash::make('12345678');
        // $user->rol = 1;
        // $user->save();

        // $empleado = new Empleado();
        // $empleado->nombre = 'Admin';
        // $empleado->apellido = 'Admin';
        // $empleado->fecha_nacimiento = '0001-01-01';
        // $empleado->ciudad = 'Bogotá';
        // $empleado->oficina = 1;
        // $empleado->especialidad = 1;
        // $empleado->direccion = 'Cra 0 # 0- 0';
        // $empleado->telefono = '0000000000';
        // $empleado->id_usuario=$user->id;
        // $empleado->save();

        // $user2 = new User();
        // $user2->email = 'medico@gmail.com';
        // $user2->password =  Hash::make('12345678');
        // $user2->rol = 2;
        // $user2->save();

        // $empleado2 = new Empleado();
        // $empleado2->nombre = 'Elver';
        // $empleado2->apellido = 'Galarga';
        // $empleado2->fecha_nacimiento = '1980-01-01';
        // $empleado2->ciudad = 'Bogotá';
        // $empleado2->oficina = 2;
        // $empleado2->especialidad = 2;
        // $empleado2->direccion = 'Cra 0 # 0- 0';
        // $empleado2->telefono = '0000000000';
        // $empleado2->id_usuario=$user2->id;
        // $empleado2->save();

        // $user3 = new User();
        // $user3->email = 'pediatra@gmail.com';
        // $user3->password =  Hash::make('12345678');
        // $user3->rol = 2;
        // $user3->save();

        // $empleado3 = new Empleado();
        // $empleado3->nombre = 'Rosa';
        // $empleado3->apellido = 'Melano';
        // $empleado3->fecha_nacimiento = '1980-01-01';
        // $empleado3->ciudad = 'Bogotá';
        // $empleado3->oficina = 3;
        // $empleado3->especialidad = 3;
        // $empleado3->direccion = 'Cra 0 # 0- 0';
        // $empleado3->telefono = '0000000000';
        // $empleado3->id_usuario=$user3->id;
        // $empleado3->save();

        // $user4 = new User();
        // $user4->email = 'vacuna@gmail.com';
        // $user4->password =  Hash::make('12345678');
        // $user4->rol = 2;
        // $user4->save();

        // $empleado4 = new Empleado();
        // $empleado4->nombre = 'Yesenia';
        // $empleado4->apellido = 'Carmona';
        // $empleado4->fecha_nacimiento = '1980-01-01';
        // $empleado4->ciudad = 'Bogotá';
        // $empleado4->oficina = 4;
        // $empleado4->especialidad = 4;
        // $empleado4->direccion = 'Cra 0 # 0- 0';
        // $empleado4->telefono = '0000000000';
        // $empleado4->id_usuario=$user4->id;
        // $empleado4->save();

        // $user5 = new User();
        // $user5->email = 'neonatal@gmail.com';
        // $user5->password =  Hash::make('12345678');
        // $user5->rol = 2;
        // $user5->save();

        // $empleado5 = new Empleado();
        // $empleado5->nombre = 'Alma';
        // $empleado5->apellido = 'Marcelo';
        // $empleado5->fecha_nacimiento = '1980-01-01';
        // $empleado5->ciudad = 'Bogotá';
        // $empleado5->oficina = 5;
        // $empleado5->especialidad = 5;
        // $empleado5->direccion = 'Cra 0 # 0- 0';
        // $empleado5->telefono = '0000000000';
        // $empleado5->id_usuario=$user5->id;
        // $empleado5->save();

        // $user6 = new User();
        // $user6->email = 'crecimiento@gmail.com';
        // $user6->password =  Hash::make('12345678');
        // $user6->rol = 2;
        // $user6->save();

        // $empleado6 = new Empleado();
        // $empleado6->nombre = 'Juan';
        // $empleado6->apellido = 'Taza';
        // $empleado6->fecha_nacimiento = '1980-01-01';
        // $empleado6->ciudad = 'Bogotá';
        // $empleado6->oficina = 6;
        // $empleado6->especialidad = 6;
        // $empleado6->direccion = 'Cra 0 # 0- 0';
        // $empleado6->telefono = '0000000000';
        // $empleado6->id_usuario=$user6->id;
        // $empleado6->save();

        // $user1 = new User();
        // $user1->email = 'joelandressayas@gmail.com';
        // $user1->password =  Hash::make('12345678');
        // $user1->save();

        // $paciente = new Paciente();
        // $paciente->nombre = 'Joel';
        // $paciente->apellido = 'Sayas';
        // $paciente->fecha_nacimiento = '2005-01-09';
        // $paciente->ciudad = 'Bogotá';
        // $paciente->telefono = '3025534564';
        // $paciente->direccion = 'Cra 1 # 65 - 23';
        // $paciente->id_usuario = $user1->id;
        // $paciente->save();
        
        // $this->call(HorarioSeeder::class);
        // $this->call(DiagnosticoSeeder::class);
        // $this->call(ExamenesSeeder::class);
        $this->call(InventarioSeeder::class);
    }
}
