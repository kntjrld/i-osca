<?php
session_start();
include("../conn/connection.php");

    $uid = $_POST['uid'];
    $fx_statusbyadmin = 'rejected';
    $fd_rejectedbyadmin = date("M d, Y");
    $remarks = $_POST['remarks'];

    $sql = "SELECT * FROM tbl_regstatus WHERE uid = '$uid'";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($result)){
        $uidnumber = $row['fx_uidnumber'];
        $uidtype = $row['fx_uidpresented'];
        $firstname = $row['fx_firstname'];
        $lastname = $row['fx_lastname'];
        $initial = $row['fx_initial'];
        $gender = $row['fx_gender'];
        $birthday = $row['fd_birthdate'];
        $barangay = $row['fx_barangay'];
        $contact = $row['fx_contact'];
        $age = $row['fn_age'];
        $pdfuidpresented = $row['fl_uidpresented'];
        $fileFORM = $row['fl_form'];
        $appdate = $row['fd_application'];
        $clusterstatus = $row['fx_statusbycluster'];
        $dateacceptedbycluster = $row['fd_acceptedbycluster'];
    }

    $sql = "UPDATE tbl_regstatus SET fd_acceptedbyadmin='$fd_rejectedbyadmin', fx_statusbyadmin ='$fx_statusbyadmin', 
    fx_remarks = '$remarks' WHERE uid = '$uid'";
    $result = mysqli_query($conn, $sql);

    if($result){
        date_default_timezone_set('Asia/Manila');
        $date = date("M d, Y - h:i a");
        $user_name = $_SESSION['user_name'];					
		$act = "INSERT INTO tbl_activities(fd_date, fx_user, fx_action) VALUES('$date', '$user_name','Rejected a application with uid #$uid')";
		$result = mysqli_query($conn, $act);

    }

?>