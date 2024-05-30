<?php

namespace App\Http\Controllers\admin\graficos;

require_once app_path('Libraries/phplot/phplot.php');

use Illuminate\Http\Request;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class GraficosController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', Admin::class]);
    }

    public function citaEspecialidad()
    {
        $resultado = DB::select('CALL `citas por especialidad`()');

        foreach ($resultado as $fila) {
            $datos[] = array($fila->especialidad, $fila->num_citas);
        }
        $plot = new \PHPlot(400, 400);
        $plot->SetImageBorderType('plain');
        $plot->SetPlotType('bars');
        $plot->SetDataValues($datos);
        $plot->SetDataType('text-data');
        $plot->SetPrecisionY(0);
        $plot->SetXTitle('Especialidad');
        $plot->SetYTitle('Cantidad de Citas');
        $plot->DrawGraph();
    }

    //     Route::get('/admin/plot/cita/especialidad', [GraficosController::class, 'citaEspecialidad'])->name('plot.cita.especialidad');
    // Route::get('/admin/plot/paciente/asistencia', [GraficosController::class, 'pacienteAsistencia'])->name('plot.paciente.asistencia');
    // Route::get('/admin/plot/cita/dia', [GraficosController::class, 'citaDia'])->name('plot.cita.dia');
    // Route::get('/admin/plot/inventario/consultorio', [GraficosController::class, 'inventarioConsultorio'])->name('plot.inventario.consultorio');
    // Route::get('/admin/plot/paciente/ciudad', [GraficosController::class, 'pacienteCiudad'])->name('plot.paciente.ciudad');
    // Route::get('/admin/plot/paciente/estado', [GraficosController::class, 'pacienteEstado'])->name('plot.paciente.estado');

    public function pacienteAsistencia()
    {
        $resultado = DB::select('CALL `asistencia pacientes`()');

        foreach ($resultado as $fila) {
            $datos[] = array(utf8_decode($fila->estado_asistencia), $fila->num_citas);
        }
        $plot = new \PHPlot(400, 400);
        $plot->SetImageBorderType('plain');
        $plot->SetPlotType('pie');
        $plot->SetDataValues($datos);
        $plot->SetDataType('text-data-single');
        foreach ($datos as $fila)
            $plot->SetLegend(implode(':', $fila));
        $plot->DrawGraph();
    }
    public function citaDia()
    {
        $resultado = DB::select('CALL `cita dia`()');
        foreach ($resultado as $fila) {
            $datos[] = array($fila->fecha, $fila->num_citas);
        }
        $plot = new \PHPlot(400, 400);
        $plot->SetImageBorderType('plain');
        $plot->SetPlotType('lines');
        $plot->SetDataValues($datos);
        $plot->SetDataType('text-data');
        $plot->SetPrecisionY(0);
        $plot->SetXTitle('Fecha');
        $plot->SetYTitle('Cantidad de Citas');
        $plot->DrawGraph();
    }

    public function inventarioConsultorio()
    {
        $resultado = DB::select('CALL `inventario por consultorio`()');
        $datos = [];
        $tipos = [];
        $nombres = array();

        foreach ($resultado as $fila) {
            $tipos[$fila->tipo][$fila->nombre] = isset($tipos[$fila->tipo][$fila->nombre]) ? $tipos[$fila->tipo][$fila->nombre] + 1 : 1;
            if (!in_array($fila->nombre, $nombres)) {
                $nombres[] = utf8_decode($fila->nombre);
            }
        }

        // Formatear datos en el formato necesario para PHPlot
        foreach ($tipos as $tipo => $inventarios) {
            $fila = array($tipo);
            foreach ($nombres as $nombre) {
                $fila[] = isset($inventarios[$nombre]) ? $inventarios[$nombre] : 0;
            }
            $datos[] = $fila;
        }
        // echo (json_encode($datos));
        $plot = new \PHPlot(700, 900);
        $plot->SetImageBorderType('plain');
        $plot->SetPlotType('stackedbars');
        $plot->SetDataValues($datos);
        $plot->SetDataType('text-data');
        $plot->SetPrecisionY(1);
        $plot->SetXTitle('Tipo de Consultorio');
        $plot->SetYTitle('Cantidad de Inventarios');
        // Establecer leyendas de nombres de inventarios
        $plot->SetLegend($nombres);

        $plot->DrawGraph();
    }

    public function pacienteCiudad()
    {
        $resultado = DB::select('CALL `paciente por ciudad`()');
        foreach ($resultado as $fila) {
            $datos[] = array(utf8_decode($fila->ciudad), $fila->num_pacientes);
        }
        $plot = new \PHPlot(400, 400);
        $plot->SetImageBorderType('plain');
        $plot->SetPlotType('bars');
        $plot->SetDataValues($datos);
        $plot->SetDataType('text-data');
        $plot->SetPrecisionY(0);
        $plot->SetXTitle('Ciudad');
        $plot->SetYTitle('Cantidad de Pacientes');
        $plot->DrawGraph();
    }

    public function pacienteEstado()
    {
        $resultado = DB::select('CALL `paciente estado`()');
        foreach ($resultado as $fila) {
            $datos[] = array(utf8_decode($fila->estado_paciente), $fila->num_pacientes);
        }
        $plot = new \PHPlot(400, 400);
        $plot->SetImageBorderType('plain');
        $plot->SetPlotType('pie');
        $plot->SetDataValues($datos);
        $plot->SetDataType('text-data-single');
        foreach ($datos as $fila)
            $plot->SetLegend(implode(':', $fila));
        $conexion = null;
        $plot->DrawGraph();
    }
}
