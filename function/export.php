<?php
session_start();
include("../conn/connection.php");

if(isset($_POST["export"])){
    $user_name = $_SESSION['user_name'];					
    date_default_timezone_set('Asia/Manila');
    $date = date("M d, Y - h:i a");

    $act = "INSERT INTO tbl_activities(fd_date, fx_user, fx_action) VALUES('$date', '$user_name','Export records to excel')";
    $result = mysqli_query($conn, $act);
    
}
?>