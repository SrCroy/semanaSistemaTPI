<?php
use app\controllers\ClinicaController;
use app\controllers\Dia1Controller;
use app\controllers\Dia2Controller;
use app\controllers\Dia3Controller;
use app\controllers\Dia4Controller;
use app\controllers\Dia5Controller;
use app\controllers\GuardarVisitasController;
use app\controllers\PerfilController;
use lib\Routes;
use app\controllers\HomeController;

Routes::get("/", [HomeController::class, "index"]);
Routes::get("/dia1", [Dia1Controller::class, "index"]);
Routes::get("/dia2", [Dia2Controller::class, "index"]);
Routes::get("/dia3", [Dia3Controller::class, "index"]);
Routes::get("/dia4", [Dia4Controller::class, "index"]);
Routes::get("/dia5", [Dia5Controller::class, "index"]);
Routes::get("/perfil", [PerfilController::class, "index"]);
Routes::get("/clinica", [ClinicaController::class, "index"]);

Routes::post("/guardarCita", [ClinicaController::class, "guardarCita"]);
Routes::get("/actualizarEstado/:id/:estado", [ClinicaController::class, "actualizarEstado"]);
Routes::get("/eliminarCita/:id", [ClinicaController::class, "eliminarCita"]);

Routes::get("/visitas", [GuardarVisitasController::class, "index"]);
Routes::post("/enviar", [GuardarVisitasController::class, "enviar"]);
Routes::get("/tablas", [GuardarVisitasController::class, "tablas"]);

Routes::dispatch();
?>