<?php
require_once('includes/fpdf/fpdf.php');
require_once('includes/fpdi/fpdi.php');

$pdf = new FPDI('L', 'pt');

$pdf->SetTopMargin(0);
$pdf->SetLeftMargin(0);
$pdf->SetRightMargin(0);
$pdf->SetAutoPageBreak(0);

// Copy the template from the source file
$pageCount = $pdf->setSourceFile('certificate.pdf');
$tplIdx = $pdf->importPage(1);

// Set the diemsion of the new PDF file
$pdf->addPage('L', [792, 612]);
$pdf->useTemplate($tplIdx);

// Set font
$pdf->AddFont('Roboto-Bold');
$pdf->SetFont('Roboto-Bold', '', 30);
// Set color
$pdf->SetTextColor(20, 20, 20);
// Move to 300 points from the top
$pdf->ln(300);
// Centered text
$pdf->Cell(0, 0, $name, 0, 1, 'C');

$pdf->Output('D', 'certificate.pdf');