<div class="sidebar">
    <a href="/secciones/vista_clientes.php">
        <i class="bi bi-people-fill"></i>
        <span>Clientes</span>
    </a>
    <a href="/secciones/inadaptaciones.php">
        <i class="bi bi-eye-fill"></i>
        <span>Inadaptaciones</span>
    </a>
    <a href="../secciones/empleados.php">
        <i class="bi bi-person-fill"></i>
        <span>Empleados</span>
    </a>
    <a href="/secciones/inventario.php">
        <i class="bi bi-box-seam"></i>
        <span>Inventario</span>
    </a>
</div>


<style>
    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        height: 100vh;
        width: 60px;
        background-color: #4a3f35;
        transition: width 0.3s ease;
        overflow: hidden;
        z-index: 1000;
    }
    .sidebar:hover {
        width: 200px;
    }
    .sidebar a {
        display: flex;
        align-items: center;
        padding: 15px;
        color: #ffffff;
        text-decoration: none;
        font-size: 1.1rem;
        transition: background-color 0.2s ease, color 0.2s ease;
    }
    .sidebar a i {
        margin-right: 15px;
        font-size: 1.3rem;
    }
    .sidebar a:hover {
        background-color: #6b564b;
    }
    .sidebar a span {
        opacity: 0;
        transition: opacity 0.2s ease;
    }
    .sidebar:hover a span {
        opacity: 1;
    }
</style>
