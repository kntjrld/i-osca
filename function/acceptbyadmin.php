<?php
session_start();
include("../conn/connection.php");

    $uid = $_POST['uid'];
    $fx_statusbyadmin = 'accepted';
    $fd_acceptedbyadmin = date("M d, Y");
    $remarks = $_POST['remarks'];

    $sql = "SELECT * FROM tbl_regstatus WHERE uid = '$uid'";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($result)){
        $idnumber = $row['fx_idnumber'];
        $uidtype = $row['fx_uidpresented'];
        $firstname = $row['fx_firstname'];
        $lastname = $row['fx_lastname'];
        $initial = $row['fx_initial'];
        $gender = $row['fx_gender'];
        $birthday = $row['fd_birthdate'];
        $barangay = $row['fx_barangay'];
        $contact = $row['fx_contact'];
        $age = $row['fn_age'];
        $pwd = $row['fx_pwd'];
        $pdfuidpresented = $row['fl_uidpresented'];
        $fileFORM = $row['fl_form'];
        $appdate = $row['fd_application'];
        $clusterstatus = $row['fx_statusbycluster'];
        $dateacceptedbycluster = $row['fd_acceptedbycluster'];
    }

    $sql = "UPDATE tbl_regstatus SET fd_acceptedbyadmin='$fd_acceptedbyadmin', fx_statusbyadmin ='$fx_statusbyadmin',
    fx_remarks = '$remarks' WHERE uid = '$uid'";
    $result = mysqli_query($conn, $sql);

    if($result){
        // if true add to records
        $fn_pension = '1500';
        $check_value = 'Pending';
        $life_status = 'alive';
        $started = date("Y-m-d");
        $insert = "INSERT INTO tbl_records(uid, fx_id, fx_firstname, fx_lastname, fx_middlename, fx_contact, fd_birthdate,  fx_gender, fx_barangay, fn_age, fn_pension, fn_status, life_status, account_status, fx_pwd, fd_started)
        VALUES('$uid','$idnumber',UPPER('$firstname'),UPPER('$lastname'),UPPER('$initial'),'$contact','$birthday','$gender','$barangay','$age','$fn_pension','$check_value', '$life_status', 'active', '$pwd','$started')";
        $request = mysqli_query($conn, $insert);

        // activities
        if($request){
        date_default_timezone_set('Asia/Manila');
        $date = date("M d, Y - h:i a"); 
        $user_name = $_SESSION['user_name'];					
		$act = "INSERT INTO tbl_activities(fd_date, fx_user, fx_action) VALUES('$date', '$user_name','Accepted a application id #$uid')";
		$result = mysqli_query($conn, $act);
        }
  
        // alert
        $_SESSION['accepted'] = "Added successfully";
        }else{}
?>