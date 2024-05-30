<?php

namespace Database\Seeders;

use App\Models\Consultorio_Empleado;
use App\Models\Inventario;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InventarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $inventario = new Inventario();
        $inventario->nombre = "Estetoscopio Digital";
        $inventario->descripcion = "Estetoscopio Digital";
        $inventario->cantidad = 1;
        $inventario->save();

        $inventario1 = new Inventario();
        $inventario1->nombre = "Esfigmomanómetro";
        $inventario1->descripcion = "Dispositivo utilizado para medir la presión arterial de los pacientes. Puede ser manual o automático.";
        $inventario1->cantidad = 1;
        $inventario1->save();

        $inventario2 = new Inventario();
        $inventario2->nombre = "Termómetro Infrarrojo";
        $inventario2->descripcion = "Herramienta para medir la temperatura corporal sin contacto directo, ideal para prevenir la propagación de enfermedades";
        $inventario2->cantidad = 1;
        $inventario2->save();

        $inventario3 = new Inventario();
        $inventario3->nombre = "Tensiómetro de Brazo";
        $inventario3->descripcion = "Aparato para la medición precisa de la presión arterial en el brazo, útil para diagnósticos rutinarios.";
        $inventario3->cantidad = 1;
        $inventario3->save();

        $inventario4 = new Inventario();
        $inventario4->nombre = "Oximetro de Pulso";
        $inventario4->descripcion = "Dispositivo que mide los niveles de oxígeno en la sangre y la frecuencia cardíaca a través de un sensor en el dedo.";
        $inventario4->cantidad = 1;
        $inventario4->save();

        //Consultorio de Pediatria
        $inventario5 = new Inventario();
        $inventario5->nombre = "Estetoscopio Pediátrico";
        $inventario5->descripcion = "Estetoscopio especialmente diseñado para escuchar los sonidos internos de los niños, con una campana más pequeña para mayor precisión.";
        $inventario5->cantidad = 1;
        $inventario5->save();

        $inventario6 = new Inventario();
        $inventario6->nombre = "Cama de Examen Pediátrica";
        $inventario6->descripcion = "Cama ajustable y acolchada diseñada específicamente para el confort y la seguridad de los niños durante los exámenes médicos.";
        $inventario6->cantidad = 1;
        $inventario6->save();

        $inventario7 = new Inventario();
        $inventario7->nombre = "Nebulizador Infantil";
        $inventario7->descripcion = "Aparato que convierte medicamentos líquidos en vapor para ser inhalados, usado para tratar afecciones respiratorias en niños.";
        $inventario7->cantidad = 1;
        $inventario7->save();

        $inventario8 = new Inventario();
        $inventario8->nombre = "Termómetro Digital Rápido";
        $inventario8->descripcion = "Termómetro de lectura rápida y precisa para medir la temperatura corporal de los niños de manera eficiente.";
        $inventario8->cantidad = 1;
        $inventario8->save();

        $inventario9 = new Inventario();
        $inventario9->nombre = "Báscula con Tallímetro";
        $inventario9->descripcion = "Báscula que mide el peso y la altura de los niños, fundamental para monitorear su crecimiento y desarrollo.";
        $inventario9->cantidad = 1;
        $inventario9->save();

        //Vacunacion
        $inventario11 = new Inventario();
        $inventario11->nombre = "Refrigerador para Vacunas";
        $inventario11->descripcion = "Equipo especializado para mantener las vacunas a la temperatura adecuada, asegurando su eficacia y seguridad.";
        $inventario11->cantidad = 1;
        $inventario11->save();

        $inventario12 = new Inventario();
        $inventario12->nombre = "Jeringas Desechables";
        $inventario12->descripcion = "Jeringas de un solo uso para la administración segura y estéril de las vacunas.";
        $inventario12->cantidad = 1;
        $inventario12->save();

        $inventario13 = new Inventario();
        $inventario13->nombre = "Caja de Seguridad para Desechos Biológicos";
        $inventario13->descripcion = "Contenedor especialmente diseñado para la eliminación segura de agujas y otros desechos médicos.";
        $inventario13->cantidad = 1;
        $inventario13->save();

        $inventario14 = new Inventario();
        $inventario14->nombre = "Hoja de Registro de Vacunas";
        $inventario14->descripcion = "Documentación donde se registran las vacunas administradas a cada paciente, importante para el seguimiento y control.";
        $inventario14->cantidad = 1;
        $inventario14->save();

        $inventario15 = new Inventario();
        $inventario15->nombre = "Guantes Desechables";
        $inventario15->descripcion = "Guantes de látex o nitrilo utilizados por el personal médico para mantener la higiene y prevenir infecciones durante la vacunación.";
        $inventario15->cantidad = 1;
        $inventario15->save();

        //Atención Neunatal
        $inventario16 = new Inventario();
        $inventario16->nombre = "Incubadora Neonatal";
        $inventario16->descripcion = "Dispositivo que proporciona un ambiente controlado y seguro para los recién nacidos prematuros o con problemas de salud.";
        $inventario16->cantidad = 1;
        $inventario16->save();

        $inventario17 = new Inventario();
        $inventario17->nombre = "Monitor de Signos Vitales Neonatal";
        $inventario17->descripcion = "Aparato que monitorea continuamente la frecuencia cardíaca, respiración y otros signos vitales de los neonatos.";
        $inventario17->cantidad = 1;
        $inventario17->save();

        $inventario18 = new Inventario();
        $inventario18->nombre = "Fototerapia";
        $inventario18->descripcion = "Equipo usado para tratar la ictericia en recién nacidos, utilizando luz para reducir los niveles de bilirrubina en sangre.";
        $inventario18->cantidad = 1;
        $inventario18->save();

        $inventario19 = new Inventario();
        $inventario19->nombre = "Resucitador Neonatal";
        $inventario19->descripcion = "Dispositivo de emergencia utilizado para ayudar a los recién nacidos que tienen dificultades para respirar al nacer.";
        $inventario19->cantidad = 1;
        $inventario19->save();

        $inventario20 = new Inventario();
        $inventario20->nombre = "Colchón Térmico Neonatal";
        $inventario20->descripcion = "Colchón que proporciona calor controlado a los neonatos para mantener una temperatura corporal adecuada.";
        $inventario20->cantidad = 1;
        $inventario20->save();

        //Crecimiento y Desarrollo
        $inventario21 = new Inventario();
        $inventario21->nombre = "Cinturómetro";
        $inventario21->descripcion = "Herramienta para medir la circunferencia corporal, útil para monitorear el crecimiento y desarrollo físico de los niños.";
        $inventario21->cantidad = 1;
        $inventario21->save();

        $inventario21 = new Inventario();
        $inventario21->nombre = "Báscula con Tallímetro Infantil";
        $inventario21->descripcion = "Báscula combinada con tallímetro para medir el peso y la altura de los niños, crucial para seguir su crecimiento.";
        $inventario21->cantidad = 1;
        $inventario21->save();

        $inventario22 = new Inventario();
        $inventario22->nombre = "Kit de Evaluación Psicomotora";
        $inventario22->descripcion = "Conjunto de materiales y herramientas para evaluar el desarrollo psicomotor de los niños en diferentes etapas.";
        $inventario22->cantidad = 1;
        $inventario22->save();

        $inventario23 = new Inventario();
        $inventario23->nombre = "Tablero de Evaluación Visual";
        $inventario23->descripcion = "Herramienta para evaluar la agudeza visual de los niños, importante en el seguimiento del desarrollo visual.";
        $inventario23->cantidad = 1;
        $inventario23->save();

        $inventario24 = new Inventario();
        $inventario24->nombre = "Cuestionarios de Desarrollo Infantil";
        $inventario24->descripcion = "Formularios utilizados para evaluar y registrar el desarrollo cognitivo, emocional y social de los niños en consulta.";
        $inventario24->cantidad = 1;
        $inventario24->save();

        $consultorio_empleado = new Consultorio_Empleado();
        $consultorio_empleado->id_consultorio = 2;
        $consultorio_empleado->id_inventario = 1;
        $consultorio_empleado->save();

        $consultorio_empleado2 = new Consultorio_Empleado();
        $consultorio_empleado2->id_consultorio = 2;
        $consultorio_empleado2->id_inventario = 2;
        $consultorio_empleado2->save();

        $consultorio_empleado3 = new Consultorio_Empleado();
        $consultorio_empleado3->id_consultorio = 2;
        $consultorio_empleado3->id_inventario = 3;
        $consultorio_empleado3->save();

        $consultorio_empleado4 = new Consultorio_Empleado();
        $consultorio_empleado4->id_consultorio = 2;
        $consultorio_empleado4->id_inventario = 4;
        $consultorio_empleado4->save();

        $consultorio_empleado5 = new Consultorio_Empleado();
        $consultorio_empleado5->id_consultorio = 2;
        $consultorio_empleado5->id_inventario = 5;
        $consultorio_empleado5->save();

        $consultorio_empleado6 = new Consultorio_Empleado();
        $consultorio_empleado6->id_consultorio = 3;
        $consultorio_empleado6->id_inventario = 6;
        $consultorio_empleado6->save();

        $consultorio_empleado7 = new Consultorio_Empleado();
        $consultorio_empleado7->id_consultorio = 3;
        $consultorio_empleado7->id_inventario = 7;
        $consultorio_empleado7->save();

        $consultorio_empleado8 = new Consultorio_Empleado();
        $consultorio_empleado8->id_consultorio = 3;
        $consultorio_empleado8->id_inventario = 8;
        $consultorio_empleado8->save();

        $consultorio_empleado9 = new Consultorio_Empleado();
        $consultorio_empleado9->id_consultorio = 3;
        $consultorio_empleado9->id_inventario = 9;
        $consultorio_empleado9->save();

        $consultorio_empleado10 = new Consultorio_Empleado();
        $consultorio_empleado10->id_consultorio = 3;
        $consultorio_empleado10->id_inventario = 10;
        $consultorio_empleado10->save();

        $consultorio_empleado11 = new Consultorio_Empleado();
        $consultorio_empleado11->id_consultorio = 4;
        $consultorio_empleado11->id_inventario = 11;
        $consultorio_empleado11->save();

        $consultorio_empleado12 = new Consultorio_Empleado();
        $consultorio_empleado12->id_consultorio = 4;
        $consultorio_empleado12->id_inventario = 12;
        $consultorio_empleado12->save();

        $consultorio_empleado13 = new Consultorio_Empleado();
        $consultorio_empleado13->id_consultorio = 4;
        $consultorio_empleado13->id_inventario = 13;
        $consultorio_empleado13->save();

        $consultorio_empleado14 = new Consultorio_Empleado();
        $consultorio_empleado14->id_consultorio = 4;
        $consultorio_empleado14->id_inventario = 14;
        $consultorio_empleado14->save();

        $consultorio_empleado15 = new Consultorio_Empleado();
        $consultorio_empleado15->id_consultorio = 4;
        $consultorio_empleado15->id_inventario = 15;
        $consultorio_empleado15->save();

        $consultorio_empleado16 = new Consultorio_Empleado();
        $consultorio_empleado16->id_consultorio = 5;
        $consultorio_empleado16->id_inventario = 16;
        $consultorio_empleado16->save();

        $consultorio_empleado17 = new Consultorio_Empleado();
        $consultorio_empleado17->id_consultorio = 5;
        $consultorio_empleado17->id_inventario = 17;
        $consultorio_empleado17->save();

        $consultorio_empleado18 = new Consultorio_Empleado();
        $consultorio_empleado18->id_consultorio = 5;
        $consultorio_empleado18->id_inventario = 18;
        $consultorio_empleado18->save();

        $consultorio_empleado19 = new Consultorio_Empleado();
        $consultorio_empleado19->id_consultorio = 5;
        $consultorio_empleado19->id_inventario = 19;
        $consultorio_empleado19->save();

        $consultorio_empleado20 = new Consultorio_Empleado();
        $consultorio_empleado20->id_consultorio = 5;
        $consultorio_empleado20->id_inventario = 20;
        $consultorio_empleado20->save();

        $consultorio_empleado21 = new Consultorio_Empleado();
        $consultorio_empleado21->id_consultorio = 6;
        $consultorio_empleado21->id_inventario = 21;
        $consultorio_empleado21->save();

        $consultorio_empleado22 = new Consultorio_Empleado();
        $consultorio_empleado22->id_consultorio = 6;
        $consultorio_empleado22->id_inventario = 22;
        $consultorio_empleado22->save();

        $consultorio_empleado23 = new Consultorio_Empleado();
        $consultorio_empleado23->id_consultorio = 6;
        $consultorio_empleado23->id_inventario = 23;
        $consultorio_empleado23->save();

        $consultorio_empleado24 = new Consultorio_Empleado();
        $consultorio_empleado24->id_consultorio = 6;
        $consultorio_empleado24->id_inventario = 24;
        $consultorio_empleado24->save();

        $consultorio_empleado25 = new Consultorio_Empleado();
        $consultorio_empleado25->id_consultorio = 6;
        $consultorio_empleado25->id_inventario = 25;
        $consultorio_empleado25->save();

    }
}
