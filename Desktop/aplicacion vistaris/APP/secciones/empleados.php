<?php
include('../configuraciones/bd.php');
$conexionBD = BD::crearInstancia();

// Habilitar la visualización de errores
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Variables del formulario
$id = isset($_POST['id']) ? $_POST['id'] : '';
$nombre_empleado = isset($_POST['nombre_empleado']) ? $_POST['nombre_empleado'] : '';
$tipo_empleado = isset($_POST['tipo_empleado']) ? $_POST['tipo_empleado'] : '';
$accion = isset($_POST['accion']) ? $_POST['accion'] : '';

// Manejo de acciones
if ($accion != '') {
    switch ($accion) {
        case 'agregar':
            if (!empty($nombre_empleado) && !empty($tipo_empleado)) {
                $sql = "INSERT INTO empleados (nombre_empleado, tipo_empleado) VALUES (:nombre_empleado, :tipo_empleado)";
                $consulta = $conexionBD->prepare($sql);
                $consulta->bindParam(':nombre_empleado', $nombre_empleado);
                $consulta->bindParam(':tipo_empleado', $tipo_empleado);
                $consulta->execute();
                header("Location: " . $_SERVER['PHP_SELF']);
                exit();
            } else {
                echo "El nombre y el tipo de empleado no pueden estar vacíos.";
            }
            break;

        case 'editar':
            if (!empty($id) && !empty($nombre_empleado) && !empty($tipo_empleado)) {
                $sql = "UPDATE empleados SET nombre_empleado=:nombre_empleado, tipo_empleado=:tipo_empleado WHERE id=:id";
                $consulta = $conexionBD->prepare($sql);
                $consulta->bindParam(':nombre_empleado', $nombre_empleado);
                $consulta->bindParam(':tipo_empleado', $tipo_empleado);
                $consulta->bindParam(':id', $id);
                $consulta->execute();
                header("Location: " . $_SERVER['PHP_SELF']);
                exit();
            } else {
                echo "El ID, el nombre y el tipo de empleado no pueden estar vacíos para editar.";
            }
            break;

        case 'borrar':
            if (!empty($id)) {
                $sql = "DELETE FROM empleados WHERE id=:id";
                $consulta = $conexionBD->prepare($sql);
                $consulta->bindParam(':id', $id);
                $consulta->execute();
                header("Location: " . $_SERVER['PHP_SELF']);
                exit();
            } else {
                echo "El ID no puede estar vacío para borrar un empleado.";
            }
            break;

        case 'Seleccionar':
            if (!empty($id)) {
                // Seleccionar el empleado
                $sql = "SELECT * FROM empleados WHERE id=:id";
                $consulta = $conexionBD->prepare($sql);
                $consulta->bindParam(':id', $id);
                $consulta->execute();
                $empleado = $consulta->fetch(PDO::FETCH_ASSOC);

                // Asignar valores al formulario
                if ($empleado) {
                    $id = $empleado['id'];
                    $nombre_empleado = $empleado['nombre_empleado'];
                    $tipo_empleado = $empleado['tipo_empleado']; // Cargar el tipo de empleado
                } else {
                    echo "Empleado no encontrado.";
                }
            }
            break;
    }
}

// Consulta para mostrar la lista de empleados
$consulta = $conexionBD->prepare("SELECT * FROM empleados");
$consulta->execute();
$listaEmpleados = $consulta->fetchAll(PDO::FETCH_ASSOC);
?>
