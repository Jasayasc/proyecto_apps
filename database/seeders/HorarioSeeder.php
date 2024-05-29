<?php

namespace Database\Seeders;

use App\Models\Horario;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HorarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $horario = new Horario();
        $horario->id = 1;
        $horario->hora = '08:00';
        $horario->save();

        $horario1 = new Horario();
        $horario1->id = 2;
        $horario1->hora = '09:00';
        $horario1->save();

        $horario2 = new Horario();
        $horario2->id = 3;
        $horario2->hora = '10:00';
        $horario2->save();

        $horario3 = new Horario();
        $horario3->id = 4;
        $horario3->hora = '11:00';
        $horario3->save();

        $horario4 = new Horario();
        $horario4->id = 5;
        $horario4->hora = '12:00';
        $horario4->save();

        $horario5 = new Horario();
        $horario5->id = 6;
        $horario5->hora = '13:00';
        $horario5->save();

        $horario6 = new Horario();
        $horario6->id = 7;
        $horario6->hora = '14:00';
        $horario6->save();

        $horario7 = new Horario();
        $horario7->id = 8;
        $horario7->hora = '15:00';
        $horario7->save();

        $horario8 = new Horario();
        $horario8->id = 9;
        $horario8->hora = '16:00';
        $horario8->save();

        $horario9 = new Horario();
        $horario9->id = 10;
        $horario9->hora = '17:00';
        $horario9->save();

        $horario10 = new Horario();
        $horario10->id = 11;
        $horario10->hora = '18:00';
        $horario10->save();
    }
}