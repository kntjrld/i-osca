<?php
session_start();
include('connection.php');

if(isset($_POST['submit'])){
    $fx_id = $_POST['sID'];
    $fx_firstname = $_POST['fistname'];
    $fx_lastname = $_POST['lastname'];
    $fx_middlename = $_POST['middlename'];
    $fx_contact = $_POST['contact'];
    $fd_birthdate = $_POST['birthdate'];
    $fx_gender = $_POST['sex'];
    $fx_barangay = $_POST['barangay'];
    $fn_age = $_POST['age'];
    $check_value = $_POST['status'];
    $pension = $_POST['pension'];
    
    $sql = "INSERT INTO tbl_records(fx_id, fx_firstname, fx_lastname, fx_middlename, fx_contact, fd_birthdate,  fx_gender, fx_barangay, fn_age, fn_pension, fn_status)
    VALUES('$fx_id',UPPER('$fx_firstname'),UPPER('$fx_lastname'),UPPER('$fx_middlename'),'$fx_contact','$fd_birthdate', '$fx_gender', '$fx_barangay' ,'$fn_age', '$pension','$check_value')";
    $result = mysqli_query($conn, $sql);
    if($result){
        // echo "success";
        $_SESSION['success'] = "Added successfully";
        					
                date_default_timezone_set('Asia/Manila');
                $date = date("M d, Y - h:i a");
                $user_name = $_SESSION['user_name'];					
				$act = "INSERT INTO tbl_activities(fd_date, fx_user, fx_action) VALUES('$date', '$user_name','Added a record with a senior id #$fx_id')";
				$result = mysqli_query($conn, $act);
				

        header("Location: ../records.php");
	}else{
        $_SESSION['unsuccess'] = "Not Added";
        header("Location: ../records.php");
    }
}else if(isset($_POST['update'])){
    
    $get_id = $_SESSION['user_id'];
    $update_firstname = $_POST['fullname'];
    $update_username = $_POST['username'];
    $update_phone = $_POST['phone'];
    $update_email = $_POST['email'];
    $update_street = $_POST['street'];
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

    $sql = "UPDATE users SET fm_img = '$filename', full_name ='$update_firstname', user_name = '$update_username', email = '$update_email', contact_num = '$update_phone',
    fx_street = '$update_street', fx_municipality = '$update_city' WHERE user_id = '$get_id' ";
    $result = mysqli_query($conn, $sql);
    
    if($result){
        // echo "success";
        $_SESSION['profile'] = "Added successfully";
        $_SESSION['full_name'] = $update_firstname;
        $_SESSION['user_name'] = $update_username;
        $_SESSION['email'] = $update_email;
        $_SESSION['contact_num'] = $update_phone;
        $_SESSION['fx_street'] = $update_street;
        $_SESSION['fx_municipality'] = $update_city;
    
        if (isset($_FILES["simg"]["tmp_name"]) && $_FILES["simg"]["tmp_name"] != "") {
            // upload file and save image name in variable like $imagename 
            move_uploaded_file($tempname,$filePathWithFileName);
            $_SESSION['fm_img'] = $filename;
    
            }else{
            // if image not upload this code will execute
            $imagename = $_POST['hiddenImage'];
            }
        header("Location: ../profile.php");
	}else{
        $_SESSION['xprofile'] = "Not Added";
        header("Location: ../profile.php");

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
            header("Location: ../profile.php");
        }else{
            $_SESSION['xxx'] = "Something went wrong";
            header("Location: ../profile.php");
        }
    }     
?>