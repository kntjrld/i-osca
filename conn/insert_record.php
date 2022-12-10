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
    // $fn_age = $_POST['age']; ->auto computation w/ b-date
    $status = $_POST['status'];
    $pension = $_POST['pension'];
    $pwd = $_POST['pwd'];
    $date_started = $_POST['started'];
    
    //age computation
    $dateOfBirth = $fd_birthdate;
    $today = date("Y-m-d");
    $diff = date_diff(date_create($dateOfBirth), date_create($today));
    $intAge = $diff->format('%y');

    #iOSCA-c_year-count_records
        #############################################
        // count tbl_records
        $sql = "SELECT COUNT(*) as total FROM tbl_records";
        $result=mysqli_query($conn,$sql);
        $data=mysqli_fetch_assoc($result);
        // count tbl_remove
        $sql = "SELECT COUNT(*) as total FROM tbl_remove";
        $result=mysqli_query($conn,$sql);
        $remove=mysqli_fetch_assoc($result);
        // get year
        $myear = date("y");
        // add two table
        $totalc = $data['total'] + $remove['total'] + 1;
        // output

        if($totalc < 10){
            $total = '0000'.$totalc;
        }elseif($totalc < 100){
            $total = '000'.$totalc;
        }elseif($totalc < 1000){
            $total = '00'.$totalc;
        }elseif($totalc < 10000){
            $total = '0'.$totalc;
        }else{
            $total = $totalc;
        }
        
        $newuid = 'iOSCA-'.$myear.'-'.$total;
        #############################################

    $sql = "INSERT INTO tbl_records(uid, fx_id, fx_firstname, fx_lastname, fx_middlename, fx_contact, fd_birthdate,  fx_gender, fx_barangay, fn_age, fn_pension, fn_status, life_status, account_status, fx_pwd, fd_started)
    VALUES('$newuid','$fx_id',UPPER('$fx_firstname'),UPPER('$fx_lastname'),UPPER('$fx_middlename'),'$countrycode$fx_contact','$fd_birthdate','$fx_gender','$fx_barangay','$intAge','$pension','$status', 'alive', 'active', '$pwd', '$date_started')";
    $result = mysqli_query($conn, $sql);

    if($result){
        $_SESSION['success'] = "Added successfully";
        					
        date_default_timezone_set('Asia/Manila');
        $date = date("M d, Y - h:i a");
        $user_name = $_SESSION['user_name'];					
		$act = "INSERT INTO tbl_activities(fd_date, fx_user, fx_action) VALUES('$date', '$user_name','Added a record with a account id #$newuid')";
		$result = mysqli_query($conn, $act);

        header("Location: ../records.php");
	}else{
        $_SESSION['unsuccess'] = "Not Added";
        header("Location: ../records.php");
    }
}     
?>