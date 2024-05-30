<?php

namespace Database\Seeders;

use App\Models\Examenes;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ExamenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $examen = new Examenes();
        $examen->tipo = "Glucosa";
        $examen->resultado = "Si";
        $examen->id_cita = 2;
        $examen->save();

        $examen2 = new Examenes();
        $examen2->tipo = "Trigliceridos";
        $examen2->resultado = "No";
        $examen2->id_cita = 3;
        $examen2->save();

        $examen3 = new Examenes();
        $examen3->tipo = "Sangre";
        $examen3->resultado = "Si";
        $examen3->id_cita = 4;
        $examen3->save();
    }
}
