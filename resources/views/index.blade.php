@extends('layout.maintemplate')

@section('content')

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Inicio</title>
 </head>
 <body>
    <div class="animated-bg" style="background-image: url('https://img.freepik.com/foto-gratis/crop-architect-opening-blueprint_23-2147710985.jpg?t=st=1737422290~exp=1737425890~hmac=6bf6eb7770d15660b8228a350acd5ff167699e956cf2cd5fd130638b87bed54d&w=1060');
     background-size: cover; background-attachment: fixed; background-position: center; background-repeat: no-repeat; height: 90vh;">
        <div class="overlay" style="background-color: rgba(0, 0, 0, 0.6); height: 100%; width: 100%; position: absolute; top: 50; left: 0;">
            <!-- Contenido principal -->
            <div class="container text-center text-white vh-100 d-flex flex-column justify-content-center align-items-center" style="position: relative; z-index: 2;">
                <h1 class="display-4 fw-bold">Bienvenido a Construcciones Sosa</h1>
                <p class="lead mb-4">Liderando la gestión de proyectos de construcción con innovación y excelencia.</p>
                <a href="#about" class="btn btn-primary btn-lg">Conoce Más</a>
            </div>
        </div>
    </div>
    
    <!-- Sección de descripción -->
    <section id="about" class="py-5 bg-light text-center position-relative">
        <div class="container">
            <div class="row align-items-center">
                <!-- Imagen de fondo lateral -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="https://img.freepik.com/foto-gratis/siluetas-sitio-construccion_1127-3253.jpg?t=st=1737422392~exp=1737425992~hmac=575584e77977aa675b11fbf47dcb71bc6b5847d98d9019b4de7717b8f812565d&w=1060" 
                    alt="Construcción" class="img-fluid rounded-circle shadow-lg">
                </div>
                <!-- Contenido de texto -->
                <div class="col-md-6">
                    <h2 class="mb-4 text-primary fw-bold">¿Quiénes Somos?</h2>
                    <p class="text-muted lead mb-4">
                        En <strong>Construcciones Sosa</strong>, transformamos desafíos en oportunidades. Con un enfoque personalizado, garantizamos proyectos exitosos mediante planificación estratégica, ejecución eficiente y supervisión continua.
                    </p>
                    <a href="#services" class="btn btn-primary btn-lg">
                        <i class="fas fa-tools"></i> Descubre Nuestros Servicios
                    </a>
                </div>
            </div>
        </div>
        <!-- Elemento decorativo en el fondo -->
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-gradient-primary opacity-10" style="z-index: -1;"></div>
    </section>
 </body>
 <footer class="footer bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <!-- Sección Sobre Nosotros -->
            <div class="col-md-4 mb-4">
                <h5 class="text-uppercase fw-bold mb-3">Sobre Nosotros</h5>
                <p>
                    En Construcciones Sosa, brindamos soluciones innovadoras para proyectos de construcción, asegurando calidad, tiempo y excelencia en cada obra.
                </p>
            </div>
            <!-- Sección Enlaces Rápidos -->
            <div class="col-md-4 mb-4">
                <h5 class="text-uppercase fw-bold mb-3">Enlaces Rápidos</h5>
                <ul class="list-unstyled">
                    <li><a href="#about" class="text-white text-decoration-none">Sobre Nosotros</a></li>
                    <li><a href="#services" class="text-white text-decoration-none">Nuestros Servicios</a></li>
                    <li><a href="#contact" class="text-white text-decoration-none">Contacto</a></li>
                </ul>
            </div>
            <!-- Sección Redes Sociales -->
            <div class="col-md-4 mb-4">
                <h5 class="text-uppercase fw-bold mb-3">Síguenos</h5>
                <div class="d-flex">
                    <a href="#" class="text-white me-3">
                        <i class="fab fa-facebook fa-2x"></i>
                    </a>
                    <a href="#" class="text-white me-3">
                        <i class="fab fa-twitter fa-2x"></i>
                    </a>
                    <a href="#" class="text-white me-3">
                        <i class="fab fa-instagram fa-2x"></i>
                    </a>
                    <a href="#" class="text-white">
                        <i class="fab fa-linkedin fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- Línea divisoria -->
        <hr class="border-light">
        <!-- Texto de Derechos Reservados -->
        <div class="text-center">
            <p class="mb-0">
                &copy; 2025 Construcciones Sosa. Todos los derechos reservados.
            </p>
        </div>
    </div>
</footer>

 </html>



@endsection