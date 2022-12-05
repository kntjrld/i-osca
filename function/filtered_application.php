<?php
session_start();
include("../conn/connection.php");

if(isset($_POST["s_id"])) {
    $id = $_POST['s_id'];
    $sql = "SELECT * FROM tbl_regstatus WHERE uid = '$id' ";  
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
        $pwd = $row['fx_pwd'];
        $fileID = $row['fl_idpresented'];
        $fileFORM = $row['fl_form'];
        $applicationdate = $row['fd_application'];
        $accepteddate = $row['fd_acceptedbycluster'];
    }
}
?>
<input type="hidden" id="uid" name="uid" class="form-control" value="<?php echo $uid ?>">

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
            <h5 class="text-uppercase">
                <p style="font-size:12px; font-weight:bold;"><?php echo $uid ?></p>
            </h5>
            <h5 class="h6 text-center">
                <p style="font-size:12px;">Application number</p>
            </h5>
        </div>
    </div>

    <div class="mb-3">
        <hr class="new1">
    </div>
    <div class="row">
        <div class="col">
            <label class="form-label required">ID Presented Number</label>
            <input type="text" name="idnumber" id="idnumber" class="form-control" placeholder="" aria-label="ID number"
                value="<?php echo $idnumber ?>" disabled>
        </div>
        <div class="col">
            <label class="form-label required">ID Presented type</label>
            <input type="text" name="idpresented" id="idpresented" class="form-control" placeholder=""
                aria-label="ID Presented" value="<?php echo $idtype ?>" disabled>
        </div>

        <div class="row">
            <div class="col">
                <label class="form-label required">Fist Name</label>
                <input type="text" name="firstname" id="firstname" class="form-control" placeholder=""
                    aria-label="First name" value="<?php echo $firstname ?>" disabled>
            </div>
            <div class="col">
                <label class="form-label required">Last Name</label>
                <input type="text" name="lastname" id="lastname" class="form-control" placeholder=""
                    aria-label="Last name" value="<?php echo $lastname ?>" disabled>
            </div>
            <div class="col col-lg-2">
                <label class="form-label required">I.N</label>
                <input type="text" name="initial" id="initial" class="form-control" placeholder=""
                    aria-label="Middle name" value="<?php echo $initial ?>" disabled>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label class="form-label required">Birthday</label>
                <input type="date" name="bday" id="bday" class="form-control" placeholder="" aria-label="Birthday"
                    value="<?php echo $birthdate ?>" disabled>
            </div>
            <div class="col">
                <label class="form-label required">Gender</label>
                <input type="text" name="gender" id="gender" class="form-control" placeholder="" aria-label="Gender"
                    value="<?php echo $gender ?>" disabled>
            </div>
            <div class="col">
                <label class="form-label required">Barangay</label>
                <input type="text" name="barangay" id="barangay" class="form-control" placeholder=""
                    aria-label="Barangay" value="<?php echo $barangay ?>" disabled>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label class="form-label required">Contact Number</label>
                <input type="text" name="contact" id="contact" class="form-control" placeholder="" aria-label="Contact"
                    value="<?php echo $contact ?>" disabled>
            </div>
            <div class="col">
                <label class="form-label required">Age</label>
                <input type="text" name="age" id="age" class="form-control" placeholder="" aria-label="Age"
                    value="<?php echo $age ?>" disabled>
            </div>
            <div class="col">
                <label class="form-label required">PWD</label>
                <input type="text" name="pwd" id="pwd" class="form-control" placeholder="" aria-label="pwd"
                    value="<?php echo $pwd ?>" disabled>
            </div>
        </div>
        <div class="mb-3">
            <label for="remarks" class="form-label">Remarks <span style="font-size:12px;">*leave a remarks if this application is rejected</span></label>
            <textarea class="form-control" name="remarks" id="remarks" maxlength="80" rows="1" placeholder="reason"></textarea>
        </div>

        <div class="text-center mt-5">
            <p style="font-size: 12px;">All accepted application by admin will officially approve and added to all
                records
            </p>

            <button class="add btn-add" id="<?php echo $id ?>">Add to record</button>
            <button class="add btn-reject" id="<?php echo $id ?>">Reject</button>

        </div>