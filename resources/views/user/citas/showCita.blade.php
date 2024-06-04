@extends('layouts.plantilla')
@section('title', 'Citas')
@section('content')
    <div>
        <div class="col-md-15">
            <h2 class="titulo-azul-cobalto">Citas apartadas:</h2>
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th scope="col" class="label-negro">Fecha</th>
                        <th scope="col" class="label-negro">Hora</th>
                        <th scope="col" class="label-negro">Nombre del doctor</th>
                        <th scope="col" class="label-negro">Tipo</th>
                        <th scope="col" class="label-negro">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Aquí mostrarías los resultados de la búsqueda -->
                    @foreach ($citas as $cita)
                        <tr>
                            <td scope="col" class="label-negro">{{ $cita->fecha }}</td>
                            <td scope="col" class="label-negro">{{ $cita->hora }}</td>
                            <td scope="col" class="label-negro">{{ $cita->nombre . ' ' . $cita->apellido }}</td>
                            <td scope="col" class="label-negro">{{ $cita->especialidad }}</td>
                            <td>
                                <?php
                                $hoy = new DateTime();
                                
                                // Suponiendo que $cita->fecha contiene la fecha en formato 'Y-m-d', por ejemplo '2024-05-30'
                                $citaFecha = new DateTime($cita->fecha);
                                
                                // Comparar las fechas
                                if ($citaFecha > $hoy) {
                                    // echo $cita->id;
                                    //echo "<a href='/cita/mod' class='btn btn-warning'>Modificar</a>";
                                    echo "<form action='/cita/mod' method='get'>";
                                    echo "<input type='hidden' name='id' value='{$cita->id}' />";
                                    echo "<button type='submit' class='btn btn-warning'>Modificar</button>";
                                    echo '</form>';
                                    echo "<form action='/cita/del' method='get'>";
                                    echo "<input type='hidden' name='id' value='{$cita->id}' />";
                                    echo "<button type='submit' class='btn btn-danger'>Eliminar</button>";
                                    echo '</form>';
                                } else {
                                    echo 'La cita ya ha pasado, no se puede modificar o eliminar.';
                                }
                                ?>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
