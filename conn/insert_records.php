<?php
session_start();
include('connection.php');

$conn = mysqli_connect($dbhost, $user_name, $password, $dbname);
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

    $sql = "INSERT INTO tbl_records(fx_id, fx_firstname, fx_lastname, fx_middlename, fx_contact, fd_birthdate,  fx_gender, fx_barangay, fn_age, fn_pension, fn_status)
    VALUES('$fx_id','$fx_firstname','$fx_lastname','$fx_middlename','$fx_contact','$fd_birthdate', '$fx_gender', '$fx_barangay' ,'$fn_age', '$pension','$check_value')";
    $result = mysqli_query($conn, $sql);
    if($result){
        // echo "success";
        $_SESSION['success'] = "Added successfully";
        header("Location: ../records.php");
	}else{
        $_SESSION['unsuccess'] = "Not Added";
        header("Location: ../records.php");
    }
}
?>