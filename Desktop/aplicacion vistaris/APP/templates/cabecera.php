<?php
session_start(); 


if (!isset($_SESSION['usuario'])) {
    header('Location: ../login.php'); 
    exit();
}
?>



<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>
    <body>
    <nav class="navbar navbar-expand navbar-light bg-light">
                    <div class="nav navbar-nav">
                        <a class="nav-item nav-link active" href="index.php">Inicio</a>
                        <a class="nav-item nav-link" href="vista_empleados.php">Empleados</a>
                        <a class="nav-item nav-link" href="vista_inadaptaciones.php">Inadaptaciones</a>
                        <a class="nav-item nav-link" href="vista_inventario.php">Inventario</a>
                        <a class="nav-item nav-link" href="vista_clientes.php">Clientes</a>
                        <a class="nav-item nav-link" href="cerrar.php">Cerrar sesión</a>
                    </div>
                </nav>
    <div class="container" >
        <div class="row">
            <div class="col-12">
                <div class="row">

 
    
