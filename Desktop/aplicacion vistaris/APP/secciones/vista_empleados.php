<?php include('../secciones/empleados.php'); ?>
<?php include('../templates/menu_lateral.php'); ?>

<div class="main-container p-5">
    <div class="container text-center">
        <h1 class="display-3">Gestión de Empleados</h1>
        <hr class="my-4">

        <div class="row">
            <!-- Columna para el formulario de empleados -->
            <div class="col-md-5">
                <form action="" method="post" class="card-style form-container">
                    <div class="card-header">Agregar / Editar Empleado</div>
                    <div class="card-body">
                        <div class="mb-4">
                            <label for="id_empleado" class="form-label">ID</label>
                            <input type="text" class="form-control" name="id" id="id" value="<?php echo $id; ?>" placeholder="ID" readonly />
                        </div>
                        <div class="mb-4">
                            <label for="nombre_empleado" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre_empleado" id="nombre_empleado" value="<?php echo $nombre_empleado; ?>" placeholder="Nombre completo" />
                        </div>
                        <div class="mb-4">
                            <label for="tipo_empleado" class="form-label">Tipo de Empleado</label>
                            <select class="form-select" name="tipo_empleado" id="tipo_empleado">
                                <option value="Encargado Óptico" <?php echo ($tipo_empleado == 'Encargado Óptico') ? 'selected' : ''; ?>>Encargado Óptico</option>
                                <option value="Empleado Óptico" <?php echo ($tipo_empleado == 'Empleado Óptico') ? 'selected' : ''; ?>>Empleado Óptico</option>
                            </select>
                        </div>

                        <!-- Botones separados con espacio adicional y estilo uniforme -->
                        <div class="button-group mt-4 w-100" role="group">
                            <button type="submit" name="accion" value="agregar" class="btn btn-success">Agregar</button>
                            <button type="submit" name="accion" value="editar" class="btn btn-warning">Editar</button>
                            <button type="submit" name="accion" value="borrar" class="btn btn-danger">Borrar</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Columna para la tabla de empleados -->
            <div class="col-md-7">
                <div class="table-responsive card-style">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Tipo de Empleado</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($listaEmpleados)) { ?>
                                <?php foreach($listaEmpleados as $empleado){ ?>
                                    <tr>
                                        <td><?php echo $empleado['id']; ?></td>
                                        <td><?php echo $empleado['nombre_empleado']; ?></td>
                                        <td><?php echo $empleado['tipo_empleado']; ?></td>
                                        <td>
                                            <form action="" method="post">
                                                <input type="hidden" name="id" value="<?php echo $empleado['id']; ?>">
                                                <button type="submit" name="accion" value="Seleccionar" class="btn btn-info">Seleccionar</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } else { ?>
                                <tr>
                                    <td colspan="4">No se encontraron empleados.</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Estilos CSS para mejorar la estética del formulario y la tabla -->
<style>
    body {
        background-color: #fbf6ef; /* Fondo beige claro */
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
    .form-container .card-header {
        font-size: 1.5rem;
        font-weight: 500;
        background-color: #d3b49c;
        color: #ffffff;
        padding: 15px;
        border-radius: 15px 15px 0 0;
        margin-bottom: 20px;
    }
    .form-container .card-body {
        padding: 20px;
    }
    .form-label {
        font-size: 1.1rem;
        font-weight: 500;
        color: #4a3f35;
    }
    .form-control, .form-select {
        border-radius: 10px;
        font-size: 1rem;
        padding: 10px 15px;
        margin-top: 5px;
        box-shadow: none;
        border: 1px solid #d3b49c;
    }
    .form-control:focus, .form-select:focus {
        border-color: #b88a6d;
        box-shadow: 0 0 5px rgba(184, 138, 109, 0.3);
    }
    .button-group {
        display: flex;
        justify-content: space-between;
        gap: 10px; /* Espacio entre los botones */
        margin-top: 30px; /* Espacio adicional arriba */
    }
    .button-group .btn {
        flex: 1;
        font-size: 1rem;
        padding: 10px 15px;
        border-radius: 10px;
        font-weight: 600;
        transition: background-color 0.3s;
    }
    .btn-success:hover {
        background-color: #57b457;
    }
    .btn-warning:hover {
        background-color: #e0a800;
    }
    .btn-danger:hover {
        background-color: #c9302c;
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
