<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitas Registradas - Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
</head>
<body class="bg-light">
    <header class="bg-primary text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold">Visitas Registradas</h1>
                    <p class="lead">Universidad de El Salvador - Facultad Multidisciplinaria Oriental, San Miguel</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <div class="d-flex justify-content-lg-end gap-3">
                        <a href="visitas" class="btn btn-outline-light btn-sm">
                            <i class="bi bi-plus-circle"></i> Nueva Visita
                        </a>
                        <a href="/mvc/public" class="btn btn-outline-light btn-sm">
                            Volver al Inicio
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-white py-3">
                            <h5 class="card-title mb-0">Listado de Visitas</h5>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0 align-middle text-center">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col" class="ps-4">ID</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Apellido</th>
                                            <th scope="col">Correo Electrónico</th>
                                            <th scope="col">Teléfono</th>
                                            <th scope="col">Fecha de Registro</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($persona)): ?>
                                            <?php foreach ($persona as $values): ?>
                                                <tr>
                                                    <td><?= htmlspecialchars($values['id']) ?></td>
                                                    <td><?= htmlspecialchars($values['nombre']) ?></td>
                                                    <td><?= htmlspecialchars($values['apellido']) ?></td>
                                                    <td><?= htmlspecialchars($values['correo']) ?></td>
                                                    <td><?= htmlspecialchars($values['telefono']) ?></td>
                                                    <td><?= htmlspecialchars($values['fecha_registro']) ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <tr>
                                                <td colspan="6" class="text-center text-muted py-3">
                                                    ¡No hay datos en la tabla!
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer bg-white py-3">
                            <div class="row align-items-center">
                                <div class="col-12 text-center">
                                    <p class="mb-0 text-muted">
                                        Mostrando <strong><?= isset($persona) ? count($persona) : 0 ?></strong> visitas registradas
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="mt-5 pt-4 border-top text-center text-muted bg-white">
        <div class="container">
            <p>Registro de Visitas - Blog de Sistemas - Facultad Multidisciplinaria Oriental</p>
            <p class="small">Hora: <span id="fecha-actual"></span></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Mostrar fecha y hora actual
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
