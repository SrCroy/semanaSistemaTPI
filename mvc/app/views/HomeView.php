<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen Semanal - Sistemas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <header class="bg-primary text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold">Resumen Semanal de Sistemas</h1>
                    <p class="lead">Universidad de El Salvador Facultad Multidisciplinaria Oriental San Miguel</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                    <a href="clinica" class="btn btn-outline-light btn-lg">
                        <i class="bi bi-hospital me-2"></i> Ir a la Clínica
                    </a>
                </div>
            </div>
        </div>
    </header>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card shadow-sm border-0 mb-5">
                        <div class="card-body p-4">
                            <h2 class="card-title text-center mb-4">Bienvenido al Proyecto de Resumen Semanal</h2>
                            
                            <div class="mb-4">
                                <h4 class="text-primary">¿En qué consiste?</h4>
                                <p class="card-text">En este proyecto mostraremos un resumen detallado de todas las actividades realizadas
                                    en la semana de sistemas para obtener informacion de los temas, actividades de los estudiantes
                                    de la universidad del el salvador
                                </p>
                            </div>
                            
                            <div class="text-center mt-4">
                                <a href="visitas" class="btn btn-primary btn-lg">Guardar visitas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="dias" class="py-1">
        <div class="container">
            <h2 class="text-center mb-5">Resumen por Día de la Semana</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow-sm border-0 h-100">
                        <div id="carouselLunes" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselLunes" data-bs-slide-to="0" class="active"></button>
                                <button type="button" data-bs-target="#carouselLunes" data-bs-slide-to="1"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../public/img/dia1/bitcoin1.webp" class="d-block w-100" alt="Monitoreo de servidores" style="height: 200px; object-fit: cover;">
                                </div>
                                <div class="carousel-item">
                                    <img src="../public/img/dia1/bitcoin2.webp" class="d-block w-100" alt="Dashboard de monitoreo" style="height: 200px; object-fit: cover;">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselLunes" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselLunes" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Lunes</h5>
                            <p class="card-text">
                                Temas.<br>
                                El ABC de Bitcoin<br>
                                Inteligencia Artificial Generativa - de la idea a la accion <br>
                                Curcurso de la Hackathon
                            </p>
                        </div>
                        <div class="card-footer bg-transparent">
                            <a href="dia1" class="btn btn-primary w-100 text-white">Ver resumen</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow-sm border-0 h-100">
                        <div id="carouselMartes" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselMartes" data-bs-slide-to="0" class="active"></button>
                                <button type="button" data-bs-target="#carouselMartes" data-bs-slide-to="1"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../public/img/dia2/images.webp" class="d-block w-100" alt="Backup de datos" style="height: 200px; object-fit: cover;">
                                </div>
                                <div class="carousel-item">
                                    <img src="../public/img/dia2/composer.webp" class="d-block w-100" alt="Servidores de backup" style="height: 200px; object-fit: cover;">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselMartes" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselMartes" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Martes</h5>
                            <p class="card-text">
                                Temas. <br>
                                Toma de decisiones estrategicas basadas en datos <br>
                                Construyendo un CRUD en minutos con laravel y filament <br>
                                IA MULTIMODAL
                            </p>
                        </div>
                        <div class="card-footer bg-transparent">
                            <a href="dia2" class="btn btn-success w-100 text-white">Ver resumen</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card shadow-sm border-0 h-100">
                        <div id="carouselMiercoles" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselMiercoles" data-bs-slide-to="0" class="active"></button>
                                <button type="button" data-bs-target="#carouselMiercoles" data-bs-slide-to="1"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../public/img/dia3/cancelado.webp" class="d-block w-100" alt="Actualizaciones de software" style="height: 200px; object-fit: cover;">
                                </div>
                                <div class="carousel-item">
                                    <img src="../public/img/dia3/cancelado2.webp" class="d-block w-100" alt="Parches de seguridad" style="height: 200px; object-fit: cover;">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselMiercoles" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselMiercoles" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Miércoles</h5>
                            <p class="card-text">Suspendido por lluvias</p>
                        </div>
                        <div class="card-footer bg-transparent">
                            <a href="dia3" class="btn btn-warning w-100 text-white">Ver resumen</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow-sm border-0 h-100">
                        <div id="carouselJueves" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselJueves" data-bs-slide-to="0" class="active"></button>
                                <button type="button" data-bs-target="#carouselJueves" data-bs-slide-to="1"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../public/img/dia4/16.webp" class="d-block w-100" alt="Reportes de métricas" style="height: 200px; object-fit: cover;">
                                </div>
                                <div class="carousel-item">
                                    <img src="../public/img/dia4/1.webp" class="d-block w-100" alt="Análisis de datos" style="height: 200px; object-fit: cover;">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselJueves" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselJueves" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Jueves</h5>
                            <p class="card-text">Feria de logros y popuseada</p>
                        </div>
                        <div class="card-footer bg-transparent">
                            <a href="dia4" class="btn btn-info w-100 text-white">Ver resumen</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card shadow-sm border-0 h-100">
                        <div id="carouselViernes" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselViernes" data-bs-slide-to="0" class="active"></button>
                                <button type="button" data-bs-target="#carouselViernes" data-bs-slide-to="1"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../public/img/dia5/fondo1.webp" class="d-block w-100" alt="Mantenimiento de hardware" style="height: 200px; object-fit: cover;">
                                </div>
                                <div class="carousel-item">
                                    <img src="../public/img/dia5/fondo2.webp" class="d-block w-100" alt="Limpieza de sistemas" style="height: 200px; object-fit: cover;">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselViernes" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselViernes" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Viernes</h5>
                            <p class="card-text">
                                BINGO<br>
                                Reconocimientos<br>
                                Torneo de clash Royale<br>
                                Fiesta HALLOFUTURE PARTY
                            </p>
                        </div>
                        <div class="card-footer bg-transparent">
                            <a href="dia5" class="btn btn-danger w-100 text-white">Ver resumen</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card shadow-sm border-0 h-100">
                        <div id="carouselViernes" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselViernes" data-bs-slide-to="0" class="active"></button>
                                <button type="button" data-bs-target="#carouselViernes" data-bs-slide-to="1"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../public/img/cristian.webp" class="d-block w-100" alt="Mantenimiento de hardware" style="height: 200px; object-fit: cover;">
                                </div>
                                <div class="carousel-item">
                                    <img src="../public/img/cristian.webp" class="d-block w-100" alt="Limpieza de sistemas" style="height: 200px; object-fit: cover;">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselViernes" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselViernes" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Perfil</h5>
                            <p class="card-text">
                                Cristian Geovanny Rubio Garcia RG22016
                            </p>
                        </div>
                        <div class="card-footer bg-transparent">
                            <a href="perfil" class="btn btn-danger w-100 text-white">Ver resumen</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer class="mt-5 pt-4 border-top text-center text-muted bg-white">
        <div class="container">
            <p>Resumen Semanal de Sistemas - Facultad Multidisciplinaria Oriental</p>
            <p class="small">Hora: <span id="fecha-actual"></span></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const fecha = new Date();
        document.getElementById('fecha-actual').textContent = fecha.toLocaleDateString('es-ES', { 
            weekday: 'long', 
            year: 'numeric', 
            month: 'long', 
            day: 'numeric',
            hour: '2-digit',
            minute: '2-digit'
        });
    </script>
</body>
</html>