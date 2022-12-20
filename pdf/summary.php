<?php
session_start();
ob_start();
require "../conn/connection.php"; //connection to database
require('fpdf.php');

// if(isset($_POST["uid"])) {

    $uid = $_POST["uid"];
    // $uid = 'iOSCA-22-00013';
    
    //document creator
    $creator =  $_SESSION['user_name'];
    $position = $_SESSION['user_level'];

    $sql = "SELECT * FROM tbl_summary WHERE uid = '$uid'";
    $result = mysqli_query($conn, $sql);
    
    // Report title
    $request = mysqli_query($conn, "SELECT fx_barangay, fx_firstname, fx_lastname, fx_middlename FROM tbl_records WHERE uid = '$uid'");
    
    class PDF extends FPDF{

        // Page header
        function Header(){
            // Logo
            $this->Image('../media/logo.png',10,6,24);
            // Arial bold 12
            $this->SetFont('times','B',12);
            // Move to the right
            $this->Cell(80);
            // Title
            $this->Cell(30,10,'OFFICE OF THE SENIOR CITIZEN AFFAIRS',0,0,'C');
            $this->Ln(5);
            $this->SetFont('times','',12);
            $this->Cell(80);
            $this->Cell(30,10,'MUNICIPALITY OF MAMBURAO',0,0,'C');
            // Line break
            $this->Ln(20);
        }
    
        // Page footer
        function Footer()
        {
            // Position at 1.5 cm from bottom
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','I',8);
            // Page number
            $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
        }
    }
    // Instanciation of inherited class
    $pdf = new PDF('P', 'mm', 'A4');
    $pdf->AliasNbPages();
    $pdf->AddPage();
    // Sub header
    while($row = mysqli_fetch_array($request)){
        $pdf->MultiCell(0,10,utf8_decode('Name:'.' '.$row['fx_firstname'].', '.$row['fx_lastname'].' , '.$row['fx_middlename'].'.'. chr(10) . 'Barangay:'.' '.$row['fx_barangay']), 0);
    }
    $pdf->Ln(5);
    
    // document information
    $pdf->SetTitle("Pension summary");
    $pdf->SetAuthor($creator.' '.$position);
    $pdf->SetSubject("reports");
    $pdf->SetCreator($creator.' '.$position);
    
    // TABLE
    $width_cell=array(100,90);
    // font 0 - 4
    $pdf->SetFont('times','B',12);
    
    //Background color of header//
    $pdf->SetFillColor(255,255,255);
    // 1
    $pdf->Cell($width_cell[0],10,'DATE',1,0,'C',true); 
    // 2
    $pdf->Cell($width_cell[1],10,'STATUS',1,1,'C',true);
    
    //// header ends ///////
    
    $pdf->SetFont('times','',12);
    //Background color of header//
    $pdf->SetFillColor(255,255,255); 
    
    /// each record is one row  ///
    foreach ($conn->query($sql) as $row) {
    $pdf->Cell($width_cell[0],10,$row['fd_prange'],1,0,'C');
    $pdf->Cell($width_cell[1],10,$row['fx_pstatus'],1,1,'C');
    }    
    /// end of records ///
    ob_end_clean();
    $pdf->Output('PensionSummary.pdf','I');

// }
?>