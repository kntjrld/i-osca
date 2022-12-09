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

    // Copy table
    $result = $conn->query("CREATE TABLE $tblname LIKE tbl_records");

    if($result){
        // transfer all data to new table
        $datatransfer = $conn->query("INSERT INTO $tblname SELECT * FROM tbl_records");

        if($datatransfer){
            // change all status to tbl_records to pending
        $sql = "UPDATE tbl_records SET fn_status = 'Pending' WHERE fn_status = 'Received'";
	    $result = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));	
        }
    }
    
    ob_end_clean();
?>