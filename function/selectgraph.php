<?php
include('../conn/connection.php');

if(isset($_POST['brgy'])){
    $barangay = $_POST['brgy'];

    //FILTER AGE 
$whereage = array("60 AND 65", "66 AND 70", "71 AND 1000");
// FILTER AGE FOR MALE
$Mage1 = array();
    for ($i = 0; $i < count($whereage); $i++) {
    $ages = "SELECT COUNT(*) as age1 FROM tbl_records WHERE fx_barangay = '$barangay' AND fx_gender = 'Male' AND fn_age BETWEEN $whereage[$i]";
    $arrage = mysqli_query($conn,$ages);
    $ager1=mysqli_fetch_assoc($arrage);
    $Mage1[] = $ager1['age1'];
}
// FILTER AGE FOR FEMALE
$Fage1 = array();
    for ($i = 0; $i < count($whereage); $i++) {
    $ages = "SELECT COUNT(*) as age1 FROM tbl_records WHERE fx_barangay = '$barangay' AND fx_gender = 'Female' AND fn_age BETWEEN $whereage[$i]";
    $arrage = mysqli_query($conn,$ages);
    $ager1=mysqli_fetch_assoc($arrage);
    $Fage1[] = $ager1['age1'];
}
// COUNT ALIVE AND DEATH ARRAY
$life = array("alive", "dead");
// COUNT ALIVE
$alive = array();
    for ($i = 0; $i < count($whereage); $i++) {
    $stat = "SELECT COUNT(*) as cnt FROM tbl_records WHERE fx_barangay = '$barangay' AND life_status = '$life[0]' AND fn_age BETWEEN $whereage[$i]";
    $arrstatus = mysqli_query($conn,$stat);
    $status=mysqli_fetch_assoc($arrstatus);
    $alive[] = $status['cnt'];
}
// COUNT DEAD
$dead = array();
    for ($i = 0; $i < count($whereage); $i++) {
    $stat = "SELECT COUNT(*) as cnt FROM tbl_records WHERE fx_barangay = '$barangay' AND life_status = '$life[1]' AND fn_age BETWEEN $whereage[$i]";
    $arrstatus = mysqli_query($conn,$stat);
    $status=mysqli_fetch_assoc($arrstatus);
    $dead[] = $status['cnt'];
}
}
?>