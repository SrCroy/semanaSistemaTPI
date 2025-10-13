<?php
namespace lib;

class CargarVista{
    public function views($vista, $data = []){
        extract($data);
        if (file_exists("../app/views/$vista.php")) {
            ob_start();
            include "../app/views/$vista.php";
            $content = ob_get_clean();
            return $content;
        }else {
            return "No se cargo la vista en la ruta ../app/views/$vista.php";
        }
    }
}
?>