@extends('layouts.plantilla')
@section('title', 'Nueva cita')
@section('content')
    {{-- <script>
        $(document).ready(function() {
            $('#tipo').change(function() {
                var tipo = $(this).val();
                $.ajax({
                    url: '{{ route('fetch.names') }}',
                    type: 'POST',
                    data: {
                        tipo: tipo,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(data) {
                        var nameSelect = $('#name');
                        nameSelect.empty();
                        nameSelect.append('<option value="">Seleccione un nombre</option>');
                        $.each(data, function(key, value) {
                            nameSelect.append('<option value="' + value.id + '">' +
                                value.name + '</option>');
                        });
                    }
                });
            });

            $('#name').change(function() {
                var nameId = $(this).val();
                $.ajax({
                    url: '{{ route('fetch.schedules') }}',
                    type: 'POST',
                    data: {
                        nameId: nameId,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(data) {
                        var scheduleSelect = $('#schedule');
                        scheduleSelect.empty();
                        scheduleSelect.append(
                            '<option value="">Seleccione un horario</option>');
                        $.each(data, function(key, value) {
                            scheduleSelect.append('<option value="' + value.id + '">' +
                                value.time + '</option>');
                        });
                    }
                });
            });
        });
    </script> --}}
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
                        <form method="POST"">
                            @csrf
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row">
                                <div class="row mb-3">
                                    <label for="tipo"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Tipo de cita:') }}</label>

                                    <div class="col-md-6">
                                        <select id="tipo" name="tipo" class="form-control" required>
                                            <option value="Medicina General">Medicina General</option>
                                            <option value="Medicina General">Pediátria</option>
                                            <option value="Medicina General">Vacunación</option>
                                            <option value="Medicina General">Atención Neonatal</option>
                                            <option value="Medicina General">Crecimiento y Desarrollo</option>
                                        </select>

                                        @error('tipo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="name"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Doctor:') }}</label>

                                    <div class="col-md-6">
                                        <select id="name" name="name" class="form-control" required>
                                            <option value="" disabled>Seleccione un doctor</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="dateofbirth"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Fecha:') }}</label>

                                    <div class="col-md-6">
                                        <input type="date" id="date" name="date"
                                            value="{{ old('date') }}"
                                            class="form-control @error('date') is-invalid @enderror" required
                                            max=" {{ date('Y-m-d') }} ">

                                        @error('date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="schedule"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Horario:') }}</label>

                                    <div class="col-md-6">
                                        <select id="schedule" name="schedule" class="form-control" required>
                                            <option value="" disabled>Seleccione un horario</option>
                                        </select>

                                        @error('schedule')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
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
@endsection
