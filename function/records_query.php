<?php
$brgy = array("Barangay 1", "Barangay 2", "Barangay 3", "Barangay 4", "Barangay 5", "Barangay 6", "Barangay 7", "Barangay 8", "Balansay"
,"Fatima", "Payompon", "San Luis (Ligang)", "Talabaan", "Tangkalan", "Tayamaan");

if($_SESSION['fx_street'] == $brgy[0]){
    $records = $conn->query("SELECT * FROM tbl_records WHERE fx_barangay = '$brgy[0]'");
}elseif($_SESSION['fx_street'] == $brgy[1]){
    $records = $conn->query("SELECT * FROM tbl_records WHERE fx_barangay = '$brgy[1]'");
}elseif($_SESSION['fx_street'] == $brgy[2]){
    $records = $conn->query("SELECT * FROM tbl_records WHERE fx_barangay = '$brgy[2]'");
}elseif($_SESSION['fx_street'] == $brgy[3]){
    $records = $conn->query("SELECT * FROM tbl_records WHERE fx_barangay = '$brgy[3]'");
}elseif($_SESSION['fx_street'] == $brgy[4]){
    $records = $conn->query("SELECT * FROM tbl_records WHERE fx_barangay = '$brgy[4]'");
}elseif($_SESSION['fx_street'] == $brgy[5]){
    $records = $conn->query("SELECT * FROM tbl_records WHERE fx_barangay = '$brgy[5]'");
}elseif($_SESSION['fx_street'] == $brgy[6]){
    $records = $conn->query("SELECT * FROM tbl_records WHERE fx_barangay = '$brgy[6]'");
}elseif($_SESSION['fx_street'] == $brgy[7]){
    $records = $conn->query("SELECT * FROM tbl_records WHERE fx_barangay = '$brgy[7]'");
}elseif($_SESSION['fx_street'] == $brgy[8]){
    $records = $conn->query("SELECT * FROM tbl_records WHERE fx_barangay = '$brgy[8]'");
}elseif($_SESSION['fx_street'] == $brgy[9]){
    $records = $conn->query("SELECT * FROM tbl_records WHERE fx_barangay = '$brgy[9]'");
}elseif($_SESSION['fx_street'] == $brgy[10]){
    $records = $conn->query("SELECT * FROM tbl_records WHERE fx_barangay = '$brgy[10]'");
}elseif($_SESSION['fx_street'] == $brgy[11]){
    $records = $conn->query("SELECT * FROM tbl_records WHERE fx_barangay = '$brgy[11]'");
}elseif($_SESSION['fx_street'] == $brgy[12]){
    $records = $conn->query("SELECT * FROM tbl_records WHERE fx_barangay = '$brgy[12]'");
}elseif($_SESSION['fx_street'] == $brgy[13]){
    $records = $conn->query("SELECT * FROM tbl_records WHERE fx_barangay = '$brgy[13]'");
}elseif($_SESSION['fx_street'] == $brgy[14]){
    $records = $conn->query("SELECT * FROM tbl_records WHERE fx_barangay = '$brgy[14]'");
}else{
$records = $conn->query("SELECT * FROM tbl_records");
}

function dt_format($date){
    $formatter = strtotime($date);
    return $format_date = date('m/d/Y', $formatter);
}

?>