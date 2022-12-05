<?php
session_start();
include('connection.php');

if(isset($_POST['submit'])){
    $fx_id = $_POST['sID'];
    $fx_firstname = $_POST['fistname'];
    $fx_lastname = $_POST['lastname'];
    $fx_middlename = $_POST['middlename'];
    $fx_contact = $_POST['contact'];
    $countrycode = '+63';
    $fd_birthdate = $_POST['birthdate'];
    $fx_gender = $_POST['sex'];
    $fx_barangay = $_POST['barangay'];
    $fn_age = $_POST['age'];
    $status = $_POST['status'];
    $pension = $_POST['pension'];
    $pwd = $_POST['pwd'];
    $date_started = $_POST['started'];

    function getGUIDnoHash(){
        mt_srand((double)microtime()*10000);
        $charid = md5(uniqid(rand(), true));
        $c = unpack("C*",$charid);
        $c = implode("",$c);
        return substr($c,0,12);}

    $dateid = date("Ymd");
    $uid = getGUIDnoHash();
    $sql = "INSERT INTO tbl_records(uid, fx_id, fx_firstname, fx_lastname, fx_middlename, fx_contact, fd_birthdate,  fx_gender, fx_barangay, fn_age, fn_pension, fn_status, life_status, account_status, fx_pwd, fd_started)
    VALUES('$dateid$uid','$fx_id',UPPER('$fx_firstname'),UPPER('$fx_lastname'),UPPER('$fx_middlename'),'$countrycode$fx_contact','$fd_birthdate','$fx_gender','$fx_barangay','$fn_age','$pension','$status', 'alive', 'active', '$pwd', '$date_started')";
    $result = mysqli_query($conn, $sql);

    if($result){
        $_SESSION['success'] = "Added successfully";
        					
        date_default_timezone_set('Asia/Manila');
        $date = date("M d, Y - h:i a");
        $user_name = $_SESSION['user_name'];					
		$act = "INSERT INTO tbl_activities(fd_date, fx_user, fx_action) VALUES('$date', '$user_name','Added a record with a account id #$uid')";
		$result = mysqli_query($conn, $act);

        header("Location: ../records.php");
	}else{
        $_SESSION['unsuccess'] = "Not Added";
        header("Location: ../records.php");
    }
}     
?>