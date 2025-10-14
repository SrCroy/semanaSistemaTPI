<?php
namespace app\models;
use lib\Database;

class GuardarVistasModels extends Database{
    
    public function getVisitas_Blog(){
        $conexion = $this->getConnection();
        $sql = $conexion->query("SELECT * FROM Visitas_Blog");
        return $sql->fetchAll();
    }

    public function guardarVisitas($data){
        try {
            $conexion = $this->getConnection();
            
            $sql = "INSERT INTO `Visitas_Blog`(`nombre`, `apellido`, `correo`, `telefono`) VALUES (?,?,?,?)";
            $stmt = $conexion->prepare($sql);
            
            return $stmt->execute([
                $data['nombre'],
                $data['apellido'], 
                $data['correo'],
                $data['telefono']
            ]);
            
        } catch (\PDOException $e) {
            error_log("Error al guardar visita: " . $e->getMessage());
            return false;
        }
    }
}