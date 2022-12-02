<?php
// admin dashboard colors and labels
$akeys = "'Male', 'Female'";
$acolors = "'#6D9886', '#393E46'";
// staff dasboard colors and lables
$keys = "'Male', 'Female', 'Alive', 'Dead' ";
$colors = " '#6D9886', '#393E46' , '#4b6043' , '#301934'";
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

//FILTER AGE 
$whereage = array("60 AND 65", "66 AND 70", "71 AND 1000");
// FILTER AGE FOR MALE
$Mage1 = array();
    for ($i = 0; $i < count($whereage); $i++) {
    $ages = "SELECT COUNT(*) as age1 FROM tbl_records WHERE fx_barangay = '$clusterbarangay' AND fx_gender = 'Male' AND fn_age BETWEEN $whereage[$i]";
    $arrage = mysqli_query($conn,$ages);
    $ager1=mysqli_fetch_assoc($arrage);
    $Mage1[] = $ager1['age1'];
}
// FILTER AGE FOR FEMALE
$Fage1 = array();
    for ($i = 0; $i < count($whereage); $i++) {
    $ages = "SELECT COUNT(*) as age1 FROM tbl_records WHERE fx_barangay = '$clusterbarangay' AND fx_gender = 'Female' AND fn_age BETWEEN $whereage[$i]";
    $arrage = mysqli_query($conn,$ages);
    $ager1=mysqli_fetch_assoc($arrage);
    $Fage1[] = $ager1['age1'];
}
// COUNT ALIVE AND DEATH ARRAY
$life = array("alive", "dead");
// COUNT ALIVE
$alive = array();
    for ($i = 0; $i < count($whereage); $i++) {
    $stat = "SELECT COUNT(*) as cnt FROM tbl_records WHERE fx_barangay = '$clusterbarangay' AND life_status = '$life[0]' AND fn_age BETWEEN $whereage[$i]";
    $arrstatus = mysqli_query($conn,$stat);
    $status=mysqli_fetch_assoc($arrstatus);
    $alive[] = $status['cnt'];
}
// COUNT DEAD
$dead = array();
    for ($i = 0; $i < count($whereage); $i++) {
    $stat = "SELECT COUNT(*) as cnt FROM tbl_records WHERE fx_barangay = '$clusterbarangay' AND life_status = '$life[1]' AND fn_age BETWEEN $whereage[$i]";
    $arrstatus = mysqli_query($conn,$stat);
    $status=mysqli_fetch_assoc($arrstatus);
    $dead[] = $status['cnt'];
}

if($ulevel == 'staff'){
    // EACH DASHBOARD
    // SELECT TO RECORDS
    $sql="SELECT COUNT(*) as total from tbl_records WHERE fx_barangay = '$clusterbarangay'";
    $result=mysqli_query($conn,$sql);
    $total=mysqli_fetch_assoc($result);
    // select distinct total barangay
    $sql="SELECT COUNT(distinct fx_barangay) as total from tbl_records WHERE fx_barangay = '$clusterbarangay'";
    $result=mysqli_query($conn,$sql);
    $totalbarangay=mysqli_fetch_assoc($result);
    // filter with
    $sql="SELECT COUNT(*) as total from tbl_records WHERE fn_status = 'Received' AND fx_barangay = '$clusterbarangay'";
    $result=mysqli_query($conn,$sql);
    $withp=mysqli_fetch_assoc($result);
    // filter without
    $sql="SELECT COUNT(*) as total from tbl_records WHERE fn_status = 'Pending' AND fx_barangay = '$clusterbarangay'";
    $result=mysqli_query($conn,$sql);
    $withoutp=mysqli_fetch_assoc($result);
}else{
    // EACH DASHBOARD
    // SELECT TO RECORDS
    $sql="SELECT COUNT(*) as total from tbl_records";
    $result=mysqli_query($conn,$sql);
    $total=mysqli_fetch_assoc($result);
    // select distinct total barangay
    $sql="SELECT COUNT(DISTINCT fx_barangay) as total from tbl_records";
    $result=mysqli_query($conn,$sql);
    $totalbarangay=mysqli_fetch_assoc($result);
    // filter with
    $sql="SELECT COUNT(*) as total from tbl_records WHERE fn_status = 'Received'";
    $result=mysqli_query($conn,$sql);
    $withp=mysqli_fetch_assoc($result);
    // filter without
    $sql="SELECT COUNT(*) as total from tbl_records WHERE fn_status = 'Pending'";
    $result=mysqli_query($conn,$sql);
    $withoutp=mysqli_fetch_assoc($result);
}

// LABEL FOR EACH BARANGAY
$agelabel = array("60 - 65", "66 - 70", "71 - Above");
// DISPLAY ARRAY(BARANGAY, MALE, FEMALE) TO GRAPH AND EACH BARANGAY ANALYTICS
if($ulevel == 'admin'){    
    for ($i = 0; $i < count($brgy); $i++) {
        $chart_data .= "{ y:'$brgy[$i]', Male:'$malearr[$i]', Female:'$femalearr[$i]'}, ";
    }
}else{  
    for ($i = 0; $i < count($agelabel); $i++) {
        $chart_data .= "{ y:'$agelabel[$i]', Male:'$Mage1[$i]', Female:'$Fage1[$i]', Alive:'$alive[$i]', Dead:'$dead[$i]'}, ";
    }
}
// QUERY DURATION xxx HOURS
