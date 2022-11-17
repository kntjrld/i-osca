<?php 
session_start();

include "connection.php";

if (isset($_POST['user_name']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$user_name = validate($_POST['user_name']);
	$pass = validate($_POST['password']);

	if (empty($user_name)) {
		header("Location: ../index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: ../index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_name='$user_name'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $user_name && password_verify($pass, $row['password'])) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['password'] = $row['password'];
            	$_SESSION['full_name'] = $row['full_name'];
            	$_SESSION['contact_num'] = $row['contact_num'];
            	$_SESSION['user_id'] = $row['user_id'];
            	$_SESSION['user_level'] = $row['user_level'];
            	$_SESSION['fx_street'] = $row['fx_street'];
            	$_SESSION['fx_municipality'] = $row['fx_municipality'];
            	$_SESSION['role_description'] = $row['role_description'];
            	$_SESSION['fm_img'] = $row['fm_img'];
				
				$user_name = $row['user_name'];
				date_default_timezone_set('Asia/Manila');
           		$date = date("M d, Y - h:i a");					
				$act = "INSERT INTO tbl_activities(fd_date, fx_user, fx_action) VALUES('$date', '$user_name','Logged in system')";
				$result = mysqli_query($conn, $act);
				
				
            	header("Location: ../dashboard.php");
		        exit();
            }else{
				header("Location: ../index.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: ../index.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: ../index.php");
	exit();
}