<?php
session_start();
ob_start();

include("../conn/connection.php");

    $select_id = $_POST['s_id'];
    $username = $_POST['user_name'];
    $user_type = $_POST['user_type'];
    
    // CHECK IF ADMIN IS == 1
    $checkadmin = "SELECT COUNT(*) as total FROM users WHERE user_level = 'admin'";
    $adminresult=mysqli_query($conn,$checkadmin);
    $total=mysqli_fetch_assoc($adminresult);
    $count = $total['total'];

    ob_end_clean();
    
    if($user_type == 'admin' && $count == 1){
        echo 1;
    }else{
        $sql = "DELETE FROM users WHERE user_id = '$select_id'";
        $result = mysqli_query($conn, $sql);

        if($result){
        $user_name = $_SESSION['user_name'];					
        date_default_timezone_set('Asia/Manila');
        $date = date("M d, Y - h:i a");

        $act = "INSERT INTO tbl_activities(fd_date, fx_user, fx_action) VALUES('$date', '$user_name','Removed $username')";
        $result = mysqli_query($conn, $act);
        }else{}

    }
    