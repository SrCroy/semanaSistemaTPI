<?php
use lib\Routes;

Routes::get("/", function (){
    return "Hola desde la ruta raiz";
});

Routes::get("/formulario", function (){
    return "formulario";
});

Routes::dispatch();

?>