<?php
session_start();
include("../conn/connection.php");

    $uid = $_POST['uid'];
    $sql = "DELETE FROM tbl_records WHERE uid = '$uid'";
    $result = mysqli_query($conn, $sql);
    if($result){
        $user_name = $_SESSION['user_name'];					
        date_default_timezone_set('Asia/Manila');
        $date = date("M d, Y - h:i a");
				$act = "INSERT INTO tbl_activities(fd_date, fx_user, fx_action) VALUES('$date', '$user_name','Deleted a record with a account id #$uid')";
				$request = mysqli_query($conn, $act);
                
                if($request){
                    
                }
    }else{}        
?>