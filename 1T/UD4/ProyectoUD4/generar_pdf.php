<?php
require('fpdf/fpdf.php');

// Conexión a la base de datos
$mysqli = new mysqli("localhost", "root", "", "dwes");
if ($mysqli->connect_error) {
    die("Error en la conexión: " . $mysqli->connect_error);
}
$mysqli->set_charset("utf8");

// Crear el PDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 10, 'Listado de Productos', 0, 1, 'C');
$pdf->Ln(5);

// Encabezados
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(20, 10, 'ID', 1, 0, 'C');
$pdf->Cell(70, 10, 'Nombre', 1, 0, 'C');
$pdf->Cell(30, 10, 'Precio', 1, 0, 'C');
$pdf->Cell(30, 10, 'Cantidad', 1, 1, 'C');

// Datos
$query = "SELECT id, nombre, precio, cantidad FROM productos";
$resultado = $mysqli->query($query);

if ($resultado && $resultado->num_rows > 0) {
    $pdf->SetFont('Arial', '', 12);
    while ($fila = $resultado->fetch_assoc()) {
        $pdf->Cell(20, 10, $fila['id'], 1, 0, 'C');
        $pdf->Cell(70, 10, utf8_decode($fila['nombre']), 1, 0, 'L');
        $pdf->Cell(30, 10, utf8_decode(number_format($fila['precio'], 2) . ' €'), 1, 0, 'R');
        $pdf->Cell(30, 10, $fila['cantidad'], 1, 1, 'C');
    }
}

$mysqli->close();

// Encabezados HTTP para forzar la descarga
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="productos.pdf"');
header('Cache-Control: private, max-age=0, must-revalidate');
header('Pragma: public');

// Salida del PDF
$pdf->Output('F', 'php://output');
