<?php
namespace app\controllers;
use lib\CargarVista;

class PerfilController extends CargarVista{
    public function index(){
        return $this->views("PerfilView");
    }
}
?>