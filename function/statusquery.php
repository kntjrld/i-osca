<?php
session_start();
ob_start();
include('../conn/connection.php');

if(isset($_POST['s_id'])) {

    $uid = $_POST['s_id'];
	$sql = "SELECT * FROM tbl_records WHERE uid ='$uid'";
	$result = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));	

	while($row = mysqli_fetch_array($result)){
        
        $data['fx_id'] = $row['fx_id'];
        $data['fn_status'] = $row['fn_status'];
        $data['fx_firstname'] = $row['fx_firstname'];
        $data['fx_lastname'] = $row['fx_lastname'];
        $data['fx_middlename'] = $row['fx_middlename'];
        $data['fx_pwd'] = $row['fx_pwd'];
        $data['fn_pension'] = $row['fn_pension'];
        $data['fd_pension'] = $row['fd_pension'];
        $data['life_status'] = $row['life_status'];
        $data['fn_age'] = $row['fn_age'];

    }
    
    ob_end_clean();
    echo json_encode($data);
}
?>