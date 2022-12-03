<?php
ob_start();
include('../conn/connection.php');

$brgy = $_POST['selected'];
    //FILTER AGE 
$whereage = array("60 AND 65", "66 AND 70", "71 AND 1000");
// FILTER AGE FOR MALE
$MaleAgeArr = array();
    for ($i = 0; $i < count($whereage); $i++) {
    $ages = "SELECT COUNT(*) as mage FROM tbl_records WHERE fx_barangay = '$brgy' AND fx_gender = 'Male' AND fn_age BETWEEN $whereage[$i]";
    $arrage = mysqli_query($conn,$ages);
    $Mage=mysqli_fetch_assoc($arrage);
    $MaleAgeArr[] = $Mage['mage'];
}
// FILTER AGE FOR FEMALE
$FemaleAgeArr = array();
    for ($i = 0; $i < count($whereage); $i++) {
    $ages = "SELECT COUNT(*) as fage FROM tbl_records WHERE fx_barangay = '$brgy' AND fx_gender = 'Female' AND fn_age BETWEEN $whereage[$i]";
    $arrage = mysqli_query($conn,$ages);
    $Fage=mysqli_fetch_assoc($arrage);
    $FemaleAgeArr[] = $Fage['fage'];
}
// COUNT ALIVE AND DEATH ARRAY
$life = array("alive", "dead");
// COUNT ALIVE
$alive = array();
    for ($i = 0; $i < count($whereage); $i++) {
    $stat = "SELECT COUNT(*) as cnt FROM tbl_records WHERE fx_barangay = '$brgy' AND life_status = '$life[0]' AND fn_age BETWEEN $whereage[$i]";
    $arrstatus = mysqli_query($conn,$stat);
    $status=mysqli_fetch_assoc($arrstatus);
    $alive[] = $status['cnt'];
}
// COUNT DEAD
$dead = array();
    for ($i = 0; $i < count($whereage); $i++) {
    $stat = "SELECT COUNT(*) as cnt FROM tbl_records WHERE fx_barangay = '$brgy' AND life_status = '$life[1]' AND fn_age BETWEEN $whereage[$i]";
    $arrstatus = mysqli_query($conn,$stat);
    $status=mysqli_fetch_assoc($arrstatus);
    $dead[] = $status['cnt'];
}
ob_end_clean();

// echo json_encode(array('male' => $MaleAgeArr, 'female' => $FemaleAgeArr, 'alive' => $alive, 'dead' => $dead));
echo json_encode($MaleAgeArr);

?>