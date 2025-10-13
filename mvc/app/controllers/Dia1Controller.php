<?php
namespace app\controllers;
use lib\CargarVista;
class Dia1Controller extends CargarVista{
    public function index(){
        return $this->views("Dia1View");
    }
}
?>