<?php
session_start();
include("../conn/connection.php");

    $uid = $_POST['uid'];
    $remarks = $_POST['remarks'];
    $sql = "SELECT * FROM tbl_records WHERE uid = '$uid' "; 
    $date_removed = date("Y-m-d");

    $result = mysqli_query($conn, $sql); 

    while($row = mysqli_fetch_array($result)){
        $uid = $row['uid'];
        $idnumber = $row['fx_id'];
        $firstname = $row['fx_firstname'];
        $lastname = $row['fx_lastname'];
        $initial = $row['fx_middlename'];
        $gender = $row['fx_gender'];
        $birthdate = $row['fd_birthdate'];
        $barangay = $row['fx_barangay'];
        $contact = $row['fx_contact'];
        $age = $row['fn_age'];
        $pwd = $row['fx_pwd'];
        $fd_started = $row['fd_started'];
        $pension = $row['fn_pension'];
        $pstatus = $row['fn_status'];
        $life_status = $row['life_status'];
        $fd_pension = $row['fd_pension'];
        $account_status = $row['fd_pension'];
        $remarks_dt = $row['fd_remarks'];
        $remarks = $row['fx_remarks'];
    }

    $request = "INSERT INTO tbl_remove(uid, fx_id, fx_firstname, fx_lastname, fx_middlename, 
    fx_contact, fd_birthdate,  fx_gender, fx_barangay, fn_age, , fn_pension, fn_status, life_status, 
    fd_pension, account_status, fx_pwd, fd_started, fx_remarks, fd_remarks)
    VALUES('$uid','$idnumber',UPPER('$firstname'),UPPER('$lastname'),UPPER('$initial'),'$contact',
    '$birthdate','$gender','$barangay','$age', '$pension', '$pstatus', '$life_status', '$fd_pension', 
    '$account_status', '$pwd', '$fd_started', '$remarks', '$date_removed')";
    $result_i = mysqli_query($conn, $request);

    if($result_i){
        $sql = "DELETE FROM tbl_records WHERE uid = '$uid'";
        $result_d = mysqli_query($conn, $sql);
        if($result_d){
        $user_name = $_SESSION['user_name'];					
        date_default_timezone_set('Asia/Manila');
        $date = date("M d, Y - h:i a");
				$act = "INSERT INTO tbl_activities(fd_date, fx_user, fx_action) VALUES('$date', '$user_name','Removed a record with a account id #$uid')";
				$request = mysqli_query($conn, $act);
        }
    }        
?>