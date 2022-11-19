<?php
session_start();
include("../conn/connection.php");

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
        $select_id = $_POST['s_id'];
        $password = generateRandomString();
        $hpassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "UPDATE users SET password = '$hpassword' WHERE user_id = '$select_id'";
        $result = mysqli_query($conn, $sql);

        if($result){
            // echo 'success';
        // header("Location: ../fxasdasjdk");
        
        }else{
            echo 'FAILED';
        }
?>

<div class="d-flex justify-content-center">
    <h5><?php echo $password ?></h1>
</div>
