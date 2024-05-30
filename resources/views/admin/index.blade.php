@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Bienvindo al panel administrativo de ositos Cariñositos S.A</p>
    
    <div class="container" >
        <div class="row">
            
            <div class="col-12 col-md-6">
                <h2 class="label-negro" style="text-align: center">Citas Por Especialidad</h2>
                <img src="{{ route('plot.cita.especialidad') }}" class="img-fluid" alt="Gráfico de Citas por Especialidad">
            </div>
            
            <div class="col-12 col-md-6">
                <h2 class="label-negro" style="text-align: center">Asistencia por paciente</h2>
                <img src="{{ route('plot.paciente.asistencia') }}" class="img-fluid" alt="Gráfico de Citas por Especialidad">
            </div>
            
            <div class="col-12 col-md-6">
                <br>
                <h2 class="label-negro" style="text-align: center">Citas por dia</h2>
                <img src="{{ route('plot.cita.dia') }}" class="img-fluid" alt="Gráfico de Citas por Especialidad">
            </div>

            
            <div class="col-12 col-md-6">
                <br>
                <h2 class="label-negro" style="text-align: center">Pacientes por ciudad</h2>
                <img src="{{ route('plot.paciente.ciudad') }}" class="img-fluid" alt="Gráfico de Citas por Especialidad">
            </div><br>
            
            <div class="col-12 col-md-6">
                <br>
                <h2 class="label-negro" style="text-align: center">Paciente por estado</h2>
                <img src="{{ route('plot.paciente.estado') }}" class="img-fluid" alt="Gráfico de Citas por Especialidad">
            </div>
        </div>
        
        <div style="align-items: center; justify-content: center">
            <h2 class="label-negro">inventario por consultorio</h2>
            <img src="{{ route('plot.inventario.consultorio') }}"  alt="Gráfico de Citas por Especialidad">
        </div><br>
    </div>
@stop
