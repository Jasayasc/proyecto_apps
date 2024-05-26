@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de administradores</h1>
@stop

@section('content')
    <p>Bienvindo al panel de gestion de administradores</p>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Registrar nuevo administrador</h3>
        </div>
        <div class="card-body">
            <form id="form-empleado" class="borde-azul-cobalto" style="display: block;">
                <div class="form-group">
                    <label for="nombre" class="label-negro">Nombre:</label>
                    <input type="text" class="form-control" id="nombre">
                </div>
                <div class="form-group">
                    <label for="nombre" class="label-negro">Apellido:</label>
                    <input type="text" class="form-control" id="nombre">
                </div>
                <div class="form-group">
                    <label for="telefono" class="label-negro">Teléfono:</label>
                    <input type="text" class="form-control" id="telefono">
                </div>
                <div class="form-group">
                    <label for="direccion" class="label-negro">Dirección:</label>
                    <input type="text" class="form-control" id="direccion">
                </div>
                <div class="form-group">
                    <label for="direccion" class="label-negro">Tipo de consultorio:</label>
                    <select style="margin-left: 0px;width: 250px;" class="custom-select" id="consultorio">
                        <option selected disabled>Seleccionar tabla...</option>
                        <option value="Administracion">Administracion</option>
                        <option value="Finanzas">Finanzas</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="direccion" class="label-negro">Correo:</label>
                    <input type="text" class="form-control" id="usuario">
                </div>
                <div class="form-group">
                    <label for="direccion" class="label-negro">Contraseña:</label>
                    <input type="password" class="form-control" id="contrasena">
                </div>
                <div class="form-group">
                    <label for="direccion" class="label-negro">Confirmar contraseña:</label>
                    <input type="password" class="form-control" id="contrasena">
                </div>
                <div class="form-group">
                    <label for="estado" class="label-negro">Estado:</label>
                    <select style="margin-left: 0px;width: 250px;" class="custom-select" id="consultorio">
                        <option value="Activo">Activo</option>
                        <option value="Inactivo">Inactivo</option>
                    </select>
                </div>
        </div>
        
        <!-- Boton  para Guardar -->
        <div class="card-footer">
            <button id="btnEliminar" class="btn btn-warning">Añadir</button>
        </div>
        </form>
    </div>
@stop
