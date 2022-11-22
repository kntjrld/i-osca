<?php
ob_start();
include('../conn/connection.php');

if(isset($_POST['s_id'])) {

	$sql = "SELECT * FROM tbl_records WHERE fx_id='".$_POST['s_id']."'";
	$result = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));	

	while($row = mysqli_fetch_array($result)){
        
        $data['fx_id'] = $row['fx_id'];
        $data['fn_status'] = $row['fn_status'];
        $data['fx_firstname'] = $row['fx_firstname'];
        $data['fx_lastname'] = $row['fx_lastname'];
        $data['fx_middlename'] = $row['fx_middlename'];
        $data['fn_pension'] = $row['fn_pension'];
        $data['fd_date'] = $row['fd_date'];
    }

    ob_end_clean();
    echo json_encode($data);

}elseif(isset($_POST['restatus'])) {
    $sql = "UPDATE tbl_records SET fn_status = 'Pending' WHERE fn_status = 'Received'";
	$result = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));	
}
?>