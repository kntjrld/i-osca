<?php
session_start();
include("../conn/connection.php");
if(isset($_POST["s_id"])) {
    $id = $_POST['s_id'];

    $sql = "SELECT * FROM users WHERE user_id = '$id' ";  
    $result = mysqli_query($conn, $sql); 

    while($row = mysqli_fetch_array($result)){
        $select_id = $row['user_id'];
        $select_img = $row['fm_img'];
        $select_username = $row['user_name'];
        $select_fullname = $row['full_name'];
        $select_email = $row['email'];
        $select_contactnum = $row['contact_num'];
        $select_street = $row['fx_street'];
        $select_municipality = $row['fx_municipality'];
        $select_userlevel = $row['user_level'];
    }
}
?>

<input type="hidden" id="s_id" name="s_id" class="form-control" value="<?php echo $select_id ?>">
<input type="hidden" id="user_name" name="user_name" class="form-control" value="<?php echo $select_username ?>">
<input type="hidden" id="user_type" name="user_type" class="form-control" value="<?php echo $select_userlevel ?>">

<div>
    <div class="d-flex justify-content-center p-2">
        <img src="image/<?php echo $select_img ?>" class="view_img" />
    </div>
    <div class="d-flex justify-content-center">
        <h5 style="font-weight:900;"><?php echo $select_fullname ?></h1>
    </div>
    <div class="d-flex">

        <div class="d-block p-2 m-2">
            <p class="label">Username:</p>
            <p class="label">Email:</p>
            <p class="label">Contact Number:</p>
            <p class="label">Address:</p>
            <p class="label">User level:</p>

        </div>
        <div class="d-block p-2 m-2">
            <p class="val"><?php echo $select_username ?></p>
            <p class="val"><?php echo $select_email ?></p>
            <p class="val"><?php echo $select_contactnum ?></p>
            <p class="val"><?php 
            if($select_userlevel == 'admin'){
                echo $select_municipality;
            }else{
                echo $select_street, ', ' ,$select_municipality;
            }           

            ?></p>
            <p class="val"><?php echo $select_userlevel ?></p>

        </div>

    </div>
</div>