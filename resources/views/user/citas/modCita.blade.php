@extends('layouts.plantilla')
@section('title', 'Modificar Cita')
@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<div class="container mt-5">
    <h2>Modificar Cita</h2>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    <form action="{{ route('cita.modificar') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$cita->id}}">
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" class="form-control" id="fecha" name="fecha" value="{{ $cita->fecha }}" required>
        </div>
        <div class="form-group">
            <label for="hora">Hora</label>
            <select class="form-control" id="hora" name="hora" required>
                @foreach($horarios as $horario)
                <option value="{{ $horario->id }}" {{ $cita->hora == $horario->id ? 'selected' : '' }}>{{ $horario->hora }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="medico">Médico</label>
            <select class="form-control" id="medico" name="medico" required>
                @foreach($doctores as $doctor)
                <option value="{{ $doctor->id }}" {{ $cita->id_medico == $doctor->id ? 'selected' : '' }}>{{ $doctor->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Cita</button>
    </form>
</div>
<script src="{{ asset('assets/js/verificarFecha.js') }}"></script>
@endsection