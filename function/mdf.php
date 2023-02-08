<?php
include("../conn/connection.php");
if (isset($_POST['uid'])){
$uid = $_POST['uid'];

$sql = "SELECT tbl_identitydetails.*,
        tbl_addressdetails.*,
        tbl_otherdetails.*,
        tbl_familycomposition.*,
        tbl_livingwith.*,
        tbl_housing.*,
        tbl_specialization.*,
        tbl_involvement.*,
        tbl_sourceofincome.*,
        tbl_assetsa.*,
        tbl_assetsb.*,
        tbl_monthlyincome.*,
        tbl_problems.*,
        tbl_concern.*,
        tbl_etc.*
        FROM tbl_identitydetails
        JOIN tbl_addressdetails ON tbl_identitydetails.uid = tbl_addressdetails.uid
        JOIN tbl_otherdetails ON tbl_identitydetails.uid = tbl_otherdetails.uid
        JOIN tbl_familycomposition ON tbl_identitydetails.uid = tbl_familycomposition.uid
        JOIN tbl_livingwith ON tbl_identitydetails.uid = tbl_livingwith.uid
        JOIN tbl_housing ON tbl_identitydetails.uid = tbl_housing.uid
        JOIN tbl_specialization ON tbl_identitydetails.uid = tbl_specialization.uid
        JOIN tbl_involvement ON tbl_identitydetails.uid = tbl_involvement.uid
        JOIN tbl_sourceofincome ON tbl_identitydetails.uid = tbl_sourceofincome.uid
        JOIN tbl_assetsa ON tbl_identitydetails.uid = tbl_assetsa.uid
        JOIN tbl_assetsb ON tbl_identitydetails.uid = tbl_assetsb.uid
        JOIN tbl_monthlyincome ON tbl_identitydetails.uid = tbl_monthlyincome.uid
        JOIN tbl_problems ON tbl_identitydetails.uid = tbl_problems.uid
        JOIN tbl_concern ON tbl_identitydetails.uid = tbl_concern.uid
        JOIN tbl_etc ON tbl_identitydetails.uid = tbl_etc.uid
        WHERE tbl_identitydetails.uid = '$uid'";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $lastname = $row['fx_lastname'];
                $firstname = $row['fx_firstname'];
                $middlename = $row['fx_middlename'];
                $extension = $row['fx_extension'];
                $bday = $row['fd_bday'];
                $email = $row['fx_email'];
                $number = $row['fx_number'];
                $gender = $row['fx_gender'];
                $nationality = $row['fx_nationality'];
                $maritalstatus = $row['fx_maritalstatus'];
                $religion = $row['fx_religion'];
                $employmentstatus = $row['fx_employementstatus'];
                $region = $row['fx_region'];
                $province = $row['fx_province']; 
                $municipality = $row['fx_municipality'];
                $barangy = $row['fx_barangay'];
                $hnzps = $row['fx_hnzps']; 
                $street = $row['fx_street'];

                $travelcapability = $row['fx_capabilitytotravel']; $govemployee = $row['fx_govemployee']; 
                $educationalattainment = $row['fx_educationattainment']; $sss = $row['fx_sss'];
                $philhealth = $row['fx_philhealth']; $tin = $row['fx_tin']; 
                $pagibig = $row['fx_pagibig']; $othergovid = $row['fx_othergovid'];

                $spouselastname = $row['fx_spouselastname']; 
                $spousefirstname = $row['fx_spousefirstname'];
                $spousemiddlenmae = $row['fx_spousemiddlename'];
                $spouseextension = $row['fx_spouseextension']; 
                $fatherlastname = $row['fx_fatherlastname'];
                $fatherfirstname = $row['fx_fatherfirstname'];
                $fathermiddlename = $row['fx_fathermiddlename'];
                $fatherextension = $row['fx_fatherextension']; 
                $motherlastname = $row['fx_motherlastname']; 
                $motherfirstname = $row['fx_motherfirstname']; 
                $mothermiddlename = $row['fx_mothermiddlename']; 
                $motherextension = $row['fx_motherextension']; 
                $childfirst = $row['fx_childfirst']; 
                $occupationfirst = $row['fx_occupationfirst']; 
                $incomefirst = $row['fx_incomefirst'];
                $agefirst = $row['fx_agefirst']; 
                $childsecond = $row['fx_childsecond']; 
                $occupationsecond = $row['fx_occupationsecond'];
                $incomesecond = $row['fx_incomesecond']; 
                $agesecond = $row['fx_agesecond']; 
                $childthird = $row['fx_childthird']; 
                $occupationthird = $row['fx_occupationthird']; 
                $incomethird = $row['fx_incomethird'];
                $agethird = $row['fx_agethird'];
                $dependentname = $row['fx_dependentname'];
                $occupationdependent = $row['fx_occupationdependent'];
                $incomedependent = $row['fx_incomedependent'];
                $agedependent = $row['fx_agedependent'];

                $livingwith1 = $row['fx_livingwith1'];
                $livingwith2 = $row['fx_livingwith2'];
                $livingwith3 = $row['fx_livingwith3']; 
                $livingwith4 = $row['fx_livingwith4'];
                $livingwith5 = $row['fx_livingwith5']; 
                $livingwith6 = $row['fx_livingwith6']; 
                $livingwith7 = $row['fx_livingwith7']; 
                $livingwith8 = $row['fx_livingwith8']; 
                $livingwith9 = $row['fx_livingwith9']; 
                $livingwith10 = $row['fx_livingwithothers'];

                $housing1 = $row['fx_housing1'];  $housing2 = $row['fx_housing2'];  
                $housing3 = $row['fx_housing3'];  $housing4 = $row['fx_housing4'];  
                $housing5 = $row['fx_housing5'];  $housing6 = $row['fx_housing6'];  
                $housing7 = $row['fx_housing7'];  $housing8 = $row['fx_housing8'];  
                $housing9 = $row['fx_housingothers'];

                $spec1 = $row['fx_spec1'];  $spec2 = $row['fx_spec2'];  $spec3 = $row['fx_spec3'];
                $spec4 = $row['fx_spec4'];  $spec5 = $row['fx_spec5'];  $spec6 = $row['fx_spec6']; 
                $spec7 = $row['fx_spec7'];  $spec8 = $row['fx_spec8'];  $spec9 = $row['fx_spec9'];  
                $spec10 = $row['fx_spec10'];  $spec11 = $row['fx_spec11'];  $spec12 = $row['fx_spec12'];  
                $spec13 = $row['fx_spec13'];  $spec14 = $row['fx_spec14'];  $spec15 = $row['fx_spec15'];  
                $spec16 = $row['fx_spec16'];  $spec17 = $row['fx_spec17'];  $spec18 = $row['fx_spec18'];  
                $spec19 = $row['fx_spec19'];  $spec20 = $row['fx_specothers'];

                $involvement1 = $row['fx_involvement1']; $involvement2 = $row['fx_involvement2']; 
                $involvemen3 = $row['fx_involvement3']; $involvement4 = $row['fx_involvement4']; 
                $involvemen5 = $row['fx_involvement5']; $involvement6 = $row['fx_involvement6']; 
                $involvement7 = $row['fx_involvement7']; $involvement8 = $row['fx_involvement8']; 
                $involvement9 = $row['fx_involvement9']; $involvement10 = $row['fx_involvement10']; 
                $involvement11 = $row['fx_involvement11']; $involvement12 = $row['fx_involvementothers'];

                $soe1 = $row['fx_soe1']; $soe2 = $row['fx_soe2']; $soe3 = $row['fx_soe3']; 
                $soe4 = $row['fx_soe4']; $soe5 = $row['fx_soe5']; $soe6 = $row['fx_soe6']; 
                $soe7 = $row['fx_soe7']; $soe8 = $row['fx_soe8']; $soe9 = $row['fx_soe9']; 
                $soe10 = $row['fx_soe10']; $soe11 = $row['fx_soe11']; $soe12 = $row['fx_soeothers'];

                $assetsa1 = $row['fx_assets1'];  $assetsa2 = $row['fx_assets2'];  $assetsa3 = $row['fx_assets3'];  
                $assetsa4 = $row['fx_assets4'];  $assets5 = $row['fx_assets5'];  $assets6 = $row['fx_assetsothers'];

                $assetsb1 = $row['fx_assetsb1']; $assetsb2 = $row['fx_assetsb2']; $assetsb3 = $row['fx_assetsb3']; 
                $assetsb4 = $row['fx_assetsb4']; $assetsb5 = $row['fx_assetsb5']; 
                $assetsb6 = $row['fx_assetsb6']; $assetsb7 = $row['fx_assetsb7']; 
                $assetsb8 = $row['fx_assetsb8']; $assetsb9 = $row['fx_assetsbothers'];

                $mincome1 = $row['fx_mincome1']; $mincome2 = $row['fx_mincome2']; $mincome3 = $row['fx_mincome3']; 
                $mincome4 = $row['fx_mincome4']; $mincome5 = $row['fx_mincome5']; $mincome6 = $row['fx_mincome6']; 
                $mincome7 = $row['fx_mincome7']; $mincome8 = $row['fx_mincome8']; $mincome9 = $row['fx_mincome9'];

                $problems1  = $row['fx_problems1']; $problems2  = $row['fx_problems2']; $problem3  = $row['problems3'];
                $problems4  = $row['fx_problems4']; $problems5  = $row['fx_problemsothers'];

                $concern1 = $row['fx_concern1']; $concern1type = $row['fx_concern1type']; $concern2 = $row['fx_concern2']; 
                $concern2type = $row['fx_concern2type']; $concern3 = $row['fx_concern3']; $concern4 = $row['fx_concern4']; 
                $concern5 = $row['fx_concern5']; $concern6 = $row['fx_concern6']; $concern7 = $row['fx_concern7']; 
                $concern8 = $row['fx_concern8']; $concern9 = $row['fx_concern9']; $concern10 = $row['fx_concern10']; 
                $concern11 = $row['fx_concern11']; $concern12 = $row['fx_concern12']; $concern13 = $row['fx_concernothers'];

                $etc1 = $row['fx_difficulty1']; $etc2 = $row['fx_difficulty2']; $etc3 = $row['fx_difficulty3'];
                $etc4 = $row['fx_difficultyothers']; 
                $etc5 = $row['fx_listofmed1']; 
                $etc6 = $row['fx_listofmed2']; 
                $etc7 = $row['fx_listofmed3']; 
                $etc8 = $row['fx_listofmed4']; 
                $etc9 = $row['fx_dyhmcq']; 
                $etc10 = $row['fx_dyhmca'];
                $etc11 = $row['fx_dyhmcaother'];
        }
        }else{
            $lastname = 'no data';
        }
        

}
?>
<!-- A -->
<div class="row">
    <p class="header">Identifiying Information</p>
