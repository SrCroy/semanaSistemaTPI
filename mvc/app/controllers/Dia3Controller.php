<?php
namespace app\controllers;
use lib\CargarVista;

class Dia3Controller extends CargarVista{
    public function index(){
        return $this->views("Dia3View");
    }
}
?>