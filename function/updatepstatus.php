<?php
session_start();
include('../conn/connection.php');

    $get_id = $_POST['rid'];
    $status = $_POST['pstatus'];
    $mindate = $_POST['min'];
    $maxdate = $_POST['max'];

    // Locate table name
    $mindtf = date('MY', strtotime($mindate));
    $maxdtf = date('MY', strtotime($maxdate));
    $tblname = 'tbl_'.$mindtf.$maxdtf;

    $sql = "UPDATE $tblname SET fn_status = '$status' WHERE  uid = '$get_id'";
    $result = mysqli_query($conn, $sql);

    if($result){
        // Fields Data
        $mindt = date('M. y', strtotime($mindate));
        $maxdt = date('M. y', strtotime($maxdate));
        $coldata = $mindt.' to '.$maxdt;

        $request = "UPDATE tbl_summary SET fx_pstatus = '$status' WHERE  uid = '$get_id' AND fd_prange = '$coldata'";
        $sqlresult = mysqli_query($conn, $request);

        if($sqlresult){
            // Add to activity log
            date_default_timezone_set('Asia/Manila');
            $date = date("M d, Y - h:i a"); 
            $user_name = $_SESSION['user_name'];					
		    $act = "INSERT INTO tbl_activities(fd_date, fx_user, fx_action) VALUES('$date', '$user_name','Changed pension status of #$get_id to $status for $coldata')";
		    $result = mysqli_query($conn, $act);
        }

        $_SESSION['successp'] = "Updated successfully";
        header("Location: ../status");  
    }else{
        $_SESSION['unsuccessp'] = "Failed to update";
        header("Location: ../status");  
    }

?>    