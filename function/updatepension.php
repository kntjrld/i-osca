<?php
session_start();
include('../conn/connection.php');

    $get_id = $_POST['status'];
    $update_pension = $_POST['id_amount'];
    $status = $_POST['id_status'];
    $date = $_POST['id_date'];
    $sql = "UPDATE tbl_records SET fn_pension = '$update_pension', fn_status = '$status', fd_pension = '$date' WHERE fx_id = '$get_id'";
	$result = mysqli_query($conn, $sql);

    if($result){
        $_SESSION['penstionupdate'] = "Updated successfully";
        header("Location: ../status");  
    }else{
        header("Location: ../status");
    }

?>