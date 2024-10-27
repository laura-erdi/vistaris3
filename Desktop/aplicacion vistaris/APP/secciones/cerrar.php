<?php
session_start();
session_destroy(); // Destruye la sesión
header('Location: ../index.php'); // Corrige la ruta al archivo de redirección
exit(); 
?>
