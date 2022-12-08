<?php
include("../conn/connection.php");
if(isset($_POST["s_id"])) {
    $uid = $_POST['s_id'];

    $sql = "SELECT * FROM tbl_records WHERE uid = '$uid' ";  
    $result = mysqli_query($conn, $sql); 

    while($row = mysqli_fetch_array($result)){
        $id = $row['fx_id'];
        $update_firstname = $row['fx_firstname'];
        $update_lastname = $row['fx_lastname'];
        $update_midlle = $row['fx_middlename'];
        $update_contact = $row['fx_contact'];
        $update_birthdate = $row['fd_birthdate'];
        $update_sex = $row['fx_gender'];
        $update_barangay = $row['fx_barangay'];
        $update_age = $row['fn_age'];
        $update_pension = $row['fn_pension'];
        $update_status = $row['fn_status'];
        $life_status = $row['life_status'];
        $pwd = $row['fx_pwd'];
        $account_status = $row['account_status'];
        $started = $row['fd_started'];
        $remarks = $row['fx_remarks'];
    }
}
?>

<!-- DISPLAY DATA INTO MODAL -->

<div class="modal-header d-flex">
    <div class="d-block text-center">
        <h5 class="modal-title">Update Record</h5>
        <p style="font-size:10px;">#<?php echo $uid?></p>
    </div>
    <div class="ms-auto"> <i class="fa fa-close close" style="color:#000;" data-bs-dismiss="modal"></i> </div>
</div>

<input type="hidden" id="uid" name="uid" class="form-control" value="<?php echo $uid ?>">

<div class="mb-3">
    <label class="form-label required">ID Number</label>
    <input type="text" id="s_id" name="s_id" class="form-control" value="<?php echo $id ?>">
</div>
<!-- Fist , last and middle name -->
<div class="row">
    <div class="col">
        <label class="form-label required">Fist Name</label>
        <input type="text" name="update_firstname" id="update_firstname" class="form-control" placeholder="Juan"
            aria-label="First name" value="<?php echo $update_firstname ?>">
    </div>
    <div class="col">
        <label class="form-label required">Last Name</label>
        <input type="text" name="update_lastname" id="update_lastname" class="form-control" placeholder="Dela cruz"
            aria-label="Last name" value="<?php echo $update_lastname ?>">
    </div>
    <div class="col col-lg-2">
        <label class="form-label required">I.N</label>
        <input type="text" name="update_middlename" id="update_middlename" class="form-control" placeholder="T"
            aria-label="Middle name" value="<?php echo $update_midlle ?>">
    </div>
</div>
<!-- Contacts  -->
<div class="mb-2">
    <label class="form-label required">Contact number</label>
    <input type="num" name="update_contact" id="update_contact" class="form-control"
        value="<?php echo $update_contact ?>">
</div>
<!-- Date of birth -->

<div class="row">
    <div class="col">
        <div class="mb-2">
            <label class="form-label required">Birthdate</label>
            <input type="date" name="update_birthdate" id="update_birthdate" class="form-control"
                value="<?php echo $update_birthdate ?>">
        </div>
    </div>
    <div class="col">
        <label class="form-label">Sex</label>
        <select class="form-select" id="update_sex" name="update_sex">
            <option value="Male" <?php if($update_sex=="Male") echo 'selected="selected"'; ?>>Male</option>
            <option value="Female" <?php if($update_sex=="Female") echo 'selected="selected"'; ?>>Female</option>
        </select>
    </div>
    <div class="col">
        <div class="mb-2">
            <label class="form-label required">Started date</label>
            <input type="date" name="started" id="started" class="form-control" value="<?php echo $started ?>" disabled>
        </div>
    </div>
