<!-- Checker using ajax -->
<?php
  include('connection.php'); 

  if(isset($_POST['user_name'])) {
    $user_name = $_POST['user_name'];
    $query = "SELECT count(*) as cnt FROM users WHERE user_name = '".$user_name."'";
    $result = mysqli_query($conn,$query); 
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 
    if($row['cnt']== 0){
    } else {
      echo '<span style="font-size:12px">Username <b>'.$user_name.'</b> is already taken!</span>';
    }
  }else{
    if(isset($_POST['sID'])) {
      $s_id = $_POST['sID'];
      $query = "SELECT count(*) as cnt FROM tbl_records WHERE fx_id = '".$s_id."'";
      $result = mysqli_query($conn,$query); 
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   
      if($row['cnt']== 0){
      } else {
        echo '<span style="font-size:12px; color: red;"><b>ID</b> is already exist in database!</span>';
      }
    }

  }
?>