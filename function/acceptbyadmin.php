<?php
session_start();
include("../conn/connection.php");

if (isset($_SESSION['user_id']) && isset($_SESSION['user_name'])) {

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
            $total = '0'.$totalc;
        }else{
            $total = $totalc;
        }
        $newuid = 'iOSCA-'.$myear.'-'.$total;
        #############################################

        $insert = "INSERT INTO tbl_records(uid, fx_id, fx_firstname, fx_lastname, fx_middlename, fx_contact, fd_birthdate,  fx_gender, fx_barangay, fn_age, fn_pension, fn_status, life_status, account_status, fx_pwd, fd_started)
        VALUES('$newuid','$idnumber',UPPER('$firstname'),UPPER('$lastname'),UPPER('$initial'),'$contact','$birthday','$gender','$barangay','$age','$fn_pension','$check_value', '$life_status', 'active', '$pwd','$started')";
        $request = mysqli_query($conn, $insert);

        // activities
        if($request){
        // start
        // Notify user via sms 
        $sms = 'Hi '.$firstname. ', Your iOSCA application is accepted and your account ID is #'.$newuid;   
        $ch = curl_init();
        $parameters = array(
            'apikey' => '7952a861e3d97d4876d8d6cb340980ee', 
            'number' => $contact,
            'message' => $sms,
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
        

        date_default_timezone_set('Asia/Manila');
        $date = date("M d, Y - h:i a"); 
        $user_name = $_SESSION['user_name'];					
		$act = "INSERT INTO tbl_activities(fd_date, fx_user, fx_action) VALUES('$date', '$user_name','Accepted a application id #$uid')";
		$result = mysqli_query($conn, $act);
        }
  
        // alert
        $_SESSION['accepted'] = "Added successfully";
        }else{}
}else {
    header("Location: 404");
    exit();
}
?>