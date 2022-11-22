<?php
include "connection.php";

    $present_idno = $_POST['idpresented'];
    $idtype = $_POST['idtype'];
    $firstname = $_POST['fname'];
    $lastname = $_POST['lastname'];
    $initial = $_POST['middlename'];
    $birthday = $_POST['bday'];
    $gender = $_POST['sex'];
    $barangay = $_POST['barangay'];
    $contact = $_POST['contact'];
    $age = $_POST['age'];
    // UPLOAD pdf 
    $pdfidpresented = $_FILES['idpresentedfile']['name'];
    $pdfregistrationform = $_FILES['registrationfile']['name'];

    $sql = "INSERT INTO tbl_register(fx_idnumber, fx_idpresented, fx_firstname, fx_lastname, fx_initial, fx_gender, fd_birthdate, fx_barangay, fx_contact, fn_age, fl_idpresented, fl_form)
    VALUES('$present_idno','$idtype','$firstname','$lastname','$initial','$gender','$birthday','$barangay','$contact','$age','$pdfidpresented','$pdfregistrationform')";
    $result = mysqli_query($conn, $sql);

    if($result){
        $file_tmp = $_FILES['idpresentedfile']['tmp_name'];
        move_uploaded_file($file_tmp,"../registration/".$pdfidpresented);

        $file_tmp = $_FILES['registrationfile']['tmp_name'];
        move_uploaded_file($file_tmp,"../registration/".$pdfregistrationform);

        #######################################################
        $_SESSION['registration'] = "Success Registration";
        header("Location: ../register");
    }else{
        #######################################################
        $_SESSION['xregistration'] = "Unsuccessfull Registration";
        header("Location: ../register");
    }
?>
