<?php
use lib\Routes;
use app\controllers\HomeController;

Routes::get("/", [HomeController::class, "index"]);

Routes::dispatch();

?>