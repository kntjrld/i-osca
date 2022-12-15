<?php
session_start();
ob_start();
require('fpdf.php');
require "../conn/connection.php"; //connection to database

//document creator
$creator =  $_SESSION['user_name'];
$position = $_SESSION['user_level'];

// POST 
$action1 = $_POST['action1'];
$action2 = $_POST['action2'];

// date
$min = $_POST['mindate'];
$max = $_POST['maxdate'];

// report title date name
$minstr = date('M. Y', strtotime($min));
$maxstr = date('M. Y', strtotime($max));

// get table name
$mindtf = date('MY', strtotime($min));
$maxdtf = date('MY', strtotime($max));
$tblname = 'tbl_'.$mindtf.$maxdtf;

// if min and max is null => retrieve current records
    if($min == '' && $max == ''){
        // retrieve all current records
        if($action1 == 'All'){
            if($action2 == 'active'){
                $sql = "SELECT * FROM tbl_records WHERE account_status = '$action2' ORDER BY fx_gender DESC, fx_lastname ASC";
                $sub = 'LIST OF ALL'.' '.strtoupper($action2).' '.'MEMBERS';
                $dtxt = 'DATE STARTED';
            }elseif($action2 == 'pending'){
                $sql = "SELECT * FROM tbl_records WHERE fn_status = '$action2' ORDER BY fx_gender DESC, fx_lastname ASC";
                $sub = 'LIST OF ALL MEMBERS WITHOUT PENSION';
            }elseif($action2 == 'received'){
                $sql = "SELECT * FROM tbl_records WHERE fn_status = '$action2' ORDER BY fx_gender DESC, fx_lastname ASC";
                $sub = 'LIST OF ALL MEMBERS WITH PENSION';
            }elseif($action2 == 'alive'){
                $sql = "SELECT * FROM tbl_records WHERE life_status = '$action2' ORDER BY fx_gender DESC, fx_lastname ASC";
                $sub = 'LIST OF ALL'.' '.strtoupper($action2).' '.' MEMBERS ';
                $dtxt = 'DATE STARTED';
            }elseif($action2 == 'inactive'){
                // inactive
                $sql = "SELECT * FROM tbl_records WHERE account_status = '$action2' ORDER BY fx_gender DESC, fx_lastname ASC";
                $sub = 'LIST OF ALL'.' '.strtoupper($action2).' '.'MEMBERS';
                $dtxt = 'DATE INACTIVE';
                // remove
            }elseif($action2 == 'removed'){
                $sql = "SELECT * FROM tbl_remove ORDER BY fx_gender DESC, fx_lastname ASC";
                $sub = 'LIST OF ALL'.' '.strtoupper($action2).' '.'MEMBERS';
                $dtxt = 'DATE REMOVED';
            }elseif($action2 == 'dead'){
                // dead
                $sql = "SELECT * FROM tbl_records WHERE life_status = '$action2' ORDER BY fx_gender DESC, fx_lastname ASC";
                $sub = 'LIST OF ALL'.' '.strtoupper($action2).' '.' MEMBERS ';
                $dtxt = 'DATE DEATH';
            }else{}
            // retrieve current records for each barangay
        }else{  
            if($action2 == 'active'){
                $sql = "SELECT * FROM tbl_records WHERE fx_barangay = '$action1' AND account_status = '$action2' ORDER BY fx_gender DESC, fx_lastname ASC";
                $sub = 'LIST OF'.' '.strtoupper($action2).' '.'MEMBERS'.' IN '.strtoupper($action1);
                $dtxt = 'DATE STARTED';
            }elseif($action2 == 'pending'){
                $sql = "SELECT * FROM tbl_records WHERE fx_barangay = '$action1' AND fn_status = '$action2' ORDER BY fx_gender DESC, fx_lastname ASC";
                $sub = 'LIST OF WITHOUT PENSION'.' IN '.strtoupper($action1);
            }elseif($action2 == 'received'){
                $sql = "SELECT * FROM tbl_records WHERE fx_barangay = '$action1' AND fn_status = '$action2' ORDER BY fx_gender DESC, fx_lastname ASC";
                $sub = 'LIST OF WITH PENSION'.' IN '.strtoupper($action1);
            }elseif($action2 == 'alive'){
                $sql = "SELECT * FROM tbl_records WHERE fx_barangay = '$action1' AND life_status = '$action2' ORDER BY fx_gender DESC, fx_lastname ASC";
                $sub = 'LIST OF'.' '.strtoupper($action2).' '.' IN '.strtoupper($action1);
                $dtxt = 'DATE STARTED';
            }elseif($action2 == 'inactive'){
                //inactive
                $sql = "SELECT * FROM tbl_records WHERE fx_barangay = '$action1' AND account_status = '$action2' ORDER BY fx_gender DESC, fx_lastname ASC";
                $sub = 'LIST OF'.' '.strtoupper($action2).' '.'MEMBERS'.' IN '.strtoupper($action1);
                $dtxt = 'DATE INACTIVE';
                // remove
            }elseif($action2 == 'removed'){
                $sql = "SELECT * FROM tbl_remove WHERE fx_barangay = '$action1' ORDER BY fx_gender DESC, fx_lastname ASC";
                $sub = 'LIST OF'.' '.strtoupper($action2).' '.'MEMBERS'.' IN '.strtoupper($action1);
                $dtxt = 'DATE REMOVED';
            }elseif($action2 == 'dead'){
                // dead
                $sql = "SELECT * FROM tbl_records WHERE fx_barangay = '$action1' AND life_status = '$action2' ORDER BY fx_gender DESC, fx_lastname ASC";
                $sub = 'LIST OF'.' '.strtoupper($action2).' '.' IN '.strtoupper($action1);
                $dtxt = 'DATE DEATH';
            }else{}
        }
// If min and max has a value 
    }elseif($action2 == 'removed' || $action2 == 'dead' || $action2 == 'inactive' || $action2 == 'active' && $min != '' && $max != '' ){
        //All records
        if($action1 == 'All'){
            if($action2 == 'inactive'){
                // inactive
                $sql = "SELECT * FROM tbl_records WHERE account_status = '$action2' AND fd_remarks BETWEEN '$min' AND '$max' ORDER BY fx_gender DESC, fx_lastname ASC";
                $sub = 'ALL'.' '.strtoupper($action2).' '.'MEMBERS FROM '.strtoupper($minstr).' To '.strtoupper($maxstr);
                $dtxt = 'DATE INACTIVE';
                // remove
            }elseif($action2 == 'removed'){
                $sql = "SELECT * FROM tbl_remove WHERE fd_remarks BETWEEN '$min' AND '$max' ORDER BY fx_gender DESC, fx_lastname ASC";
                $sub = 'LIST OF ALL'.' '.strtoupper($action2).' '.'MEMBERS FROM '.strtoupper($minstr).' To '.strtoupper($maxstr);
                $dtxt = 'DATE REMOVED';
            }elseif($action2 == 'dead'){
                // dead
                $sql = "SELECT * FROM tbl_records WHERE life_status = '$action2' AND fd_remarks BETWEEN '$min' AND '$max' ORDER BY fx_gender DESC, fx_lastname ASC";
                $sub = 'LIST OF ALL'.' '.strtoupper($action2).' '.' MEMBERS FROM '.strtoupper($minstr).' To '.strtoupper($maxstr);
                $dtxt = 'DATE DEATH';
            }else{
                // active with data range
                $sql = "SELECT * FROM tbl_records WHERE account_status = '$action2' AND fd_started BETWEEN '$min' AND '$max' ORDER BY fx_gender DESC, fx_lastname ASC";
                $sub = 'ALL '.' '.strtoupper($action2).' '.'MEMBERS REGISTERED FROM '.strtoupper($minstr).' To '.strtoupper($maxstr);
                $dtxt = 'DATE STARTED';
            }
        // per barangay
        }else{
            if($action2 == 'inactive'){
                //inactive
                $sql = "SELECT * FROM tbl_records WHERE fx_barangay = '$action1' AND account_status = '$action2' AND fd_remarks BETWEEN '$min' AND '$max' ORDER BY fx_gender DESC, fx_lastname ASC";
                $sub = 'LIST OF'.' '.strtoupper($action2).' '.'MEMBERS'.' IN '.strtoupper($action1).' FROM '.strtoupper($minstr).' To '.strtoupper($maxstr);
                $dtxt = 'DATE INACTIVE';
                // remove
            }elseif($action2 == 'removed'){ 
                $sql = "SELECT * FROM tbl_remove WHERE fx_barangay = '$action1' AND fd_remarks BETWEEN '$min' AND '$max' ORDER BY fx_gender DESC, fx_lastname ASC";
                $sub = 'LIST OF'.' '.strtoupper($action2).' '.'MEMBERS'.' IN '.strtoupper($action1).' FROM '.strtoupper($minstr).' To '.strtoupper($maxstr);
                $dtxt = 'DATE REMOVED';
            }elseif($action2 == 'dead'){
                // dead
                $sql = "SELECT * FROM tbl_records WHERE fx_barangay = '$action1' AND life_status = '$action2' AND fd_remarks BETWEEN '$min' AND '$max' ORDER BY fx_gender DESC, fx_lastname ASC";
                $sub = 'LIST OF'.' '.strtoupper($action2).' '.' IN '.strtoupper($action1).' FROM '.strtoupper($minstr).' To '.strtoupper($maxstr);
                $dtxt = 'DATE DEATH';
            }else{
                // active with data range
                $sql = "SELECT * FROM tbl_records  WHERE fx_barangay = '$action1'  AND account_status = '$action2' AND fd_started BETWEEN '$min' AND '$max' ORDER BY fx_gender DESC, fx_lastname ASC";
                $sub = strtoupper($action2).' '.' IN '.strtoupper($action1).' REGISTERED FROM '.strtoupper($minstr).' To '.strtoupper($maxstr);
                $dtxt = 'DATE STARTED';
            }
        }
    }else{
        $sql = "SHOW TABLES LIKE '$tblname'"; 
        $result = mysqli_query($conn, $sql);

        if($result->num_rows > 0){
            if($action1 == 'All'){
                if($action2 == 'active'){
                    $sql = "SELECT * FROM $tblname WHERE account_status = '$action2' ORDER BY fx_gender DESC, fx_lastname ASC";
                    $sub = 'LIST OF ALL'.' '.strtoupper($action2).' '.'MEMBERS FROM '.strtoupper($minstr).' To '.strtoupper($maxstr);
                }elseif($action2 == 'pending'){
                    $sql = "SELECT * FROM $tblname WHERE fn_status = '$action2' ORDER BY fx_gender DESC, fx_lastname ASC";
                    $sub = 'LIST OF ALL MEMBERS WITHOUT PENSION FROM '.strtoupper($minstr).' To '.strtoupper($maxstr);
                }elseif($action2 == 'received'){
                    $sql = "SELECT * FROM $tblname WHERE fn_status = '$action2' ORDER BY fx_gender DESC, fx_lastname ASC";
                    $sub = 'LIST OF ALL MEMBERS WITH PENSION FROM '.strtoupper($minstr).' To '.strtoupper($maxstr);
                }elseif($action2 == 'alive'){
                    $sql = "SELECT * FROM $tblname WHERE life_status = '$action2' ORDER BY fx_gender DESC, fx_lastname ASC";
                    $sub = 'LIST OF ALL'.' '.strtoupper($action2).' '.' MEMBERS FROM '.strtoupper($minstr).' To '.strtoupper($maxstr);
                }else{}
            }else{
                if($action2 == 'active'){
                    $sql = "SELECT * FROM $tblname WHERE fx_barangay = '$action1' AND account_status = '$action2' ORDER BY fx_gender DESC, fx_lastname ASC";
                    $sub = 'LIST OF'.' '.strtoupper($action2).' '.'MEMBERS'.' IN '.strtoupper($action1).' FROM '.strtoupper($minstr).' To '.strtoupper($maxstr);
                }elseif($action2 == 'pending'){
                    $sql = "SELECT * FROM $tblname WHERE fx_barangay = '$action1' AND fn_status = '$action2' ORDER BY fx_gender DESC, fx_lastname ASC";
                    $sub = 'LIST OF WITHOUT PENSION'.' IN '.strtoupper($action1).' FROM '.strtoupper($minstr).' To '.strtoupper($maxstr); 
                }elseif($action2 == 'received'){
                    $sql = "SELECT * FROM $tblname WHERE fx_barangay = '$action1' AND fn_status = '$action2' ORDER BY fx_gender DESC, fx_lastname ASC";
                    $sub = 'LIST OF WITH PENSION'.' IN '.strtoupper($action1).' FROM '.strtoupper($minstr).' To '.strtoupper($maxstr);
                }elseif($action2 == 'alive'){
                    $sql = "SELECT * FROM $tblname WHERE fx_barangay = '$action1' AND life_status = '$action2' ORDER BY fx_gender DESC, fx_lastname ASC";
                            $sub = 'LIST OF'.' '.strtoupper($action2).' '.' IN '.strtoupper($action1).' FROM '.strtoupper($minstr).' To '.strtoupper($maxstr);
                }else{}  
                }
        }else{
            echo 'TABLE NOT EXIST';
            $sub = 'NO DATA: INVALID DATE';
        }
        
    }      
    
