<?php
session_start();
include("../conn/connection.php");

if(isset($_POST["accept"])) {
    $id = $_POST['accept'];

    $sql = "SELECT * FROM tbl_register WHERE uid = '$id'";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($result)){
        $idnumber = $row['fx_idnumber'];
        $idtype = $row['fx_idpresented'];
        $firstname = $row['fx_firstname'];
        $lastname = $row['fx_lastname'];
        $initial = $row['fx_initial'];
        $gender = $row['fx_gender'];
        $birthday = $row['fd_birthdate'];
        $barangay = $row['fx_barangay'];
        $contact = $row['fx_contact'];
        $age = $row['fn_age'];
        $pdfidpresented = $row['fl_idpresented'];
        $fileFORM = $row['fl_form'];
        $appdate = $row['fd_application'];
    }

    $app_status = 'accepted';
    $acceptdate = date("M d, Y");
    $adminstatus = 'Under review';

    $accept = "INSERT INTO tbl_regstatus(uid, fx_idnumber, fx_idpresented, fx_firstname, fx_lastname, fx_initial, fx_gender, fd_birthdate, fx_barangay, fx_contact, fn_age, fl_idpresented, fl_form, fd_application, fx_statusbycluster, fd_acceptedbycluster, fd_acceptedbyadmin, fx_statusbyadmin)
    VALUES('$id', '$idnumber','$idtype',UPPER('$firstname'),UPPER('$lastname'),UPPER('$initial'),'$gender','$birthday','$barangay','$contact','$age','$pdfidpresented','$fileFORM', '$appdate', '$app_status', '$acceptdate', '$adminstatus', '$adminstatus')";
    $request = mysqli_query($conn, $accept);

    if($request){
    $remove = "DELETE FROM tbl_register WHERE uid = '$id'";
    $request = mysqli_query($conn, $remove);
        
        date_default_timezone_set('Asia/Manila');
        $date = date("M d, Y - h:i a");
        $user_name = $_SESSION['user_name'];					
		$act = "INSERT INTO tbl_activities(fd_date, fx_user, fx_action) VALUES('$date', '$user_name','Accepted a application id #$id')";
		$result = mysqli_query($conn, $act);

    }
}elseif(isset($_POST["reject"])) {
    $id = $_POST['reject'];

    $sql = "SELECT * FROM tbl_register WHERE uid = '$id'";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($result)){
        $idnumber = $row['fx_idnumber'];
        $idtype = $row['fx_idpresented'];
        $firstname = $row['fx_firstname'];
        $lastname = $row['fx_lastname'];
        $initial = $row['fx_initial'];
        $gender = $row['fx_gender'];
        $birthday = $row['fd_birthdate'];
        $barangay = $row['fx_barangay'];
        $contact = $row['fx_contact'];
        $age = $row['fn_age'];
        $pdfidpresented = $row['fl_idpresented'];
        $fileFORM = $row['fl_form'];
        $appdate = $row['fd_application'];
    }

    $app_status = 'rejected';
    $rejectdate = date("M d, Y");
    $adminstatus = 'N/A';

    $accept = "INSERT INTO tbl_regstatus(uid, fx_idnumber, fx_idpresented, fx_firstname, fx_lastname, fx_initial, fx_gender, fd_birthdate, fx_barangay, fx_contact, fn_age, fl_idpresented, fl_form, fd_application, fx_statusbycluster, fd_acceptedbycluster, fd_acceptedbyadmin, fx_statusbyadmin)
    VALUES('$id','$idnumber','$idtype',UPPER('$firstname'),UPPER('$lastname'),UPPER('$initial'),'$gender','$birthday','$barangay','$contact','$age','$pdfidpresented','$fileFORM', '$appdate', '$app_status', '$rejectdate', '$adminstatus', '$adminstatus')";
    $request = mysqli_query($conn, $accept);

    if($request){
    $remove = "DELETE FROM tbl_register WHERE uid = '$id'";
    $request = mysqli_query($conn, $remove);

    date_default_timezone_set('Asia/Manila');
    $date = date("M d, Y - h:i a");
    $user_name = $_SESSION['user_name'];					
    $act = "INSERT INTO tbl_activities(fd_date, fx_user, fx_action) VALUES('$date', '$user_name','Rejected a application with id #$id')";
    $result = mysqli_query($conn, $act);

    }   
}