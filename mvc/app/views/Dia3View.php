<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Conectando al Futuro: Día 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
</head>
<body class="bg-light">
    <header class="bg-primary text-white py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-5 fw-bold">Conectando al Futuro</h1>
                    <p class="lead mb-0">Cancelación de Actividades por Lluvias - Día 3</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                    <a href="/mvc/public" class="btn btn-outline-light btn-sm">
                        <i class="bi bi-arrow-left me-1"></i> Volver al Inicio
                    </a>
                </div>
            </div>
        </div>
    </header>
    
    <main class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="text-center mb-5">
                        <h2 class="display-6 fw-bold text-primary">Día 3: Actividades Suspendidas por Lluvias</h2>
                        <p class="lead">Comunicados oficiales de la Universidad de El Salvador y Ministerio de Educación</p>
                        <div class="border-bottom mx-auto" style="width: 100px;"></div>
                    </div>
                    
                    <div class="mb-4">
                        <h3 class="text-primary border-bottom pb-2 mb-4">
                            <i class="bi bi-building me-2"></i>
                            Comunicado Oficial - Universidad de El Salvador
                        </h3>
                        
                        <div class="card shadow-sm border-0 mb-4">
                            <div class="card-body p-4">
                                <div class="row align-items-start">
                                    <div class="col-md-8">
                                        <h5 class="card-title text-primary">Suspensión de Actividades Académicas</h5>
                                        <p class="card-text">
                                            La Universidad de El Salvador informa a la comunidad universitaria que, debido a las intensas lluvias que afectan al territorio nacional, se suspenden todas las actividades académicas y administrativas para este día.
                                        </p>
                                        <p class="card-text">
                                            La medida busca garantizar la seguridad de estudiantes, docentes y personal administrativo ante las condiciones climáticas adversas y las dificultades de transporte.
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="../public/img/dia3/cancelado2.webp" 
                                             alt="Universidad de El Salvador bajo lluvia" 
                                             class="img-fluid rounded shadow-sm w-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card shadow-sm border-0 mb-4">
                            <div class="card-body p-4">
                                <div class="row align-items-start">
                                    <div class="col-md-4">
                                        <img src="../public/img/dia3/cancelado.webp" 
                                             alt="Campus universitario afectado por lluvias" 
                                             class="img-fluid rounded shadow-sm w-100">
                                    </div>
                                    <div class="col-md-8">
                                        <h5 class="card-title text-primary">Torneo Deportivo Interfacultades Cancelado</h5>
                                        <p class="card-text">
                                            El torneo de fútbol interfacultades programado para esta semana queda oficialmente cancelado. Las canchas deportivas de la universidad se encuentran inundadas y no reúnen las condiciones mínimas para la práctica deportiva.
                                        </p>
                                        <p class="card-text">
                                            La reprogramación del evento se anunciará mediante los canales oficiales de la universidad cuando las condiciones meteorológicas lo permitan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="mt-5 pt-4 border-top text-center text-muted bg-white">
        <div class="container">
            <p>Conectando al Futuro - Día 3: Suspensión de Actividades por Lluvias</p>
            <p class="small">Fecha: <span id="fecha-actual"></span></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const fecha = new Date();
        document.getElementById('fecha-actual').textContent = fecha.toLocaleDateString('es-ES', { 
            weekday: 'long', 
            year: 'numeric', 
            month: 'long', 
            day: 'numeric'
        });
    </script>
</body>
</html>