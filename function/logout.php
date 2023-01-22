<!-- kill/invalidate session -->
<?php 
    session_start();
    include "../conn/connection.php";

    //copy to activity log
    $user_name = $_SESSION['user_name'];
	date_default_timezone_set('Asia/Manila');
    $date = date("M d, Y - h:i a");	
	$action = 'Logout to system';		
	$act = "INSERT INTO tbl_activities(fd_date, fx_user, fx_action) VALUES('$date', '$user_name','$action')";
	$result = mysqli_query($conn, $act);

    if($result){
        session_unset();
        session_destroy();
        header("Location: ../index");
    }
?>