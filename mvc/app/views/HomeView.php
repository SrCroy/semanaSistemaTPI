<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen Semanal - Sistemas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-4">
        <!-- Header -->
        <header class="text-center mb-5">
            <h1 class="display-4 fw-bold text-primary">Resumen Semanal de Sistemas</h1>
            <p class="lead text-muted">Revisa el estado de los sistemas día a día</p>
        </header>

        <!-- Tarjetas de los días -->
        <div class="row g-4">
            <!-- Lunes -->
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm border-0 h-100">
                    <div id="carouselLunes" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselLunes" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#carouselLunes" data-bs-slide-to="1"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" class="d-block w-100" alt="Monitoreo de servidores" style="height: 200px; object-fit: cover;">
                            </div>
                            <div class="carousel-item">
                                <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" class="d-block w-100" alt="Dashboard de monitoreo" style="height: 200px; object-fit: cover;">
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
                        <h5 class="card-title">Lunes - Monitoreo</h5>
                        <p class="card-text">Revisión del estado de servidores y servicios críticos después del fin de semana.</p>
                        <div class="mb-3">
                            <span class="badge bg-success">Estable</span>
                            <span class="badge bg-info ms-1">92% Uptime</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <button class="btn btn-primary w-100">Ver resumen</button>
                    </div>
                </div>
            </div>

            <!-- Martes -->
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm border-0 h-100">
                    <div id="carouselMartes" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselMartes" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#carouselMartes" data-bs-slide-to="1"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://images.unsplash.com/photo-1620712943543-bcc4688e7485?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" class="d-block w-100" alt="Backup de datos" style="height: 200px; object-fit: cover;">
                            </div>
                            <div class="carousel-item">
                                <img src="https://images.unsplash.com/photo-1621905252507-b35492cc74b4?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" class="d-block w-100" alt="Servidores de backup" style="height: 200px; object-fit: cover;">
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
                        <h5 class="card-title">Martes - Backup</h5>
                        <p class="card-text">Ejecución de respaldos completos de bases de datos y sistemas.</p>
                        <div class="mb-3">
                            <span class="badge bg-success">Completado</span>
                            <span class="badge bg-warning ms-1">3.2 TB</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <button class="btn btn-success w-100">Ver resumen</button>
                    </div>
                </div>
            </div>

            <!-- Miércoles -->
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm border-0 h-100">
                    <div id="carouselMiercoles" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselMiercoles" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#carouselMiercoles" data-bs-slide-to="1"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" class="d-block w-100" alt="Actualizaciones de software" style="height: 200px; object-fit: cover;">
                            </div>
                            <div class="carousel-item">
                                <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" class="d-block w-100" alt="Parches de seguridad" style="height: 200px; object-fit: cover;">
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
                        <h5 class="card-title">Miércoles - Actualizaciones</h5>
                        <p class="card-text">Aplicación de parches de seguridad y actualizaciones de software.</p>
                        <div class="mb-3">
                            <span class="badge bg-warning">En progreso</span>
                            <span class="badge bg-info ms-1">75%</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <button class="btn btn-warning w-100">Ver resumen</button>
                    </div>
                </div>
            </div>

            <!-- Jueves -->
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm border-0 h-100">
                    <div id="carouselJueves" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselJueves" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#carouselJueves" data-bs-slide-to="1"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" class="d-block w-100" alt="Reportes de métricas" style="height: 200px; object-fit: cover;">
                            </div>
                            <div class="carousel-item">
                                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" class="d-block w-100" alt="Análisis de datos" style="height: 200px; object-fit: cover;">
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
                        <h5 class="card-title">Jueves - Reportes</h5>
                        <p class="card-text">Generación de reportes de rendimiento y métricas del sistema.</p>
                        <div class="mb-3">
                            <span class="badge bg-success">Completado</span>
                            <span class="badge bg-primary ms-1">15 reportes</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <button class="btn btn-info w-100">Ver resumen</button>
                    </div>
                </div>
            </div>

            <!-- Viernes -->
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm border-0 h-100">
                    <div id="carouselViernes" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselViernes" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#carouselViernes" data-bs-slide-to="1"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" class="d-block w-100" alt="Mantenimiento de hardware" style="height: 200px; object-fit: cover;">
                            </div>
                            <div class="carousel-item">
                                <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" class="d-block w-100" alt="Limpieza de sistemas" style="height: 200px; object-fit: cover;">
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
                        <h5 class="card-title">Viernes - Mantenimiento</h5>
                        <p class="card-text">Mantenimiento preventivo de hardware y limpieza de sistemas.</p>
                        <div class="mb-3">
                            <span class="badge bg-danger">Pendiente</span>
                            <span class="badge bg-secondary ms-1">Programado</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <button class="btn btn-danger w-100">Ver resumen</button>
                    </div>
                </div>
            </div>

            <!-- Sábado -->
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm border-0 h-100">
                    <div id="carouselSabado" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselSabado" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#carouselSabado" data-bs-slide-to="1"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" class="d-block w-100" alt="Revisión de logs" style="height: 200px; object-fit: cover;">
                            </div>
                            <div class="carousel-item">
                                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" class="d-block w-100" alt="Auditoría de seguridad" style="height: 200px; object-fit: cover;">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselSabado" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselSabado" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Sábado - Revisión</h5>
                        <p class="card-text">Revisión de logs, auditoría de seguridad y planes de contingencia.</p>
                        <div class="mb-3">
                            <span class="badge bg-success">Estable</span>
                            <span class="badge bg-info ms-1">Sin incidencias</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <button class="btn btn-secondary w-100">Ver resumen</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="mt-5 pt-4 border-top text-center text-muted">
            <p>Resumen Semanal de Sistemas - Departamento de TI</p>
            <p class="small">Actualizado: <span id="fecha-actual"></span></p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Mostrar fecha actual
        const fecha = new Date();
        document.getElementById('fecha-actual').textContent = fecha.toLocaleDateString('es-ES', { 
            weekday: 'long', 
            year: 'numeric', 
            month: 'long', 
            day: 'numeric',
            hour: '2-digit',
            minute: '2-digit'
        });
        
        // Agregar funcionalidad a los botones
        document.querySelectorAll('.btn').forEach(button => {
            button.addEventListener('click', function() {
                const dia = this.closest('.card').querySelector('.card-title').textContent;
                alert(`Navegando al resumen detallado de: ${dia}`);
                // En una implementación real, aquí iría la navegación a otra vista
            });
        });
    </script>
</body>
</html>