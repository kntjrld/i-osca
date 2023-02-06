<?php
session_start();
include "../../conn/connection.php";

$ulevel = $_SESSION['user_level'];
// Data stored in different database table
// =>Identification details table<=
// ==>lastname, firstname, middle name, extension, date of birth, number, gender<==
$email = $_POST['email'];
$nationality = $_POST['nationality'];
$religion = $_POST['religion'];
$marital_status = $_POST['maritalstatus'];
$employemnet_status = $_POST['employementstatus'];
// =>Address details<=
$region = 'MIMAROPA';
$province = 'OCCIDENTAL MINDORO';
$municipality = $_POST['municipality'];
$hnzps = $_POST['hnzps'];
$street = $_POST['street'];
// =>Other details<=
$capabilitytotravel = $_POST['capabilitytotravel'];
$govemployee = $_POST['governmentemployee'];
$highesteducation = $_POST['highesteducation'];

if($_POST['sss_id'] === ''){
    $sss_num = 'N/A';
}else{
    $sss_num = $_POST['sss_id'];
}

if($_POST['philhealth_id'] === ''){
    $philhealth_num = 'N/A';
}else{
    $philhealth_num = $_POST['philhealth_id'];
}

if($_POST['tin_id'] === ''){
    $tin_num = 'N/A';
}else{
    $tin_num = $_POST['tin_id'];
}

if($_POST['pagibig_id'] === ''){
    $pagibig_num = 'N/A';
}else{
    $pagibig_num = $_POST['pagibig_id'];
}

if($_POST['other_id'] === ''){
    $otherid = 'N/A';
}else{
    $otherid = $_POST['other_id'];
}
// =>FAMILY COMPOSITION<=
$spouselastname = $_POST['spouselastname'];
$spousefirstname = $_POST['spousefirstname'];
$spousemiddlename = $_POST['spousemiddlename'];
if($_POST['spouseextension'] === ''){
    $spouseextension = 'N/A';
}else{
    $spouseextension = $_POST['spouseextension'];
}

$fatherlastname = $_POST['fatherlastname'];
$fatherfirstname = $_POST['fatherfirstname'];
$fathermiddlename = $_POST['fathermiddlename'];
if($_POST['fatherextension'] === ''){
    $fatherextension = 'N/A';
}else{
    $fatherextension = $_POST['fatherextension'];
}

$motherlastname = $_POST['motherlastname'];
$motherfirstname = $_POST['motherfirstname'];
$mothermiddlename = $_POST['mothermiddlename'];
if($_POST['motherextension'] === ''){
    $motherextension = 'N/A';
}else{
    $motherextension = $_POST['motherextension'];
}
$children1 = isset($_POST['children1']) ? $_POST['children1'] : "N/A";
$occupation1 = isset($_POST['occupation1']) ? $_POST['occupation1'] : "N/A";
$childincome1 = isset($_POST['childincome1']) ? $_POST['childincome1'] : "N/A";
$childage1 =  isset($_POST['childage1']) ? $_POST['childage1'] : "N/A";

$children2 = isset($_POST['fullname2']) ? $_POST['fullname2'] : "N/A";
$occupation2 = isset($_POST['occupation2']) ? $_POST['occupation2'] : "N/A";
$childincome2 = isset($_POST['childincome2']) ? $_POST['childincome2'] : "N/A";
$childage2 = isset($_POST['childage2']) ? $_POST['childage2'] : "N/A";

$children3 = isset($_POST['fullname3']) ? $_POST['fullname3'] : "N/A";
$occupation3 = isset($_POST['occupation3']) ? $_POST['occupation3'] : "N/A"; 
$childincome3 = isset($_POST['childincome3']) ? $_POST['childincome3'] : "N/A";
$childage3 = isset($_POST['childage3']) ? $_POST['childage3'] : "N/A";

$dependentname = isset($_POST['dependentname']) ? $_POST['dependentname'] : "N/A";
$dependentoccupation = isset($_POST['dependentoccupation']) ? $_POST['dependentoccupation'] : "N/A";
$dependentincome = isset($_POST['dependentincome']) ? $_POST['dependentincome'] : "N/A";
$dependentage = isset($_POST['dependentage']) ? $_POST['dependentage'] : "N/A";

