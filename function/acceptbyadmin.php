<?php
session_start();
include("../conn/connection.php");

if(isset($_POST["accept"])) {
    $id = $_POST['accept'];

    $sql = "SELECT * FROM tbl_regstatus WHERE uid = '$id'";
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
        $clusterstatus = $row['fx_statusbycluster'];
        $dateacceptedbycluster = $row['fd_acceptedbycluster'];
    }

    $fx_statusbyadmin = 'accepted';
    $fd_acceptedbyadmin = date("M d, Y");

    $sql = "UPDATE tbl_regstatus SET fd_acceptedbyadmin='$fd_acceptedbyadmin', fx_statusbyadmin ='$fx_statusbyadmin' WHERE uid = '$id'";
    $result = mysqli_query($conn, $sql);

    if($result){
        $fn_pension = 0;
        $check_value = 'Pending';
        $life_status = 'alive';
        $insert = "INSERT INTO tbl_records(fx_id, fx_firstname, fx_lastname, fx_middlename, fx_contact, fd_birthdate,  fx_gender, fx_barangay, fn_age, fn_pension, fn_status, life_status)
        VALUES('$idnumber',UPPER('$firstname'),UPPER('$lastname'),UPPER('$initial'),'$contact','$birthday','$gender','$barangay','$age','$fn_pension','$check_value', '$life_status')";
        $request = mysqli_query($conn, $insert);

        if($request){
        date_default_timezone_set('Asia/Manila');
        $date = date("M d, Y - h:i a");
        $user_name = $_SESSION['user_name'];					
		$act = "INSERT INTO tbl_activities(fd_date, fx_user, fx_action) VALUES('$date', '$user_name','Accepted a application id #$id')";
		$result = mysqli_query($conn, $act);

        }
    }else{

    }
}else if(isset($_POST["reject"])) {
    $id = $_POST['reject'];

    $sql = "SELECT * FROM tbl_regstatus WHERE uid = '$id'";
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
        $clusterstatus = $row['fx_statusbycluster'];
        $dateacceptedbycluster = $row['fd_acceptedbycluster'];
    }

    $fx_statusbyadmin = 'rejected';
    $fd_acceptedbyadmin = date("M d, Y");

    $sql = "UPDATE tbl_regstatus SET fd_acceptedbyadmin='$fd_acceptedbyadmin', fx_statusbyadmin ='$fx_statusbyadmin' WHERE uid = '$id'";
    $result = mysqli_query($conn, $sql);

    if($result){
        date_default_timezone_set('Asia/Manila');
        $date = date("M d, Y - h:i a");
        $user_name = $_SESSION['user_name'];					
		$act = "INSERT INTO tbl_activities(fd_date, fx_user, fx_action) VALUES('$date', '$user_name','Rejected a application with id #$id')";
		$result = mysqli_query($conn, $act);

    }
}

?>