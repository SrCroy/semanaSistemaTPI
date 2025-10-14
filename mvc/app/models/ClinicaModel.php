<?php
namespace app\models;
use lib\Database;

class ClinicaModel extends Database{
    
    public function getCitas(){
        $conexion = $this->getConnection();
        $sql = $conexion->query("SELECT * FROM Reservar_Cita ORDER BY fecha_creacion DESC");
        return $sql->fetchAll();
    }

    public function guardarCita($datos){
        $conexion = $this->getConnection();
        $sql = "INSERT INTO Reservar_Cita 
                (nombre_mascota, tipo_mascota, nombre_dueno, telefono, servicio_solicitado, fecha_preferida, sintomas_motivo) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $conexion->prepare($sql);
        return $stmt->execute([
            $datos['nombre_mascota'],
            $datos['tipo_mascota'],
            $datos['nombre_dueno'],
            $datos['telefono'],
            $datos['servicio_solicitado'],
            $datos['fecha_preferida'],
            $datos['sintomas_motivo']
        ]);
    }

    public function getCitaById($id){
        $conexion = $this->getConnection();
        $sql = "SELECT * FROM Reservar_Cita WHERE id = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function actualizarEstado($id, $estado){
        $conexion = $this->getConnection();
        $sql = "UPDATE Reservar_Cita SET estado = ? WHERE id = ?";
        $stmt = $conexion->prepare($sql);
        return $stmt->execute([$estado, $id]);
    }

    public function eliminarCita($id){
        $conexion = $this->getConnection();
        $sql = "DELETE FROM Reservar_Cita WHERE id = ?";
        $stmt = $conexion->prepare($sql);
        return $stmt->execute([$id]);
    }

    public function getLastInsertId(){
        return $this->getConnection()->lastInsertId();
    }
}