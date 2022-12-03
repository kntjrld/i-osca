<?php
// ALL BARANGAY TO ARRAY
$brgy = array("Barangay 1", "Barangay 2", "Barangay 3", "Barangay 4", "Barangay 5", "Barangay 6", "Barangay 7", "Barangay 8", "Balansay"
            ,"Fatima", "Payompon", "San Luis (Ligang)", "Talabaan", "Tangkalan", "Tayamaan");

// SESSIONS
$clusterbarangay = $_SESSION['fx_street'];
$ulevel = $_SESSION['user_level'];


// START TEST ARRAY
$female = array("10", "34", "41", "50", "10", "34", "41", "50", "31", "42", "40", "32", "31", "42", "40");
$male = array("12, 32, 32, 23, 53, 12, 25, 42, 34, 23, 34, 23, 23, 33, 55, 40");
// END TEST ARRAY

$chart_data = '';
    
// GENERATE NEW(MALE) ARRAY FOR EACH BARANGAY
$malearr = array();
foreach($brgy as $row){
    $m_arr = "SELECT COUNT(*) as xxx FROM tbl_records WHERE fx_barangay = '$row' AND fx_gender = 'Male'";
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
// GENERATE TOTAL OF MALE AND FEMALE FOR EACH BARANGAY INTO AN ARRAY!
$mftotal = array();
foreach($brgy as $row){
    $f_arr = "SELECT COUNT(*) as xxx FROM tbl_records WHERE fx_barangay = '$row'";
    $arr_f = mysqli_query($conn,$f_arr);
    $xx=mysqli_fetch_assoc($arr_f);
    $mftotal[] = $xx['xxx'];
}
//FILTER AGE 
$whereage = array("60 AND 65", "66 AND 70", "71 AND 1000");
$labelages = array("60 and 65", "66 and 70", "71 and Above");

// FILTER AGE FOR MALE
$Malearray = array();
    for ($i = 0; $i < count($whereage); $i++) {
    $request = "SELECT COUNT(*) as cnt FROM tbl_records WHERE fx_barangay = '$clusterbarangay' AND fx_gender = 'Male' AND fn_age BETWEEN $whereage[$i]";
    $result1 = mysqli_query($conn,$request);
    $result2=mysqli_fetch_assoc($result1);
    $Malearray[] = $result2['cnt'];
}
// FILTER AGE FOR FEMALE
$Femalearray = array();
    for ($i = 0; $i < count($whereage); $i++) {
    $request = "SELECT COUNT(*) as cnt FROM tbl_records WHERE fx_barangay = '$clusterbarangay' AND fx_gender = 'Female' AND fn_age BETWEEN $whereage[$i]";
    $result1 = mysqli_query($conn,$request);
    $result2=mysqli_fetch_assoc($result1);
    $Femalearray[] = $result2['cnt'];
}

// Array(life) ARRAY
$life = array("alive", "dead");

// COUNT DEAD
$Deadarray = array();
    for ($i = 0; $i < count($whereage); $i++) {
    $request = "SELECT COUNT(*) as cnt FROM tbl_records WHERE fx_barangay = '$clusterbarangay' AND life_status = '$life[1]' AND fn_age BETWEEN $whereage[$i]";
    $result = mysqli_query($conn,$request);
    $result2=mysqli_fetch_assoc($result);
    $Deadarray[] = $result2['cnt'];
}

// COUNT ALIVE
$Alivearray = array();
    for ($i = 0; $i < count($whereage); $i++) {
    $request = "SELECT COUNT(*) as cnt FROM tbl_records WHERE fx_barangay = '$clusterbarangay' AND life_status = '$life[0]' AND fn_age BETWEEN $whereage[$i]";
    $result = mysqli_query($conn,$request);
    $result2=mysqli_fetch_assoc($result);
    $Alivearray[] = $result2['cnt'];
}


// Highest record as max 
$m = max($Malearray);
$f = max($Femalearray);
$mfmax = $m + $f;
// COUNT STATUS PER BARANGAY
if($ulevel == 'staff'){
    // EACH DASHBOARD
    // SELECT TO RECORDS
    $sql="SELECT COUNT(*) as total from tbl_records WHERE fx_barangay = '$clusterbarangay' AND account_status = 'active'";
    $result=mysqli_query($conn,$sql);
    $total=mysqli_fetch_assoc($result);
    // filter with
    $sql="SELECT COUNT(*) as total from tbl_records WHERE fn_status = 'Received' AND fx_barangay = '$clusterbarangay' AND account_status = 'active'";
    $result=mysqli_query($conn,$sql);
    $withp=mysqli_fetch_assoc($result);
    // filter without
    $sql="SELECT COUNT(*) as total from tbl_records WHERE fn_status = 'Pending' AND fx_barangay = '$clusterbarangay' AND account_status = 'active'";
    $result=mysqli_query($conn,$sql);
    $withoutp=mysqli_fetch_assoc($result);
}else{
    // EACH DASHBOARD
    // SELECT TO RECORDS
    $sql="SELECT COUNT(*) as total from tbl_records WHERE account_status = 'active'";
    $result=mysqli_query($conn,$sql);
    $total=mysqli_fetch_assoc($result);
    // filter with
    $sql="SELECT COUNT(*) as total from tbl_records WHERE fn_status = 'Received' AND account_status = 'active'";
    $result=mysqli_query($conn,$sql);
    $withp=mysqli_fetch_assoc($result);
    // filter without
    $sql="SELECT COUNT(*) as total from tbl_records WHERE fn_status = 'Pending' AND account_status = 'active'";
    $result=mysqli_query($conn,$sql);
    $withoutp=mysqli_fetch_assoc($result);
}