</div>
<!-- name -->
<div class="row">
    <div class="col">
        <p class="title">Name</p>
    </div>
    <div class="col">
        <p id="value"><?php echo $lastname;?></p>
        <p id="subtitle">Last Name</p>
    </div>
    <div class="col">
        <p id="value"><?php echo $firstname;?></p>
        <p id="subtitle">First Name</p>
    </div>
    <div class="col">
        <p id="value"><?php echo $middlename;?></p>
        <p id="subtitle">Middle Name</p>
    </div>
    <div class="col">
        <p id="value"><?php echo $extension;?></p>
        <p id="subtitle">Extension Name</p>
    </div>
</div>
<!-- address -->
<div class="row">
    <div class="col">
        <p class="title">Address</p>
    </div>
    <div class="col">
        <p id="value"><?php echo $region; ?></p>
        <p id="subtitle">Region</p>
    </div>
    <div class="col">
        <p id="value"><?php echo $province; ?></p>
        <p id="subtitle">Province</p>
    </div>
    <div class="col">
        <p id="value"><?php echo $municipality; ?></p>
        <p id="subtitle">City/Municipality</p>
    </div>
    <div class="col">
        <p id="value"><?php echo $barangy; ?></p>
        <p id="subtitle">Barangay</p>
    </div>
