<?php
include('../configuraciones/bd.php');
$conexionBD = BD::crearInstancia();

// Habilitar la visualización de errores
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Variables del formulario
$id = isset($_POST['id']) ? $_POST['id'] : '';
$cliente = isset($_POST['cliente']) ? $_POST['cliente'] : '';
$optico_atendido = isset($_POST['optico_atendido']) ? $_POST['optico_atendido'] : '';
$fecha_recogida = isset($_POST['fecha_recogida']) ? $_POST['fecha_recogida'] : '';
$tipo_lente = isset($_POST['tipo_lente']) ? $_POST['tipo_lente'] : '';
$primera_gafa = isset($_POST['primera_gafa']) ? $_POST['primera_gafa'] : '';
$sintomas = isset($_POST['sintomas']) ? $_POST['sintomas'] : '';
$accion = isset($_POST['accion']) ? $_POST['accion'] : '';

// Manejo de acciones
if ($accion != '') {
    switch ($accion) {
        case 'agregar':
            if (!empty($cliente) && !empty($optico_atendido)) {
                $sql = "INSERT INTO inadaptaciones (cliente, optico_atendido, fecha_recogida, tipo_lente, primera_gafa, sintomas) 
                        VALUES (:cliente, :optico_atendido, :fecha_recogida, :tipo_lente, :primera_gafa, :sintomas)";
                $consulta = $conexionBD->prepare($sql);
                $consulta->bindParam(':cliente', $cliente);
                $consulta->bindParam(':optico_atendido', $optico_atendido);
                $consulta->bindParam(':fecha_recogida', $fecha_recogida);
                $consulta->bindParam(':tipo_lente', $tipo_lente);
                $consulta->bindParam(':primera_gafa', $primera_gafa);
                $consulta->bindParam(':sintomas', $sintomas);
                $consulta->execute();
                header("Location: " . $_SERVER['PHP_SELF']);
                exit();
            } else {
                echo "Los campos Cliente y Óptico atendido no pueden estar vacíos.";
            }
            break;

        case 'editar':
            if (!empty($id) && !empty($cliente) && !empty($optico_atendido)) {
                $sql = "UPDATE inadaptaciones SET cliente=:cliente, optico_atendido=:optico_atendido, fecha_recogida=:fecha_recogida,
                        tipo_lente=:tipo_lente, primera_gafa=:primera_gafa, sintomas=:sintomas WHERE id=:id";
                $consulta = $conexionBD->prepare($sql);
                $consulta->bindParam(':cliente', $cliente);
                $consulta->bindParam(':optico_atendido', $optico_atendido);
                $consulta->bindParam(':fecha_recogida', $fecha_recogida);
                $consulta->bindParam(':tipo_lente', $tipo_lente);
                $consulta->bindParam(':primera_gafa', $primera_gafa);
                $consulta->bindParam(':sintomas', $sintomas);
                $consulta->bindParam(':id', $id);
                $consulta->execute();
                header("Location: " . $_SERVER['PHP_SELF']);
                exit();
            } else {
                echo "ID, Cliente y Óptico atendido no pueden estar vacíos para editar.";
            }
            break;

        case 'borrar':
            if (!empty($id)) {
                $sql = "DELETE FROM inadaptaciones WHERE id=:id";
                $consulta = $conexionBD->prepare($sql);
                $consulta->bindParam(':id', $id);
                $consulta->execute();
                header("Location: " . $_SERVER['PHP_SELF']);
                exit();
            } else {
                echo "El ID no puede estar vacío para borrar.";
            }
            break;

        case 'Seleccionar':
            if (!empty($id)) {
                // Seleccionar la inadaptación
                $sql = "SELECT * FROM inadaptaciones WHERE id=:id";
                $consulta = $conexionBD->prepare($sql);
                $consulta->bindParam(':id', $id);
                $consulta->execute();
                $inadaptacion = $consulta->fetch(PDO::FETCH_ASSOC);

                // Asignar valores al formulario
                if ($inadaptacion) {
                    $id = $inadaptacion['id'];
                    $cliente = $inadaptacion['cliente'];
                    $optico_atendido = $inadaptacion['optico_atendido'];
                    $fecha_recogida = $inadaptacion['fecha_recogida'];
                    $tipo_lente = $inadaptacion['tipo_lente'];
                    $primera_gafa = $inadaptacion['primera_gafa'];
                    $sintomas = $inadaptacion['sintomas'];
                } else {
                    echo "Inadaptación no encontrada.";
                }
            }
            break;
    }
}

// Consulta para mostrar la lista de inadaptaciones
$consulta = $conexionBD->prepare("SELECT * FROM inadaptaciones");
$consulta->execute();
$listaInadaptaciones = $consulta->fetchAll(PDO::FETCH_ASSOC) ?? [];
?>

