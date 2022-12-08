<?php
session_start();
include("../conn/connection.php");
if(isset($_POST["uid"])) {
    $id = $_POST['uid'];

    $sql = "SELECT * FROM tbl_records WHERE uid = '$id' ";  
    $result = mysqli_query($conn, $sql); 

    while($row = mysqli_fetch_array($result)){
        $firstname = $row['fx_firstname'];
        $lastname = $row['fx_lastname'];
        $initial = $row['fx_middlename'];
        $barangay = $row['fx_barangay'];
        $pension = $row['fn_pension'];
        $latest_date = $row['fd_pension'];
        $status = $row['fn_status'];
    }

    // CHECK IF ID IS EXIST IN DB
    $check = "SELECT COUNT(*) as total FROM tbl_records WHERE uid= '$id' ";
    $request=mysqli_query($conn,$check);
    $cnt=mysqli_fetch_assoc($request);
    $count = $cnt['total'];
}
?>

<div class="d-block text-center p-2">
    <p class="label" style="letter-spacing: 1px;">Application #<?php echo $id ?></p>
    <p style="font-weight: bold; font-size:20px; text-transform: uppercase; 
    <?php 
    if($status == 'Received'){
        echo 'color: green;';
    }
    ?>">
        <?php if($count == 0){
            echo 'No record';
        }else{
            echo $status;
        } ?>
    </p>
    <div class="text-center">
        <p style="font-size:10px;">If no result or your data is incorrect, please check your id number</p>
    </div>
</div>
<div class="d-block">
    <div class="d-flex">
        <p class="label" style="font-weight:bold;
        <?php
        if($count == 0){
            echo 'display:none;';
        } 
        ?>">Fullname:</p>
        <p style="margin-left:5px;
        <?php
        if($count == 0){
            echo 'display:none;';
        } 
        ?>"><?php echo $lastname,', ' ,$firstname,', ' ,$initial;?></p>
    </div>
    <div class="d-flex">
        <p class="label" style="font-weight:bold;
        <?php
        if($count == 0){
            echo 'display:none;';
        } 
        ?>">Barangay:</p>
        <p style="margin-left:5px;
        <?php
        if($count == 0){
            echo 'display:none;';
        } 
        ?>"><?php echo $barangay;?></p>
    </div>
    <div class="d-flex">
        <p class="label" style="font-weight:bold;
        <?php
        if($count == 0){
            echo 'display:none;';
        } 
        ?>">Latest Pension Amount:</p>
        <p style="margin-left:5px;
        <?php
        if($count == 0){
            echo 'display:none;';
        } 
        ?>"><?php echo number_format($pension);?></p>
    </div>
    <div class="d-flex">
        <p class="label" style="font-weight:bold;
        <?php
        if($count == 0){
            echo 'display:none;';
        } 
        ?>">Latest Date:</p>
        <p style="margin-left:5px;
        <?php
        if($count == 0){
            echo 'display:none;';
        } 
        ?>"><?php 
        if($latest_date == '0000-00-00'){
            echo 'Not updated';
        }else{
        echo $latest_date;
        }
        ?></p>
        <p style="margin-left:5px; font-size:10px; margin-top:5px;
        <?php 
        if($count == 0){
            echo 'display:none;';
        }elseif($latest_date == '0000-00-00'){   

        }else{
            echo 'display:none;';
        }
        ?>
        ">(Maybe your application id is newly accepted.)</p>
    </div>
</div>