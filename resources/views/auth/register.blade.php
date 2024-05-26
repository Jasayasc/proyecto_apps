<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrarse</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <!-- Section: Design Block -->
    <section class="text-center">
        <!-- Background image -->
        <div class="p-5 bg-image"
            style="
          background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
          height: 200px;
          ">
        </div>
        <!-- Background image -->

        <div class="card mx-4 mx-md-5 shadow-5-strong bg-body-tertiary"
            style="
          margin-top: -100px;
          backdrop-filter: blur(30px);
          ">
            <div class="card-body py-5 px-md-5">

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="fw-bold mb-5">Registrate ahora</h2>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row">
                                <div class="row mb-3">
                                    <label for="name"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="lastname"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Apellido') }}</label>

                                    <div class="col-md-6">
                                        <input id="lastname" type="text"
                                            class="form-control @error('lastname') is-invalid @enderror" name="lastname"
                                            value="{{ old('lastname') }}" required autocomplete="lastname">

                                        @error('lastname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="dateofbirth"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Fecha de nacimiento') }}</label>

                                    <div class="col-md-6">
                                        <input type="date" id="dateofbirth" name="dateofbirth"
                                        value="{{ old('dateofbirth') }}" class="form-control @error('dateofbirth') is-invalid @enderror" required
                                            max=" {{ date('Y-m-d') }} ">

                                        @error('dateofbirth')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="ciudad"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Ciudad de residencia') }}</label>

                                    <div class="col-md-6">
                                        <select id="ciudad" name="ciudad" class="form-control" required>
                                            <?php
                                            $ciudades = ['Bogotá', 'Medellín', 'Cali', 'Barranquilla', 'Cartagena', 'Santa', 'Villavicencio', 'Pasto', 'Manizales', 'Pereira', 'Bucaramanga', 'Tunja', 'Popayán', 'Montería', 'Armenia', 'Neiva', 'Riohacha', 'Valledupar', 'Quibdó', 'Florencia', 'Yopal', 'Sincelejo', 'Ibague', 'Mocoa', 'Leticia', 'San Jose del Guaviare', 'Puerto Carreño', 'Mitú', 'Inírida', 'Tuluá', 'Sogamoso', 'Monterrey'];
                                            
                                            foreach ($ciudades as $ciudad) {
                                                echo '<option value="'. $ciudad. '">'. $ciudad. '</option>';
                                            }
                                            ?>
                                        </select>

                                        @error('ciudad')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="telefono"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Telefono') }}</label>

                                    <div class="col-md-6">
                                        <input id="telefono" type="text"
                                            class="form-control @error('telefono') is-invalid @enderror" name="telefono"
                                            value="{{old('telefono')}}" required autocomplete="00000">

                                        @error('telefono')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="address"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Direccion') }}</label>

                                    <div class="col-md-6">
                                        <input id="address" type="text"
                                            class="form-control @error('address') is-invalid @enderror" name="address"
                                            value="{{ old('address') }}" required autocomplete="00000">

                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="new-password" min="8">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ "Las contraseñas no concuerdan" }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password-confirm"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password" min="8">
                                    </div>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                    class="btn btn-primary btn-block mb-4">
                                    Registrarse
                                </button>

                                <!-- Register buttons -->
                                <div class="text-center">
                                    <p>o</p>
                                    <a class="btn btn-secondary"
                                        href="{{ route('login') }}">{{ __('Inicia Sesion') }}</a>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Design Block -->
    <script>
        // Obtener el input de tipo date
        var dateInput = document.getElementById('dateofbirth');

        // Obtener la fecha actual en formato yyyy-mm-dd
        var today = new Date().toISOString().split('T')[0];

        // Establecer la fecha mínima para el input de tipo date
        dateInput.setAttribute('max', today);
    </script>
</body>

</html>
