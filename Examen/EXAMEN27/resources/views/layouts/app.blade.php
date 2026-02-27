<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog</title>
    <!--bootsreap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--iconos-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-light">
    <!-- header-->
    <div class="bg-primary text-white py-5 mb-3">
        <div class="container">
            <div class="d-flex align-items-center gap-3 flex-wrap">
                <div class="Foto-Blog">
                    <img s class="img-fluid rounded border border-white" style="width:150px;height:150px;object-fit:cover;">
                </div>
                <div class="text-center flex-grow-1">
                    <h1 class="display-4">Jesus Emiliano Romero Zapata</h1>
                </div>
            </div>
        </div>
    </div>

    <!--navbar-->
    <!--es el menu de arriba-->
    <section class="mb-4">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Experiencia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Educación</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Habilidades</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>

    <!--rectangulo de enmedio-->
    <div class="container">
        <div class="mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">Bienvenido a Mi Curriculum</h5>
                </div>
                <div class="card-body">
                    <p>Hola, soy estudiante del octavo semestre de ingenieria en software y me especializo en programación web php, ya a punto de egresar.</p>
                </div>
            </div>
        </div>

        <!-- 3 cards divididas -->
        <div class="row g-3">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0"><i class="bi bi-briefcase"></i> Experiencia Laboral.</h5>
                    </div>
                    <div class="card-body">
                        <p>Actualmente me encuentro realizando un punto de venta para la electrica RR.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0"><i class="bi bi-book"></i> Mi educación.</h5>
                    </div>
                    <div class="card-body">
                        <p>Cursado cobach como preparatoria, realizando practicas en UES Unidad Acádemica Magdalena de kino, Sonora.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0"><i class="bi bi-star"></i> Habilidades blandas: </h5>
                    </div>
                    <div class="card-body">
                        <p>Respetuoso, responsable, trabajo en equipo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  footer  -->
    <footer class="bg-dark text-white text-center py-3 mt-5 ms-auto">
        <p class="mb-0">&copy; Examen 27/02/2026 Romero Zapata Jesús Emiliano | Programación backend con Frameworks</p>
    </footer>

    <!--para el icono de hambruguesa-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
