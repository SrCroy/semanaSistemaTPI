<?php
use app\controllers\Dia1Controller;
use app\controllers\Dia2Controller;
use app\controllers\Dia3Controller;
use app\controllers\Dia4Controller;
use app\controllers\Dia5Controller;
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
Routes::dispatch();

?>