// DEPENDENCY PROFILE
// =>Living with<=
$livingwith1 = isset($_POST['livingwith1']) ? $_POST['livingwith1'] : 0;
$livingwith2 = isset($_POST['livingwith2']) ? $_POST['livingwith2'] : 0;
$livingwith3 = isset($_POST['livingwith3']) ? $_POST['livingwith3'] : 0;
$livingwith4 = isset($_POST['livingwith4']) ? $_POST['livingwith4'] : 0;
$livingwith5 = isset($_POST['livingwith5']) ? $_POST['livingwith5'] : 0;
$livingwith6 = isset($_POST['livingwith6']) ? $_POST['livingwith6'] : 0;
$livingwith7 = isset($_POST['livingwith7']) ? $_POST['livingwith7'] : 0;
$livingwith8 = isset($_POST['livingwith8']) ? $_POST['livingwith8'] : 0;
$livingwith9 = isset($_POST['livingwith9']) ? $_POST['livingwith9'] : 0;
if($_POST['livingwithothers'] === ''){
    $livingwithothers = 'N/A';
}else{
    $livingwithothers = $_POST['livingwithothers'];
}

// =>Housing<=
$housing1 = isset($_POST['housing1']) ? $_POST['housing1'] : 0;
$housing2 = isset($_POST['housing2']) ? $_POST['housing2'] : 0;
$housing3 = isset($_POST['housing3']) ? $_POST['housing3'] : 0;
$housing4 = isset($_POST['housing4']) ? $_POST['housing4'] : 0;
$housing5 = isset($_POST['housing5']) ? $_POST['housing5'] : 0;
$housing6 = isset($_POST['housing6']) ? $_POST['housing6'] : 0;
$housing7 = isset($_POST['housing7']) ? $_POST['housing7'] : 0;
$housing8 = isset($_POST['housing8']) ? $_POST['housing8'] : 0;
if($_POST['housingothers'] === ''){
    $housingothers = 'N/A';
}else{
    $housingothers = $_POST['housingothers'];
}

// =>Specialization
$specialization1 = isset($_POST['specialization1']) ? $_POST['specialization1'] : 0;
$specialization2 = isset($_POST['specialization2']) ? $_POST['specialization2'] : 0;
$specialization3 = isset($_POST['specialization3']) ? $_POST['specialization3'] : 0;
$specialization4 = isset($_POST['specialization4']) ? $_POST['specialization4'] : 0;
$specialization5 = isset($_POST['specialization5']) ? $_POST['specialization5'] : 0;
$specialization6 = isset($_POST['specialization6']) ? $_POST['specialization6'] : 0;
$specialization7 = isset($_POST['specialization7']) ? $_POST['specialization7'] : 0;
$specialization8 = isset($_POST['specialization8']) ? $_POST['specialization8'] : 0;
$specialization9 = isset($_POST['specialization9']) ? $_POST['specialization9'] : 0;
$specialization10 = isset($_POST['specialization10']) ? $_POST['specialization10'] : 0;
$specialization11 = isset($_POST['specialization11']) ? $_POST['specialization11'] : 0;
$specialization12 = isset($_POST['specialization12']) ? $_POST['specialization12'] : 0;
$specialization13 = isset($_POST['specialization13']) ? $_POST['specialization13'] : 0;
$specialization14 = isset($_POST['specialization14']) ? $_POST['specialization14'] : 0;
$specialization15 = isset($_POST['specialization15']) ? $_POST['specialization15'] : 0;
$specialization16 = isset($_POST['specialization16']) ? $_POST['specialization16'] : 0;
$specialization17 = isset($_POST['specialization17']) ? $_POST['specialization17'] : 0;
$specialization18 = isset($_POST['specialization18']) ? $_POST['specialization18'] : 0;
$specialization19 = isset($_POST['specialization19']) ? $_POST['specialization19'] : 0;
if($_POST['specializationothers'] === ''){
    $specializationothers = 'N/A';
}else{
    $specializationothers = $_POST['specializationothers'];
}

