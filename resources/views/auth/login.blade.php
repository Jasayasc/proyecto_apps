@extends('layouts.plantilla')
@section('title','Login')
@section('content')
<body>
    <!-- Section: Design Block -->
    <section class="text-center text-lg-start">
        <style>
            .cascading-right {
                margin-right: -50px;
            }

            @media (max-width: 991.98px) {
                .cascading-right {
                    margin-right: 0;
                }
            }
        </style>

        <!-- Jumbotron -->
        <div class="container py-4">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card cascading-right bg-body-tertiary"
                        style="
              backdrop-filter: blur(30px);
              ">
                        <div class="card-body p-5 shadow-5 text-center">
                            <h2 class="fw-bold mb-5">Login</h2>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <!-- Email input -->
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="email">Email address</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ __('Correo electronico equivocado.') }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="password">Contraseña:</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" min="8">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ __('Contraseña Incorrecta.') }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <!-- Checkbox -->

                                <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                    class="btn btn-primary btn-block mb-4">
                                    {{ __('Iniciar Sesion') }}
                                </button>
                                <div class="row mb-0">
                                    <div>
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-secundary" href="{{ route('password.request') }}">
                                                {{ __('Olvidaste tu contraseña?') }}
                                            </a>
                                        @endif
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="container py-4">
                        <div class="mx-auto" style="width: 150px;">
                            <p><b>¿Aun no tienes cuenta?</b></p>
                        </div>
                        <div class="mx-auto" style="width: 80px;">
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">{{ __('Crea Una') }}</a>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg"
                        class="w-100 rounded-4 shadow-4" alt=""  height="585"/>
                </div>
            </div>
        </div>

        <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->
@endsection
