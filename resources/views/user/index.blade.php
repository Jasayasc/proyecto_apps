<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favico.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    {{-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"> --}}
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        #boton {
            display: none;
            /* Por defecto, los botones están ocultos */
        }
    </style>
</head>

<body>
    <!-- ======= Mobile nav toggle button ======= -->
    <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
    <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex flex-column justify-content-center">

        <nav id="navbar" class="navbar nav-menu">
            <ul>
                <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i>
                        <span>Inicio</span></a></li>
                <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Perfil</span></a></li>
                <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-spreadsheet"></i> <span>Citas</span></a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class='bx bxs-log-out-circle'></i><span>Salir</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav><!-- .nav-menu -->

    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center">

        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <h1>Bienvenido <i>{{ $paciente->nombre }}</i></h1>


            <p><span>EPS Ositos Cariñositos S.A</span></p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bx-health"></i></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Datos Personales</h2>
                    <p><b>Verifique que toda su informacion sea correcta</b></p>
                </div>
                <form action="{{ route('paciente.edit') }}" method="post">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="assets/img/profile-img.jpg" class="img-fluid" alt=""
                                style="height: 70%; border-radius: 10px">
                        </div>
                        <div class="col-lg-8 pt-4 pt-lg-0 content">
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Nombre:</strong>
                                            <input class="form-control" type="text" name="nombre"
                                                value="{{ $paciente->nombre . ' ' . $paciente->apellido }}"
                                                id="nombre"
                                                oninput="mostrarOcultarBoton('nombre', '{{ $paciente->nombre . ' ' . $paciente->apellido }}')">
                                        </li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Correo:</strong>
                                            <input class="form-control" type="text" name="email" id="email"
                                                value="{{ Auth::user()->email }}"
                                                oninput="mostrarOcultarBoton('email', '{{ Auth::user()->email }}')">
                                        </li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Direccion:</strong>
                                            <input class="form-control" type="text" name="direccion"
                                                id="direccion" value="{{ $paciente->direccion }}"
                                                oninput="mostrarOcultarBoton('direccion', '{{ $paciente->direccion }}')">
                                        </li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Ciudad:</strong>
                                            <input class="form-control" type="text" name="ciudad" id="ciudad"
                                                value="{{ $paciente->ciudad }}"
                                                oninput="mostrarOcultarBoton('ciudad', '{{ $paciente->ciudad }}')">
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Fecha de nacimiento:</strong>
                                            <input class="form-control" type="date" name="fecha_nacimiento"
                                                id="fecha_nacimiento" value="{{ $paciente->fecha_nacimiento }}"
                                                oninput="mostrarOcultarBoton('fecha_nacimiento', '{{ $paciente->fecha_nacimiento }}')">
                                            <?php
                                            $edad = date_diff(date_create($paciente->fecha_nacimiento), date_create(date('Y-m-d')))->format('%y');
                                            ?>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Edad:</strong>
                                            <span>{{ $edad }}</span>
                                        </li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Telefono:</strong>
                                            <input class="form-control" type="text" name="telefono"
                                                id="telefono" value="{{ $paciente->telefono }}"
                                                oninput="mostrarOcultarBoton('telefono', '{{ $paciente->telefono }}')">
                                        </li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Estado:</strong>
                                            <span>{{ $paciente->estado == 1 ? 'Activo' : 'Inactivo' }}</span>
                                        </li>
                                    </ul>
                                </div>
                                <button type="submit" id="boton" class="btn btn-primary">Guardar
                                    Cambios</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Servicios</h2>
                </div>

                <div class="row" style="padding: 10px">
                    <div class="col-lg-6">
                        <h3 class="resume-title">Citas medicas</h3>
                        <div class="resume-item">
                            <h4><a href="{{ route('newCita') }}" style="text-decoration: none">Programar nueva
                                    cita</a></h4>
                        </div>
                        
                        <div class="resume-item">
                            <h4><a href="{{ route('showCita') }}" style="text-decoration: none">Consultar Citas</a>
                            </h4>
                        </div>
                    </div>
                    {{-- <div class="col-lg-6">
                        <h3 class="resume-title">Examenes</h3>

                        <div class="resume-item">
                            <h4><a href="" style="text-decoration: none">Consultar resultado de examenes</a>
                            </h4>
                        </div>
                    </div> --}}
                </div>

            </div>
        </section><!-- End Resume Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Ositos Cariñositos S.A</h3>
            <p>En Ositos Cariñositos, nos dedicamos a cuidar la salud y felicidad de tus pequeños. Nuestro equipo de
                profesionales comprometidos está aquí para brindarles el cuidado amoroso y la atención especializada que
                merecen.</p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright 2024. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bx bx-up-arrow-alt"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/typed.js/typed.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        function mostrarOcultarBoton(idInput, textoInput) {
            var inputTexto = document.getElementById(idInput);
            var boton = document.getElementById("boton");

            // Si el valor del input está vacío, ocultar el botón; de lo contrario, mostrarlo
            if (inputTexto.value.trim() === textoInput) {
                boton.style.display = "none";
            } else {
                boton.style.display = "block";
            }
        }
    </script>

</body>

</html>
