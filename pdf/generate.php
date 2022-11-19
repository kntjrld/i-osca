<?php
session_start();
include("../conn/connection.php");
require('fpdf.php');  

if (isset($_SESSION['user_id']) && isset($_SESSION['user_name']) && ($_SESSION["user_level"]=='admin')) {

        
        function generateRandomString($length = 10) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }
        $adname = 'iosca-admin-tempcredentials';
        $stname = 'iosca-staff-tempcredentials';
        $user_level = $_POST['user'];
        $img = 'user.png';
        $username = generateRandomString();
        $fullname = 'N/A';
        $email = 'N/A';
        $num = 'N/A';
        $street = 'N/A';
        $municipality = 'N/A';
        $password = generateRandomString();
        $hpassword = password_hash($password, PASSWORD_DEFAULT);
        $sdescription = 'Staff is responsible for monitoring records but some action is prohibited.Staff can add and update record but deleting will shows in activity log which is controlled by admin.';
        $adescription = 'Admin is responsible for all action including deleting records, adding and removing user from the system.';

        if($user_level == 'admin'){
            $sql = "INSERT INTO users(fm_img, user_name, full_name, email, contact_num, fx_street, fx_municipality, user_level, password, role_description)
            VALUES ('$img','$username','$fullname','$email','$num','$street','$municipality','$user_level', '$hpassword','$adescription')";
            $run = mysqli_query($conn,$sql);

            if($run){
                ob_start();
                $pdf = new FPDF();
                $pdf->AddPage();
                $pdf->SetTextColor(255,0,0); 
                $pdf->SetFont('Arial', 'B', 9);
                $pdf->Text (10, 10,  'Please change your username and password including your personal information after you login using this credentials', 0); 
                $pdf->SetTextColor(0,0,0); 
                $pdf->SetFont('Arial', 'B', 12);
                $pdf->MultiCell(0,10,utf8_decode('Username:'.$username . chr(10) . 'Password:'.$password));
                $fileName = $adname.'_'.date('D-d-m-Y').'.pdf';
                // return the generated output
                $pdf->Output($fileName,'D');
                ob_end_flush(); 
                header('Content-Type: application/download');
                header("Content-Disposition: attachment; filename=\"" . $pdf . "\"");
                header("Content-Length: " . filesize($pdf));
                header("Location: fxasdasjdk");
            }else{
                    
            }

        }elseif($user_level == 'staff'){
            $sql = "INSERT INTO users(fm_img, user_name, full_name, email, contact_num, fx_street, fx_municipality, user_level, password, role_description)
            VALUES ('$img','$username','$fullname','$email','$num','$street','$municipality','$user_level', '$hpassword','$sdescription')";
            $run = mysqli_query($conn,$sql);

            if($run){
                ob_start();
                $pdf = new FPDF();
                $pdf->AddPage();
                $pdf->SetTextColor(255,0,0); 
                $pdf->SetFont('Arial', 'B', 9);
                $pdf->Text (10, 10,  'Please change your username and password including your personal information after you login using this credentials', 0); 
                $pdf->SetTextColor(0,0,0); 
                $pdf->SetFont('Arial', 'B', 12);
                $pdf->MultiCell(0,10,utf8_decode('Username:'.$username . chr(10) . 'Password:'.$password));
                $fileName = $stname.'_'.date('D-d-m-Y').'.pdf';
                // return the generated output
                $pdf->Output($fileName,'D');
                ob_end_flush(); 
                header('Content-Type: application/download');
                header("Content-Disposition: attachment; filename=\"" . $pdf . "\"");
                header("Content-Length: " . filesize($pdf));
                header("Location: ../fxasdasjdk");
            }else{
                    
            }
        }else{

        }
}else{
    
    exit();
}


?>