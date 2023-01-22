<?php
$xx = $_SESSION['user_level'];
$street = $_SESSION['fx_street'];
if($_SESSION['user_level'] == 'staff'){
    $records = $conn->query("SELECT * FROM tbl_records WHERE fx_barangay = '$street' AND account_status = 'active'");
    $inactive = $conn->query("SELECT * FROM tbl_records WHERE fx_barangay = '$street' AND account_status = 'inactive' AND life_status = 'alive'");   
    $pwd = $conn->query("SELECT * FROM tbl_records WHERE fx_pwd = 'Yes' AND fx_barangay = '$street' AND account_status = 'active' AND life_status = 'alive'");
    $dead = $conn->query("SELECT * FROM tbl_records WHERE fx_barangay = '$street' AND account_status = 'inactive' AND life_status = 'dead'"); 
    $removed = $conn->query("SELECT * FROM tbl_remove WHERE fx_barangay = '$street'");

}else{
    $records = $conn->query("SELECT * FROM tbl_records WHERE account_status = 'active'");
    $inactive = $conn->query("SELECT * FROM tbl_records WHERE account_status = 'inactive' AND life_status = 'alive'");
    $pwd = $conn->query("SELECT * FROM tbl_records WHERE fx_pwd = 'Yes' AND account_status = 'active' AND life_status = 'alive'");
    $dead = $conn->query("SELECT * FROM tbl_records WHERE account_status = 'inactive' AND life_status = 'dead'"); 
    $removed = $conn->query("SELECT * FROM tbl_remove");
}

function dt_format($date){
    $formatter = strtotime($date);
    return $format_date = date('m/d/Y', $formatter);
}
?>
