<?php
session_start();
ob_start();
include('../conn/connection.php');

    $mindate = $_POST['min'];
    $maxdate = $_POST['max'];

    // create table name
    $mindtf = date('MY', strtotime($mindate));
    $maxdtf = date('MY', strtotime($maxdate));
    $tblname = 'tbl_'.$mindtf.$maxdtf;
    $colname = $mindtf.$maxdtf;

    // Fields Data
    $mindt = date('M. y', strtotime($mindate));
    $maxdt = date('M. y', strtotime($maxdate));
    $coldata = $mindt.' to '.$maxdt;

    // Create table like table records
    $result = $conn->query("CREATE TABLE $tblname LIKE tbl_records");

    if($result){
        // transfer all data to new table
        $datatransfer = $conn->query("INSERT INTO $tblname SELECT * FROM tbl_records WHERE account_status = 'active'");

        if($datatransfer){
        // change all status to tbl_records to pending
        $sql = "UPDATE tbl_records SET fn_status = 'Pending' WHERE fn_status = 'Received'";
	    $result = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));	
        // transfer data to summary 
            $result = mysqli_query($conn, "SELECT * FROM $tblname");
            while($row = mysqli_fetch_array($result)){
                $uid = $row['uid'];
                $firstname = $row['fx_firstname'];
                $lastname = $row['fx_lastname'];
                $mi = $row['fx_middlename'];

                $range = $coldata;
                $status = $row['fn_status'];
                mysqli_query($conn, "INSERT INTO tbl_summary (uid, fx_firstname, fx_lastname, fx_middlename, fd_prange, fx_pstatus) VALUES ('$uid','$firstname', '$lastname', '$mi', '$range', '$status')");
            }
        }
    }
    
    ob_end_clean();
?>