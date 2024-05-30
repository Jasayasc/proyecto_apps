<?php

namespace Database\Seeders;

use App\Models\Diagnostico;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DiagnosticoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $diagnostico = new Diagnostico();
        $diagnostico->descripcion = 'Diagnostico 1';
        $diagnostico->id_cita = 2;
        $diagnostico->save();

        $diagnostico2 = new Diagnostico();
        $diagnostico2->descripcion = 'Diagnostico 2';
        $diagnostico2->id_cita = 3;
        $diagnostico2->save();

        $diagnostico3 = new Diagnostico();
        $diagnostico3->descripcion = 'Diagnostico 3';
        $diagnostico3->id_cita = 4;
        $diagnostico3->save();

        $diagnostico4 = new Diagnostico();
        $diagnostico4->descripcion = 'Diagnostico 4';
        $diagnostico4->id_cita = 5;
        $diagnostico4->save();

        $diagnostico5 = new Diagnostico();
        $diagnostico5->descripcion = 'Diagnostico 5';
        $diagnostico5->id_cita = 6;
        $diagnostico5->save();
    }
}
