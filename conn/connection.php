<!-- php connection to db -->
<?php
    $dbhost = "localhost";
    $user_name = "root";
    $password = "";
    $dbname = "iosca";

        $conn = mysqli_connect($dbhost, $user_name, $password, $dbname);
        
         if (!$conn) {
           echo "Connection failed";
        }
          
?>