// =>Involvement<=
$involvement1 = isset($_POST['involvement1']) ? $_POST['involvement1'] : 0;
$involvement2 = isset($_POST['involvement2']) ? $_POST['involvement2'] : 0;
$involvement3 = isset($_POST['involvement3']) ? $_POST['involvement3'] : 0;
$involvement4 = isset($_POST['involvement4']) ? $_POST['involvement4'] : 0;
$involvement5 = isset($_POST['involvement5']) ? $_POST['involvement5'] : 0;
$involvement6 = isset($_POST['involvement6']) ? $_POST['involvement6'] : 0;
$involvement7 = isset($_POST['involvement7']) ? $_POST['involvement7'] : 0;
$involvement8 = isset($_POST['involvement8']) ? $_POST['involvement8'] : 0;
$involvement9 = isset($_POST['involvement9']) ? $_POST['involvement9'] : 0;
$involvement10 = isset($_POST['involvement10']) ? $_POST['involvement10'] : 0;
$involvement11 = isset($_POST['involvement11']) ? $_POST['involvement11'] : 0;

if($_POST['involvementothers'] === ''){
    $involvementothers = 'N/A';
}else{
    $involvementothers = $_POST['involvementothers'];
}
// =>ECON. PROFILE
// =>Source of income<=
$soe1 = isset($_POST['soe1']) ? $_POST['soe1'] : 0;
$soe2 = isset($_POST['soe2']) ? $_POST['soe2'] : 0;
$soe3 = isset($_POST['soe3']) ? $_POST['soe3'] : 0;
$soe4 = isset($_POST['soe4']) ? $_POST['soe4'] : 0;
$soe5 = isset($_POST['soe5']) ? $_POST['soe5'] : 0;
$soe6 = isset($_POST['soe6']) ? $_POST['soe6'] : 0;
$soe7 = isset($_POST['soe7']) ? $_POST['soe7'] : 0;
$soe8 = isset($_POST['soe8']) ? $_POST['soe8'] : 0;
$soe9 = isset($_POST['soe9']) ? $_POST['soe9'] : 0;
$soe10 = isset($_POST['soe10']) ? $_POST['soe10'] : 0;
$soe11 = isset($_POST['soe11']) ? $_POST['soe11'] : 0;
if($_POST['soeothers'] === ''){
    $soeothers = 'N/A';
}else{
    $soeothers = $_POST['soeothers'];
}
// =>Assets A<=
$assets1 = isset($_POST['assets1']) ? $_POST['assets1'] : 0;
$assets2 = isset($_POST['assets2']) ? $_POST['assets2'] : 0;
$assets3 = isset($_POST['assets3']) ? $_POST['assets3'] : 0;
$assets4 = isset($_POST['assets4']) ? $_POST['assets4'] : 0;
$assets5 = isset($_POST['assets5']) ? $_POST['assets5'] : 0;
if($_POST['assetsothers'] === ''){
    $assetsothers = 'N/A';
}else{
    $assetsothers = $_POST['assetsothers'];
}
// =>Assets B<=
$assetsb1 = isset($_POST['assetsb1']) ? $_POST['assetsb1'] : 0;
$assetsb2 = isset($_POST['assetsb2']) ? $_POST['assetsb2'] : 0;
$assetsb3 = isset($_POST['assetsb3']) ? $_POST['assetsb3'] : 0;
$assetsb4 = isset($_POST['assetsb4']) ? $_POST['assetsb4'] : 0;
$assetsb5 = isset($_POST['assetsb5']) ? $_POST['assetsb5'] : 0;
$assetsb6 = isset($_POST['assetsb6']) ? $_POST['assetsb6'] : 0;
$assetsb7 = isset($_POST['assetsb7']) ? $_POST['assetsb7'] : 0;
$assetsb8 = isset($_POST['assetsb8']) ? $_POST['assetsb8'] : 0; 
if($_POST['assetsbothers'] === ''){
    $assetsbothers = 'N/A';
}else{
    $assetsbothers = $_POST['assetsbothers'];
}
// =>Income<=
$income1 = isset($_POST['income1']) ? $_POST['income1'] : 0;
$income2 = isset($_POST['income2']) ? $_POST['income2'] : 0;
$income3 = isset($_POST['income3']) ? $_POST['income3'] : 0; 
$income4 = isset($_POST['income4']) ? $_POST['income4'] : 0;
$income5 = isset($_POST['income5']) ? $_POST['income5'] : 0;
$income6 = isset($_POST['income6']) ? $_POST['income6'] : 0;
$income7 = isset($_POST['income7']) ? $_POST['income7'] : 0;
$income8 = isset($_POST['income8']) ? $_POST['income8'] : 0;
$income9 = isset($_POST['income9']) ? $_POST['income9'] : 0;
// =>Problems<=
$problems1 = isset($_POST['problems1']) ? $_POST['problems1'] : 0;
$problems2 = isset($_POST['problems2']) ? $_POST['problems2'] : 0;
$problems3 = isset($_POST['problems3']) ? $_POST['problems3'] : 0;
$problems4 = isset($_POST['problems4']) ? $_POST['problems4'] : 0;
if($_POST['problemsothers'] === ''){
    $problemsothers = 'N/A';
}else{
    $problemsothers = $_POST['problemsothers'];
}
// =>Concern<=
$concern1 = isset($_POST['concern1']) ? $_POST['concern1'] : 0;
$concern1type = isset($_POST['concern1type']) ? $_POST['concern1type'] : "N/A";
$concern2 = isset($_POST['concern2']) ? $_POST['concern2'] : 0;
$concern2type = isset($_POST['concern2type']) ? $_POST['concern2type'] : "N/A";
$concern3 = isset($_POST['concern3']) ? $_POST['concern3'] : 0; 
$concern4 = isset($_POST['concern4']) ? $_POST['concern4'] : 0;
$concern5 = isset($_POST['concern5']) ? $_POST['concern5'] : 0;
$concern6 = isset($_POST['concern6']) ? $_POST['concern6'] : 0; 
$concern7 = isset($_POST['concern7']) ? $_POST['concern7'] : 0;
$concern8 = isset($_POST['concern8']) ? $_POST['concern8'] : 0;
$concern9 = isset($_POST['concern9']) ? $_POST['concern9'] : 0; 
$concern10 = isset($_POST['concern10']) ? $_POST['concern10'] : 0;
$concern11 = isset($_POST['concern11']) ? $_POST['concern11'] : 0;
$concern12 = isset($_POST['concern12']) ? $_POST['concern12'] : 0;
if($_POST['concernothers'] === ''){
    $concernothers = 'N/A';
}else{
    $concernothers = $_POST['concernothers'];
}
//  => Difficulty <=
$difficulty1 = isset($_POST['difficulty1']) ? $_POST['difficulty1'] : 0;
$difficulty2 = isset($_POST['difficulty2']) ? $_POST['difficulty2'] : 0;     
$difficulty3 = isset($_POST['difficulty3']) ? $_POST['difficulty3'] : 0;
if($_POST['difficultyothers'] === ''){
    $difficultyothers = 'N/A';
}else{
    $difficultyothers = $_POST['difficultyothers'];
}
//  => Maintenance <=
if($_POST['maintenance1'] === ''){
    $maintenance1 = 'N/A';
}else{
    $maintenance1 = $_POST['maintenance1'];
}
if($_POST['maintenance2'] === ''){
    $maintenance2 = 'N/A';
}else{
    $maintenance2 = $_POST['maintenance2'];
}
if($_POST['maintenance3'] === ''){
    $maintenance3 = 'N/A';
}else{
    $maintenance3 = isset($_POST['maintenance3']); 
}
if($_POST['maintenance4'] === ''){
    $maintenance4 = 'N/A';
}else{
    $maintenance4 = $_POST['maintenance4'];
}
// => scheduled checkup
$checkup = $_POST['checkup'];
// if yes?when
$when = $_POST['YesWhen'];
if($_POST['YesWhenother'] === ''){
 $whenother = 'N/A';   
}else{
 $whenother = $_POST['YesWhenother'];
}
// verification
$id_name = $_POST['id_name'];
$id_number = $_POST['id_number'];
$issuedplace = $_POST['issuedplace'];
$issueddate = $_POST['issueddate'];

