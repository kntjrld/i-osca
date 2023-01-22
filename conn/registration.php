<?php
include "connection.php";

    // Update uid to YLastname-BIRTHDY 
    function getGUIDnoHash(){
        mt_srand((double)microtime()*10000);
        $charid = md5(uniqid(rand(), true));
        $c = unpack("C*",$charid);
        $c = implode("",$c);
        return substr($c,0,12);
    }
    
    $dateid = date("Y");
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
    // $age = $_POST['age']; -> remove
    $pwd = $_POST['pwd'];

    date_default_timezone_set('Asia/Manila');
    $appdate = date("M d, Y");

    //age computation
    $dateOfBirth = $birthday;
    $today = date("Y-m-d");
    $diff = date_diff(date_create($dateOfBirth), date_create($today));
    $intAge = $diff->format('%y');

    // if age is below 60 registration will be invalid
    
    if($intAge < 60){
        //action   
    }else{
        $uidbd = strtotime($birthday);
        $uid = $dateid.mb_strtoupper(preg_replace('/\s+/', '', $lastname)).'-'.date("mdy", $uidbd);

        // UPLOAD pdf 
        $pdfidpresented = $_FILES['idpresentedfile']['name'];
        $pdfregistrationform = $_FILES['registrationfile']['name'];

        $sql = "INSERT INTO tbl_register(uid, fx_idnumber, fx_idpresented, fx_firstname, fx_lastname, fx_initial, fx_gender, fd_birthdate, fx_barangay, fx_contact, fn_age, fl_idpresented, fl_form, fd_application, fx_pwd)
        VALUES('$uid',UPPER('$present_idno'),'$idtype',UPPER('$firstname'),UPPER('$lastname'),UPPER('$initial'),'$gender','$birthday','$barangay','$countrycode$contact','$intAge','$pdfidpresented','$pdfregistrationform', '$appdate', '$pwd')";
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
    }
?>

<div class="d-block p-2">
    <h1 id="targetext" style="<?php if($intAge < 60){echo 'color:red; font-size:14px;';}?>" class="w-100">
        <?php if($intAge < 60){ echo 'You did not meet the age requirement';}else{echo $uid;}?></h1>
    <p style="font-size:12px;"><?php if($intAge < 60){echo 'Something went wrong';}else{echo 'Copy and saved your tracking ID';} ?></p>
    <button tyle="button" class="btn btn-primary"
        <?php if($intAge < 60){echo 'data-dismiss="modal"';}else{echo 'id="idbutton"'; }?>
        data-clipboard-target="#targetext"><?php if($intAge < 60){echo 'Dismiss';}else{echo 'Copy text';}?></button>
</div>