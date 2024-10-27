<?php
include('../configuraciones/bd.php');


$conexionBD = BD::crearInstancia();
ini_set('display_errors', 1);

// Consulta para obtener los datos del inventario
$consulta = $conexionBD->prepare("SELECT * FROM inventario");
$consulta->execute();
$listaInventario = $consulta->fetchAll(PDO::FETCH_ASSOC);
?>
<?php include('../templates/menu_lateral.php'); ?>
<div class="main-container p-5">
    <div class="container text-center">
        <h1 class="display-3">Inventario de la Óptica</h1>
        <hr class="my-4">

        <!-- Botones de acción para actualizar e imprimir PDF -->
        <div class="button-group d-flex justify-content-center mb-4">
            <form method="post" class="me-2">
                <button type="submit" name="accion" value="actualizar" class="btn btn-success">Actualizar Inventario</button>
            </form>
            <form action="generar_pdf_inventario.php" method="post">
                <button type="submit" class="btn btn-secondary">Generar PDF del Inventario</button>
            </form>
        </div>

        <!-- Tabla para mostrar el inventario -->
        <div class="table-responsive card-style">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Referencia</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Unidades</th>
                        <th scope="col">Precio</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($listaInventario as $producto): ?>
                    <tr>
                        <td><?php echo $producto['Referencia']; ?></td>
                        <td><?php echo $producto['Marca']; ?></td>
                        <td><?php echo $producto['Tipo']; ?></td>
                        <td><?php echo $producto['Unidades']; ?></td>
                        <td><?php echo $producto['Precio']; ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Estilos CSS para la estética del inventario -->
<style>
    body {
        background-color: #fbf6ef;
        font-family: 'Arial', sans-serif;
        color: #4a3f35;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
    .main-container h1 {
        font-size: 2.8rem;
        color: #4a3f35;
        font-weight: 600;
        margin-top: 20px;
    }
    .main-container hr {
        border-top: 1px solid #d3b49c;
        width: 60%;
        margin: 25px auto;
    }
    .card-style {
        background: #f7ede3;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    }
    .button-group .btn {
        flex: 1;
        font-size: 1rem;
        padding: 10px 20px;
        border-radius: 10px;
        font-weight: 600;
        transition: background-color 0.3s ease;
    }
    .btn-success:hover {
        background-color: #57b457;
    }
    .btn-secondary:hover {
        background-color: #6b6b6b;
    }
    .table thead th {
        background-color: #d3b49c;
        color: #ffffff;
        padding: 15px;
        font-size: 1.1rem;
    }
    .table tbody td {
        padding: 12px;
        font-size: 1rem;
        color: #4a3f35;
    }
    .table tbody tr {
        transition: background-color 0.2s ease;
    }
    .table tbody tr:hover {
        background-color: #f5e6d9;
    }
    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f9f2e8;
    }
</style>
