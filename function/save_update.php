<?php
session_start();
include("../conn/connection.php");

    $get_id = $_POST['s_id'];
    $update_firstname = $_POST['update_firstname'];
    $update_lastname = $_POST['update_lastname'];
    $update_middlename = $_POST['update_middlename'];
    $update_contact = $_POST['update_contact'];
    $update_birthdate = $_POST['update_birthdate'];
    $update_sex = $_POST['update_sex'];
    $update_barangay = $_POST['update_barangay'];
    $update_age = $_POST['update_age'];
    $update_pension = $_POST['update_pension'];
    $update_status = $_POST['update_status'];
    $life_status = $_POST['life_status'];

    $sql = "UPDATE tbl_records SET fx_firstname=UPPER('$update_firstname'), fx_lastname=UPPER('$update_lastname'),
        fx_middlename=UPPER('$update_middlename'), fx_contact='$update_contact', fd_birthdate='$update_birthdate',
        fx_gender='$update_sex', fx_barangay='$update_barangay', fn_age='$update_age', fn_pension='$update_pension',
        fn_status='$update_status', life_status = '$life_status' WHERE fx_id = '$get_id' ";

    $result = mysqli_query($conn, $sql);

    if($result){
                $user_name = $_SESSION['user_name'];					
                date_default_timezone_set('Asia/Manila');
                $date = date("M d, Y - h:i a");
				$act = "INSERT INTO tbl_activities(fd_date, fx_user, fx_action) VALUES('$date', '$user_name','Updated a record with a senior id #$get_id')";
				$result = mysqli_query($conn, $act);
				
        $_SESSION['updated'] = "Added successfully";
        header("Location: ../records");
	}else{
        $_SESSION['notupdated'] = "Not Added";
        header("Location: ../records");
    }
?>