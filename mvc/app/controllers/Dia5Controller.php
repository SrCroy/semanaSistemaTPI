<?php
namespace app\controllers;
use lib\CargarVista;

class Dia5Controller extends CargarVista{
    public function index(){
        return $this->views("Dia5View");
    }
}
?>