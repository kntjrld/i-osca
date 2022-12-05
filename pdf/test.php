<?php
require('fpdf.php');  
$username = 'asdasd';
$password = 'adasdas';
$adname = 'adsad';
  
ob_start();
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetTextColor(255,0,0); 
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text (10, 8,  'Please change your password including your personal information after you login using this credentials', 10, 10); 
$pdf->SetTextColor(0,0,0); 
$pdf->SetFont('Arial', 'B', 12);
$pdf->MultiCell(0,0,utf8_decode(''), 1);
$pdf->MultiCell(0,10,utf8_decode('Username:'.' '.$username . chr(10) . 'Password:'.' '.$password), 1);
$fileName = $adname.'_'.date('D-d-m-Y').'.pdf';
// return the generated output
$pdf->Output();

?>