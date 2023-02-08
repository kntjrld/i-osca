<?php
session_start();
include('../conn/connection.php');

if (isset($_SESSION['user_id']) && isset($_SESSION['user_name'])) {
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>i-OSCA Registration</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel="stylesheet" href="../css/regstyle.css">
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- ======= JavaScript ======= -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <header>i-OSCA Registration</header>
    <div class="content">
        <div class="content__inner">
            <div class="container overflow-hidden">
                <div class="multisteps-form">
                    <div class="row">
                        <div class="col-12 ml-auto mr-auto mb-4">
                            <div class="multisteps-form__progress">
                                <button class="multisteps-form__progress-btn js-active" type="button"
                                    title="User Info">User Info</button>
                                <button class="multisteps-form__progress-btn" type="button"
                                    title="Family Composition">Family
                                    Composition</button>
                                <button class="multisteps-form__progress-btn" type="button"
                                    title="Other information">Other
                                    info</button>
                                <button class="multisteps-form__progress-btn" type="button"
                                    title="Health & Verification">Health &
                                    Verification</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m-auto">
                            <form class="multisteps-form__form" id="form" enctype="multipart/form-data"
                                action="api/regfunction.php" method="post">
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active"
                                    data-animation="scaleIn">
                                    <div class="multisteps-form__content">
                                        <div class="details personal">
                                            <span class="titlex">Identification Details</span>
                                            <div class="fields">
                                                <!-- Full name -->
                                                <div class="input-field">
                                                    <label>Last name</label>
                                                    <input type="text" name="lastname" id="lastname"
                                                        placeholder="Enter last name">
                                                </div>

                                                <div class="input-field">
                                                    <label>First Name</label>
                                                    <input type="text" name="firstname" id="firstname"
                                                        placeholder="Enter first name">
                                                </div>

                                                <div class="input-field">
                                                    <label>Middle name</label>
                                                    <input type="text" name="middlename" id="firstname"
                                                        placeholder="Enter middle name">
                                                </div>

                                                <div class="input-field">
                                                    <label>Extension</label>
                                                    <input type="text" name="extension" id="extension"
                                                        placeholder="N/A if none">
                                                </div>

                                                <!-- info details -->
                                                <div class="input-field">
                                                    <label>Date of Birth</label>
                                                    <input type="date" name="bday" id="birthdate"
                                                        placeholder="Enter birth date">
                                                </div>

                                                <div class="input-field">
                                                    <label>Email</label>
                                                    <input type="email" name="email" placeholder="Enter your email">
                                                </div>

                                                <div class="input-field">
                                                    <label>Mobile Number</label>
                                                    <input type="text" name="number" maxlength="10"
                                                        placeholder="10 digit mobile number">
                                                </div>

                                                <div class="input-field">
                                                    <label>Gender</label>
                                                    <select name="gender">
                                                        <option disabled selected>Select gender</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>

                                                <div class="input-field">
                                                    <label>Nationality</label>
                                                    <input type="text" name="nationality"
                                                        placeholder="Enter nationality">
                                                </div>

                                                <div class="input-field">
                                                    <label>Religion</label>
                                                    <input type="text" name="religion" placeholder="Enter religion">
                                                </div>

                                                <div class="input-field">
                                                    <label>Marital Status</label>
                                                    <select name="maritalstatus">
                                                        <option value="N/A" disabled selected>Select Marital Status
                                                        </option>
                                                        <option value="Single">Single</option>
                                                        <option value="Married">Married</option>
                                                        <option value="Widowed">Widowed</option>
                                                        <option value="Separated">Separated</option>
                                                    </select>
                                                </div>

                                                <div class="input-field">
                                                    <label>Employement Status</label>
                                                    <select value="N/A" name="employementstatus">
                                                        <option disabled selected>Select Employement Status</option>
                                                        <option value="Unemployed">Unemployed</option>
                                                        <option value="Self-employed">Self-employed</option>
                                                        <option value="Employed">Employed</option>
                                                        <option value="Retired">Retired</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="details address">
                                            <span class="titlex">Address Details</span>
                                            <div class="fields">
                                                <div class="input-field">
                                                    <label>Municipality</label>
                                                    <input type="text" name="municipality" value="Mamburao">
                                                </div>
                                                <div class="input-field">
                                                    <label>Barangay</label>
                                                    <select name="barangay">
                                                        <option disabled selected>Select barangay</option>
                                                        <option value="Balansay">Balansay</option>
                                                        <option value="Barangay 1">Barangay 1</option>
                                                        <option value="Barangay 2">Barangay 2</option>
                                                        <option value="Barangay 3">Barangay 3</option>
                                                        <option value="Barangay 4">Barangay 4</option>
                                                        <option value="Barangay 5">Barangay 5</option>
                                                        <option value="Barangay 6">Barangay 6</option>
                                                        <option value="Barangay 7">Barangay 7</option>
                                                        <option value="Barangay 8">Barangay 8</option>
                                                        <option value="Casoy">Casoy</option>
                                                        <option value="Fatima">Fatima</option>
                                                        <option value="Payompon">Payompon</option>
                                                        <option value="San Luis (Ligang)">San Luis (Ligang)</option>
                                                        <option value="Somel">Somel</option>
                                                        <option value="Talabaan">Talabaan</option>
                                                        <option value="Tangkalan">Tangkalan</option>
                                                        <option value="Tayamaan">Tayamaan</option>
                                                    </select>
                                                </div>
                                                <div class="input-field">
                                                    <label>House No./Zone/Purok/Sitio</label>
                                                    <input type="text" name="hnzps"
                                                        placeholder="Enter House No./Zone/Purok/Sitio">
                                                </div>
                                                <div class="input-field">
                                                    <label>Street</label>
                                                    <input type="text" name="street" placeholder="Enter street name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Other details">
                                            <span class="titlex">Other Details</span>
                                            <div class="fields">

                                                <div class="input-field">
                                                    <label>Capability to travel?</label>
                                                    <select name="capabilitytotravel">
                                                        <option disabled value="N/A" selected>Select</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>

                                                <div class="input-field">
                                                    <label>Government Employee?</label>
                                                    <select name="governmentemployee">
                                                        <option disabled value="N/A" selected>Select</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>

                                                <div class="input-field">
                                                    <label>Highest Educational Attainment </label>
                                                    <select name="highesteducation">
                                                        <option disabled value="N/A" selected>Select Education</option>
                                                        <option value="1">Elementary Level</option>
                                                        <option value="2">Elementary Graduate</option>
                                                        <option value="3">High School Level</option>
                                                        <option value="4">High School Graduate
                                                        </option>
                                                        <option value="5">College Level</option>
                                                        <option value="6">College Graduate</option>
                                                        <option value="7">Post Graduate</option>
                                                        <option value="8">Vocational</option>
                                                        <option value="9">Not Attended School</option>
                                                    </select>
                                                </div>

                                                <div class="input-field">
                                                    <label>SSS</label>
                                                    <input type="text" name="sss_id" id="sss_id"
                                                        placeholder="sss number">
                                                </div>

                                                <div class="input-field">
                                                    <label>Philhealth</label>
                                                    <input type="text" name="philhealth_id" id="philhealth_id"
                                                        placeholder="Philhealth number">
                                                </div>


                                                <div class="input-field">
                                                    <label>TIN</label>
                                                    <input type="text" name="tin_id" id="tin_id"
                                                        placeholder="TIN number">
                                                </div>

                                                <div class="input-field">
                                                    <label>Pag-ibig</label>
                                                    <input type="text" name="pagibig_id" id="pagibig_id"
                                                        placeholder="Pag-ibig number">
                                                </div>

                                                <div class="input-field">
                                                    <label>Other gov. ID</label>
                                                    <input type="text" name="other_id" id="other_id"
                                                        placeholder="ID number">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button type="button" onclick="history.back()" class="btn btn-primary me-auto js-btn-back"><i
                                                    class="uil uil-navigator"></i>Back</button>
                                            <button class="btn btn-primary ml-auto js-btn-next" type="button"
                                                title="Next" onclick="window.scrollTo(0, 0)">Next <i
                                                    class="uil uil-navigator"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="multisteps-form__panel shadow p-4 rounded bg-white"
                                    data-animation="scaleIn">
                                    <div class="multisteps-form__content">
                                        <span class="titlex">Spouse Name</span>
                                        <div class="fields">
                                            <!-- Full name -->
                                            <div class="input-field">
                                                <label>Last name</label>
                                                <input type="text" name="spouselastname" id="spouselastname"
                                                    placeholder="Enter last name">
                                            </div>

                                            <div class="input-field">
                                                <label>First Name</label>
                                                <input type="text" name="spousefirstname" id="spousefirstname"
                                                    placeholder="Enter first name">
                                            </div>

                                            <div class="input-field">
                                                <label>Middle name</label>
                                                <input type="text" name="spousemiddlename" id="spousemiddlename"
                                                    placeholder="Enter middle name">
                                            </div>

                                            <div class="input-field">
                                                <label>Extension</label>
                                                <input type="text" name="spouseextension" id="spouseextension"
                                                    placeholder="N/A if none">
                                            </div>
                                        </div>
                                        <span class="titlex">Father's Name</span>
                                        <div class="fields">
                                            <!-- Full name -->
                                            <div class="input-field">
                                                <label>Last name</label>
                                                <input type="text" name="fatherlastname" id="fatherlastname"
                                                    placeholder="Enter last name">
                                            </div>

                                            <div class="input-field">
                                                <label>First Name</label>
                                                <input type="text" name="fatherfirstname" id="fatherfirstname"
                                                    placeholder="Enter first name">
                                            </div>

                                            <div class="input-field">
                                                <label>Middle name</label>
                                                <input type="text" name="fathermiddlename" id="fathermiddlename"
                                                    placeholder="Enter middle name">
                                            </div>

                                            <div class="input-field">
                                                <label>Extension</label>
                                                <input type="text" name="fatherextension" id="fatherextension"
                                                    placeholder="N/A if none">
                                            </div>
                                        </div>
                                        <span class="titlex">Mother's Name</span>
                                        <div class="fields">
                                            <!-- Full name -->
                                            <div class="input-field">
                                                <label>Last name</label>
                                                <input type="text" name="motherlastname" id="motherlastname"
                                                    placeholder="Enter last name">
                                            </div>

                                            <div class="input-field">
                                                <label>First Name</label>
                                                <input type="text" name="motherfirstname" id="motherfirstname"
                                                    placeholder="Enter first name">
                                            </div>

                                            <div class="input-field">
                                                <label>Middle name</label>
                                                <input type="text" name="mothermiddlename" id="mothermiddlename"
                                                    placeholder="Enter middle name">
                                            </div>

                                            <div class="input-field">
                                                <label>Extension</label>
                                                <input type="text" name="motherextension" id="motherextension"
                                                    placeholder="N/A if none">
                                            </div>
                                        </div>
                                        <span class="titlex">Children's Name</span>
                                        <div class="fields">
                                            <!-- Full name -->
                                            <div class="input-field">
                                                <label>Full name</label>
                                                <input type="text" name="children1" id="children1"
                                                    placeholder="N/A if none">
                                            </div>

                                            <div class="input-field">
                                                <label>Occupation</label>
                                                <input type="text" name="occupation1" id="occupation1"
                                                    placeholder="N/A if none">
                                            </div>

                                            <div class="input-field">
                                                <label> Income</label>
                                                <input type="text" name="childincome1" id="childincome1"
                                                    placeholder="N/A if none">
                                            </div>

                                            <div class="input-field">
                                                <label>Age</label>
                                                <input type="text" name="childage1" id="childage1" placeholder="">
                                            </div>
                                            <!-- Full name -->
                                            <div class="input-field">
                                                <label>Full name</label>
                                                <input type="text" name="fullname2" id="fullname2"
                                                    placeholder="N/A if none">
                                            </div>

                                            <div class="input-field">
                                                <label>Occupation</label>
                                                <input type="text" name="occupation2" id="occupation2"
                                                    placeholder="N/A if none">
                                            </div>

                                            <div class="input-field">
                                                <label> Income</label>
                                                <input type="text" name="childincome2" id="childincome2"
                                                    placeholder="N/A if none">
                                            </div>

                                            <div class="input-field">
                                                <label>Age</label>
                                                <input type="text" name="childage2" id="childage2" placeholder="">
                                            </div>

                                            <!-- Full name -->
                                            <div class="input-field">
                                                <label>Full name</label>
                                                <input type="text" name="fullname3" id="fullname3"
                                                    placeholder="N/A if none">
                                            </div>

                                            <div class="input-field">
                                                <label>Occupation</label>
                                                <input type="text" name="occupation3" id="occupation3"
                                                    placeholder="N/A if none">
                                            </div>

                                            <div class="input-field">
                                                <label> Income</label>
                                                <input type="text" name="childincome3" id="childincome3"
                                                    placeholder="N/A if none">
                                            </div>

                                            <div class="input-field">
                                                <label>Age</label>
                                                <input type="text" name="childage3" id="childage3" placeholder="">
                                            </div>
                                        </div>
                                        <span class="titlex">Other dependents</span>
                                        <div class="fields">
                                            <!-- Full name -->
                                            <div class="input-field">
                                                <label>Full name</label>
                                                <input type="text" name="dependentname" id="dependentname"
                                                    placeholder="N/A if none">
                                            </div>

                                            <div class="input-field">
                                                <label>Occupation</label>
                                                <input type="text" name="dependentoccupation" id="dependentoccupation"
                                                    placeholder="N/A if none">
                                            </div>

                                            <div class="input-field">
                                                <label> Income</label>
                                                <input type="text" name="dependentincome" id="dependentincome"
                                                    placeholder="N/A if none">
                                            </div>

                                            <div class="input-field">
                                                <label>Age</label>
                                                <input type="text" name="dependentage" id="dependentage" placeholder="">
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn btn-primary js-btn-prev" type="button" title="Prev"
                                                onclick="window.scrollTo(0, 0)"><i class="uil uil-navigator"></i>
                                                Back</button>
                                            <button class="btn btn-primary ml-auto js-btn-next" type="button"
                                                title="Next" onclick="window.scrollTo(0, 0)">Next <i
                                                    class="uil uil-navigator"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="multisteps-form__panel shadow p-4 rounded bg-white"
                                    data-animation="scaleIn">
                                    <div class="multisteps-form__content">
                                        <div class="details dependency">
                                            <span class="titlex">Dependency Profile</span>
                                            <!-- <div class="fields"> -->
                                            <!-- === Living/Residing with === -->
                                            <span class="subtitle">Living/Residing with (check all applicable)</span>
                                            <div class="r-fields">
                                                <div class="checkbox">
                                                    <input type="checkbox" name="livingwith1" value="1"> 1.
                                                    Alone<br>
                                                    <input type="checkbox" name="livingwith2" value="1"> 2.
                                                    Grand Children<br>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" name="livingwith3" value="1">
                                                    3. Common Law
                                                    Spouse<br>
                                                    <input type="checkbox" name="livingwith4" value="1"> 4.
                                                    Spouse<br>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" name="livingwith5" value="1"> 5.
                                                    In-law(s)<br>
                                                    <input type="checkbox" name="livingwith6" value="1">
                                                    6. Care Institution<br>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" name="livingwith7" value="1"> 7.
                                                    Child(ren)<br>
                                                    <input type="checkbox" name="livingwith8" value="1"> 8.
                                                    Relative(s)<br>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" name="livingwith8" value="1"> 9.
                                                    Friend(s)<br>
                                                    <label>10. </label><input type="text" name="livingwithothers"
                                                        class="others" placeholder="Specify, other(s)"><br>
                                                </div>
                                            </div>
                                            <!-- </div> -->
                                            <!-- ====Housing=== -->
                                            <span class="subtitle">Housing</span>
                                            <div class="r-fields">
                                                <div class="checkbox">
                                                    <input type="checkbox" name="housing1" value="1"> 1. No
                                                    privacy<br>
                                                    <input type="checkbox" name="housing2" value="1">
                                                    2. Overcrowded in
                                                    home<br>
                                                    <input type="checkbox" name="housing3" value="1"> 3.
                                                    Informal Settler<br>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" name="housing4" value="1">
                                                    4. No permanent house<br>
                                                    <input type="checkbox" name="housing5" value="1"> 5.
                                                    High cost of rent<br>
                                                    <input type="checkbox" name="housing6" value="1"> 6. Longing for
                                                    independent living quiet
                                                    atmosphere<br>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" name="housing7" value="1"> 7.
                                                    Child(ren)<br>
                                                    <input type="checkbox" name="housing8" value="1"> 8.
                                                    Relative(s)<br>
                                                    <label>9. </label><input type="text" class="others"
                                                        name="housingothers" placeholder="Specify, other(s)"><br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="details education">
                                            <span class="titlex">EDUCATION / HR PROFILE</span>
                                            <!-- <div class="fields"> -->
                                            <!-- ====Areas of Specialization / Technical Skills=== -->
                                            <span class="subtitle">Areas of Specialization / Technical Skills (Check all
                                                applicable)</span>
                                            <div class="r-fields">
                                                <div class="checkbox">
                                                    <input type="checkbox" name="specialization1" value="1"> 1.
                                                    Medical<br>
                                                    <input type="checkbox" name="specialization2" value="1"> 2.
                                                    Teaching<br>
                                                    <input type="checkbox" name="specialization3"
                                                        value="Legal Services"> 3. Legal Services<br>
                                                    <input type="checkbox" name="specialization4" value="1"> 4.
                                                    Dental<br>
                                                    <input type="checkbox" name="specialization5" value="1"> 5.
                                                    Dental<br>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" name="specialization6" value="1"> 6.
                                                    Farming<br>
                                                    <input type="checkbox" name="specialization7" value="1"> 7.
                                                    Fishing<br>
                                                    <input type="checkbox" name="specialization8" value="1"> 8.
                                                    Cooking<br>
                                                    <input type="checkbox" name="specialization9" value="1"> 9.
                                                    Arts<br>
                                                    <input type="checkbox" name="specialization10" value="1">
                                                    10. Engineering<br>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" name="specialization11" value="1">
                                                    11. Carpenter<br>
                                                    <input type="checkbox" name="specialization12" value="1"> 12.
                                                    Plumber<br>
                                                    <input type="checkbox" name="specialization13" value="1"> 13.
                                                    Barber<br>
                                                    <input type="checkbox" name="specialization14" value="1"> 14.
                                                    Mason<br>
                                                    <input type="checkbox" name="specialization15" value="1"> 15.
                                                    Sapatero<br>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" name="specialization16" value="1"> 16.
                                                    Evangelization<br>
                                                    <input type="checkbox" name="specialization17" value="1"> 17.
                                                    Tailor<br>
                                                    <input type="checkbox" name="specialization18" value="1">
                                                    18. Chef/Cook<br>
                                                    <input type="checkbox" name="specialization19" value="1">
                                                    19. Millwright<br>
                                                    <label>20. </label><input type="text" class="others"
                                                        name="specializationothers" placeholder="Specify, other(s)"><br>
                                                </div>
                                            </div>
                                            <!-- ====1. Involvement in Community Activities (Check all applicable=== -->
                                            <span class="subtitle">Involvement in Community Activities (Check all
                                                applicable)</span>
                                            <div class="r-fields">
                                                <div class="checkbox">
                                                    <input type="checkbox" name="involvement1" value="1"> 1.
                                                    Medical<br>
                                                    <input type="checkbox" name="involvement2" value="1"> 2. Resource
                                                    Volunteer<br>
                                                    <input type="checkbox" name="involvement3" value="1"> 3. Community
                                                    Beautification<br>
                                                    <input type="checkbox" name="involvement4" value="1"> 4.
                                                    Community / Organization Leader<br>
                                                    <input type="checkbox" name="involvement5" value="1"> 5.
                                                    Dental<br>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" name="involvement6" value="1">
                                                    6. Friendly Visits<br>
                                                    <input type="checkbox" name="involvement7" value="1"> 7.
                                                    Neighborhood Support Services<br>
                                                    <input type="checkbox" name="involvement8" value="1">
                                                    8. Legal Services<br>
                                                    <input type="checkbox" name="involvement9" value="1"> 9.
                                                    Religious<br>
                                                    <input type="checkbox" name="involvement10" value="1"> 10.
                                                    Counseling /
                                                    Referral<br>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" name="involvement11" value="1"> 11.
                                                    Sponsorship<br>
                                                    <label>12. </label><input type="text" class="others"
                                                        name="involvementothers" placeholder="Specify, other(s)"><br>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- =============ECONOMIC PROFILE============ -->
                                        <div class="details economic">
                                            <!-- ====ECONOMIC PROFILE=== -->
                                            <span class="titlex">ECONOMIC PROFILE</span>
                                            <span class="subtitle">Source of Income and Assistance (Check all
                                                applicable)</span>
                                            <div class="r-fields">
                                                <div class="checkbox">
                                                    <input type="checkbox" name="soe1" value="1"> 1. Own earnings,
                                                    salary/wages<br>
                                                    <input type="checkbox" name="soe2" value="1"> 2. Own
                                                    Pension<br>
                                                    <input type="checkbox" name="soe3" value="1"> 3.
                                                    Stocks/Dividents<br>
                                                    <input type="checkbox" name="soe4" value="1"> 4. Dependent
                                                    on children / relatives<br>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" name="soe5" value="1"> 5.
                                                    Spouse's salary<br>
                                                    <input type="checkbox" name="soe6" value="1"> 6.
                                                    Insurance<br>
                                                    <input type="checkbox" name="soe7" value="1"> 7.
                                                    Spouse's Pension<br>
                                                    <input type="checkbox" name="soe8" value="1"> 8.
                                                    Rentals / sharecrops<br>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" name="soe9" value="1"> 9. Savings<br>
                                                    <input type="checkbox" name="soe10" value="1"> 10. Livestock /
                                                    orchard / farm<br>
                                                    <input type="checkbox" name="soe11" value="Fishing"> 11. Fishing<br>
                                                    <label>12. </label><input type="text" class="others"
                                                        name="soeothers" placeholder="Specify, other(s)"><br>
                                                </div>
                                            </div>
                                            <span class="subtitle">A. Assets: Real and Immovable Properties (check all
                                                applicable)</span>
                                            <div class="r-fields">
                                                <div class="checkbox">
                                                    <input type="checkbox" name="assets1" value="1"> 1. House<br>
                                                    <input type="checkbox" name="assets2" value="1"> 2. Lot /
                                                    Farmland<br>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" name="assets3" value="1"> 3. House & Lot<br>
                                                    <input type="checkbox" name="assets4" value="1"> 4. Commercial
                                                    Building<br>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" name="assets5" value="1"> 5. Fishpond /
                                                    resort<br>
                                                    <label>6. </label><input type="text" class="others"
                                                        name="assetsothers" placeholder="Specify, other(s)"><br>
                                                </div>
                                            </div>
                                            <!-- ==== -->
                                            <span class="subtitle">B Assets: Personal and Movable Properties</span>
                                            <div class="r-fields">
                                                <div class="checkbox">
                                                    <input type="checkbox" name="assetsb1" value="1">
                                                    Automobile<br>
                                                    <input type="checkbox" name="assetsb2" value="1">
                                                    Personal Computer<br>
                                                    <input type="checkbox" name="assetsb3" value="1"> Boats<br>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" name="assetsb4" value="1"> Heavy
                                                    Quipment<br>
                                                    <input type="checkbox" name="assetsb5" value="1"> Laptops<br>
                                                    <input type="checkbox" name="assetsb6" value="1"> Drones<br>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" name="assetsb7" value="1">
                                                    Motorcycle<br>
                                                    <input type="checkbox" name="assetsb8" value="1"> Mobile
                                                    Phones<br>
                                                    <input type="text" class="others" name="assetsbothers"
                                                        placeholder="Specify, other(s)"><br>
                                                </div>
                                            </div>
                                            <!-- ===== -->
                                            <span class="subtitle">Monthly Income (in Philippine Peso)</span>
                                            <div class="r-fields">
                                                <div class="checkbox">
                                                    <input type="checkbox" name="income1" value="1">
                                                    60,000 and above<br>
                                                    <input type="checkbox" name="income2" value="1">
                                                    50,000 to 60,000<br>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" name="income3" value="1">
                                                    40,000 to 50,000<br>
                                                    <input type="checkbox" name="income4" value="1">
                                                    30,000 to 40,000<br>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" name="income5" value="1">
                                                    20,000 to 30,000<br>
                                                    <input type="checkbox" name="income6" value="1">
                                                    10,000 to 20,000<br>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" name="income7" value="1"> 5000
                                                    to 10,000<br>
                                                    <input type="checkbox" name="income8" value="1"> 1000 to
                                                    5000<br>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" name="income9" value="1"> Below
                                                    1000<br>
                                                </div>
                                            </div>
                                            <!-- =====sub==== -->
                                            <span class="subtitle">A Problems / Needs Commonly Encountered (Check all
                                                applicable)</span>
                                            <div class="r-fields">
                                                <div class="checkbox">
                                                    <input type="checkbox" name="problems1" value="1"> 1. Lack of income
                                                    /
                                                    resources<br>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" name="problems2" value="1"> 2. Lost of income
                                                    /
                                                    resources<br>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" name="problems3" value="1"> 3. Skills /
                                                    capability
                                                    training<br>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" name="problems4" value="1"> 4. Livelihood
                                                    opportunities<br>
                                                </div>
                                                <div class="checkbox">
                                                    <label></label><input type="text" class="others"
                                                        name="problemsothers" placeholder="Specify, other(s)"><br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn btn-primary js-btn-prev" type="button" title="Prev"
                                                onclick="window.scrollTo(0, 0)"><i
                                                    class="uil uil-navigator"></i>Back</button>
                                            <button class="btn btn-primary ml-auto js-btn-next" type="button"
                                                title="Next" onclick="window.scrollTo(0, 0)">Next <i
                                                    class="uil uil-navigator"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="multisteps-form__panel shadow p-4 rounded bg-white"
                                    data-animation="scaleIn">
                                    <div class="multisteps-form__content">
                                        <!-- ============HEALTH================= -->
                                        <div class="details health">
                                            <!-- ===HEALTH PROFILE== -->
                                            <span class="titlex">HEALTH PROFILE</span>
                                            <!-- ==== Medical concern === -->
                                            <span class="subtitle">Medical concern</span>
                                            <div class="r-fields">
                                                <div class="checkbox">
                                                    <input type="checkbox" name="concern1" value="1"> Blood
                                                    type<select name="concern1type">
                                                        <option disabled selected>Select blood type</option>
                                                        <option value="Aplus">A+</option>
                                                        <option value="Anegative">A-</option>
                                                        <option value="Bpositive">B+</option>
                                                        <option value="Bnegative">B-</option>
                                                        <option value="Opositive">O+</option>
                                                        <option value="Onegative">O-</option>
                                                        <option value="ABpositive">AB+</option>
                                                        <option value="ABnegative">AB-</option>
                                                    </select><br>
                                                    <input type="checkbox" name="concern2" value="1">
                                                    Physical Disablity <input type="text" name="concern2type"
                                                        class="others" name="physicaldisability"
                                                        placeholder="specify"><br>
                                                    <input type="checkbox" name="concern3" value="1"> Health problems /
                                                    ailments<br>
                                                    <input type="checkbox" name="concern4" value="1">
                                                    Hypertension<br>
                                                    <input type="checkbox" name="concern5" value="1">
                                                    Arthritis / Gout<br>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" name="concern6" value="1"> Chronic Kidney
                                                    Disease<br>
                                                    <input type="checkbox" name="concern7" value="1"> Coronary Heart
                                                    Disease<br>
                                                    <input type="checkbox" name="concern8" value="1">
                                                    Diabetes<br>
                                                    <input type="checkbox" name="concern9" value="1"> Alzheimer's /
                                                    Dementia<br>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" name="concern10" value="1"> Chronnic
                                                    Obstructive Pulmonary Disease<br>
                                                    <input type="checkbox" name="concern11" value="1">
                                                    Needs dental care<br>
                                                    <input type="checkbox" name="concern12" value="1">
                                                    Needs eye care<br>
                                                    <label></label><input type="text" class="others"
                                                        name="concernothers" placeholder="Specify, other(s)"><br>
                                                </div>
                                            </div>

                                            <!-- ========= -->
                                            <span class="subtitle">Area / Difficulty </span>
                                            <div class="r-fields">
                                                <div class="checkbox">
                                                    <input type="checkbox" name="difficulty1" value="1"> High cost
                                                    medicines<br>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" name="difficulty2" value="1">
                                                    Lack of medicines<br>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" name="difficulty3" value="1"> Lack of medical
                                                    attention<br>
                                                </div>
                                                <div class="checkbox">
                                                    <label></label><input type="text" class="others"
                                                        name="difficultyothers" placeholder="Specify, other(s)"><br>
                                                </div>
                                            </div>

                                            <!-- ========= -->
                                            <span class="subtitle">List of medicine for maintenance(Specify each)</span>
                                            <div class="r-fields">
                                                <div class="checkbox">
                                                    <input type="text" class="others" name="maintenance1"
                                                        placeholder="">
                                                </div>
                                                <div class="checkbox">
                                                    <input type="text" class="others" name="maintenance2"
                                                        placeholder="">
                                                </div>
                                                <div class="checkbox">
                                                    <input type="text" class="others" name="maintenance3"
                                                        placeholder="">
                                                </div>
                                                <div class="checkbox">
                                                    <input type="text" class="others" name="maintenance4"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <!-- === -->
                                            <span class="subtitle">Do you have a scheduled medical/physical
                                                check-up?</span>
                                            <div class="r-fields">
                                                <div class="checkbox">
                                                    <input type="checkbox" name="checkup" value="1"> Yes<br>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" name="checkup" value="0"> No<br>
                                                </div>
                                            </div>
                                            <!-- === -->
                                            <span class="subtitle">If Yes, when is it done?</span>
                                            <div class="r-fields">
                                                <div class="checkbox">
                                                    <input type="checkbox" name="YesWhen" value="0"> Yearly<br>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" name="YesWhen" value="1"> Every
                                                    6 months<br>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="text" class="others" name="YesWhenother"
                                                        placeholder="others, specify">
                                                </div>
                                            </div>
                                            <!-- ===ID info=== -->
                                            <div class="details ID">
                                                <span class="titlex">Identity verification</span>
                                                <div class="fields">
                                                    <div class="input-field">
                                                        <label>ID Type</label>
                                                        <select name="id_name" required>
                                                            <option value="N/A" disabled selected>Select ID type
                                                            </option>
                                                            <option value="Baptismal Certificate">Baptismal Certificate
                                                            </option>
                                                            <option value="Barangay Clearance">Barangay Clearance
                                                            </option>
                                                            <option value="Birth Certificate">Birth Certificate</option>
                                                            <option value="Comelec ID">Comelec ID</option>
                                                            <option value="Drivers License">Drivers License</option>
                                                            <option value="GSIS ID/ SSS ID">GSIS or SSS ID</option>
                                                            <option value="Marriage Certificate">Marriage Certificate
                                                            </option>
                                                            <option value="Passport">Passport</option>
                                                            <option value="Postal ID">Postal ID</option>
                                                            <option value="Voters ID">Voters ID</option>
                                                            <option value="PRC ID">PRC ID</option>
                                                            <option value="UMID">UMID</option>
                                                            <option value="NBI Clearance">NBI Clearance</option>
                                                            <option value="Phil-health ID">Phil-health ID</option>
                                                            <option value="BIR TIN">BIR TIN</option>
                                                            <option value="Government-issued ID">Government-issued ID
                                                            </option>
                                                        </select>
                                                    </div>

                                                    <div class="input-field">
                                                        <label>ID Number</label>
                                                        <input type="text" name="id_number"
                                                            placeholder="Enter ID number" required>
                                                    </div>


                                                    <div class="input-field">
                                                        <label>Place issued</label>
                                                        <input type="text" name="issuedplace"
                                                            placeholder="Enter place issued" required>
                                                    </div>


                                                    <div class="input-field">
                                                        <label>Issued Date</label>
                                                        <input type="date" name="issueddate"
                                                            placeholder="Enter your issued date" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="subtitle">Upload the presented ID
                                                above<p style="color:red; font-size: 10px">(Each file
                                                    uploaded
                                                    is must be
                                                    less
                                                    than 2MB file size)</p><span>
                                                    <!-- ====File upload === -->
                                                    <div class="r-fields mt-2">
                                                        <div class="col  mt-md-0 mt-3">
                                                            <div class="form-group">
                                                                <label for="idfront">Front ID</label>
                                                                <input type="file" class="form-control-file"
                                                                    accept=".jpg, .png,.jpeg" name="frontid"
                                                                    id="frontid">
                                                            </div>
                                                        </div>
                                                        <div class="col mt-md-0 mt-3">
                                                            <div class="form-group">
                                                                <label for="registrationfile">Back ID</label>
                                                                <input type="file" name="backid" id="backid"
                                                                    accept=".jpg, .png,.jpeg" class="form-control-file">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex">
                                                        <input type="checkbox" id="agree" class="agree"
                                                            onclick="handleClick()">
                                                        <p style="font-size:12px;margin:5px;">By clicking submit, you
                                                            agree to
                                                            our
                                                            Terms and Privacy
                                                            Policy</p>
                                                    </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn btn-primary js-btn-prev" type="button" title="Prev"
                                                onclick="window.scrollTo(0, 0)"><i class="uil uil-navigator"></i>
                                                Back</button>
                                            <button type="submit" name="submit" id="submit"
                                                class="btn btn-success ml-auto submit" disabled>Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- ERROR MESSAGE IF AGE IS NOT ACCEPTED -->
                    <div class="modal" id="applicationid" data-keyboard="false" data-backdrop="static">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header d-flex">
                                    <h6 class="modal-title">System Message</h6>
                                    <button type="button" class="btn-close" aria-label="Close"></button>
                                    </button>
                                </div>
                                <div class="modal-body text-center" id="applicationidbody">
                                    <!-- id -->
                                    <div class="d-block p-2">
                                        <h1 id="targetext" style="color:red; font-size:14px;" class="w-100">You did not
                                            meet the age requirement</h1>
                                        <p style="font-size:12px;">
                                            Age is must be greater or equal to 60
                                        </p>
                                        <button tyle="button" class="btn btn-primary" data-dismiss="modal"
                                            id="invalidbday">Dismiss</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- UID CREATED -->
                    <div class="modal" id="uidmessage" data-keyboard="false" data-backdrop="static">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header d-flex">
                                    <h6 class="modal-title">Tracking number</h6>
                                    <button type="button" class="btn-close" aria-label="Close"></button>
                                    </button>
                                </div>
                                <div class="modal-body text-center" id="uidmessagebody">
                                    <!-- id -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="text-center text-lg-start text-white" style="background-color: #393E46">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4" style="font-weight:900">
                            i-OSCA
                        </h6>
                        <p style="font-size:14px;">
                            i-OSCA is a social pension system that provides financial assistance to older individuals.
                            The program is designed to help ensure that older eligible people can register in their
                            home.
                        </p>
                    </div>
                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3" style="font-size:14px;">
                        <h6 class="text-uppercase mb-4" style="font-weight:900">Contact</h6>
                        <p><i class="fas fa-home mr-3"></i> Mamburao, 5106, Occ. Min.</p>
                        <p><i class="fas fa-envelope mr-3"></i> pgoosca@gmail.com</p>
                        <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4" style="font-weight:900">Follow us</h6>

                        <!-- Facebook -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!"
                            role="button"><i class="fab fa-facebook-f"></i></a>

                        <!-- Twitter -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!"
                            role="button"><i class="fab fa-twitter"></i></a>

                        <!-- Google -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="#!"
                            role="button"><i class="fab fa-google"></i></a>

                        <!-- Instagram -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!"
                            role="button"><i class="fab fa-instagram"></i></a>

                        <!-- Linkedin -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca" href="#!"
                            role="button"><i class="fab fa-linkedin-in"></i></a>
                        <!-- Github -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #333333" href="#!"
                            role="button"><i class="fab fa-github"></i></a>
                    </div>
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); font-size:14px;">
            © 2023 Copyright:
            <a class="text-white" href="#">i-OSCA</a>
        </div>
        <!-- Copyright -->
    </footer>
    <script src="../lib/sweetalert.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.10/dist/clipboard.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../lib/regfunction.js"></script>
    <script>
    function handleClick() {
        var checkbox = document.getElementById("agree");
        var button = document.getElementById("submit");
        if (checkbox.checked) {
            button.disabled = false;
            var birthdate = $("#birthdate").val();
            var birthday = new Date(birthdate);
            var age = new Date().getFullYear() - birthday.getFullYear();
            if (age < 60 || birthdate == "") {
                $('#applicationid').modal('show');
            } else {
                // var inputValue1 = $("#birthdate").val();
                // var inputValue2 = $("#lastname").val();
                // $.ajax({
                //     type: "POST",
                //     url: "../function/uidsystem.php",
                //     data: {
                //         inputValue1: inputValue1,
                //         inputValue2: inputValue2
                //     },
                //     success: function(result) {
                //         $("#uidmessagebody").html(result);
                //         $('#uidmessage').modal('show');
                //     }
                // });
            }
        } else {
            button.disabled = true;
        }

        $("#invalidbday").click(function() {
            button.disabled = true;
            checkbox.checked = false;
        })
    }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
<?php
}else{
    header("Location: index");
    exit();
}
?>