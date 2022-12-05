<?php
session_start();
include("../conn/connection.php");

    $app_status = 'rejected';
    $rejectdate = date("M d, Y");
    $adminstatus = 'N/A';
    $remarks = $_POST['remarks'];
    $uid = $_POST['uid'];

    $sql = "SELECT * FROM tbl_register WHERE uid = '$uid'";
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
        $pwd = $row['fx_pwd'];
        $pdfidpresented = $row['fl_idpresented'];
        $fileFORM = $row['fl_form'];
        $appdate = $row['fd_application'];
    }

    // transfer
    $accept = "INSERT INTO tbl_regstatus(uid, fx_idnumber, fx_idpresented, fx_firstname, fx_lastname, fx_initial, fx_gender, fd_birthdate, fx_barangay, fx_contact, fn_age, fx_pwd, fl_idpresented, fl_form, fd_application, fx_statusbycluster, fd_acceptedbycluster, fd_acceptedbyadmin, fx_statusbyadmin, fx_remarks)
    VALUES('$uid','$idnumber','$idtype',UPPER('$firstname'),UPPER('$lastname'),UPPER('$initial'),'$gender','$birthday','$barangay','$contact','$age', '$pwd' ,'$pdfidpresented','$fileFORM', '$appdate', '$app_status', '$rejectdate', '$adminstatus', '$adminstatus', '$remarks')";
    $request = mysqli_query($conn, $accept);

    if($request){
    //delete 
    $remove = "DELETE FROM tbl_register WHERE uid = '$uid'";
    $request = mysqli_query($conn, $remove);

    // start
    // Notify user via sms 
    $sms = 'Your i-OSCA application #'.$uid. ' is rejected for the following reason:'. ' '. $remarks;   
    $ch = curl_init();
    $parameters = array(
        'apikey' => '7952a861e3d97d4876d8d6cb340980ee', //Your API KEY
        'number' => $contact,
        'message' => $remarks,
        'sendername' => 'SEMAPHORE'
    );
    curl_setopt( $ch, CURLOPT_URL,'https://semaphore.co/api/v4/messages' );
    curl_setopt( $ch, CURLOPT_POST, 1 );

    //Send the parameters set above with the request
    curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $parameters ) );

    // Receive response from server
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
    $output = curl_exec( $ch );
    curl_close ($ch);
    // end 

    // activities
    date_default_timezone_set('Asia/Manila');
    $date = date("M d, Y - h:i a");
    $user_name = $_SESSION['user_name'];					
    $act = "INSERT INTO tbl_activities(fd_date, fx_user, fx_action) VALUES('$date', '$user_name','Rejected a application with id #$uid')";
    $result = mysqli_query($conn, $act);

    // alert
    $_SESSION['rejected'] = "Rejected successfully";
    }
?>