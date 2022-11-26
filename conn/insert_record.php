<?php
session_start();
include('connection.php');

if(isset($_POST['submit'])){
    $fx_id = $_POST['sID'];
    $fx_firstname = $_POST['fistname'];
    $fx_lastname = $_POST['lastname'];
    $fx_middlename = $_POST['middlename'];
    $fx_contact = $_POST['contact'];
    $fd_birthdate = $_POST['birthdate'];
    $fx_gender = $_POST['sex'];
    $fx_barangay = $_POST['barangay'];
    $fn_age = $_POST['age'];
    $check_value = $_POST['status'];
    $pension = $_POST['pension'];
    
    $sql = "INSERT INTO tbl_records(fx_id, fx_firstname, fx_lastname, fx_middlename, fx_contact, fd_birthdate,  fx_gender, fx_barangay, fn_age, fn_pension, fn_status, life_status)
    VALUES('$fx_id',UPPER('$fx_firstname'),UPPER('$fx_lastname'),UPPER('$fx_middlename'),'$fx_contact','$fd_birthdate','$fx_gender','$fx_barangay','$fn_age','$pension','$check_value', 'alive')";
    $result = mysqli_query($conn, $sql);

    if($result){
        $_SESSION['success'] = "Added successfully";
        					
        date_default_timezone_set('Asia/Manila');
        $date = date("M d, Y - h:i a");
        $user_name = $_SESSION['user_name'];					
		$act = "INSERT INTO tbl_activities(fd_date, fx_user, fx_action) VALUES('$date', '$user_name','Added a record with a senior id #$fx_id')";
		$result = mysqli_query($conn, $act);

        header("Location: ../records.php");
	}else{
        $_SESSION['unsuccess'] = "Not Added";
        header("Location: ../records.php");
    }
}     
?>