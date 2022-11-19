<?php
session_start();
include("../conn/connection.php");

    $select_id = $_POST['s_id'];
    $sql = "DELETE FROM users WHERE user_id = '$select_id'";
    $result = mysqli_query($conn, $sql);