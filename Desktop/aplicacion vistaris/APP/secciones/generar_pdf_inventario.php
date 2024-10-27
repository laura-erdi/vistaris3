<?php
// Habilitar visualización de errores
error_reporting(E_ALL);
ini_set('display_errors', 1);

require('../librerias/fpdf/fpdf.php'); // Asegúrate de que la ruta sea correcta
include('../configuraciones/bd.php');

// Crear instancia de la conexión
$conexionBD = BD::crearInstancia();

// Consulta para obtener los datos del inventario
$consulta = $conexionBD->prepare("SELECT * FROM inventario");
$consulta->execute();
$listaInventario = $consulta->fetchAll(PDO::FETCH_ASSOC);

// Desactiva la salida de cabecera de cualquier otro archivo
ob_clean(); // Limpia el buffer de salida previa si existe

// Crear una nueva instancia de FPDF
$pdf = new FPDF();
$pdf->AddPage();

// Configuración del título
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(190, 10, 'Inventario', 0, 1, 'C');

// Espaciado
$pdf->Ln(10);

// Configuración del encabezado de la tabla
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(40, 10, 'Referencia', 1, 0, 'C');
$pdf->Cell(40, 10, 'Marca', 1, 0, 'C');
$pdf->Cell(30, 10, 'Tipo', 1, 0, 'C');
$pdf->Cell(30, 10, 'Unidades', 1, 0, 'C');
$pdf->Cell(30, 10, 'Precio', 1, 1, 'C');

// Imprimir los datos del inventario en el PDF
$pdf->SetFont('Arial', '', 12);
foreach ($listaInventario as $producto) {
    $pdf->Cell(40, 10, $producto['Referencia'], 1, 0, 'C');
    $pdf->Cell(40, 10, $producto['Marca'], 1, 0, 'C');
    $pdf->Cell(30, 10, $producto['Tipo'], 1, 0, 'C');
    $pdf->Cell(30, 10, $producto['Unidades'], 1, 0, 'C');
    $pdf->Cell(30, 10, $producto['Precio'], 1, 1, 'C');
}

// Generar y descargar el PDF
$pdf->Output('I', 'inventario_optica.pdf');
exit(); // Asegúrate de salir después de generar el PDF
