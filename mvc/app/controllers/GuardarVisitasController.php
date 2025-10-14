<?php
namespace app\controllers;
use app\models\GuardarVistasModels;
use lib\CargarVista;

class GuardarVisitasController extends CargarVista{
    public function index(){
        // Iniciar sesión si no está iniciada
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        // Verificar si hay mensaje de éxito
        $success = isset($_SESSION['form_success']) ? $_SESSION['form_success'] : false;
        $error = isset($_SESSION['form_error']) ? $_SESSION['form_error'] : false;
        
        // Limpiar los mensajes después de usarlos
        unset($_SESSION['form_success']);
        unset($_SESSION['form_error']);
        
        return $this->views("GuardarVisitasView", [
            'success' => $success,
            'error' => $error
        ]);
    }

    public function enviar(){
        if ($_POST) {
            // Iniciar sesión
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            
            $visita = new GuardarVistasModels();
            if ($visita->guardarVisitas($_POST)) {
                $_SESSION['form_success'] = true;
            } else {
                $_SESSION['form_error'] = true;
            }
            
            header("location: visitas");
            exit;
        }
    }
}
?>