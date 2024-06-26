@extends('layouts.plantilla')
@section('title', 'Nueva cita')
@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <section class="text-center">
        <div class="card mx-4 mx-md-5 shadow-5-strong bg-body-tertiary"
            style="
      margin-top: -100px;
      backdrop-filter: blur(30px);
      ">
            <div class="card-body py-5 px-md-5">

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="fw-bold mb-5">Registrate ahora</h2>
                        <form method="POST" action="{{route('cita.add')}}">
                            @csrf
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row">
                                <div class="row mb-3">
                                    <label for="tipo"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Tipo de cita:') }}</label>

                                    <div class="col-md-6">
                                        <select id="tipo" name="tipo" class="form-control" required>
                                            <option value="">Selecciona una opcion</option>
                                            <option value="2">Medicina General</option>
                                            <option value="3">Pediátria</option>
                                            <option value="4">Vacunación</option>
                                            <option value="5">Atención Neonatal</option>
                                            <option value="6">Crecimiento y Desarrollo</option>
                                        </select>

                                        @error('tipo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3" id="doctores" name="doctores">
                                </div>

                                <div class="row mb-3" id="containerFecha"  name="containerFecha">
                                </div>

                                <div class="row mb-3" id="containerHora"  name="containerHora">
                                </div>

                                <!-- Submit button -->
                                <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                    class="btn btn-primary btn-block mb-4">
                                    Agendar Cita
                                </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('assets/js/verificarTipo.js') }}"></script>
    <script src="{{ asset('assets/js/verificarDoctor.js') }}"></script>
    <script src="{{ asset('assets/js/verificarHora.js') }}"></script>
@endsection
