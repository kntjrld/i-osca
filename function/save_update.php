<?php
session_start();
include("../conn/connection.php");

    $uid = $_POST['uid'];
    $update_id = $_POST['s_id'];
    $update_firstname = $_POST['update_firstname'];
    $update_lastname = $_POST['update_lastname'];
    $update_middlename = $_POST['update_middlename'];
    $update_contact = $_POST['update_contact'];
    $update_birthdate = $_POST['update_birthdate'];
    $update_sex = $_POST['update_sex'];
    $update_barangay = $_POST['update_barangay'];
    $update_age = $_POST['update_age'];
    // $update_pension = $_POST['update_pension']; -->deprecated -> move to pension navigation'
    $pwd = $_POST['pwd']; 
    $update_status = $_POST['update_status'];
    $life_status = $_POST['life_status'];
    $account_status = $_POST['account_status'];
    $fx_remarks = $_POST['remarks'];
    $fd_remarks = date("Y-m-d");

    if($fx_remarks == ''){
        $dtr = '';
    }else{
        $dtr = $fd_remarks;
    }

    // if($account_status == 'inactive'){
    //     $acc_status = 'inactive';
    // }else{
    //     $acc_status = $account_status;
    // }

    if($life_status == 'dead'){
        $acc_status = 'inactive';
    }else{
        $acc_status = $account_status;
    }

    $sql = "UPDATE tbl_records SET fx_id='$update_id', fx_firstname=UPPER('$update_firstname'), fx_lastname=UPPER('$update_lastname'),
        fx_middlename=UPPER('$update_middlename'), fx_contact='$update_contact', fd_birthdate='$update_birthdate',
        fx_gender='$update_sex', fx_barangay='$update_barangay', fn_age='$update_age', life_status = '$life_status',
        account_status = '$acc_status', fx_pwd = '$pwd', fx_remarks = '$fx_remarks', fd_remarks = '$dtr' WHERE uid = '$uid' ";

    $result = mysqli_query($conn, $sql);

    if($result){
                $user_name = $_SESSION['user_name'];					
                date_default_timezone_set('Asia/Manila');
                $date = date("M d, Y - h:i a");
				$act = "INSERT INTO tbl_activities(fd_date, fx_user, fx_action) VALUES('$date', '$user_name','Updated a record with a account id #$uid')";
				$result = mysqli_query($conn, $act);
				
        $_SESSION['updated'] = "Added successfully";
	}else{
        $_SESSION['notupdated'] = "Not Added";
    }
?>