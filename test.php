<?php
include("conn/connection.php");

// random uid
    function getGUIDnoHash(){
        mt_srand((double)microtime()*10000);
        $charid = md5(uniqid(rand(), true));
        $c = unpack("C*",$charid);
        $c = implode("",$c);
        return substr($c,0,17);
}

$uid = getGUIDnoHash();
// echo $uid;
// $fd_acceptedbyadmin = date("Ymd");
// $remarks = 'aisd asdas sdas dasdnas djasnd jadsn jandj';
// $sms = 'Your i-OSCA application #'.$uid. ' is rejected for the following reason:'. ' '. $remarks;   
// $fd_acceptedbyadmin = date("Y-m-d");

// echo $fd_acceptedbyadmin;
// echo $uid;


// age computation
// $dateOfBirth = "19-06-2000";
// $today = date("Y-m-d");
// $diff = date_diff(date_create($dateOfBirth), date_create($today));
// echo $diff->format('%y');

// ID NUMBER

#iOSCA-c_year-count_records
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
    $uid = 'iOSCA-'.$myear.'-'.$total;
    #############################################

// result
// echo $checkr['checkr'];
// sms accepted
$firstname = "TESTNAME";
$newuid = "iOSCA-22-03";
$sms = 'Hi '.$firstname. ', Your iOSCA application is accepted and your account ID is #'.$newuid;   

// echo $sms;

// create table name
$min = "01-10-2022";
$max = "01-12-2022";

$mindtf = date('Mdy', strtotime($min));
$maxdtf = date('Mdy', strtotime($max));
$tblname = 'tbl_'.$mindtf.$maxdtf;

// $ldate =  date('MY', strtotime("-1 month"));
// $dt = $cdate.$ldate;
// $t_name = "tbl_".$tblname;
// result
// echo $t_name;
// break
// echo '</br>';
// trim table name
// echo trim($t_name,"tbl_");
// break
// echo '</br>';
echo $tblname;
?>
