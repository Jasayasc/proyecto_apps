@extends('adminlte::page')

@section('title', 'Añadir paciente')

@section('content_header')
    <h1>Registrar nuevo paciente</h1>
@stop

@section('content')
    <p>Bienvindo al panel para añadir de pacientes</p>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Registrar nuevo paciente</h3>
        </div>
        <div class="card-body">
            <form class="borde-azul-cobalto" style="display: block;" method="POST" action="{{route('admin.new.patients')}}">
                @csrf
                <div class="form-group">
                    <label for="nombre" class="label-negro">Nombre:</label>
                    <input type="text" class="form-control" name="nombre">
                </div>
                <div class="form-group">
                    <label for="apellido" class="label-negro">Apellido:</label>
                    <input type="text" class="form-control" name="apellido">
                </div>
                <div class="form-group">
                    <label for="nacimiento" class="label-negro">Fecha de nacimiento:</label>
                    <input type="date" class="form-control" name="nacimiento">
                </div>
                <div class="form-group">
                    <label for="ciudad" class="label-negro">Ciudad</label>
                    <input type="text" class="form-control" name="ciudad">
                </div>
                <div class="form-group">
                    <label for="telefono" class="label-negro">Teléfono:</label>
                    <input type="text" class="form-control" name="telefono">
                </div>
                <div class="form-group">
                    <label for="direccion" class="label-negro">Dirección:</label>
                    <input type="text" class="form-control" name="direccion">
                </div>
                <div class="form-group">
                    <label for="correo" class="label-negro">Correo:</label>
                    <input type="email" class="form-control" name="correo">
                </div>
                <div class="form-group">
                    <label for="direccion" class="label-negro">Contraseña:</label>
                    <input type="password" class="form-control" name="contrasena">
                </div>
                <div class="form-group">
                    <label for="direccion" class="label-negro">Confirmar contraseña:</label>
                    <input type="password" class="form-control" name="confirmContrasena">
                </div>
        </div>
        
        <!-- Boton  para Guardar -->
        <div class="card-footer">
            <button id="btnEliminar" class="btn btn-success">Añadir</button>
        </div>
        </form>
    </div>
@stop
