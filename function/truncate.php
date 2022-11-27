<?php
session_start();
include("../conn/connection.php");

if(isset($_POST['delete'])) {

   $truncate = "TRUNCATE TABLE tbl_activities";
   $result = mysqli_query($conn, $truncate);

}