</div>
<div class="row" id="subline">
    <div class="col">
        <p class="title"></p>
    </div>
    <div class="col">
        <p id="value"><?php echo $hnzps; ?></p>
        <p id="subtitle">House No./Zone/Purok/Sitio</p>
    </div>
    <div class="col">
        <p id="value"><?php echo $street; ?></p>
        <p id="subtitle">Street</p>
    </div>
</div>
<!-- bday, place of birth, marital -->
<div class="row">
    <div class="col">
        <p class="title">Other details</p>
    </div>
    <div class="col">
        <p id="value"><?php echo $bday;?></p>
        <p id="subtitle">Date of birth</p>
    </div>
    <div class="col">
        <p id="value"><?php echo $email;?></p>
        <p id="subtitle" style="margin-left:12px;">Email</p>
    </div>
    <div class="col">
        <p id="value"><?php echo $gender;?></p>
        <p id="subtitle">Gender</p>
    </div>
    <div class="col">
        <p id="value"><?php echo $number;?></p>
        <p id="subtitle">Contact</p>
    </div>
</div>

<!-- ID -->
<div class="row">
    <div class="col">
        <p id="value"><?php echo $sss;?></p>
        <p id="subtitle">GSIS/SSS</p>
    </div>
    <div class="col">
        <p id="value"><?php echo $philhealth;?></p>
        <p id="subtitle">Philhealth ID</p>
    </div>
    <div class="col">
        <p id="value"><?php echo $tin;?></p>
        <p id="subtitle">TIN ID</p>
    </div>
    <div class="col">
        <p id="value"><?php echo $pagibig;?></p>
        <p id="subtitle">PAG-IBIG</p>
    </div>
    <div class="col">
        <p id="value"><?php echo $othergovid;?></p>
        <p id="subtitle">Other Gov't. ID</p>
    </div>
