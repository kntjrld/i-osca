<?php
session_start();
include "connection.php";

    function getGUIDnoHash(){
            mt_srand((double)microtime()*10000);
            $charid = md5(uniqid(rand(), true));
            $c = unpack("C*",$charid);
            $c = implode("",$c);
            return substr($c,0,12);
    }

    $dateid = date("Ymd");
    $uid = getGUIDnoHash();
    $present_idno = $_POST['idpresented'];
    $idtype = $_POST['idtype'];
    $firstname = $_POST['fname'];
    $lastname = $_POST['lastname'];
    $initial = $_POST['middlename'];
    $birthday = $_POST['bday'];
    $gender = $_POST['sex'];
    $barangay = $_POST['barangay'];
    $countrycode = '+63';
    $contact = $_POST['contact'];
    $age = $_POST['age'];
    $pwd = $_POST['pwd'];

    date_default_timezone_set('Asia/Manila');
    $appdate = date("M d, Y");

    // UPLOAD pdf 
    $pdfidpresented = $_FILES['idpresentedfile']['name'];
    $pdfregistrationform = $_FILES['registrationfile']['name'];

    $sql = "INSERT INTO tbl_register(uid, fx_idnumber, fx_idpresented, fx_firstname, fx_lastname, fx_initial, fx_gender, fd_birthdate, fx_barangay, fx_contact, fn_age, fl_idpresented, fl_form, fd_application, fx_pwd)
    VALUES('$dateid$uid','$present_idno','$idtype',UPPER('$firstname'),UPPER('$lastname'),UPPER('$initial'),'$gender','$birthday','$barangay','$countrycode$contact','$age','$pdfidpresented','$pdfregistrationform', '$appdate', '$pwd')";
    $result = mysqli_query($conn, $sql);

    if($result){
        // Move idpresented file to folder
        $file_tmp = $_FILES['idpresentedfile']['tmp_name'];
        move_uploaded_file($file_tmp,"../registration/".$pdfidpresented);
        // Move registration file to folder
        $file_tmp = $_FILES['registrationfile']['tmp_name'];
        move_uploaded_file($file_tmp,"../registration/".$pdfregistrationform);
    }else{
        // header("Location: ../register");
    }

?>

<div class="d-block p-2">
    <h1 id="targetext" class="w-100"><?php echo $dateid.$uid; ?></h1>
    <p style="font-size:12px;">Copy and saved your application ID</p>
    <button tyle="button" class="btn btn-primary" id="idbutton" data-clipboard-target="#targetext">Copy text</button>
</div>