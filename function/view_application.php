<?php
session_start();
include("../conn/connection.php");

if(isset($_POST["s_id"])) {
    $id = $_POST['s_id'];

    $sql = "SELECT * FROM tbl_register WHERE uid = '$id' ";  
    $result = mysqli_query($conn, $sql); 

    while($row = mysqli_fetch_array($result)){
        $uid = $row['uid'];
        $idnumber = $row['fx_idnumber'];
        $idtype = $row['fx_idpresented'];
        $firstname = $row['fx_firstname'];
        $lastname = $row['fx_lastname'];
        $initial = $row['fx_initial'];
        $gender = $row['fx_gender'];
        $birthdate = $row['fd_birthdate'];
        $barangay = $row['fx_barangay'];
        $contact = $row['fx_contact'];
        $age = $row['fn_age'];
        $fileID = $row['fl_idpresented'];
        $fileFORM = $row['fl_form'];
        $applicationdate = $row['fd_application'];
    }
}
?>

<div class="d-flex">
    <div class="ms-auto"> <i class="fa fa-close close" data-bs-dismiss="modal"></i> </div>
</div>
<div class="container">
    <div class="d-flex">
        <div class="p-1">
            <h5 class="text-uppercase"><?php echo $applicationdate ?></h5>
            <h5 class="h6">Date of application</h5>
        </div>
        <div class="p-1 ms-auto">
            <h5 class="text-uppercase"><p style="font-size:12px; font-weight:bold;"><?php echo $uid ?></p></h5>
            <h5 class="h6 text-center"><p style="font-size:12px;">Application number</p></h5>
        </div>
    </div>

    <div class="mb-3">
        <hr class="new1">
    </div>
    <div class="text-center  mt-5">
        <div class="d-flex justify-content-between">
            <div class="pdl">
                <p class="xx ml-md-6">Presented ID number: <span class="xxx"><?php echo $idnumber ?></span>
            </div>
            <div class="pdr">
                <p class="xx">Presented ID type: <span class="xxx"><?php echo $idtype ?></span></p>
                </p>
            </div>

        </div>
    </div>

    <div class="text-center mt-2">
        <div class="d-flex justify-content-between">
            <div class="pdl">
                <p class="xx ml-md-6">Last name: <span class="xxx"><?php echo $lastname ?></span>
            </div>
            <div class="pdr">
                <p class="xx">First name: <span class="xxx"><?php echo $firstname ?></span></p>
                </p>
            </div>
            <div class="pdr">
                <p class="xx">Middle initial: <span class="xxx"><?php echo $initial ?></span></p>
                </p>
            </div>
        </div>
    </div>

    <div class="text-center mt-2">
        <div class="d-flex justify-content-between">
            <div class="pdl">
                <p class="xx ml-md-6">Birthday: <span class="xxx"><?php echo $birthdate ?></span>
            </div>
            <div class="pdr">
                <p class="xx">Gender: <span class="xxx"><?php echo $gender ?></span></p>
                </p>
            </div>
            <div class="pdr">
                <p class="xx">Barangay: <span class="xxx"><?php echo $barangay ?></span></p>
                </p>
            </div>
            <div class="pdr">
                <p class="xx">Age: <span class="xxx"><?php echo $age ?></span></p>
                </p>
            </div>
        </div>
    </div>
    <div class="mb-3">
        <hr class="new1">
    </div>
    <h6>Proof of Identity<span style="font-size:14px;">(Click to view/print)</span></h6>
    <div class="d-flex">

        <p class="xx">ID Presented: <a href="registration/<?php echo $fileID ?>" target="_blank"
                style="color:#0d6efd;"><?php echo $fileID ?></a></p>
        <p class="xx">Registration Form: <a href="registration/<?php echo $fileFORM ?>" target="_blank"
                style="color:#0d6efd;"><?php echo $fileFORM ?></a></p>
    </div>

    <div class="text-center mt-5">
        <p style="font-size: 12px;">All accepted application will proceed to next step and
            review by admin
        </p>
        <button class="btn btn-primary" id="<?php echo $id ?>">Accept</button>
        <input type="button" class="btn btn-danger" id="<?php echo $id ?>" value="Reject">
        <!-- <button class="btn btn-danger" id="reject">Reject</button> -->