class PDF extends FPDF{
   
    // $header = 'SENIOR CITIZEN PEDERATION, INC';

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
$pdf->SetFont('times','B',12);
$pdf->Cell(80);
$pdf->Cell(30,10,$sub,0,0,'C');
$pdf->Ln(15);

// document information
$pdf->SetTitle("i-OSCA reports");
$pdf->SetAuthor($creator.' '.$position);
$pdf->SetSubject("reports");
$pdf->SetCreator($creator.' '.$position);

if(($action2 == 'pending') || ($action2 == 'received')){

    if($sub == "NO DATA: INVALID DATE"){

        // error 
        $pdf->SetFont('times','B',10);
        
        //error bg
        $pdf->SetFillColor(255,255,255);
        $pdf->SetTextColor(255,0,0);
        //Error header column 
        $pdf->Cell(0,10,'Note: Important to give the correct date range if your are generating pending or received pension of previous records.',0,0,'C',true);
        $pdf->SetTextColor(255,255,255);
    }else{
        
        // TABLE
        $width_cell=array(15,25,25,8,25,12,20, 10, 16, 16, 18);
        // font 0 - 4
        $pdf->SetFont('times','B',10);

        //Background color of header//
        $pdf->SetFillColor(255,255,255);

        // Header starts /// 
        //First header column //
        $pdf->Cell($width_cell[0],10,'ID',1,0,'C',true);
        //Second header column//
        $pdf->Cell($width_cell[1],10,'LAST NAME',1,0,'C',true);
        //Third header column//
        $pdf->Cell($width_cell[2],10,'FIRST NAME',1,0,'C',true); 
        //Fourth header column//
        $pdf->Cell($width_cell[3],10,'M.I',1,0,'C',true);
        //Third header column//
        $pdf->Cell($width_cell[4],10,'CONTACT',1,0,'C',true); 
        // 5 
        $pdf->SetFont('times','B',7);
        $pdf->Cell($width_cell[5],10,'GENDER',1,0,'C',true);
        // 6
        $pdf->SetFont('times','B',10);
        $pdf->Cell($width_cell[6],10,'BIRTHDAY',1,0,'C',true); 
        // 7
        $pdf->Cell($width_cell[7],10,'AGE',1,0,'C',true); 
        // 8
        $pdf->Cell($width_cell[8],10,'AMOUNT',1,0,'C',true); 
        // 9
        $pdf->Cell($width_cell[9],10,'STATUS',1,0,'C',true); 
        // 10
        $pdf->SetFont('times','B',8);
        $pdf->Cell($width_cell[10],10,'BARANGAY',1,1,'C',true); 
        //// header ends ///////


        $pdf->SetFont('times','',10);
        //Background color of header//
        $pdf->SetFillColor(255,255,255); 

    /// each record is one row  ///
    foreach ($conn->query($sql) as $row) {
        // cut barangay
        $brgy = $row['fx_barangay'];
        if($brgy == 'San Luis (Ligang)'){
            $xx = 'Ligang';
        }else{
            $xx = $row['fx_barangay'];
        }

        $gender = $row['fx_gender'];
        if($gender == 'Male'){
            $xxx = 'M';
        }else{
            $xxx = 'F';
    }
    // M and F
        $id = $row['fx_id'];
        $length = strlen($id);
        if($length > 9){
            $pdf->SetFont('times','',6);
        }else{
            $pdf->SetFont('times','',10);
        }
    // Date format
    $pdf->Cell($width_cell[0],10,$row['fx_id'],1,0,'C');
    $pdf->SetFont('times','',10);
    $pdf->Cell($width_cell[1],10,$row['fx_lastname'],1,0,'C');
    $pdf->Cell($width_cell[2],10,$row['fx_firstname'],1,0,'C');
    $pdf->Cell($width_cell[3],10,$row['fx_middlename'],1,0,'C');
    $pdf->Cell($width_cell[4],10,$row['fx_contact'],1,0,'C');
    $pdf->Cell($width_cell[5],10,$xxx,1,0,'C');
    $pdf->Cell($width_cell[6],10,date('m-d-Y',strtotime($row['fd_birthdate'])),1,0,'C');
    $pdf->Cell($width_cell[7],10,$row['fn_age'],1,0,'C');
    $pdf->Cell($width_cell[8],10,$row['fn_pension'],1,0,'C');
    $pdf->Cell($width_cell[9],10,$row['fn_status'],1,0,'C');
    $pdf->Cell($width_cell[10],10,$xx,1,1,'C');   
}

// end table
    }
}elseif(($action2 == 'active') || ($action2 == 'alive')){
    // TABLE
    $width_cell=array(20,25,25,8,25,12,20, 10, 20, 20);
    // font 0 - 4
    $pdf->SetFont('times','B',10);
    
    //Background color of header//
    $pdf->SetFillColor(255,255,255);
    
    // Header starts /// 
    //First header column //
    $pdf->Cell($width_cell[0],10,'ID',1,0,'C',true);
    //Second header column//
    $pdf->Cell($width_cell[1],10,'LAST NAME',1,0,'C',true);
    //Third header column//
    $pdf->Cell($width_cell[2],10,'FIRST NAME',1,0,'C',true); 
    //Fourth header column//
    $pdf->Cell($width_cell[3],10,'M.I',1,0,'C',true);
    //Third header column//
    $pdf->Cell($width_cell[4],10,'CONTACT',1,0,'C',true); 
    // 5 
    $pdf->SetFont('times','B',7);
    $pdf->Cell($width_cell[5],10,'GENDER',1,0,'C',true);
    // 6
    $pdf->SetFont('times','B',10);
    $pdf->Cell($width_cell[6],10,'BIRTHDAY',1,0,'C',true); 
    // 7
    $pdf->Cell($width_cell[7],10,'AGE',1,0,'C',true); 
    // 8
    $pdf->SetFont('times','B',7);
    $pdf->Cell($width_cell[8],10,$dtxt,1,0,'C',true); 
    // 9
    $pdf->SetFont('times','B',10);
    $pdf->SetFont('times','B',8);
    $pdf->Cell($width_cell[9],10,'BARANGAY',1,1,'C',true); 
    //// header ends ///////
    
    
    $pdf->SetFont('times','',10);
    //Background color of header//
    $pdf->SetFillColor(255,255,255); 
    
    // each record is one row  ///
    foreach ($conn->query($sql) as $row) {
        // cut barangay
        $brgy = $row['fx_barangay'];
        if($brgy == 'San Luis (Ligang)'){
            $xx = 'Ligang';
        }else{
            $xx = $row['fx_barangay'];
        }
    
        $gender = $row['fx_gender'];
        if($gender == 'Male'){
            $xxx = 'M';
        }else{
            $xxx = 'F';
        }
        // M and F
        $id = $row['fx_id'];
        $length = strlen($id);
        if($length > 9){
            $pdf->SetFont('times','',6);
        }else{
            $pdf->SetFont('times','',10);
        }
        // Date format
        $pdf->Cell($width_cell[0],10,$row['fx_id'],1,0,'C');
        $pdf->SetFont('times','',10);
        $pdf->Cell($width_cell[1],10,$row['fx_lastname'],1,0,'C');
        $pdf->Cell($width_cell[2],10,$row['fx_firstname'],1,0,'C');
        $pdf->Cell($width_cell[3],10,$row['fx_middlename'],1,0,'C');
        $pdf->Cell($width_cell[4],10,$row['fx_contact'],1,0,'C');
        $pdf->Cell($width_cell[5],10,$xxx,1,0,'C');
        $pdf->Cell($width_cell[6],10,date('m-d-Y',strtotime($row['fd_birthdate'])),1,0,'C');
        $pdf->Cell($width_cell[7],10,$row['fn_age'],1,0,'C');
        $pdf->Cell($width_cell[8],10,$row['fd_started'],1,0,'C');
        $pdf->Cell($width_cell[9],10,$xx,1,1,'C');   
    }    // end table

    
}else{
    
// TABLE
$width_cell=array(15,25,25,8,25,12, 10, 18, 18, 35);
// font 0 - 4
$pdf->SetFont('times','B',10);

//Background color of header//
$pdf->SetFillColor(255,255,255);

// Header starts /// 
//First header column //
$pdf->Cell($width_cell[0],10,'ID',1,0,'C',true);
//Second header column//
$pdf->Cell($width_cell[1],10,'LAST NAME',1,0,'C',true);
//Third header column//
$pdf->Cell($width_cell[2],10,'FIRST NAME',1,0,'C',true); 
//Fourth header column//
$pdf->Cell($width_cell[3],10,'M.I',1,0,'C',true);
//Third header column//
$pdf->Cell($width_cell[4],10,'CONTACT',1,0,'C',true); 
// 5 
$pdf->SetFont('times','B',7);
$pdf->Cell($width_cell[5],10,'GENDER',1,0,'C',true);
// 7
$pdf->SetFont('times','B',10);
$pdf->Cell($width_cell[6],10,'AGE',1,0,'C',true); 
// 8
$pdf->SetFont('times','B',8);
$pdf->Cell($width_cell[7],10,'BARANGAY',1,0,'C',true);
// 9
$pdf->SetFont('times','B',6);
$pdf->Cell($width_cell[8],10,$dtxt,1,0,'C',true);
// 10 
$pdf->SetFont('times','B',10);
$pdf->Cell($width_cell[9],10,'REMARKS',1,1,'C',true);

//// header ends ///////


$pdf->SetFont('times','',10);
//Background color of header//
$pdf->SetFillColor(255,255,255); 

/// each record is one row  ///
foreach ($conn->query($sql) as $row) {
    // cut barangay
    $brgy = $row['fx_barangay'];
    if($brgy == 'San Luis (Ligang)'){
        $xx = 'Ligang';
    }else{
        $xx = $row['fx_barangay'];
    }

    $gender = $row['fx_gender'];
    if($gender == 'Male'){
        $xxx = 'M';
    }else{
        $xxx = 'F';
    }
    // M and F
    $id = $row['fx_id'];
    $length = strlen($id);
    if($length > 9){
        $pdf->SetFont('times','',6);
    }else{
        $pdf->SetFont('times','',10);
    }
    // Date format
    
$pdf->Cell($width_cell[0],10,$row['fx_id'],1,0,'C');
$pdf->SetFont('times','',10);
$pdf->Cell($width_cell[1],10,$row['fx_lastname'],1,0,'C');
$pdf->Cell($width_cell[2],10,$row['fx_firstname'],1,0,'C');
$pdf->Cell($width_cell[3],10,$row['fx_middlename'],1,0,'C');
$pdf->Cell($width_cell[4],10,$row['fx_contact'],1,0,'C');
$pdf->Cell($width_cell[5],10,$xxx,1,0,'C');
$pdf->Cell($width_cell[6],10,$row['fn_age'],1,0,'C');
$pdf->Cell($width_cell[7],10,$xx,1,0,'C');
$pdf->Cell($width_cell[8],10,date('m-d-Y',strtotime($row['fd_remarks'])),1,0,'C');
$pdf->Cell($width_cell[9],10,$row['fx_remarks'],1,1);
}
// end  table   
}


// // SIGN AREA
$name = $_SESSION['full_name'];
$street = $_SESSION['fx_street'];
if($_SESSION['user_level'] == 'staff'){
    $oscaposition = 'President';
    $chapter = $street.' Chapter';
}else{
    $oscaposition = '(OSCA) HEAD';
    $chapter = "OSCA Head, Mamburao";
}
// 1
$pdf->Ln(15);
$pdf->SetFont('times','',12);
$pdf->MultiCell(0,5,utf8_decode('Submitted by:'), 0);
$pdf->Ln(10);
// 2
$pdf->SetFont('times','BU',12);
$pdf->MultiCell(0,5,utf8_decode(strtoupper($name)), 0);
// 3
$pdf->SetFont('times','',12);
$pdf->MultiCell(0,5,utf8_decode($oscaposition . chr(10) . $chapter), 0);

/// end of records ///
ob_end_clean();
$pdf->Output('i-osca.pdf','I');
?>