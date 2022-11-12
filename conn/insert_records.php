<?php

$dbhost = "localhost";
$user_name = "root";
$password = "";
$dbname = "iosca";

$conn = mysqli_connect($dbhost, $user_name, $password, $dbname);

if(isset($_POST['submit'])){
    $fx_id = $_POST['sID'];
    $fx_firstname = $_POST['fistname'];
    $fx_lastname = $_POST['lastname'];
    $fx_contact = $_POST['contact'];
    $fd_birthdate = $_POST['birthdate'];
    $fx_barangay = $_POST['barangay'];
    $fn_age = $_POST['age'];
    $check_value = $_POST['status'];


    $sql = "insert into tbl_records (fx_id, fx_firstname, fx_lastname, fx_contact, fd_birthdate, fx_barangay, fn_age, fn_status)
    values('$fx_id', '$fx_firstname','$fx_lastname','$fx_contact','$fd_birthdate','$fx_barangay','$fn_age','$check_value')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "success";
	}else{
        die(mysqli_error($conn));
    }
}
?>