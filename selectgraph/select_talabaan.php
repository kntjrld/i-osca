<?php
$brgy_talabaan = '';

$brgy = array("Barangay 1", "Barangay 2", "Barangay 3", "Barangay 4", "Barangay 5", "Barangay 6", "Barangay 7", "Barangay 8", "Balansay"
,"Fatima", "Payompon", "San Luis (Ligang)", "Talabaan", "Tangkalan", "Tayamaan");

//FILTER AGE 
$whereage = array("60 AND 65", "66 AND 70", "71 AND 1000");
// FILTER AGE FOR MALE
$MaleAgeArr = array();
    for ($i = 0; $i < count($whereage); $i++) {
    $ages = "SELECT COUNT(*) as mage FROM tbl_records WHERE fx_barangay = '$brgy[12]' AND fx_gender = 'Male' AND fn_age BETWEEN $whereage[$i]";
    $arrage = mysqli_query($conn,$ages);
    $Mage=mysqli_fetch_assoc($arrage);
    $MaleAgeArr[] = $Mage['mage'];
}
// FILTER AGE FOR FEMALE
$FemaleAgeArr = array();
    for ($i = 0; $i < count($whereage); $i++) {
    $ages = "SELECT COUNT(*) as fage FROM tbl_records WHERE fx_barangay = '$brgy[12]' AND fx_gender = 'Female' AND fn_age BETWEEN $whereage[$i]";
    $arrage = mysqli_query($conn,$ages);
    $Fage=mysqli_fetch_assoc($arrage);
    $FemaleAgeArr[] = $Fage['fage'];
}
// COUNT ALIVE AND DEATH ARRAY
$life = array("alive", "dead");
// COUNT ALIVE
$alive = array();
    for ($i = 0; $i < count($whereage); $i++) {
    $stat = "SELECT COUNT(*) as cnt FROM tbl_records WHERE fx_barangay = '$brgy[12]' AND life_status = '$life[0]' AND fn_age BETWEEN $whereage[$i]";
    $arrstatus = mysqli_query($conn,$stat);
    $status=mysqli_fetch_assoc($arrstatus);
    $alive[] = $status['cnt'];
}
// COUNT DEAD
$dead = array();
    for ($i = 0; $i < count($whereage); $i++) {
    $stat = "SELECT COUNT(*) as cnt FROM tbl_records WHERE fx_barangay = '$brgy[12]' AND life_status = '$life[1]' AND fn_age BETWEEN $whereage[$i]";
    $arrstatus = mysqli_query($conn,$stat);
    $status=mysqli_fetch_assoc($arrstatus);
    $dead[] = $status['cnt'];
}

// LABEL FOR EACH BARANGAY
$agelabel = array("60 - 65", "66 - 70", "71 - Above");
// DISPLAY ARRAY(BARANGAY, MALE, FEMALE) TO GRAPH AND EACH BARANGAY ANALYTICS
for ($i = 0; $i < count($agelabel); $i++) {
    $brgy_talabaan .= "{ y:'$agelabel[$i]', Male:'$MaleAgeArr[$i]', Female:'$FemaleAgeArr[$i]', Alive:'$alive[$i]', Dead:'$dead[$i]'}, ";
}
?>