$frontid = $_FILES['frontid']['name'];
$backid = $_FILES['backid']['name'];

// Data view in pending application
$dateid = date("Y");
$present_idno = $id_number;
$idtype = $id_name;
$userfirstname = $_POST['firstname'];
$userlastname = $_POST['lastname'];
$userinitial = $_POST['middlename'];
if($_POST['extension'] === ''){
    $userextension = 'N/A';
}else{
    $userextension = $_POST['extension'];
}
$birthday = $_POST['bday'];
$gender = $_POST['gender'];
$barangay = $_POST['barangay'];
$countrycode = '+63';
$contact = $_POST['number'];
date_default_timezone_set('Asia/Manila');
$appdate = date("M d, Y");
// if pwd
if($concern2 == 0){
    $pwd = 'No';
}else{
    $pwd = 'Yes';
}
//Age computation if bday < 60, registration will be invalid
$dateOfBirth = $birthday;
$today = date("Y-m-d");
$diff = date_diff(date_create($dateOfBirth), date_create($today));
$intAge = $diff->format('%y');


if($intAge < 60){
    // echo 'invalid';
}else{
    // generate uid
        $uidbd = strtotime($birthday);
        $uid = $dateid.mb_strtoupper(preg_replace('/\s+/', '', $userlastname)).'-'.date("mdy", $uidbd);

    // Identity details
        $identity = "INSERT INTO tbl_identitydetails(uid, fx_lastname, fx_firstname, fx_middlename, fx_extension, fd_bday, fx_email, fx_number, fx_gender, fx_nationality, fx_religion, fx_maritalstatus, fx_employementstatus)
        VALUES('$uid', '$userlastname', '$userfirstname', '$userinitial', '$userextension', '$birthday', '$email', '$countrycode$contact', '$gender', '$nationality', '$religion', '$marital_status', '$employemnet_status')";
        $result_identity = mysqli_query($conn, $identity);
   // Table address details
        $addressdetails = "INSERT INTO tbl_addressdetails(uid, fx_region, fx_province, fx_municipality, fx_barangay, fx_hnzps, fx_street)
        VALUES('$uid', '$region', '$province', '$municipality', '$barangay', '$hnzps', '$street')";
        $result_addressdetails = mysqli_query($conn, $addressdetails);
    // Table other details 
        $otherdetails = "INSERT INTO tbl_otherdetails(uid, fx_capabilitytotravel, fx_govemployee, fx_educationattainment, fx_sss, fx_philhealth, fx_tin, fx_pagibig, fx_othergovid)
        VALUES('$uid','$capabilitytotravel', '$govemployee', '$highesteducation','$sss_num','$philhealth_num', '$tin_num', '$pagibig_num', '$otherid')";
        $result_otherdetails = mysqli_query($conn, $otherdetails);
    // Table family composition
        $familycomposition = "INSERT INTO tbl_familycomposition(uid, fx_spouselastname, fx_spousefirstname, fx_spousemiddlename, fx_spouseextension, 
        fx_fatherlastname, fx_fatherfirstname, fx_fathermiddlename, fx_fatherextension, fx_motherlastname, fx_motherfirstname, fx_mothermiddlename, 
        fx_motherextension, fx_childfirst, fx_occupationfirst, fx_incomefirst, fx_agefirst, fx_childsecond, fx_occupationsecond, fx_incomesecond, 
        fx_agesecond, fx_childthird, fx_occupationthird, fx_incomethird, fx_agethird, fx_dependentname, fx_occupationdependent, fx_incomedependent, fx_agedependent) 
        VALUES('$uid','$spouselastname','$spousefirstname', '$spousemiddlename', '$spouseextension', '$fatherlastname', '$fatherfirstname', '$fathermiddlename', '$fatherextension',
        '$motherlastname','$motherfirstname', '$mothermiddlename', '$motherextension', '$children1', '$occupation1', '$childincome1', '$childage1', '$children2', '$occupation2', 
        '$childincome2', '$childage2', '$children3', '$occupation3', '$childincome3', '$childage3', '$dependentname', '$dependentoccupation', '$dependentincome', '$dependentage')";
        $result_familycomposition = mysqli_query($conn, $familycomposition);
    // Table living with
        $livingwith = "INSERT INTO tbl_livingwith(uid, fx_livingwith1, fx_livingwith2, fx_livingwith3, fx_livingwith4, fx_livingwith5, fx_livingwith6, fx_livingwith7,
         fx_livingwith8, fx_livingwith9, fx_livingwithothers)
        VALUES('$uid','$livingwith1','$livingwith2', '$livingwith3', '$livingwith4', '$livingwith5', '$livingwith6', '$livingwith7', '$livingwith8', '$livingwith9', '$livingwithothers')";
        $result_livingwith = mysqli_query($conn, $livingwith);
    // Table housing
        $housing = "INSERT INTO tbl_housing(uid, fx_housing1, fx_housing2, fx_housing3, fx_housing4, fx_housing5, fx_housing6, fx_housing7, fx_housing8, fx_housingothers)
        VALUES('$uid', '$housing1', '$housing2', '$housing3', '$housing4', '$housing5', '$housing6', '$housing7', '$housing8', '$housingothers')";
        $result_housing = mysqli_query($conn, $housing);
    // Table Specialization
        $specializationx = "INSERT INTO tbl_specialization(uid, fx_spec1, fx_spec2, fx_spec3, fx_spec4, fx_spec5, fx_spec6, fx_spec7,
         fx_spec8, fx_spec9, fx_spec10, fx_spec11, fx_spec12, fx_spec13, fx_spec14, fx_spec15, fx_spec16, fx_spec17, fx_spec18, fx_spec19, fx_specothers)
        VALUES('$uid', '$specialization1', '$specialization2', '$specialization3', '$specialization4', '$specialization5', '$specialization6', '$specialization7'
        , '$specialization8', '$specialization9', '$specialization10', '$specialization11','$specialization12' ,'$specialization13' ,'$specialization14' ,'$specialization15' 
        , '$specialization16', '$specialization17', '$specialization18', '$specialization19' ,'$specializationothers')";
        $result_specialization = mysqli_query($conn, $specializationx);
    // Involvement
        $involvement = "INSERT INTO tbl_involvement(uid, fx_involvement1, fx_involvement2, fx_involvement3, fx_involvement4, fx_involvement5, fx_involvement6, 
        fx_involvement7, fx_involvement8, fx_involvement9, fx_involvement10, fx_involvement11, fx_involvementothers) 
        VALUES('$uid', '$involvement1', '$involvement2', '$involvement3', '$involvement4', '$involvement5', '$involvement6', '$involvement7', '$involvement8', '$involvement9',
        '$involvement10', '$involvement11', '$involvementothers')";
        $result_involvement = mysqli_query($conn, $involvement);
    // Source of income
        $soe = "INSERT INTO tbl_sourceofincome(uid, fx_soe1, fx_soe2, fx_soe3, fx_soe4, fx_soe5, fx_soe6, fx_soe7, fx_soe8, fx_soe9, fx_soe10, fx_soe11, fx_soeothers)
        VALUES('$uid', '$soe1', '$soe2', '$soe3', '$soe4', '$soe5', '$soe6', '$soe7', '$soe8', '$soe9', '$soe10', '$soe11', '$soeothers')";
        $result_soe = mysqli_query($conn, $soe);
    // Assets A
        $assetsA = "INSERT INTO tbl_assetsa(uid, fx_assets1, fx_assets2, fx_assets3, fx_assets4, fx_assets5, fx_assetsothers)
        VALUES('$uid', '$assets1', '$assets2', '$assets3', '$assets4', '$assets5', '$assetsothers')"; 
        $result_assestsA = mysqli_query($conn, $assetsA);
    // Assets B
        $assetsB = "INSERT INTO tbl_assetsb(uid, fx_assetsb1, fx_assetsb2, fx_assetsb3, fx_assetsb4, fx_assetsb5, fx_assetsb6, fx_assetsb7, fx_assetsb8, fx_assetsbothers)
        VALUES('$uid', '$assetsb1', '$assetsb2', '$assetsb3', '$assetsb4', '$assetsb5', '$assetsb6', '$assetsb7', '$assetsb8', '$assetsbothers')";
        $result_assestsB = mysqli_query($conn, $assetsB);
    // Table Monthly income
        $monthly_income = "INSERT INTO tbl_monthlyincome(uid, fx_mincome1, fx_mincome2, fx_mincome3, fx_mincome4, fx_mincome5, fx_mincome6, fx_mincome7, fx_mincome8, fx_mincome9)
        VALUES('$uid', '$income1', '$income2', '$income3', '$income4', '$income5', '$income6', '$income7', '$income8', '$income9')";
        $result_monthly_income =  mysqli_query($conn, $monthly_income);
    // Problesms
        $problems = "INSERT INTO tbl_problems(uid, fx_problems1, fx_problems2, problems3, fx_problems4, fx_problemsothers)
        VALUES('$uid', '$problems1', '$problems2', '$problems3', '$problems4', '$problemsothers')";
        $result_problems = mysqli_query($conn, $problems);

    //  Concern
        $concern = "INSERT INTO tbl_concern(uid, fx_concern1, fx_concern1type, fx_concern2, fx_concern2type, fx_concern3, fx_concern4, fx_concern5, fx_concern6, fx_concern7,
         fx_concern8, fx_concern9, fx_concern10, fx_concern11, fx_concern12, fx_concernothers)
         VALUES('$uid', '$concern1', '$concern1type' , '$concern2', '$concern2type' ,'$concern3', '$concern4', '$concern5', '$concern6', '$concern7', '$concern8', '$concern9', '$concern10', '$concern11', '$concern12','$concernothers')";
         $result_concern =  mysqli_query($conn, $concern);
    // etc
        $etc = "INSERT INTO tbl_etc(uid, fx_difficulty1, fx_difficulty2, fx_difficulty3, fx_difficultyothers, fx_listofmed1, fx_listofmed2, fx_listofmed3, fx_listofmed4, fx_dyhmcq, fx_dyhmca, fx_dyhmcaother)
        VALUES('$uid', '$difficulty1', '$difficulty2', '$difficulty3', '$difficultyothers', '$maintenance1', '$maintenance2', '$maintenance3', '$maintenance4', '$checkup', '$when', '$whenother')";
         $result_etc =  mysqli_query($conn, $etc);

    // verification details
        $verification = "INSERT INTO tbl_verification(uid, fx_idtype, fx_idnumber, fx_placedissued, fx_dateissued, fx_frontid, fx_backid)
        VALUE('$uid', '$id_name', '$id_number', '$issuedplace', '$issueddate', '$frontid', '$backid')";
        $result_verification = mysqli_query($conn, $verification);

        if($result_verification){
            // Move idpresented file to folder
            $file_tmp = $_FILES['frontid']['tmp_name'];
            move_uploaded_file($file_tmp,"../../registration/".$frontid);
            // Move registration file to folder
            $file_tmp = $_FILES['backid']['tmp_name'];
            move_uploaded_file($file_tmp,"../../registration/".$backid);
            // session code
            $_SESSION['success'] = "success";
            // location
                header("Location: ../../records");
        }else{
            header("Location: ../new-registration");
        }

        #iOSCA-c_year-count_records
        #############################################
        // count tbl_records
        $sql = "SELECT COUNT(*) as total FROM tbl_records";
        $result=mysqli_query($conn,$sql);
        $data=mysqli_fetch_assoc($result);
        // count tbl_remove
        $sql = "SELECT COUNT(*) as total FROM tbl_remove";
        $result=mysqli_query($conn,$sql);
        $remove=mysqli_fetch_assoc($result);
        // get year
        $myear = date("y");
        // add two table
        $totalc = $data['total'] + $remove['total'] + 1;
        // output
        if($totalc < 10){
            $total = '0000'.$totalc;
        }elseif($totalc < 100){
            $total = '000'.$totalc;
        }elseif($totalc < 1000){
            $total = '00'.$totalc;
        }elseif($totalc < 10000){
            $total = '0'.$totalc;
        }else{
            $total = $totalc;
        }
        $newuid = 'iOSCA-'.$myear.'-'.$total;
        #############################################
            
        if ($ulevel == 'admin'){
            // if true add to records
            $fn_pension = '1500';
            $check_value = 'Pending';
            $life_status = 'alive';
            $started = date("Y-m-d");
            // insert to records table
            $insert = "INSERT INTO tbl_records(uid, fx_aid, fx_id, fx_firstname, fx_lastname, fx_middlename, fx_extension, fx_contact, fx_email, fd_birthdate,  fx_gender, fx_barangay, fn_age, fn_pension, fn_status, life_status, account_status, fx_pwd, fd_started)
            VALUES('$newuid', '$uid', '$id_number',UPPER('$userfirstname'),UPPER('$userlastname'),UPPER('$userinitial'), UPPER('$userextension'), '$countrycode$contact', '$email', '$birthday','$gender','$barangay','$intAge','$fn_pension','$check_value', '$life_status', 'active', '$pwd','$started')";
            $request = mysqli_query($conn, $insert);
            // activities
            if($request){
                
                // // Notify user via sms 
                $sms = 'Hi '.$firstname. ', Your iOSCA account is successfully created and your account ID is #'.$newuid;   
                $ch = curl_init();
                $mobilenumber = $countrycode.$contact;
                $parameters = array(
                    'apikey' => '', 
                    'number' => $mobilenumber,
                    'message' => $sms,
                    'sendername' => 'OSCA'
                );
                curl_setopt( $ch, CURLOPT_URL,'https://semaphore.co/api/v4/messages' );
                curl_setopt( $ch, CURLOPT_POST, 1 );

                //Send the parameters set above with the request
                curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $parameters ) );

                // Receive response from server
                curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
                $output = curl_exec( $ch );
                curl_close ($ch);
                // // end

                // Add to activity log
                date_default_timezone_set('Asia/Manila');
                $date = date("M d, Y - h:i a"); 
                $user_name = $_SESSION['user_name'];					
		        $act = "INSERT INTO tbl_activities(fd_date, fx_user, fx_action) VALUES('$date', '$user_name','Added a new record with an id #$uid')";
		        $result = mysqli_query($conn, $act);
                // alert
                $_SESSION['accepted'] = "Added successfully";
                }else{}
        }else{
            $app_status = 'accepted';
            $acceptdate = date("M d, Y");
            $adminstatus = 'Under review';
            $remarks = $_POST['remarks'];

            $accept = "INSERT INTO tbl_regstatus(uid, fx_idnumber, fx_idpresented, fx_firstname, fx_lastname, fx_initial, fx_extension, fx_gender, fd_birthdate,
                                                fx_barangay, fx_contact, fx_email, fn_age, fx_pwd, fd_application, fx_statusbycluster, fd_acceptedbycluster, fd_acceptedbyadmin,
                                                fx_statusbyadmin, fx_remarks)
            VALUES('$uid', '$id_number','$idtype',UPPER('$userfirstname'),UPPER('$userlastname'),UPPER('$userinitial'), UPPER('$userextension'),'$gender','$birthday',
                    '$barangay','$contact', '$email' ,'$intAge', '$pwd', '$appdate', '$app_status', '$acceptdate', '$adminstatus', '$adminstatus', '$remarks')";
            $request = mysqli_query($conn, $accept);
        
            if($request){
               // activities
                date_default_timezone_set('Asia/Manila');
                $date = date("M d, Y - h:i a");
                $user_name = $_SESSION['user_name'];					
                $act = "INSERT INTO tbl_activities(fd_date, fx_user, fx_action) VALUES('$date', '$user_name','Added a new member account with application id #$uid')";
                $result = mysqli_query($conn, $act);
                // alert
                $_SESSION['success'] = "success";
            }
           
        }
     } 
?>