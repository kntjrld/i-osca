<?php
$ulevel = $_SESSION["user_level"];
$brgy = $_SESSION["fx_street"];

if($ulevel == 'admin'){
    // COUNT
    $check = "SELECT COUNT(*) as total FROM tbl_regstatus WHERE fx_statusbyadmin = 'Under review'";
    $result=mysqli_query($conn,$check);
    $total=mysqli_fetch_assoc($result);
    $count = $total['total'];
}else{
    // COUNT
    $check = "SELECT COUNT(*) as total FROM tbl_regstatus WHERE fx_statusbyadmin = 'Under review' AND fx_barangay = '$brgy'";
    $result=mysqli_query($conn,$check);
    $total=mysqli_fetch_assoc($result);
    $count = $total['total'];
}
    
?>