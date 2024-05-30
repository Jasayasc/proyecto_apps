<?php

namespace App\Http\Controllers\admin\reportes;

require_once app_path('Libraries/fpdf186/fpdf.php');

use Illuminate\Http\Request;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PDF extends \FPDF
{
    public $titulo;
    function Header()
    {
        $this->Image("assets/img/ositos.jpg", 10, 25, 20, 15, 'JPG');
        $this->SetFont('Arial', 'B', 20);
        $this->Multicell(0, 12, $this->titulo, 1, 'C');
        $this->Ln(3);
        $this->Line(0, 43, 300, 43); //impresión de linea
        $this->Ln(5);
    }

    function Footer()
    {
        $this->SetY(-10);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, utf8_decode('Página:') . $this->PageNo(), 0, 0, 'C');
    }
}

class ReportesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', Admin::class]);
    }

    public function citaEspecialidad()
    {
        $pdf = new PDF();
        $pdf->titulo = 'CITAS POR ESPECIALIDAD';
        $pdf->SetAutoPageBreak(false);
        $pdf->AddPage();

        $valor_inicial_eje_y = 45;
        $valor_inicial_eje_x = 60;
        $pdf->SetFillColor(232, 232, 232);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->SetY($valor_inicial_eje_y);
        $pdf->SetX($valor_inicial_eje_x);
        $pdf->Cell(50, 6, 'ESPECIALIDAD', 1, 0, 'C', 1);
        $pdf->Cell(50, 6, 'CANTIDAD DE CITAS', 1, 0, 'C', 1);
        $eje_y = 51;
        $i = 0;
        $max = 25;
        $altura_fila = 6;

        $resultado = DB::select('CALL `citas por especialidad`()');
        foreach ($resultado as $fila) {
            if ($i == $max) {
                $pdf->AddPage();
                $pdf->SetY($valor_inicial_eje_y);
                $pdf->SetX($valor_inicial_eje_x);
                $pdf->Cell(100, 6, 'ESPECIALIDAD', 1, 0, 'C', 1);
                $pdf->Cell(50, 6, 'CANTIDAD DE CITAS', 1, 0, 'C', 1);
                $eje_y = $valor_inicial_eje_y + $altura_fila;
                $i = 0;
            }
            $pdf->SetY($eje_y);
            $pdf->SetX($valor_inicial_eje_x);
            $pdf->Cell(50, 6, utf8_decode($fila->especialidad), 1, 0, 'C', 0);
            $pdf->Cell(50, 6, $fila->num_citas, 1, 0, 'C', 0);
            $eje_y = $eje_y + $altura_fila;
            $i = $i + 1;
        }

        //$conexion = null;
        $pdf->Output("pdfs/citas por especialidad.pdf", 'F');
        return "<script language='javascript'>window.open('/pdfs/citas por especialidad.pdf','_self');
        </script>";
    }

    public function pacienteAsistencia()
    {
        $pdf = new PDF();
        $pdf->titulo = 'CANTIDAD DE ASISTENCIAS';
        $pdf->SetAutoPageBreak(false);
        $pdf->AddPage();

        $valor_inicial_eje_y = 45;
        $valor_inicial_eje_x = 30;
        $pdf->SetFillColor(232, 232, 232);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->SetY($valor_inicial_eje_y);
        $pdf->SetX($valor_inicial_eje_x);
        $pdf->Cell(50, 6, 'ESTADO', 1, 0, 'C', 1);
        $pdf->Cell(50, 6, 'FECHA', 1, 0, 'C', 1);
        $pdf->Cell(50, 6, 'CANTIDAD DE CITAS', 1, 0, 'C', 1);
        $eje_y = 51;
        $i = 0;
        $max = 25;
        $altura_fila = 6;
        $resultado = DB::select('CALL `asistencia pacientes`()');
        foreach ($resultado as $fila) {
            if ($i == $max) {
                $pdf->AddPage();
                $pdf->SetY($eje_y);
                $pdf->SetX($valor_inicial_eje_x);
                $pdf->Cell(100, 6, 'ESTADO', 1, 0, 'C', 1);
                $pdf->Cell(50, 6, 'FECHA', 1, 0, 'C', 1);
                $pdf->Cell(50, 6, 'CANTIDAD DE ASISTENCIAS', 1, 0, 'C', 1);
                $eje_y = $valor_inicial_eje_y + $altura_fila;
                $i = 0;
            }
            $pdf->SetY($eje_y);
            $pdf->SetX($valor_inicial_eje_x);
            $pdf->Cell(50, 6, utf8_decode($fila->estado_asistencia), 1, 0, 'C', 0);
            $pdf->Cell(50, 6, $fila->anio_mes, 1, 0, 'C', 0);
            $pdf->Cell(50, 6, $fila->num_citas, 1, 0, 'C', 0);
            $eje_y = $eje_y + $altura_fila;
            $i = $i + 1;
        }
        $pdf->Output("pdfs/asitencia a citas por mes.pdf", 'F');
        echo "<script language='javascript'>window.open('/pdfs/asitencia a citas por mes.pdf','_self');
        </script>";
    }
    public function citaDia()
    {
        $pdf = new PDF();
        $pdf->titulo = 'CITAS POR DIA';
        $pdf->SetAutoPageBreak(false);
        $pdf->AddPage();

        $valor_inicial_eje_y = 45;
        $valor_inicial_eje_x = 50;
        $pdf->SetFillColor(232, 232, 232);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->SetY($valor_inicial_eje_y);
        $pdf->SetX($valor_inicial_eje_x);
        $pdf->Cell(50, 6, 'FECHA', 1, 0, 'C', 1);
        $pdf->Cell(50, 6, 'CANTIDAD CITAS', 1, 0, 'C', 1);

        $eje_y = 51;
        $i = 0;
        $max = 25;
        $altura_fila = 6;
        $resultado = DB::select('CALL `cita dia`()');
        foreach ($resultado as $fila) {
            if ($i == $max) {
                $pdf->AddPage();
                $pdf->SetY($valor_inicial_eje_y);
                $pdf->SetX($valor_inicial_eje_x);
                $pdf->Cell(50, 6, 'FECHA', 1, 0, 'C', 1);
                $pdf->Cell(50, 6, 'CANTIDAD DE CITAS', 1, 0, 'C', 1);
                $eje_y = $valor_inicial_eje_y + $altura_fila;
                $i = 0;
            }
            $pdf->SetY($eje_y);
            $pdf->SetX($valor_inicial_eje_x);
            $pdf->Cell(50, 6, utf8_decode($fila->fecha), 1, 0, 'C', 0);
            $pdf->Cell(50, 6, utf8_decode($fila->num_citas), 1, 0, 'C', 0);
            $eje_y = $eje_y + $altura_fila;
            $i = $i + 1;
        }

        //$conexion = null;
        $pdf->Output("pdfs/cantidad citas - fecha.pdf", 'F');
        echo "<script language='javascript'>window.open('/pdfs/cantidad citas - fecha.pdf','_self');
        </script>";
    }

    public function inventarioConsultorio()
    {
        $pdf = new PDF();
        $pdf->titulo = 'INVENTARIO POR CONSULTORIO';
        $pdf->SetAutoPageBreak(false);
        $pdf->AddPage();

        $valor_inicial_eje_y = 45;
        $valor_inicial_eje_x = 10;
        $pdf->SetFillColor(232, 232, 232);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->SetY($valor_inicial_eje_y);
        $pdf->SetX($valor_inicial_eje_x);
        $pdf->Cell(70, 6, 'TIPO-CONSULTORIO', 1, 0, 'C', 1);
        $pdf->Cell(70, 6, 'INSUMO', 1, 0, 'C', 1);
        $pdf->Cell(50, 6, 'IDENTIFICADOR', 1, 0, 'C', 1);

        $eje_y = 51;
        $i = 0;
        $max = 25;
        $altura_fila = 6;
        $resultado = DB::select('CALL `inventario por consultorio`()');
        foreach ($resultado as $fila) {
            if ($i == $max) {
                $pdf->AddPage();
                $pdf->SetY($valor_inicial_eje_y);
                $pdf->SetX($valor_inicial_eje_x);
                $pdf->Cell(100, 6, 'TIPO-CONSULTORIO', 1, 0, 'C', 1);
                $pdf->Cell(50, 6, 'INSUMO', 1, 0, 'C', 1);
                $pdf->Cell(50, 6, 'IDENTIFICADOR', 1, 0, 'C', 1);
                $eje_y = $valor_inicial_eje_y + $altura_fila;
                $i = 0;
            }
            $pdf->SetY($eje_y);
            $pdf->SetX($valor_inicial_eje_x);
            $pdf->Cell(70, 6, utf8_decode($fila->tipo), 1, 0, 'C', 0);
            $pdf->Cell(70, 6, utf8_decode($fila->nombre), 1, 0, 'C', 0);
            $pdf->Cell(50, 6, $fila->id_inventario, 1, 0, 'C', 0);
            $eje_y = $eje_y + $altura_fila;
            $i = $i + 1;
        }

        //$conexion = null;
        $pdf->Output("pdfs/citas por especialidad.pdf", 'F');
        echo "<script language='javascript'>window.open('/pdfs/citas por especialidad.pdf','_self');
        </script>";
    }

    public function pacienteCiudad()
    {
        $pdf = new PDF();
        $pdf->titulo = 'PACIENTES POR CIUDAD';
        $pdf->SetAutoPageBreak(false);
        $pdf->AddPage();

        $valor_inicial_eje_y = 45;
        $valor_inicial_eje_x = 50;
        $pdf->SetFillColor(232, 232, 232);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->SetY($valor_inicial_eje_y);
        $pdf->SetX($valor_inicial_eje_x);
        $pdf->Cell(50, 6, 'CIUDAD', 1, 0, 'C', 1);
        $pdf->Cell(50, 6, 'NUMERO DE PACIENTES', 1, 0, 'C', 1);

        $eje_y = 51;
        $i = 0;
        $max = 25;
        $altura_fila = 6;
        $resultado = DB::select('CALL `paciente por ciudad`()');
        foreach ($resultado as $fila) {
            if ($i == $max) {
                $pdf->AddPage();
                $pdf->SetY($valor_inicial_eje_y);
                $pdf->SetX($valor_inicial_eje_x);
                $pdf->Cell(50, 6, 'CIUDAD', 1, 0, 'C', 1);
                $pdf->Cell(50, 6, 'NUMERO DE PACIENTES', 1, 0, 'C', 1);
                $eje_y = $valor_inicial_eje_y + $altura_fila;
                $i = 0;
            }
            $pdf->SetY($eje_y);
            $pdf->SetX($valor_inicial_eje_x);
            $pdf->Cell(50, 6, utf8_decode($fila->ciudad), 1, 0, 'C', 0);
            $pdf->Cell(50, 6, utf8_decode($fila->num_pacientes), 1, 0, 'C', 0);
            $eje_y = $eje_y + $altura_fila;
            $i = $i + 1;
        }

        //$conexion = null;
        $pdf->Output("pdfs/cantidad pacientes - ciudad.pdf", 'F');
        echo "<script language='javascript'>window.open('/pdfs/cantidad pacientes - ciudad.pdf','_self');
        </script>";
    }
}
