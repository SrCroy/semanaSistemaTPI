<?php
namespace app\controllers;
use lib\CargarVista;
class Dia2Controller extends CargarVista{
    public function index(){
        return $this->views("Dia2View");
    }
}
?>