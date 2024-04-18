
<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
require('fpdf/fpdf.php');

// Create a new PDF instance
$ReNames = ["test1 nme1", "test2 name2", "test3 name3","Test4 Name4","test5 name5"];
$pdf = new FPDF('L','mm','A4');

foreach ($ReNames as $resName) {
    $pdf->AddPage();
    $pdf->Image('cerimg.png',0,0,297,210);
    // Line break
    $pdf->Ln(50);
    // Set font
    $pdf->SetFont('Arial', 'B', 46);

    // Certificate title
    $pdf->Cell(0, 15, 'Certificate of Achievement', 0, 1, 'C');
    $pdf->Ln(20);

    // Recipient name
    $pdf->SetFont('Arial', '', 20);
    $pdf->Cell(0, 10, 'This certificate is awarded to:', 0, 1, 'C');
    $pdf->SetFont('Arial', 'B', 18);
    $pdf->Cell(0, 10, $resName , 0, 1, 'C');

    // Certificate message
    $pdf->SetFont('Arial', '', 16);
    $pdf->Ln(10);
    $pdf->MultiCell(0, 10, 'In recognition of your outstanding achievement. Brabra', 0, 'C');
    }
    // Output the PDF
    $pdf->Output();
?>