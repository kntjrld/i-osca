<?php
session_start();
include('connection.php');

if(isset($_POST['update'])){
    
    $get_id = $_SESSION['user_id'];
    $update_firstname = $_POST['fullname'];
    // $update_username = $_POST['username']; //DON'T 555555
    $update_phone = $_POST['phone'];
    $update_email = $_POST['email'];
    // $update_street = $_POST['street']; //DON'T 555555
    $update_city = $_POST['city'];

    
    // UPLOAD IMAGE - status(working 11/17/2022)
  
    if (isset($_FILES["simg"]["tmp_name"]) && $_FILES["simg"]["tmp_name"] != "") {
        // upload file and save image name in variable like $imagename 
    $filename = $_FILES["simg"]["name"];
    $tempname = $_FILES["simg"]["tmp_name"];
    
    $filepath = "../image/";
    $filePathWithFileName = "../image/".$filename;
  
    if (!file_exists($filepath)) {
          mkdir($filepath, 0777);
    } 
        move_uploaded_file($tempname,$filePathWithFileName);
        $_SESSION['fm_img'] = $filename;

    }else{
        // if image not upload this code will execute
        $filename = $_POST['hiddenImage'];
    }

    $sql = "UPDATE users SET fm_img = '$filename', full_name ='$update_firstname', email = '$update_email', contact_num = '$update_phone',
    fx_municipality = '$update_city' WHERE user_id = '$get_id' ";
    $run = mysqli_query($conn, $sql);
    
    if($run){
        // echo "success";
        $_SESSION['profile'] = "Added successfully";
        $_SESSION['full_name'] = $update_firstname;
        $_SESSION['email'] = $update_email;
        $_SESSION['contact_num'] = $update_phone;
        $_SESSION['fx_municipality'] = $update_city;
    
        if (isset($_FILES["simg"]["tmp_name"]) && $_FILES["simg"]["tmp_name"] != "") {
            // upload file and save image name in variable like $imagename 
            move_uploaded_file($tempname,$filePathWithFileName);
            $_SESSION['fm_img'] = $filename;
    
            }else{
            // if image not upload this code will execute
            $imagename = $_POST['hiddenImage'];
            }
        header("Location: ../profile");
	}else{
        $_SESSION['xprofile'] = "Not Added";
        header("Location: ../profile");

    }    
}elseif(isset($_POST['changepassword'])){
        
    $get_id = $_SESSION['user_id'];
    $dbpassword = $_SESSION['password'];
    $oldpassword = $_POST['pass'];
    $newpassword = password_hash($_POST['newpass'], PASSWORD_DEFAULT);
    $repassword = password_hash($_POST['repass'], PASSWORD_DEFAULT);

    if(password_verify($oldpassword, $dbpassword) || password_verify($newpassword, $repassword)){
        $sql = "UPDATE users SET password = '$repassword' WHERE user_id = '$get_id'";
        $result = mysqli_query($conn, $sql);

        $_SESSION['changed'] = "Password Changed successfully";
        $_SESSION['password'] = $repassword;
        header("Location: ../profile");
    }else{
        $_SESSION['xxx'] = "Something went wrong";
        header("Location: ../profile");
    }
}

?>