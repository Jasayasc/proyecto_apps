@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')
    <h1>Lista de usuarios</h1>
@stop

@section('content')
    <p>Bienvindo al panel de gestion de administradores</p>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="" method="POST">
                    @csrf
                    <h2 class="titulo-azul-cobalto">Buscar en:</h2>
                    <div class="input-group mb-3">
                        <input style="width: 70px; border-radius: 10px" type="text" class="form-control"
                            placeholder="Buscar">
                        <select style="margin-left: 15px;width: 250px; margin-right:10px; border-radius: 10px;"
                            class="custom-select" id="selccionar rol">
                            <option selected disabled>Seleccionar tabla...</option>
                            <option value="Administrador">Administrador</option>
                            <option value="Paciente">Paciente</option>
                            <option value="Empleado">Empleado</option>
                        </select>

                        <button class="btn btn-primary" type="button">Buscar</button>
                </form>
            </div>
        </div>
    </div>
    <div>
        <div class="col-md-15">
            <h2 class="titulo-azul-cobalto">Resultados de búsqueda:</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="label-negro">ID</th>
                        <th scope="col" class="label-negro">Nombre</th>
                        <th scope="col" class="label-negro">Apellido</th>
                        <th scope="col" class="label-negro">Fecha de nacimiento</th>
                        <th scope="col" class="label-negro">Ciudad de nacimiento</th>
                        <th scope="col" class="label-negro">Direccion</th>
                        <th scope="col" class="label-negro">Telefono</th>
                        <th scope="col" class="label-negro">Correo</th>
                        <th scope="col" class="label-negro">Rol</th>
                        <th scope="col" class="label-negro">consultorio</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Aquí mostrarías los resultados de la búsqueda -->
                    @foreach ($usuarios as $usuario)
                        <tr>
                            <td scope="col" class="label-negro">{{ $usuario->id_usuario }}</td>
                            <td scope="col" class="label-negro">{{ $usuario->nombre }}</td>
                            <td scope="col" class="label-negro">{{ $usuario->apellido }}</td>
                            <td scope="col" class="label-negro">{{ $usuario->fecha_nacimiento }}</td>
                            <td scope="col" class="label-negro">{{ $usuario->ciudad }}</td>
                            <td scope="col" class="label-negro">{{ $usuario->direccion }}</td>
                            <td scope="col" class="label-negro">{{ $usuario->telefono }}</td>
                            <td scope="col" class="label-negro">{{ $usuario->email }}</td>
                            <?php
                            $rol = $usuario->rol;
                            $message = $rol == 1 ? 'Admin' : ($rol == 2 ? 'Empleado' : 'Paciente');
                            ?>
                            <td scope="col" class="label-negro">{{ $message }}</td>
                            <td scope="col" class="label-negro">{{ $usuario->consultorio == null ? "N/A" :$usuario->consultorio }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    </div>
    {{-- <script>
        document.getElementById("selccionar rol").addEventListener("change", function() {
            var contenido = document.getElementById("sacardato");
            var valorSeleccionado = this.value;
            if (valorSeleccionado !== "") {
                contenido.style.display = "block";
            } else {
                contenido.style.display = "none";
            }
        });
    </script> --}}
@stop