</div>
<!-- Brgy, age and status -->
<div class="row">
    <div class="col">
        <label class="form-label">Barangay</label>
        <select class="form-select" id="update_barangay" name="update_barangay" style="width: auto;"
            value="<?php echo $update_barangay ?>">
            <option value="Balansay" <?php if($update_barangay=="Balansay") echo 'selected="selected"'; ?>>Balansay
            </option>
            <option value="Barangay 1" <?php if($update_barangay=="Barangay 1") echo 'selected="selected"'; ?>>Barangay
                1</option>
            <option value="Barangay 2" <?php if($update_barangay=="Barangay 2") echo 'selected="selected"'; ?>>Barangay
                2</option>
            <option value="Barangay 3" <?php if($update_barangay=="Barangay 3") echo 'selected="selected"'; ?>>Barangay
                3</option>
            <option value="Barangay 4" <?php if($update_barangay=="Barangay 4") echo 'selected="selected"'; ?>>Barangay
                4</option>
            <option value="Barangay 5" <?php if($update_barangay=="Barangay 5") echo 'selected="selected"'; ?>>Barangay
                5</option>
            <option value="Barangay 6" <?php if($update_barangay=="Barangay 6") echo 'selected="selected"'; ?>>Barangay
                6</option>
            <option value="Barangay 7" <?php if($update_barangay=="Barangay 7") echo 'selected="selected"'; ?>>Barangay
                7</option>
            <option value="Barangay 8" <?php if($update_barangay=="Barangay 8") echo 'selected="selected"'; ?>>Barangay
                8</option>
            <option value="Fatima" <?php if($update_barangay=="Fatima") echo 'selected="selected"'; ?>>Fatima</option>
            <option value="Payompon" <?php if($update_barangay=="Payompon") echo 'selected="selected"'; ?>>Payompon
            </option>
            <option value="San Luis (Ligang)"
                <?php if($update_barangay=="San Luis (Ligang)") echo 'selected="selected"'; ?>>San Luis (Ligang)
            </option>
            <option value="Talabaan" <?php if($update_barangay=="Talabaan") echo 'selected="selected"'; ?>>Talabaan
            </option>
            <option value="Tangkalan" <?php if($update_barangay=="Tangkalan") echo 'selected="selected"'; ?>>Tangkalan
            </option>
            <option value="Tayamaan" <?php if($update_barangay=="Tayamaan") echo 'selected="selected"'; ?>>Tayamaan
            </option>
        </select>
    </div>
    <div class="col">
        <label class="form-label required">Age</label>
        <input type="number" id="update_age" name="update_age" class="form-control" placeholder=" > 59" aria-label="Age"
            value="<?php echo $update_age ?>">
    </div>
    <div class="col">
        <label class="form-label required">Pension Amount</label>
        <input type="text" id="update_pension" name="update_pension" class="form-control"
            value="<?php echo number_format($update_pension) ?>" disabled>
    </div>
</div>

<!-- Pension $$$ -->

<div class="d-flex justify-content-between p-2">
    <div class="d-block">
        <label for="">Pension Status</label> <br>
        <input class="form-check-input" id="update_status" type="radio" name="update_status"
            <?php if($update_status=="Received") {echo "checked";}?> value="Received" />
        <label class="form-check-label" for="status">Received</label></br>

        <input class="form-check-input" id="update_status" type="radio" name="update_status"
            <?php if($update_status=="Pending") {echo "checked";}?> value="Pending" />
        <label class="form-check-label" for="status">Pending</label>
    </div>
    <div class="d-block">
        <label for="">PWD</label> <br>
        <input class="form-check-input" id="pwd" type="radio" name="pwd" <?php if($pwd=="Yes") {echo "checked";}?>
            value="Yes" />
        <label class="form-check-label" for="pwd">Yes</label></br>

        <input class="form-check-input" id="pwd" type="radio" name="pwd" <?php if($pwd=="No") {echo "checked";}?>
            value="No" />
        <label class="form-check-label" for="pwd">No</label>
    </div>
    <div class="d-block">
        <label for="">Life Status</label> <br>
        <input class="form-check-input" id="life_status" type="radio" name="life_status"
            <?php if($life_status=="alive") {echo "checked";}?> value="alive" />
        <label class="form-check-label" for="life_status">Alive</label></br>

        <input class="form-check-input" id="life_status" type="radio" name="life_status"
            <?php if($life_status=="dead") {echo "checked";}?> value="dead" />
        <label class="form-check-label" for="life_status">Death</label>
    </div>

    <div class="d-block">
        <label for="">Record Status</label> <br>
        <input class="form-check-input" id="account_status" type="radio" name="account_status"
            <?php if($account_status=="active") {echo "checked";}?> value="active" />
        <label class="form-check-label" for="account_status">Active</label></br>

        <input class="form-check-input" id="account_status" type="radio" name="account_status"
            <?php if($account_status=="inactive") {echo "checked";}?> value="inactive" />
        <label class="form-check-label" for="account_status">Inactive</label>
    </div>
</div>
<div class="mb-3" id="div-remarks" style="<?php if($life_status == 'alive' && $account_status == 'active'){echo 'display:none;';}?>">
    <label for="remarks" class="form-label">Remarks <span style="font-size:12px;">*Leave a short remarks if inactive or dead</span></label>
    <textarea class="form-control" name="remarks" id="remarks" maxlength="30" rows="1"><?php echo $remarks ?></textarea>
</div>