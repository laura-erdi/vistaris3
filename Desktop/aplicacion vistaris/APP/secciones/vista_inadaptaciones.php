

<?php include('../secciones/inadaptaciones.php'); ?>
<?php include('../templates/menu_lateral.php'); ?>

<div class="main-container p-5">
    <div class="container text-center">
        <h1 class="display-3">Gestión de Inadaptaciones</h1>
        <hr class="my-4">

        <div class="row">
            <!-- Columna para la tabla de inadaptaciones -->
            <div class="col-md-12">
                <div class="table-responsive card-style">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Cliente</th>
                                <th scope="col">Óptico atendido</th>
                                <th scope="col">Fecha recogida de la gafa</th>
                                <th scope="col">Tipo de lente</th>
                                <th scope="col">¿Es su primera gafa?</th>
                                <th scope="col">Síntomas</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($listaInadaptaciones)) { ?>
                                <?php foreach ($listaInadaptaciones as $inadaptacion) { ?>
                                    <tr>
                                        <td><?php echo $inadaptacion['id']; ?></td>
                                        <td><?php echo $inadaptacion['cliente']; ?></td>
                                        <td><?php echo $inadaptacion['optico_atendido']; ?></td>
                                        <td><?php echo $inadaptacion['fecha_recogida']; ?></td>
                                        <td><?php echo $inadaptacion['tipo_lente']; ?></td>
                                        <td><?php echo $inadaptacion['primera_gafa']; ?></td>
                                        <td><?php echo $inadaptacion['sintomas']; ?></td>
                                        <td>
                                            <form action="" method="post">
                                                <input type="hidden" name="id" value="<?php echo $inadaptacion['id']; ?>" />
                                                <button type="submit" name="accion" value="Seleccionar" class="btn btn-info">Seleccionar</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } else { ?>
                                <tr>
                                    <td colspan="8">No se encontraron registros.</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Estilos CSS para mejorar la estética de la tabla de inadaptaciones -->
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
        transition: box-shadow 0.3s ease, transform 0.3s ease;
    }
    .card-style:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
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
