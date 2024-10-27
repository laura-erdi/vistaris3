<?php
include('../configuraciones/bd.php');
$conexionBD = BD::crearInstancia();

// Consulta para obtener la lista de empleados (ópticos)
$consulta = $conexionBD->prepare("SELECT * FROM empleados");
$consulta->execute();
$listaEmpleados = $consulta->fetchAll(PDO::FETCH_ASSOC);

// Variables para obtener los datos del formulario
$id = isset($_POST['id']) ? $_POST['id'] : '';
$nombre_completo = isset($_POST['nombre_completo']) ? $_POST['nombre_completo'] : '';
$graduacion = isset($_POST['graduacion']) ? $_POST['graduacion'] : '';
$inadaptacion = isset($_POST['inadaptacion']) ? $_POST['inadaptacion'] : '';
$enfermedades_oculares = isset($_POST['enfermedades_oculares']) ? $_POST['enfermedades_oculares'] : '';
$id_empleado = isset($_POST['id_empleado']) ? $_POST['id_empleado'] : '';
$accion = isset($_POST['accion']) ? $_POST['accion'] : '';

// Manejo de acciones
if ($accion != '') {
    switch ($accion) {
        case 'agregar':
            if (!empty($nombre_completo)) {
                // Comando SQL para agregar cliente
                $sql = "INSERT INTO clientes (id, nombre_completo, graduacion, inadaptacion, enfermedades_oculares, id_empleado) 
                        VALUES (NULL, :nombre_completo, :graduacion, :inadaptacion, :enfermedades_oculares, :id_empleado)";
                $consulta = $conexionBD->prepare($sql);
                $consulta->bindParam(':nombre_completo', $nombre_completo);
                $consulta->bindParam(':graduacion', $graduacion);
                $consulta->bindParam(':inadaptacion', $inadaptacion);
                $consulta->bindParam(':enfermedades_oculares', $enfermedades_oculares);
                $consulta->bindParam(':id_empleado', $id_empleado);
                $consulta->execute();
                header("Location: " . $_SERVER['PHP_SELF']);
                exit();
            } else {
                echo "El nombre completo no puede estar vacío.";
            }
            break;

        case 'editar':
            if (!empty($id) && !empty($nombre_completo)) {
                // Comando SQL para editar cliente
                $sql = "UPDATE clientes SET nombre_completo=:nombre_completo, graduacion=:graduacion, 
                        inadaptacion=:inadaptacion, enfermedades_oculares=:enfermedades_oculares, id_empleado=:id_empleado WHERE id=:id";
                $consulta = $conexionBD->prepare($sql);
                $consulta->bindParam(':nombre_completo', $nombre_completo);
                $consulta->bindParam(':graduacion', $graduacion);
                $consulta->bindParam(':inadaptacion', $inadaptacion);
                $consulta->bindParam(':enfermedades_oculares', $enfermedades_oculares);
                $consulta->bindParam(':id_empleado', $id_empleado);
                $consulta->bindParam(':id', $id);
                $consulta->execute();
                header("Location: " . $_SERVER['PHP_SELF']);
                exit();
            } else {
                echo "El ID y el nombre completo no pueden estar vacíos.";
            }
            break;

        case 'borrar':
            if (!empty($id)) {
                // Comando SQL para eliminar cliente
                $sql = "DELETE FROM clientes WHERE id=:id";
                $consulta = $conexionBD->prepare($sql);
                $consulta->bindParam(':id', $id);
                $consulta->execute();
                header("Location: " . $_SERVER['PHP_SELF']);
                exit();
            } else {
                echo "El ID no puede estar vacío.";
            }
            break;

        case 'Seleccionar':
            // Comando SQL para seleccionar cliente por ID
            $sql = "SELECT * FROM clientes WHERE id=:id";
            $consulta = $conexionBD->prepare($sql);
            $consulta->bindParam(':id', $id);
            $consulta->execute();
            $cliente = $consulta->fetch(PDO::FETCH_ASSOC);

            // Asignar los valores a las variables
            if ($cliente) {
                $id = $cliente['id'];
                $nombre_completo = $cliente['nombre_completo'];
                $graduacion = $cliente['graduacion'];
                $inadaptacion = $cliente['inadaptacion'];
                $enfermedades_oculares = $cliente['enfermedades_oculares'];
                $id_empleado = $cliente['id_empleado'];
            }
            break;
    }
}

// Consulta para mostrar la lista de clientes
$consulta = $conexionBD->prepare("SELECT * FROM clientes");
$consulta->execute();
$listaClientes = $consulta->fetchAll(PDO::FETCH_ASSOC);
?>

