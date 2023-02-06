<?php
ob_start();
session_start();
include('../conn/connection.php');
$ulevel = $_SESSION['user_level'];
$brgy = $_SESSION['fx_street'];
$year = $_GET["year"];
$m_num = array('01', '02', '03', '04', '05', '06', '07','08','09','10','11','12');

  // Write SQL query to retrieve data set 1
  if($ulevel == 'admin'){
    $registered = [];
    for ($i = 0; $i < count($m_num); $i++) {
      $request = "SELECT COUNT(*) as cnt FROM tbl_records WHERE YEAR(fd_started) = '$year' AND  MONTH(fd_started) = '$m_num[$i]'";
      $result1 = mysqli_query($conn,$request);
      $result2=mysqli_fetch_assoc($result1);
      $registered[] = $result2['cnt'];
    }
    
  // Write SQL query to retrieve data set 2
  $deceased = [];
  for ($i = 0; $i < count($m_num); $i++) {
      $request = "SELECT COUNT(*) as cnt FROM tbl_records WHERE YEAR(fd_started) = '$year' AND MONTH(fd_started) = '$m_num[$i]' AND life_status = 'dead'";
      $result1 = mysqli_query($conn,$request);
      $result2=mysqli_fetch_assoc($result1);
      $deceased[] = $result2['cnt'];
  }

  // Write SQL query to retrieve data set 3
  $active = [];
  for ($i = 0; $i < count($m_num); $i++) {
      $request = "SELECT COUNT(*) as cnt FROM tbl_records WHERE YEAR(fd_started) = '$year' AND MONTH(fd_started) = '$m_num[$i]' AND account_status = 'active'";
      $result1 = mysqli_query($conn,$request);
      $result2=mysqli_fetch_assoc($result1);
      $active[] = $result2['cnt'];
  }
  // Write SQL query to retrieve data set 4
  $inactive = [];
  for ($i = 0; $i < count($m_num); $i++) {
      $request = "SELECT COUNT(*) as cnt FROM tbl_records WHERE YEAR(fd_started) = '$year' AND MONTH(fd_started) = '$m_num[$i]' AND account_status = 'inactive'";
      $result1 = mysqli_query($conn,$request);
      $result2=mysqli_fetch_assoc($result1);
      $inactive[] = $result2['cnt'];
  }

  // Write SQL query to retrieve data set 5
  $pwd = [];
  for ($i = 0; $i < count($m_num); $i++) {
      $request = "SELECT COUNT(*) as cnt FROM tbl_records WHERE YEAR(fd_started) = '$year' AND MONTH(fd_started) = '$m_num[$i]' AND fx_pwd = 'yes'";
      $result1 = mysqli_query($conn,$request);
      $result2=mysqli_fetch_assoc($result1);
      $pwd[] = $result2['cnt'];
  }

  }else{
  // Write SQL query to retrieve data set 1
    $registered = [];
    for ($i = 0; $i < count($m_num); $i++) {
      $request = "SELECT COUNT(*) as cnt FROM tbl_records WHERE fx_barangay = '$brgy' AND YEAR(fd_started) = '$year' AND  MONTH(fd_started) = '$m_num[$i]'";
      $result1 = mysqli_query($conn,$request);
      $result2=mysqli_fetch_assoc($result1);
      $registered[] = $result2['cnt'];
    }
    
  // Write SQL query to retrieve data set 2
  $deceased = [];
  for ($i = 0; $i < count($m_num); $i++) {
      $request = "SELECT COUNT(*) as cnt FROM tbl_records WHERE fx_barangay = '$brgy' AND YEAR(fd_started) = '$year' AND MONTH(fd_started) = '$m_num[$i]' AND life_status = 'dead'";
      $result1 = mysqli_query($conn,$request);
      $result2=mysqli_fetch_assoc($result1);
      $deceased[] = $result2['cnt'];
  }
  // Write SQL query to retrieve data set 3
  $active = [];
  for ($i = 0; $i < count($m_num); $i++) {
      $request = "SELECT COUNT(*) as cnt FROM tbl_records WHERE fx_barangay = '$brgy' AND YEAR(fd_started) = '$year' AND MONTH(fd_started) = '$m_num[$i]' AND account_status = 'active'";
      $result1 = mysqli_query($conn,$request);
      $result2=mysqli_fetch_assoc($result1);
      $active[] = $result2['cnt'];
  }

  // Write SQL query to retrieve data set 4
  $inactive = [];
  for ($i = 0; $i < count($m_num); $i++) {
      $request = "SELECT COUNT(*) as cnt FROM tbl_records WHERE fx_barangay = '$brgy' AND YEAR(fd_started) = '$year' AND MONTH(fd_started) = '$m_num[$i]' AND account_status = 'inactive'";
      $result1 = mysqli_query($conn,$request);
      $result2=mysqli_fetch_assoc($result1);
      $inactive[] = $result2['cnt'];
  }

  // Write SQL query to retrieve data set 5
  $pwd = [];
  for ($i = 0; $i < count($m_num); $i++) {
      $request = "SELECT COUNT(*) as cnt FROM tbl_records WHERE fx_barangay = '$brgy' AND YEAR(fd_started) = '$year' AND MONTH(fd_started) = '$m_num[$i]' AND fx_pwd = 'yes'";
      $result1 = mysqli_query($conn,$request);
      $result2=mysqli_fetch_assoc($result1);
      $pwd[] = $result2['cnt'];
  }

  }

  // Combine data sets into a single JSON object
  $jsonData = [
    'registered' => $registered,
    'deceased' => $deceased,
    'active' => $active,
    'inactive' => $inactive,
    'pwd' => $pwd
  ];

 // Return the JSON data
 ob_end_clean();
 header('Content-Type: application/json');
echo json_encode($jsonData);


?>