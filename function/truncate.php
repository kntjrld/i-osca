<?php
session_start();
include("../conn/connection.php");


$truncate = "TRUNCATE TABLE tbl_activities";
$result = mysqli_query($conn, $truncate);
            
if($result !== FALSE)
{
   header("Location: ../activities");
}
else
{
   header("Location: ../activities");
}