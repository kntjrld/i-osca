<?php

$xx = $_SESSION['user_level'];
$street = $_SESSION['fx_street'];
if($_SESSION['user_level'] == 'staff'){
    $records = $conn->query("SELECT * FROM tbl_records WHERE fx_barangay = '$street' AND account_status = 'active'");   
}else{
    $records = $conn->query("SELECT * FROM tbl_records WHERE account_status = 'active'");
}

function dt_format($date){
    $formatter = strtotime($date);
    return $format_date = date('m/d/Y', $formatter);
}

?>