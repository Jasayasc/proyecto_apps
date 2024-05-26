@extends('adminlte::page')

@section('title', 'Configuracion')

@section('content_header')
    <h1>Configuración del perfil</h1>
@stop

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Actualizar información</h3>
        </div>
        <form method="POST" action="">
            <div class="card-body">
                <div class="form-group">
                    <label for="apellido">ID</label>
                    <input type="text" class="form-control" name="id" value="{{$admin->id}}" disabled>
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="{{$admin->nombre}}">
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" value="{{$admin->apellido}}">
                </div>
                <div class="form-group">
                    <label for="apellido">Direccion</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" value="{{$admin->direccion}}">
                </div>
                <div class="form-group">
                    <label for="apellido">Telefono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" value="{{$admin->telefono}}">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
        </form>
    </div>
@stop