</div>
<!-- next line -->
<div class="row">
    <div class="col">
        <p id="value"></p>
        <p id="subtitle">Capability to travel</p>
    </div>
    <div class="col">
        <p id="value"><?php echo $maritalstatus; ?></p>
        <p id="subtitle">Marital Staus</p>
    </div>
    <div class="col">
        <p id="value"><?php echo $nationality; ?></p>
        <p id="subtitle">Nationality</p>
    </div>
    <div class="col">
        <p id="value"><?php echo $religion; ?></p>
        <p id="subtitle">Religon</p>
    </div>
    <div class="col">
        <p id="value"><?php echo $employmentstatus; ?></p>
        <p id="subtitle">Employment Status</p>
    </div>
</div>
<!-- B -->
<div class="row">
    <p class="header">Family Composition</p>
</div>
<!-- spouse name -->
<div class="row">
    <div class="col">
        <p class="title">Spouse</p>
    </div>
    <div class="col">
        <p id="value"><?php echo $spouselastname;?></p>
        <p id="subtitle">Last Name</p>
    </div>
    <div class="col">
        <p id="value"><?php echo $spousefirstname;?></p>
        <p id="subtitle">First Name</p>
    </div>
    <div class="col">
        <p id="value"><?php echo $spousemiddlenmae;?></p>
        <p id="subtitle">Middle Name</p>
    </div>
    <div class="col">
        <p id="value"><?php echo $spouseextension;?></p>
        <p id="subtitle">Extension Name</p>
    </div>
</div>
<!-- fathers name -->
<div class="row">
    <div class="col">
        <p class="title">Father</p>
    </div>
    <div class="col">
        <p id="value"><?php echo $fatherlastname;?></p>
        <p id="subtitle">Last Name</p>
    </div>
    <div class="col">
        <p id="value"><?php echo $fatherfirstname;?></p>
        <p id="subtitle">First Name</p>
    </div>
    <div class="col">
        <p id="value"><?php echo $fathermiddlename;?></p>
        <p id="subtitle">Middle Name</p>
    </div>
    <div class="col">
        <p id="value"><?php echo $fatherextension;?></p>
        <p id="subtitle">Extension Name</p>
    </div>
</div>
<!-- Mother name -->
<div class="row">
    <div class="col">
        <p class="title">Mother</p>
    </div>
    <div class="col">
        <p id="value"><?php echo $motherlastname;?></p>
        <p id="subtitle">Last Name</p>
    </div>
    <div class="col">
        <p id="value"><?php echo $motherfirstname;?></p>
        <p id="subtitle">First Name</p>
    </div>
    <div class="col">
        <p id="value"><?php echo $mothermiddlename;?></p>
        <p id="subtitle">Middle Name</p>
    </div>
    <div class="col">
        <p id="value"><?php echo $motherextension;?></p>
        <p id="subtitle">Extension Name</p>
    </div>
</div>
<!-- childeren / dependents -->
<div class="row">
    <div class="d-flex">
        <div id="subtitle" style="transform: translateY(40%);">Children(s)</div>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" id="subtitle">Full name</th>
                        <th scope="col" id="subtitle">Age</th>
                        <th scope="col" id="subtitle">Occupation</th>
                        <th scope="col" id="subtitle">Income</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th id="value"><?php echo $childfirst;?></th>
                        <td id="value"><?php echo $agefirst;?></td>
                        <td id="value"><?php echo $occupationfirst;?></td>
                        <td id="value"><?php echo $incomefirst;?></td>
                    </tr>
                    <tr>
                        <th id="value"><?php echo $childsecond;?></th>
                        <td id="value"><?php echo $agesecond;?></td>
                        <td id="value"><?php echo $occupationsecond;?></td>
                        <td id="value"><?php echo $incomesecond;?></td>
                    </tr>
                    <tr>
                        <th id="value"><?php echo $childthird;?></th>
                        <td id="value"><?php echo $agethird;?></td>
                        <td id="value"><?php echo $occupationthird;?></td>
                        <td id="value"><?php echo $incomethird;?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="row" id="subline">
    <div class="d-flex">
        <div id="subtitle" style="text-align:center;">Other dependent</div>
        <div>
            <table class="table">
                <tbody>
                    <tr>
                        <th id="value"><?php echo $dependentname;?></th>
                        <td id="value"><?php echo $agedependent;?></td>
                        <td id="value"><?php echo $occupationdependent;?></td>
                        <td id="value"><?php echo $incomedependent;?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- C -->
<div class="row">
    <p class="header">Dependency Profile</p>
