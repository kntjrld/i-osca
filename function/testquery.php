<?php
include('conn/connection.php');
// admin dashboard colors and labels
$akeys = "'Male', 'Female'";
$acolors = "'#6D9886', '#393E46'";
// staff dasboard colors and lables
$keys = "'Male', 'Female', 'Alive', 'Dead' ";
$colors = " '#6D9886', '#393E46' , '#4b6043' , '#301934'";
// ALL BARANGAY TO ARRAY
$brgy = array("Barangay 1", "Barangay 2", "Barangay 3", "Barangay 4", "Barangay 5", "Barangay 6", "Barangay 7", "Barangay 8", "Balansay"
            ,"Fatima", "Payompon", "San Luis (Ligang)", "Talabaan", "Tangkalan", "Tayamaan");
        

// START TEST ARRAY
$female = array("10", "34", "41", "50", "10", "34", "41", "50", "31", "42", "40", "32", "31", "42", "40");
$male = array("12, 32, 32, 23, 53, 12, 25, 42, 34, 23, 34, 23, 23, 33, 55, 40");
// END TEST ARRAY
    
// GENERATE NEW(MALE) ARRAY FOR EACH BARANGAY
$malearr = array();
foreach($brgy as $row){
    $m_arr = "SELECT COUNT(*) as xxx FROM tbl_records WHERE fx_barangay = '$row' AND fx_gender = 'Male' ";
    $arr_m = mysqli_query($conn,$m_arr);
    $xx=mysqli_fetch_assoc($arr_m);
    $malearr[] = $xx['xxx'];
}

// GENERATE NEW(FEMALE) ARRAY FOR EACH BARANGAY
$femalearr = array();
foreach($brgy as $row){
    $f_arr = "SELECT COUNT(*) as xxx FROM tbl_records WHERE fx_barangay = '$row' AND fx_gender = 'Female' ";
    $arr_f = mysqli_query($conn,$f_arr);
    $xx=mysqli_fetch_assoc($arr_f);
    $femalearr[] = $xx['xxx'];
}

// QUERY DURATION xxx HOURS
// Test chart js query
$chartest = '';
$maletest = '';
$femaletest = '';

for ($i = 0; $i < count($brgy); $i++) {
    $chartest .= "$brgy[$i]";
}

// for each male 
for ($i = 0; $i < count($brgy); $i++) {
   $maletest .= "$malearr[$i]";
}
// Female
for ($i = 0; $i < count($brgy); $i++) {
    $femaletest .= "$femalearr[$i]";
 }

 
?>