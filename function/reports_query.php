<?php
$brgy = array("Barangay 1", "Barangay 2", "Barangay 3", "Barangay 4", "Barangay 5", "Barangay 6", "Barangay 7", "Barangay 8", "Balansay"
,"Fatima", "Payompon", "San Luis (Ligang)", "Talabaan", "Tangkalan", "Tayamaan");

if($_SESSION['fx_street'] == $brgy[0]){
    $records = $conn->query("SELECT * FROM tbl_register WHERE fx_barangay = '$brgy[0]'");
    $header = 'You are viewing a list of online application from Barangay 1';
}elseif($_SESSION['fx_street'] == $brgy[1]){
    $records = $conn->query("SELECT * FROM tbl_register WHERE fx_barangay = '$brgy[1]'");
    $header = 'You are viewing a list of online application from Barangay 2';
}elseif($_SESSION['fx_street'] == $brgy[2]){
    $records = $conn->query("SELECT * FROM tbl_register WHERE fx_barangay = '$brgy[2]'");
    $header = 'You are viewing a list of online application from Barangay 3';
}elseif($_SESSION['fx_street'] == $brgy[3]){
    $records = $conn->query("SELECT * FROM tbl_register WHERE fx_barangay = '$brgy[3]'");
    $header = 'You are viewing a list of online application from Barangay 4';
}elseif($_SESSION['fx_street'] == $brgy[4]){
    $records = $conn->query("SELECT * FROM tbl_register WHERE fx_barangay = '$brgy[4]'");
    $header = 'You are viewing a list of online application from Barangay 5';
}elseif($_SESSION['fx_street'] == $brgy[5]){
    $records = $conn->query("SELECT * FROM tbl_register WHERE fx_barangay = '$brgy[5]'");
    $header = 'You are viewing a list of online application from Barangay 6';
}elseif($_SESSION['fx_street'] == $brgy[6]){
    $records = $conn->query("SELECT * FROM tbl_register WHERE fx_barangay = '$brgy[6]'");
    $header = 'You are viewing a list of online application from Barangay 7';
}elseif($_SESSION['fx_street'] == $brgy[7]){
    $records = $conn->query("SELECT * FROM tbl_register WHERE fx_barangay = '$brgy[7]'");
    $header = 'You are viewing a list of online application from Barangay 8';
}elseif($_SESSION['fx_street'] == $brgy[8]){
    $records = $conn->query("SELECT * FROM tbl_register WHERE fx_barangay = '$brgy[8]'");
    $header = 'You are viewing a list of online application from Balansay';
}elseif($_SESSION['fx_street'] == $brgy[9]){
    $records = $conn->query("SELECT * FROM tbl_register WHERE fx_barangay = '$brgy[9]'");
    $header = 'You are viewing a list of online application from Fatima';
}elseif($_SESSION['fx_street'] == $brgy[10]){
    $records = $conn->query("SELECT * FROM tbl_register WHERE fx_barangay = '$brgy[10]'");
    $header = 'You are viewing a list of online application from Payompon';
}elseif($_SESSION['fx_street'] == $brgy[11]){
    $records = $conn->query("SELECT * FROM tbl_register WHERE fx_barangay = '$brgy[11]'");
    $header = 'You are viewing a list of online application from San Luis (Ligang)';
}elseif($_SESSION['fx_street'] == $brgy[12]){
    $records = $conn->query("SELECT * FROM tbl_register WHERE fx_barangay = '$brgy[12]'");
    $header = 'You are viewing a list of online application from Talabaan';
}elseif($_SESSION['fx_street'] == $brgy[13]){
    $records = $conn->query("SELECT * FROM tbl_register WHERE fx_barangay = '$brgy[13]'");
    $header = 'You are viewing a list of online application from Tangkalan';
}elseif($_SESSION['fx_street'] == $brgy[14]){
    $records = $conn->query("SELECT * FROM tbl_register WHERE fx_barangay = '$brgy[14]'");
    $header = 'You are viewing a list of online application from Tayamaan';
}else{
$records = $conn->query("SELECT * FROM tbl_regstatus WHERE fx_statusbycluster = 'accepted' AND fx_statusbyadmin = 'Under review'");
$header = 'You are viewing a list of online application that accepted by each cluster president';
}


?>