</div>
<!-- living with -->
<div class="row">
    <div class="d-block">
        <div>
            <p id="subtitle">Living/Residing with</p>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="livingwith1"
                        <?php if($livingwith1 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="livingwith1">
                        Alone
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="livingwith2"
                        <?php if($livingwith2 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="livingwith2">
                        Grand Child(ren)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="livingwith3"
                        <?php if($livingwith3 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="livingwith3">
                        Common Law Spouse
                    </label>
                </div>
            </div>
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="livingwith4"
                        <?php if($livingwith4 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="livingwith4">
                        Spouse
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="livingwith5"
                        <?php if($livingwith5 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="livingwith5">
                        In-law(s)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="livingwith6"
                        <?php if($livingwith6 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="flexCheckChecked">
                        Care Institution
                    </label>
                </div>
            </div>

            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="livingwith7"
                        <?php if($livingwith7 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="livingwith7">
                        Child(ren)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="livingwith8"
                        <?php if($livingwith8 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="livingwith8">
                        Relative(s)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="livingwith9"
                        <?php if($livingwith9 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="livingwith9">
                        Friend(s)
                    </label>
                </div>
            </div>
            <div class="col">
                <p id="value"><?php echo $livingwith10; ?></p>
                <p id="subtitle">Others, specify: </p>
            </div>
        </div>
    </div>
</div>
<!-- housing -->
<div class="row">
    <div class="d-block">
        <div>
            <p id="subtitle">Housing</p>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="housing1"
                        <?php if($housing1 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="housing1">
                        No privacy
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="housing2"
                        <?php if($housing2 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="housing2">
                        Overcrowded in home
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="housing3"
                        <?php if($housing3 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="housing3">
                        Informal Settler
                    </label>
                </div>
            </div>
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="housing4"
                        <?php if($housing4 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="housing4">
                        No permanent house
                    </label>
                </div>
            </div>

            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="housing5"
                        <?php if($housing5 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="housing5">
                        High cost of rent
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="housing6"
                        <?php if($housing6 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="housing6">
                        Longing for independent living quiet atmosphere
                    </label>
                </div>
            </div>
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="housing7"
                        <?php if($housing7 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="housing7">
                        Child(ren)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="housing8"
                        <?php if($housing8 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="housing8">
                        Dependent(s)
                    </label>
                </div>
                <div class="col">
                    <p id="value"><?php echo $housing9;?></p>
                    <p id="subtitle">Others :</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- D -->
<div class="row">
    <p class="header">Education / HR Profile</p>
</div>
<!-- educational attainment -->
<div class="row">
    <div class="d-block">
        <div>
            <p id="subtitle">Educational Attainment</p>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="edu1" <?php if($educationalattainment == '1'){echo 'checked';}else{echo '';}?>>
                    <label class="form-check-label" for="edu1"> 
                        Elementary level
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="edu2" <?php if($educationalattainment == '2'){echo 'checked';}else{echo '';}?>>
                    <label class="form-check-label" for="edu2">
                        Elementary Graduate
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="edu3" <?php if($educationalattainment == '3'){echo 'checked';}else{echo '';}?>>
                    <label class="form-check-label" for="edu3">
                        High School Level
                    </label>
                </div>
            </div>
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="edu4" <?php if($educationalattainment == '4'){echo 'checked';}else{echo '';}?>>
                    <label class="form-check-label" for="edu4">
                        High School Graduate
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="edu5" <?php if($educationalattainment == '5'){echo 'checked';}else{echo '';}?>>
                    <label class="form-check-label" for="edu5">
                        College Level
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="edu6" <?php if($educationalattainment == '6'){echo 'checked';}else{echo '';}?>>
                    <label class="form-check-label" for="edu6">
                        College Graduate
                    </label>
                </div>
            </div>

            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="edu7" <?php if($educationalattainment == '7'){echo 'checked';}else{echo '';}?>>
                    <label class="form-check-label" for="edu7">
                        Post Graduate
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="edu8" <?php if($educationalattainment == '8'){echo 'checked';}else{echo '';}?>>
                    <label class="form-check-label" for="edu8">
                        Vocational
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="edu9" <?php if($educationalattainment == '9'){echo 'checked';}else{echo '';}?>>
                    <label class="form-check-label" for="edu9">
                        Not Attened School
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Specialization -->
<div class="row">
    <div class="d-block">
        <div>
            <p id="subtitle"> Areas of Specialization / Technical Skills</p>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="specialization1"
                        <?php if($spec1 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="specialization1">
                        Medical
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="specialization2"
                        <?php if($spec2 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="specialization2">
                        Teaching
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="specialization3"
                        <?php if($spec3 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="specialization3">
                        Legal Services
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="specialization4"
                        <?php if($spec4 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="specialization4">
                        Dental
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="specialization5"
                        <?php if($spec5 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="specialization5">
                        Counseling
                </div>
            </div>
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="specialization6"
                        <?php if($spec6 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="specialization6">
                        Farming
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="specialization7"
                        <?php if($spec7 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="specialization7">
                        Fishing
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="specialization8"
                        <?php if($spec8 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="specialization8">
                        Cooking
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="specialization9"
                        <?php if($spec9 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="specialization9">
                        Arts
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="specialization10"
                        <?php if($spec10 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="specialization10">
                        Engineering
                    </label>
                </div>
            </div>

            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="specialization11"
                        <?php if($spec11 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="specialization11">
                        Carpenter
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="specialization12"
                        <?php if($spec12 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="specialization12">
                        Plumber
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="specialization13"
                        <?php if($spec13 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="specialization13">
                        Barber
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="specialization14"
                        <?php if($spec14 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="specialization14">
                        Mason
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="specialization15"
                        <?php if($spec15 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="specialization15">
                        Sapatero
                    </label>
                </div>
            </div>
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="specialization16"
                        <?php if($spec16 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="specialization16">
                        Evangelization
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="specialization17"
                        <?php if($spec17 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="specialization17">
                        Tailor
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="specialization18"
                        <?php if($spec18 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="specialization18">
                        Chef/Cook
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="specialization19"
                        <?php if($spec19 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="specialization19">
                        Milwright
                    </label>
                </div>
                <div class="d-flex">
                    <p id="subtitle">Others :</p>
                    <p id="subtitle"><?php echo $spec20;?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Involvement in Community Activities -->
<div class="row">
    <div class="d-block">
        <div>
            <p id="subtitle"> Involvement in Community Activities</p>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="involvement1"
                        <?php if($involvement1 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="involvement1">
                        Medical
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="involvement2"
                        <?php if($involvement2 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="involvement2">
                        Resource Volunteer
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="involvement3"
                        <?php if($involvemen3 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="involvement3">
                        Community Beautification
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="involvement4"
                        <?php if($involvement4 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="involvement4">
                        Community/Organziation Leader
                    </label>
                </div>
            </div>
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="involvement5"
                        <?php if($involvemen5 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="involvement5">
                        Dental
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="involvement6"
                        <?php if($involvement6 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="involvement6">
                        Friendly Visits
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="involvement7"
                        <?php if($involvement7 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="involvement7">
                        Neighborhood Support Services
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="involvement8"
                        <?php if($involvement8 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="involvement8">
                        Legal Services
                    </label>
                </div>
            </div>

            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="involvement9"
                        <?php if($involvement9 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="involvement9">
                        Religious
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="involvement10"
                        <?php if($involvement10 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="involvement10">
                        Counseling/Referral
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="involvement11"
                        <?php if($involvement11 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="involvement11">
                        Sponsorship
                    </label>
                </div>
                <div class="d-flex">
                    <p id="subtitle">Others :</p>
                    <p id="subtitle"><?php echo $involvement12; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  Source of Income and Assistance  -->
<!-- D -->
<div class="row">
    <p class="header">Economic Profile</p>
</div>
<div class="row">
    <div class="d-block">
        <div>
            <p id="subtitle"> Source of Income and Assistance </p>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="soe1"
                        <?php if($soe1 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="soe1">
                        Own earnings, salary/wages
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="soe2"
                        <?php if($soe2 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="soe2">
                        Own Pension
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="soe3"
                        <?php if($soe3 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="soe3">
                        Stocks/Dividends
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="soe4"
                        <?php if($soe4 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="soe4">
                        Dependent on children/relatives
                    </label>
                </div>
            </div>
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="soe5"
                        <?php if($soe5 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="soe5">
                        Spouse's salary
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="soe6"
                        <?php if($soe6 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="soe6">
                        Insurance
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="soe7"
                        <?php if($soe7 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="soe7">
                        Spouse's Pension
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="soe8"
                        <?php if($soe8 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="soe8">
                        Rentals/sharecrops
                    </label>
                </div>
            </div>

            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="soe9"
                        <?php if($soe9 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="soe9">
                        Savings
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="soe10"
                        <?php if($soe10 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="soe10">
                        Livestock/orchard/farm
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="soe11"
                        <?php if($soe11 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="soe11">
                        Fishing
                    </label>
                </div>
                <div class="d-flex">
                    <p id="subtitle">Others :</p>
                    <p id="subtitle"><?php echo $soe12;?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- assets A -->
<div class="row">
    <div class="d-block">
        <div>
            <p id="subtitle">A Assets: Real and Immovable Properties</p>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="assets1"
                        <?php if($assetsa1 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="assets1">
                        House
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="assets2"
                        <?php if($assetsa2 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="assets2">
                        Lot/Farmland
                    </label>
                </div>
            </div>
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="assets3"
                        <?php if($assetsa3 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="assets3">
                        Hourse & Lot
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="assets4"
                        <?php if($assetsa4 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="assets4">
                        Commercial Building
                    </label>
                </div>
            </div>

            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="assets5"
                        <?php if($assets5 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="assets5">
                        Fishpond/resort
                    </label>
                </div>
                <div class="d-flex">
                    <p id="subtitle">Others :</p>
                    <p id="subtitle"><?php echo $assets6;?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- assetb B -->
<div class="row">
    <div class="d-block">
        <div>
            <p id="subtitle">B Assets: Personal and Movable Properties</p>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="assetb1"
                        <?php if($assetsb1 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="assetb1">
                        Automobile
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="assetb2"
                        <?php if($assetsb2 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="assetb2">
                        Personal Computer
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="assetb3"
                        <?php if($assetsb3 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="assetb3">
                        Boats
                    </label>
                </div>
            </div>
            <div class="col">

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="assetb4"
                        <?php if($assetsb4 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="assetb4">
                        Heavy Equipment
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="assetb5"
                        <?php if($assetsb5 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="assetb5">
                        Laptops
                    </label>
                </div>


                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="assetb6"
                        <?php if($assetsb6 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="assetb6">
                        Drones
                    </label>
                </div>
            </div>

            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="assetb7"
                        <?php if($assetsb7== '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="assetb7">
                        Motorcycle
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="assetb8"
                        <?php if($assetsb8 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="assetb8">
                        Mobile Phones
                    </label>
                </div>

                <div class="d-flex">
                    <p id="subtitle">Others :</p>
                    <p id="subtitle"><?php echo $assetsb9?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  Monthly Income (in Philippine Peso) -->
<div class="row">
    <div class="d-block">
        <div>
            <p id="subtitle"> Monthly Income (in Philippine Peso)</p>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="income1"
                        <?php if($mincome1 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="income1">
                        60,000 and above
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="income2"
                        <?php if($mincome2 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="income2">
                        50,000 to 60,000
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="income3"
                        <?php if($mincome3 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="income3">
                        40,000 to 50,000
                    </label>
                </div>
            </div>
            <div class="col">

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="income4"
                        <?php if($mincome4 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="income4">
                        30,000 to 40,000
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="income5"
                        <?php if($mincome5 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="income5">
                        20,000 to 30,000
                    </label>
                </div>


                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="income6"
                        <?php if($mincome6 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="income6">
                        10,000 to 20,000
                    </label>
                </div>
            </div>

            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="income7"
                        <?php if($mincome7 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="income7">
                        5,000 to 10,000
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="income8"
                        <?php if($mincome8 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="income8">
                        1,000 to 5,000,000 to 5,000
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="income9"
                        <?php if($mincome9 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="income9">
                        Below 1,000
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Problems -->
<div class="row">
    <div class="d-block">
        <div>
            <p id="subtitle"> Problems / Needs Commonly Encountered</p>
        </div>
        <di class="row">
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="problems1"
                        <?php if($problems1 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="problems1">
                        Lack of income/resources
                    </label>
                </div>
            </div>
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="problems2"
                        <?php if($problems2 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="problems2">
                        Loss of income/resources
                    </label>
                </div>
            </div>
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="problems3"
                        <?php if($problem3 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="problems3">
                        Skills/capability
                    </label>
                </div>
            </div>
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="problems4"
                        <?php if($problems4 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="problems4">
                        Livelihood opportunities
                    </label>
                </div>
            </div>
            <div class="col">
                <div class="d-flex">
                    <p id="subtitle">Others :</p>
                    <p id="subtitle"><?php echo $problems5;?></p>
                </div>
            </div>
        </di>
    </div>
</div>
<!-- concern E -->
<div class="row">
    <p class="header">Health Profile</p>
</div>
<div class="row">
    <div class="d-block">
        <div style="margin-bottom: 10px;">
            <p id="subtitle"> Medical Concern</p>
        </div>
        <div class="d-flex">
            <div class="col">
                <div class="form-check">
                    <div class="d-flex">
                        <div>
                            <input class="form-check-input" type="checkbox" value="" id="concern1"
                                <?php if($concern1 == '1'){echo 'checked';}else{echo '';} ?>>
                            <label class="form-check-label" for="concern1">
                                Blood
                            </label>
                        </div>
                        <div class="d-flex">
                            <p id="subtitle">\ Type :</p>
                            <p id="subtitle"><?php echo $concern1type;?></p>
                        </div>
                    </div>
                </div>
                <div class="form-check">
                    <div class="d-flex">
                        <div>
                            <input class="form-check-input" type="checkbox" value="" id="concern2"
                                <?php if($concern2 == '1'){echo 'checked';}else{echo '';} ?>>
                            <label class="form-check-label" for="concern2">
                                Physical Disability
                            </label>
                        </div>
                        <div class="d-flex">
                            <p id="subtitle">\ Specify :</p>
                            <p id="subtitle"><?php echo $concern2type;?></p>
                        </div>
                    </div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="concern3"
                        <?php if($concern3 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="concern3">
                        Health problems / ailments
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="concern4"
                        <?php if($concern4 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="concern4">
                        Hypertension
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="concern5"
                        <?php if($concern5 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="concern5">
                        Arthritis/Gout
                    </label>
                </div>
            </div>
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="concern6"
                        <?php if($concern6 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="concern6">
                        Chronic Kidney Disease
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="concern7"
                        <?php if($concern7 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="concern7">
                        Coronary Heart Disease
                    </label>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="concern8"
                            <?php if($concern8 == '1'){echo 'checked';}else{echo '';} ?>>
                        <label class="form-check-label" for="concern8">
                            Diabetes
                        </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="concern9"
                            <?php if($concern9 == '1'){echo 'checked';}else{echo '';} ?>>
                        <label class="form-check-label" for="concern9">
                            Alzheimer's/Dementia
                        </label>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="concern10"
                        <?php if($concern10 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="concern10">
                        Chronic Kidney Disease
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="concern11"
                        <?php if($concern11 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="concern11">
                        Needs dental care
                    </label>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="concern12"
                            <?php if($concern12 == '1'){echo 'checked';}else{echo '';} ?>>
                        <label class="form-check-label" for="concern12">
                            Needs eye care
                        </label>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex">
                        <p id="subtitle">Others :</p>
                        <p id="subtitle"><?php echo $concern13;?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- difficulty -->
<div class="row">
    <div class="d-block">
        <div>
            <p id="subtitle">Area / Difficulty </p>
        </div>
        <di class="row">
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="problems1"
                        <?php if($etc1 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="problems1">
                        High cost of medicines
                    </label>
                </div>
            </div>
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="problems2"
                        <?php if($etc2 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="problems2">
                        Lack of medicines
                    </label>
                </div>
            </div>
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="problems3"
                        <?php if($etc3 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="problems3">
                        Lack of medical attention
                    </label>
                </div>
            </div>
            <div class="col">
                <div class="d-flex">
                    <p id="subtitle">Others :</p>
                    <p id="subtitle"><?php echo $etc4?></p>
                </div>
            </div>
        </di>
    </div>
</div>

<!-- LIST OF MEDICINE -->
<div class="row">
    <div class="d-block">
        <div>
            <p id="subtitle">List of Medicines for Maintenance</p>
        </div>
        <di class="row">
            <div class="col">
                <div class="d-flex">
                    <p id="subtitle">1. </p>
                    <p id="subtitle"><?php echo $etc5; ?></p>
                </div>
            </div>
            <div class="col">
                <div class="d-flex">
                    <p id="subtitle">2. </p>
                    <p id="subtitle"><?php echo $etc6;?></p>
                </div>
            </div>
            <div class="col">
                <div class="d-flex">
                    <p id="subtitle">3.</p>
                    <p id="subtitle"><?php echo $etc7?></p>
                </div>
            </div>
            <div class="col">
                <div class="d-flex">
                    <p id="subtitle">4.</p>
                    <p id="subtitle"><?php echo $etc8;?></p>
                </div>
            </div>
        </di>
    </div>
</div>
<div class="row">
    <div class="row">
        <div class="d-flex">
            <p id="subtitle">Do you have a scheduled medical/physical check-up?</p>
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="checkup"
                        <?php if($etc9 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="checkup">
                        Yes
                    </label>
                </div>
            </div>
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="checkup"
                        <?php if($etc9 == '0'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="checkup">
                        No
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="d-flex">
            <p id="subtitle">If Yes, when is it done?</p>
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="checkup"
                        <?php if($etc10 == '0'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="checkup">
                        Yearly
                    </label>
                </div>
            </div>
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="checkup"
                        <?php if($etc10 == '1'){echo 'checked';}else{echo '';} ?>>
                    <label class="form-check-label" for="checkup">
                        Every 6 months
                    </label>
                </div>
            </div>

            <div class="col">
                <div class="d-flex">
                    <p id="subtitle">Other:</p>
                    <p id="subtitle"><?php echo $etc11; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>