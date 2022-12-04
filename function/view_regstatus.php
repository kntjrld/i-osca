<?php
session_start();
include("../conn/connection.php");
if(isset($_POST["uid"])) {
    $id = $_POST['uid'];

    // CHECK IF ID IS EXIST IN DB
    $check = "SELECT COUNT(*) as total FROM tbl_regstatus WHERE uid= '$id' ";
    $checkresult=mysqli_query($conn,$check);
    $total=mysqli_fetch_assoc($checkresult);
    $count = $total['total'];
    // CHECK IF ID IS EXIST IN DB
    $checkreg = "SELECT COUNT(*) as total FROM tbl_register WHERE uid= '$id' ";
    $regresult=mysqli_query($conn,$checkreg);
    $totalreg=mysqli_fetch_assoc($regresult);
    $countreg = $totalreg['total'];

    if($count == 1){
    // Query for display if exist
    $sql = "SELECT * FROM tbl_regstatus WHERE uid = '$id' ";  
    $result = mysqli_query($conn, $sql); 

    while($row = mysqli_fetch_array($result)){
        $firstname = $row['fx_firstname'];
        $lastname = $row['fx_lastname'];
        $initial = $row['fx_initial'];
        $date_application = $row['fd_application'];
        $statusbycluster = $row['fx_statusbycluster'];
        $statusbyadmin = $row['fx_statusbyadmin'];
        $date_acceptedbycluster = $row['fd_acceptedbycluster'];
        $date_acceptedbyadmin = $row['fd_acceptedbyadmin'];
        $uid = $row['uid'];
        $remarks = $row['fx_remarks'];
    }
    }elseif($countreg == 1){
    $sql = "SELECT * FROM tbl_register WHERE uid = '$id' ";  
    $result = mysqli_query($conn, $sql); 

    while($row = mysqli_fetch_array($result)){
        $firstname = $row['fx_firstname'];
        $lastname = $row['fx_lastname'];
        $initial = $row['fx_initial'];
        $date_application = $row['fd_application'];
        $statusbyadmin = 'Under review';
        $statusbycluster = 'Under review';
        $date_acceptedbycluster = 'Under review';
        $date_acceptedbyadmin = 'Under review';
        $uid = $row['uid'];
        $remarks = $row['fx_remarks'];
    }
    }else{
        $firstname = 'No data';
        $lastname = 'No data';
        $initial = 'No data';
        $date_application = 'No data';
        $statusbyadmin = 'No data';
        $statusbycluster = 'No data';
        $date_acceptedbycluster = 'No data';
        $date_acceptedbyadmin = 'No data';
        $uid = $id;
        $remarks = 'No data';
    }
}
?>

<div class="d-block text-center p-2">
    <p class="label" style="letter-spacing: 1px;">Application #<?php echo $id ?></p>
    <p style="font-weight: bold; font-size:20px; text-transform: uppercase; 
    <?php if($statusbyadmin == 'accepted' && $statusbycluster == 'accepted'){
                echo 'color: green;';
            }else if($statusbycluster == 'rejected'){
                echo 'color: red;';
            }else if($count == 1 && $statusbyadmin == 'rejected'){
                echo 'color: red;';
            }?>">
            <?php if($count == 1 && $statusbyadmin == 'N/A'){
                echo $statusbycluster;
            }else if($count == 1 && $statusbyadmin == 'accepted'){
                echo $statusbyadmin;
            }else if($countreg == 1){
                echo $statusbycluster;
            }else if($count == 1 && $statusbyadmin == 'Under review'){
                echo $statusbyadmin;
            }else if($count == 1 && $statusbyadmin == 'rejected'){
                echo 'rejected';
            }else{
                echo 'No record';
            }?></p>

    <div class="text-center">
        <p style="font-size:10px;">If no result or your data is incorrect, please check your id number</p>
    </div>
</div>
<div class="d-block">
    <div class="d-flex">
        <p class="label"
            <?php if($count == 0 && $countreg == 0){
                echo 'style="display:none;"';
            }?>>Hi Mr./Mrs. </p>
        <p style="margin-left:5px;
            <?php if($count == 0 && $countreg == 0){
                echo 'display:none';
            }?>">
            <?php echo $lastname, ', ' , $firstname ?></p>
    </div>
    <div class="d-flex">
            <p class="label" 
                <?php if($count == 0 && $countreg == 0){
                    echo 'style="display:none;"';
                }?>>Application date:</p>
            <p style="margin-left:5px;
                <?php if($count == 0 && $countreg == 0){
                    echo 'display:none';
                }?>"><?php echo $date_application ?></p>
    </div>
    <div class="d-flex">
            <p class="label" 
                <?php if($count == 0 && $countreg == 0){
                    echo 'style="display:none;"';
                }?>>Cluster President Status: </p>
            <p style="margin-left:5px; 
                <?php if($count == 0 && $countreg == 0){
                 echo 'display:none;';
                }?>"><?php echo $date_acceptedbycluster ?></p>
            <p style="margin-left:5px; 
                <?php if($statusbycluster == 'accepted'){
                    echo 'color: green;';
                }else if($statusbycluster == 'rejected'){
                    echo 'color:red;';
                }else if($count == 0 && $countreg == 0){
                    echo 'display:none;'; 
                }?>"><?php echo '- ', $statusbycluster ?></p>
    </div>
                
    <div class="d-flex">
            <p class="label" 
                <?php if($count == 0 && $countreg == 0){
                    echo 'style="display:none;"';
                }?>>Admin Status: </p>
            <p style="margin-left:5px; <?php if($count == 0 && $countreg == 0){
                    echo 'display:none;';
                }?>"><?php echo $date_acceptedbyadmin ?></p>
            <p style="margin-left:5px;
            <?php if($statusbyadmin == 'accepted'){
                    echo 'color: green;';
                }else if($statusbyadmin == 'rejected'){
                    echo 'color:red;';
                }else if($count == 0 && $countreg == 0){
                    echo 'display:none;'; 
                } ?>"><?php echo '- ', $statusbyadmin ?></p>
    </div>
    <div class="d-flex" style="<?php if($remarks == ''){display:none;} ?>">
        <p class="label">Remarks:</p>
        <p style="margin-left:5px; color:red;"><?php echo $remarks?></p>
    </div>
</div>