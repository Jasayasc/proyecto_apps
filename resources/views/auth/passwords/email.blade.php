@extends('layouts.plantilla')
@section('title','Restablecer Contraseña')
@section('content')
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Reset Password') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="card text-center justify-content-center" style="width: 300px;">
        <div class="card-header h5 text-white bg-primary">Password Reset</div>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="card-body px-5">
                <p class="card-text py-2">
                    Enter your email address and we'll send you an email with instructions to reset your password.
                </p>
                <div data-mdb-input-init class="form-outline">
                    <input type="email" id="email" class="form-control my-3" @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                    <label class="form-label" for="email">Email input</label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary w-100">Reset password</button>
                <div class="d-flex justify-content-between mt-4">
                    <a class="" href="#">Login</a>
                    <a class="" href="#">Register</a>
                </div>
            </div>
        </form>
    </div> --}}

    <style>
        body{
            padding-top: 100px;
        }
    </style>
    <div class="card mx-auto" style="width: 300px; position: relative;">
        <div class="card-header h5 text-white bg-primary text-center">Password Reset</div>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="card-body">
                <p class="card-text py-2 text-center">
                    Ingrese su dirección de correo y le enviaremos un correo con instrucciones para restablecer su contraseña.
                </p>
                <div class="form-outline mb-3">
                    <label class="form-label" for="email">Email input</label>
                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                    
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button class="btn btn-primary w-100 mb-3">Enviar</button>
                <div class="d-flex justify-content-between">
                    <a class="" href="{{ route('login') }}">Login</a>
                    <a class="" href="{{ route('register') }}">Register</a>
                </div>
            </div>
        </form>
    </div>
    
@endsection
