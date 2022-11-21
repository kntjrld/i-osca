<?php
session_start();
include("../conn/connection.php");

    $get_id = $_POST['s_id'];
    $sql = "DELETE FROM tbl_records WHERE fx_id = '$get_id'";
    $result = mysqli_query($conn, $sql);
    if($result){
        $user_name = $_SESSION['user_name'];					
        date_default_timezone_set('Asia/Manila');
        $date = date("M d, Y - h:i a");
				$act = "INSERT INTO tbl_activities(fd_date, fx_user, fx_action) VALUES('$date', '$user_name','Deleted a record with a senior id #$get_id')";
				$result = mysqli_query($conn, $act);		
    }else{

    }        
?>