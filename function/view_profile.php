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


<div>
    <div class="d-flex justify-content-center p-2">
        <img src="image/<?php echo $select_img ?>" class="view_img" />
    </div>
    <div class="d-flex justify-content-center">
        <h5><?php echo $select_fullname ?></h1>
    </div>
    <div class="d-block">
        <div class="d-flex">
            <p class="label">Username:</p>
            <p><?php echo $select_username ?></p>
        </div>
        <div class="d-flex">
            <p class="label">Email:</p>
            <p><?php echo $select_email ?></p>
        </div>
        <div class="d-flex">
            <p class="label">Contact Number:</p>
            <p><?php echo $select_contactnum ?></p>
        </div>
        <div class="d-flex">
            <p class="label">Address:</p>
            <p><?php echo $select_street, ', ' ,$select_municipality ?></p>
        </div>
        <div class="d-flex">
            <p class="label">User type:</p>
            <p><?php echo $select_userlevel ?></p>
        </div>
    </div>
</div>