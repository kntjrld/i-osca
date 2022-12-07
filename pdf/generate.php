<?php
session_start();
ob_start();
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
        
        $street = $_POST['barangay'];
        $img = 'user.png';
        $brgy = array("Barangay 1", "Barangay 2", "Barangay 3", "Barangay 4", "Barangay 5", "Barangay 6", "Barangay 7", "Barangay 8", "Balansay"
    ,"Fatima", "Payompon", "San Luis (Ligang)", "Talabaan", "Tangkalan", "Tayamaan");

        if($street == $brgy[0]){
            $username = 'staff1';
        }elseif($street == $brgy[1]){
            $username = 'staff2';
        }elseif($street == $brgy[2]){
            $username = 'staff3';
        }elseif($street == $brgy[3]){
            $username = 'staff4';
        }elseif($street == $brgy[4]){
            $username = 'staff5';
        }elseif($street == $brgy[5]){
            $username = 'staff6';
        }elseif($street == $brgy[6]){
            $username = 'staff7';
        }elseif($street == $brgy[7]){
            $username = 'staff8';
        }elseif($street == $brgy[8]){
            $username = 'staff9';
        }elseif($street == $brgy[9]){
            $username = 'staff10';
        }elseif($street == $brgy[10]){
            $username = 'staff11';
        }elseif($street == $brgy[11]){
            $username = 'staff12';
        }elseif($street == $brgy[12]){
            $username = 'staff13';
        }elseif($street == $brgy[13]){
            $username = 'staff14';
        }else{
            $username = 'administrator';
        }
        // $username = generateRandomString();
        $fullname = 'NO DATA';
        $email = 'N/A';
        $num = 'N/A';
        $municipality = 'N/A';
        $password = generateRandomString();
        $hpassword = password_hash($password, PASSWORD_DEFAULT);
        $sdescription = 'Staff is responsible for monitoring records but some action is prohibited. Staff can accept report and update record but deleting will shows in activity log which is controlled by admin.';
        $adescription = 'Admin is responsible for all action including deleting records, adding and removing user from the system.';
        
        $adname = 'iosca-admin-tempcredentials';
        $stname = 'iosca-staff-tempcredentials';

        // CHECK IF ADMIN IS == 1
        $check = "SELECT COUNT(*) as total FROM users WHERE user_name = '$username'";
        $adminresult=mysqli_query($conn,$check);
        $total=mysqli_fetch_assoc($adminresult);
        $count = $total['total'];

        class PDF extends FPDF{
            // Page header
            function Header(){
                // Logo
                $this->Image('../media/logo.png',10,6,24);
                // Arial bold 12
                $this->SetFont('times','B',12);
                // Move to the right
                $this->Cell(80);
                // Title
                $this->Cell(30,10,'OFFICE OF THE SENIOR CITIZEN AFFAIRS',0,0,'C');
                $this->Ln(5);
                $this->SetFont('times','',12);
                $this->Cell(80);
                $this->Cell(30,10,'MUNICIPALITY OF MAMBURAO',0,0,'C');
                // Line break
                $this->Ln(15);
            }
            // Page footer
            function Footer()
            {
                // Position at 1.5 cm from bottom
                $this->SetY(-15);
                // Arial italic 8
                $this->SetFont('Arial','I',8);
                // Page number
                $this->Cell(0,10,'DONT SHARE',0,0,'C');
            }
        }        
        
        if($count == 0){
            if($street == ''){
                $user_level = 'admin';
                $sql = "INSERT INTO users(fm_img, user_name, full_name, email, contact_num, fx_street, fx_municipality, user_level, password, role_description)
                VALUES ('$img','$username','$fullname','$email','$num','$street','$municipality','$user_level', '$hpassword','$adescription')";
                $run = mysqli_query($conn,$sql);

                if($run){
                    // Instanciation of inherited class
                    $pdf = new PDF('L', 'mm', array(100,200));
                    $pdf->AliasNbPages();
                    $pdf->AddPage();
                    // Sub header
                    $pdf->SetFont('times','B',12);
                    $pdf->Cell(80);
                    $pdf->Cell(30,10,$sub,0,0,'C');
                    $pdf->Ln(15);

                    // document information
                    $pdf->SetTitle("i-OSCA information");
                    $pdf->SetAuthor("OSCA HEAD");
                    $pdf->SetSubject("credentials");
                    $pdf->SetCreator("OSCA");

                    // BODY
                    // 1
                    $pdf->SetFont('times','',10);
                    $pdf->SetTextColor(255,0,0); 
                    $pdf->MultiCell(0,5,utf8_decode('Please change your password including your personal information after you login using this credentials'), 0);
                    // Lines
                    $pdf->SetTextColor(0,0,0); 
                    $pdf->SetFont('Arial','I',0);
                    $pdf->Cell(0,5,'- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - ',0,1);
                    //username
                    $pdf->MultiCell(0,10,utf8_decode('Username:'.' '.$username . chr(10) . 'Password:'.' '.$password), 0);
                    // password

                    /// end of records ///
                    $fileName = $adname.'_'.date('D-d-m-Y').'.pdf';        
                    ob_end_clean();
                    // return the generated output
                    $pdf->Output($fileName,'I');
                }
            }else{
                $user_level = 'staff';
                $sql = "INSERT INTO users(fm_img, user_name, full_name, email, contact_num, fx_street, fx_municipality, user_level, password, role_description)
                VALUES ('$img','$username','$fullname','$email','$num','$street','$municipality','$user_level', '$hpassword','$sdescription')";
                $run = mysqli_query($conn,$sql);

                if($run){
                    // Instanciation of inherited class
                    $pdf = new PDF('L', 'mm', array(100,200));
                    $pdf->AliasNbPages();
                    $pdf->AddPage();
                    // Sub header
                    $pdf->SetFont('times','B',12);
                    $pdf->Cell(80);
                    $pdf->Cell(30,10,$sub,0,0,'C');
                    $pdf->Ln(15);

                    // document information
                    $pdf->SetTitle("i-OSCA information");
                    $pdf->SetAuthor("OSCA HEAD");
                    $pdf->SetSubject("credentials");
                    $pdf->SetCreator("OSCA");


                    // BODY
                    // 1
                    $pdf->SetFont('times','',10);
                    $pdf->SetTextColor(255,0,0); 
                    $pdf->MultiCell(0,5,utf8_decode('Please change your password including your personal information after you login using this credentials'), 0);
                    // Lines
                    $pdf->SetTextColor(0,0,0); 
                    $pdf->SetFont('Arial','I',0);
                    $pdf->Cell(0,5,'- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - ',0,1);
                    //username
                    $pdf->MultiCell(0,10,utf8_decode('Username:'.' '.$username . chr(10) . 'Password:'.' '.$password), 0);
                    // password

                    /// end of records ///
                    ob_end_clean();
                    $fileName = $stname.'_'.date('D-d-m-Y').'.pdf';   
                    // return the generated output
                    $pdf->Output($fileName,'I');
                    }
        }
        }else{
            $_SESSION['exist'] = "Something went wrong";
            header("Location: ../fxasdasjdk");
        }
}
?>