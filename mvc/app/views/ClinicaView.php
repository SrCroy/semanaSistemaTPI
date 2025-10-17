<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Citas - Clínica Veterinaria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/mvc/public">
                                <i class="bi bi-house"></i>
                                Inicio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="perfil">
                                <i class="bi bi-person"></i>
                                Perfil
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="container my-5">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="display-4 mb-4">
                                <i class="bi bi-clipboard-plus text-primary"></i>
                                Sistema de Citas - Clínica Veterinaria
                            </h1>
                        </div>
                    </div>

                    <?php if (isset($_SESSION['mensaje'])): ?>
                        <div class="alert alert-<?= $_SESSION['tipo_mensaje'] ?> alert-dismissible fade show" role="alert">
                            <?= $_SESSION['mensaje'] ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                        <?php 
                        unset($_SESSION['mensaje']);
                        unset($_SESSION['tipo_mensaje']);
                        ?>
                    <?php endif; ?>

                    <div class="row justify-content-center mb-5">
                        <div class="col-lg-8">
                            <div class="card shadow">
                                <div class="card-header bg-primary text-white">
                                    <h4 class="mb-0"><i class="bi bi-calendar-check"></i> Reservar Cita</h4>
                                </div>
                                <div class="card-body p-4">
                                    <form method="post" action="guardarCita">
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label for="nombre_mascota" class="form-label">Nombre de la Mascota</label>
                                                <input type="text" class="form-control" id="nombre_mascota" name="nombre_mascota" placeholder="Ej: Max" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="tipo_mascota" class="form-label">Tipo de Mascota</label>
                                                <select class="form-select" id="tipo_mascota" name="tipo_mascota" required>
                                                    <option value="">Selecciona...</option>
                                                    <option value="Perro">Perro</option>
                                                    <option value="Gato">Gato</option>
                                                    <option value="Conejo">Conejo</option>
                                                    <option value="Ave">Ave</option>
                                                    <option value="Otro">Otro</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label for="nombre_dueno" class="form-label">Nombre del Dueño</label>
                                                <input type="text" class="form-control" id="nombre_dueno" name="nombre_dueno" placeholder="Tu nombre completo" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="telefono" class="form-label">Teléfono</label>
                                                <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Número de contacto" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label for="servicio_solicitado" class="form-label">Servicio Solicitado</label>
                                                <select class="form-select" id="servicio_solicitado" name="servicio_solicitado" required>
                                                    <option value="">Selecciona un servicio...</option>
                                                    <option value="Consulta general">Consulta General</option>
                                                    <option value="Vacunación">Vacunación</option>
                                                    <option value="Urgencia">Urgencias</option>
                                                    <option value="Cirugía">Cirugía</option>
                                                    <option value="Estética">Peluquería</option>
                                                    <option value="Control">Control</option>
                                                    <option value="Otro">Otro</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="fecha_preferida" class="form-label">Fecha Preferida</label>
                                                <input type="text" class="form-control" id="fecha_preferida" name="fecha_preferida" placeholder="dd/mm/aaaa" required>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="sintomas_motivo" class="form-label">Síntomas o Motivo de la Consulta</label>
                                            <textarea class="form-control" id="sintomas_motivo" name="sintomas_motivo" rows="3" placeholder="Describe brevemente el motivo de la visita"></textarea>
                                        </div>
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary btn-lg">
                                                <i class="bi bi-check-circle"></i> Confirmar Reserva
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card shadow">
                                <div class="card-header bg-success text-white">
                                    <h4 class="mb-0"><i class="bi bi-list-ul"></i> Citas Programadas</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Mascota</th>
                                                    <th>Tipo</th>
                                                    <th>Dueño</th>
                                                    <th>Teléfono</th>
                                                    <th>Servicio</th>
                                                    <th>Fecha</th>
                                                    <th>Síntomas</th>
                                                    <th>Estado</th>
                                                    <th>Fecha Creación</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tablaCitas">
                                                <?php if (!empty($citas)): ?>
                                                    <?php foreach ($citas as $cita): ?>
                                                        <tr id="cita-<?= $cita['id'] ?>">
                                                            <td><?= $cita['id'] ?></td>
                                                            <td><?= $cita['nombre_mascota'] ?></td>
                                                            <td><?= $cita['tipo_mascota'] ?></td>
                                                            <td><?= $cita['nombre_dueno'] ?></td>
                                                            <td><?= $cita['telefono'] ?></td>
                                                            <td><?= $cita['servicio_solicitado'] ?></td>
                                                            <td><?= $cita['fecha_preferida'] ?></td>
                                                            <td><?= $cita['sintomas_motivo'] ?></td>
                                                            <td>
                                                                <span class="badge 
                                                                    <?= $cita['estado'] == 'Confirmada' ? 'bg-success' : 
                                                                       ($cita['estado'] == 'Cancelada' ? 'bg-danger' : 'bg-warning') ?>">
                                                                    <?= $cita['estado'] ?>
                                                                </span>
                                                            </td>
                                                            <td><?= $cita['fecha_creacion'] ?></td>
                                                            <td>
                                                                <div class="btn-group btn-group-sm">
                                                                    <?php if ($cita['estado'] == 'Pendiente'): ?>
                                                                        <a href="actualizarEstado/<?= $cita['id'] ?>/Confirmada" 
                                                                        class="btn btn-outline-primary" 
                                                                        onclick="return confirm('¿Confirmar esta cita?')">
                                                                            <i class="bi bi-check-circle"></i>
                                                                        </a>
                                                                        <a href="actualizarEstado/<?= $cita['id'] ?>/Cancelada" 
                                                                        class="btn btn-outline-danger" 
                                                                        onclick="return confirm('¿Cancelar esta cita?')">
                                                                            <i class="bi bi-x-circle"></i>
                                                                        </a>
                                                                    <?php elseif ($cita['estado'] == 'Confirmada'): ?>
                                                                        <button class="btn btn-outline-success" disabled title="Cita Confirmada">
                                                                            <i class="bi bi-check-circle"></i>
                                                                        </button>
                                                                        <button class="btn btn-outline-secondary" disabled>
                                                                            <i class="bi bi-x-circle"></i>
                                                                        </button>
                                                                    <?php else: ?>
                                                                        <button class="btn btn-outline-secondary" disabled>
                                                                            <i class="bi bi-check-circle"></i>
                                                                        </button>
                                                                        <button class="btn btn-outline-danger" disabled title="Cita Cancelada">
                                                                            <i class="bi bi-x-circle"></i>
                                                                        </button>
                                                                    <?php endif; ?>
                                                                    
                                                                    <a href="eliminarCita/<?= $cita['id'] ?>" 
                                                                    class="btn btn-outline-danger" 
                                                                    onclick="return confirm('¿Estás seguro de eliminar esta cita?')">
                                                                        <i class="bi bi-trash"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                <?php else: ?>
                                                    <tr>
                                                        <td colspan="11" class="text-center text-muted">
                                                            No hay citas programadas
                                                        </td>
                                                    </tr>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('fecha_preferida').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length >= 2) {
                value = value.substring(0, 2) + '/' + value.substring(2);
            }
            if (value.length >= 5) {
                value = value.substring(0, 5) + '/' + value.substring(5, 9);
            }
            e.target.value = value;
        });
    </script>
</body>
</html>