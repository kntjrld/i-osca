<?php
session_start();
include("../conn/connection.php");

if (isset($_POST['uid'])) {
    $uid = $_POST['uid'];
    $remarks = $_POST['remarks'];
    $sql = "SELECT * FROM tbl_records WHERE uid = '$uid' "; 
    $date_removed = date("Y-m-d");

    $result = mysqli_query($conn, $sql); 

    while($row = mysqli_fetch_array($result)){
        $uid = $row['uid'];
        $application_id = $orw['fx_aid'];
        $idnumber = $row['fx_id'];
        $firstname = $row['fx_firstname'];
        $lastname = $row['fx_lastname'];
        $initial = $row['fx_middlename'];
        $extension = $row['fx_extension'];
        $gender = $row['fx_gender'];
        $birthdate = $row['fd_birthdate'];
        $barangay = $row['fx_barangay'];
        $contact = $row['fx_contact'];
        $email = $row['fx_email'];
        $age = $row['fn_age'];
        $pwd = $row['fx_pwd'];
        $fd_started = $row['fd_started'];
        $life_status = $row['life_status'];
        $account_status = $row['account_status'];
        $remarks_dt = $row['fd_remarks'];
        $remarks = $row['fx_remarks'];
    }

    $request = "INSERT INTO tbl_remove(uid, fx_aid, fx_id, fx_firstname, fx_lastname, fx_middlename, fx_extension,
    fx_contact, fx_email, fd_birthdate,  fx_gender, fx_barangay, fn_age, fx_pwd, fd_started, life_status, account_status, fx_remarks, fd_remarks)
    VALUES('$uid', '$application_id', '$idnumber',UPPER('$firstname'),UPPER('$lastname'),UPPER('$initial'),UPPER('$extension'),'$contact', '$email',
    '$birthdate','$gender','$barangay','$age' , '$pwd', '$fd_started', '$life_status', '$account_status', '$remarks', '$date_removed')";
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
}
?>