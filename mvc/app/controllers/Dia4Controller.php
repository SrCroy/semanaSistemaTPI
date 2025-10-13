<?php
namespace app\controllers;
use lib\CargarVista;

class Dia4Controller extends CargarVista{
    public function index(){
        return $this->views("Dia4View");
    }
}
?>