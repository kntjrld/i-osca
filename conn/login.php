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
            	$_SESSION['user_id'] = $row['user_id'];
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