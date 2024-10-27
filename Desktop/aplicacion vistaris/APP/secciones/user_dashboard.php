<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] != 'usuario') {
    header('Location: ../index.php');
    exit();
}
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel del usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand navbar-light bg-light">
    <div class="nav navbar-nav">
        <a class="nav-item nav-link" href="vista_inadaptaciones.php">Inadaptaciones</a>
        <a class="nav-item nav-link" href="cerrar.php">Cerrar sesión</a>
    </div>
</nav>
<div class="container mt-5">
    <h1>Bienvenido, Usuario</h1>
    <p>Desde aquí puedes gestionar tus inadaptaciones y hacer consultas.</p>
</div>
</body>
</html>
