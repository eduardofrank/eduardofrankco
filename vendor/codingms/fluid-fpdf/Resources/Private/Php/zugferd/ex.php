<?php
require('zugferd.php');
define('FPDF_FONTPATH', '.');

$pdf = new PDF_ZUGFeRD();
$pdf->AddFont('DejaVuSansCondensed', '', 'DejaVuSansCondensed.php');
$pdf->SetFont('DejaVuSansCondensed', '', 16);
$pdf->AddPage();
$pdf->Write(10, 'This invoice is ZUGFeRD-compliant.');
$pdf->SetXmlFile('factur-x.xml');
$pdf->Output();
?>
