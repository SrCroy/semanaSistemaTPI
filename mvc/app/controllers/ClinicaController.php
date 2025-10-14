<?php
namespace app\controllers;
use lib\CargarVista;
use app\models\ClinicaModel;

class ClinicaController extends CargarVista{
    private $model;

    public function __construct() {
        $this->model = new ClinicaModel();
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function index(){
        $citas = $this->mostrarCitas();
        return $this->views("ClinicaView", ['citas' => $citas]);
    }

    public function guardarCita() {
        $datos = [
            'nombre_mascota' => trim($_POST['nombre_mascota'] ?? ''),
            'tipo_mascota' => trim($_POST['tipo_mascota'] ?? ''),
            'nombre_dueno' => trim($_POST['nombre_dueno'] ?? ''),
            'telefono' => trim($_POST['telefono'] ?? ''),
            'servicio_solicitado' => trim($_POST['servicio_solicitado'] ?? ''),
            'fecha_preferida' => trim($_POST['fecha_preferida'] ?? ''),
            'sintomas_motivo' => trim($_POST['sintomas_motivo'] ?? '')
        ];

        $errores = $this->validarDatos($datos);
        
        if (empty($errores)) {
            try {
                $datos['fecha_preferida'] = $this->convertirFecha($datos['fecha_preferida']);
                
                $resultado = $this->model->guardarCita($datos);

                if ($resultado) {
                    $_SESSION['mensaje'] = 'Cita guardada exitosamente';
                    $_SESSION['tipo_mensaje'] = 'success';
                } else {
                    $_SESSION['mensaje'] = 'Error al guardar la cita';
                    $_SESSION['tipo_mensaje'] = 'danger';
                }
            } catch (\Exception $e) {
                $_SESSION['mensaje'] = 'Error: ' . $e->getMessage();
                $_SESSION['tipo_mensaje'] = 'danger';
            }
        } else {
            $_SESSION['mensaje'] = 'Errores de validación: ' . implode(', ', $errores);
            $_SESSION['tipo_mensaje'] = 'danger';
            $_SESSION['datos_formulario'] = $datos;
        }
        
        header('Location: /mvc/public/clinica');
        exit;
    }
    private function convertirFecha($fecha) {
        $partes = explode('/', $fecha);
        if (count($partes) === 3) {
            return $partes[2] . '-' . $partes[1] . '-' . $partes[0];
        }
        return $fecha;
    }

    public function mostrarCitas() {
        try {
            $citas = $this->model->getCitas();
            
            $citasFormateadas = array_map(function($cita) {
                return [
                    'id' => $cita['id'],
                    'nombre_mascota' => htmlspecialchars($cita['nombre_mascota']),
                    'tipo_mascota' => htmlspecialchars($cita['tipo_mascota']),
                    'nombre_dueno' => htmlspecialchars($cita['nombre_dueno']),
                    'telefono' => htmlspecialchars($cita['telefono']),
                    'servicio_solicitado' => htmlspecialchars($cita['servicio_solicitado']),
                    'fecha_preferida' => date('d/m/Y', strtotime($cita['fecha_preferida'])),
                    'sintomas_motivo' => htmlspecialchars($cita['sintomas_motivo']),
                    'estado' => $cita['estado'],
                    'fecha_creacion' => date('d/m/Y H:i', strtotime($cita['fecha_creacion']))
                ];
            }, $citas);

            return $citasFormateadas;

        } catch (\Exception $e) {
            error_log("Error al obtener citas: " . $e->getMessage());
            return [];
        }
    }

    public function actualizarEstado($id = null, $estado = null) {
        if ($id === null) {
            $id = $_GET['id'] ?? '';
        }
        if ($estado === null) {
            $estado = $_GET['estado'] ?? '';
        }

        if ($id && in_array($estado, ['Pendiente', 'Confirmada', 'Cancelada'])) {
            try {
                $resultado = $this->model->actualizarEstado($id, $estado);
                
                if ($resultado) {
                    $_SESSION['mensaje'] = 'Estado actualizado correctamente';
                    $_SESSION['tipo_mensaje'] = 'success';
                } else {
                    $_SESSION['mensaje'] = 'Error al actualizar estado';
                    $_SESSION['tipo_mensaje'] = 'danger';
                }
            } catch (\Exception $e) {
                $_SESSION['mensaje'] = 'Error: ' . $e->getMessage();
                $_SESSION['tipo_mensaje'] = 'danger';
            }
        } else {
            $_SESSION['mensaje'] = 'Datos inválidos';
            $_SESSION['tipo_mensaje'] = 'danger';
        }
        
        header('Location: /mvc/public/clinica');
        exit;
    }

    public function eliminarCita($id = null) {
        if ($id === null) {
            $id = $_GET['id'] ?? '';
        }

        if ($id) {
            try {
                $resultado = $this->model->eliminarCita($id);
                
                if ($resultado) {
                    $_SESSION['mensaje'] = 'Cita eliminada correctamente';
                    $_SESSION['tipo_mensaje'] = 'success';
                } else {
                    $_SESSION['mensaje'] = 'Error al eliminar cita';
                    $_SESSION['tipo_mensaje'] = 'danger';
                }
            } catch (\Exception $e) {
                $_SESSION['mensaje'] = 'Error: ' . $e->getMessage();
                $_SESSION['tipo_mensaje'] = 'danger';
            }
        } else {
            $_SESSION['mensaje'] = 'ID inválido';
            $_SESSION['tipo_mensaje'] = 'danger';
        }
        
        header('Location: /mvc/public/clinica');
        exit;
    }

    private function validarDatos($datos) {
        $errores = [];

        if (empty($datos['nombre_mascota'])) {
            $errores['nombre_mascota'] = 'El nombre de la mascota es obligatorio';
        }

        if (empty($datos['tipo_mascota']) || $datos['tipo_mascota'] === 'Selecciona...') {
            $errores['tipo_mascota'] = 'Debe seleccionar un tipo de mascota';
        }

        if (empty($datos['nombre_dueno'])) {
            $errores['nombre_dueno'] = 'El nombre del dueño es obligatorio';
        }

        if (empty($datos['telefono'])) {
            $errores['telefono'] = 'El teléfono es obligatorio';
        }

        if (empty($datos['servicio_solicitado']) || $datos['servicio_solicitado'] === 'Selecciona un servicio...') {
            $errores['servicio_solicitado'] = 'Debe seleccionar un servicio';
        }

        if (empty($datos['fecha_preferida'])) {
            $errores['fecha_preferida'] = 'La fecha preferida es obligatoria';
        }

        return $errores;
    }
}