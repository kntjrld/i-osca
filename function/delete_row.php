<?php
include("../conn/connection.php");

    $get_id = $_POST['s_id'];
    $sql = "DELETE FROM tbl_records WHERE fx_id = '$get_id'";
    $result = mysqli_query($conn, $sql);
    
?>