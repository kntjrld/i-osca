<?php
session_start();
include("../conn/connection.php");

    $select_id = $_POST['s_id'];
    $username = $_POST['user_name'];
    $sql = "DELETE FROM users WHERE user_id = '$select_id'";
    $result = mysqli_query($conn, $sql);

    if($result){
    $user_name = $_SESSION['user_name'];					
    date_default_timezone_set('Asia/Manila');
    $date = date("M d, Y - h:i a");

    $act = "INSERT INTO tbl_activities(fd_date, fx_user, fx_action) VALUES('$date', '$user_name','Removed $username')";
    $result = mysqli_query($conn, $act);
    }else{

    }