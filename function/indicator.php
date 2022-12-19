<?php
$ulevel = $_SESSION["user_level"];
$brgy = $_SESSION["fx_street"];

if($ulevel == 'staff'){
    // COUNT
    $check = "SELECT COUNT(*) as cnt FROM tbl_register WHERE fx_barangay = '$brgy'";
    $result=mysqli_query($conn,$check);
    $cnt=mysqli_fetch_assoc($result);
    $count = $cnt['cnt'];

    $user = 'Cluster President';
}else{
    // COUNT
    $check = "SELECT COUNT(*) as cnt FROM tbl_regstatus WHERE fx_statusbyadmin = 'Under review'";
    $result=mysqli_query($conn,$check);
    $cnt=mysqli_fetch_assoc($result);
    $count = $cnt['cnt'];

    $user = 'Admin';
   }
?>