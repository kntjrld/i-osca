<?php
session_start();
$_SESSION['applicatonid'] = '1';
$applicationid = $_SESSION['applicatonid'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
        
    <link rel="stylesheet" href="css/register.css">

    <title>Be a member</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="wrapper rounded bg-white">
            <div class="d-flex">
                <div class="h3">Registration Form</div>
                <div class="ms-auto"><a href="index"><img src="media/header.png" class="img-fluid" alt="header"></a>
                </div>
            </div>
            <form enctype="multipart/form-data" id="form">
                <div class="form">
                    <div class="row">
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Presented ID no.</label>
                            <input type="text" name="idpresented" id="idpresented" class="form-control" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>ID Type</label>
                            <select class="form-select" id="idtype" name="idtype">
                                <option value="Null">Select</option>
                                <option value="Senior ID">Senior ID</option>
                                <option value="Baptismal Certificate">Baptismal Certificate</option>
                                <option value="Barangay Clearance">Barangay Clearance</option>
                                <option value="Birth Certificate">Birth Certificate</option>
                                <option value="Comelec ID">Comelec ID</option>
                                <option value="Drivers License">Driver's License</option>
                                <option value="GSIS ID/ SSS ID">GSIS ID/ SSS ID</option>
                                <option value="Marriage Certificate">Marriage Certificate</option>
                                <option value="Passport">Passport</option>
                                <option value="Postal ID">Postal ID</option>
                                <option value="Voters ID">Voter's ID</option>
                                <option value="PRC ID">PRC ID</option>
                                <option value="UMID">UMID</option>
                                <option value="NBI Clearance">NBI Clearance</option>
                                <option value="Phil-health ID">Phil-health ID</option>
                                <option value="BIR TIN">BIR TIN</option>
                                <option value="Government-issued ID">Government-issued ID</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mt-md-0 mt-3">
                            <label class="form-label required">First Name</label>
                            <input type="text" name="fname" id="fname" class="form-control" placeholder="Juan"
                                aria-label="First name" required>
                        </div>
                        <div class="col mt-md-0 mt-3">
                            <label class="form-label required">Last Name</label>
                            <input type="text" name="lastname" id="lastname" class="form-control"
                                placeholder="Dela cruz" aria-label="Last name" required>
                        </div>
                        <div class="col mt-md-0 mt-3 col-lg-2">
                            <label class="form-label required">M.I</label>
                            <input type="text" name="middlename" id="middlename" class="form-control" placeholder="T"
                                aria-label="Middle name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mt-md-0 mt-3">
                            <label>Birthday</label>
                            <input type="date" id="bday" name="bday" class="form-control" required>
                        </div>
                        <div class="col mt-md-0 mt-3 col-lg-2">
                            <label>Gender</label>
                            <select class="form-select" name="sex">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col mt-md-0 mt-3">
                            <label>Barangay</label>
                            <select class="form-select" name="barangay">
                                <option value="Balansay">Select</option>
                                <option value="Balansay">Balansay</option>
                                <option value="Barangay 1">Barangay 1</option>
                                <option value="Barangay 2">Barangay 2</option>
                                <option value="Barangay 3">Barangay 3</option>
                                <option value="Barangay 4">Barangay 4</option>
                                <option value="Barangay 5">Barangay 5</option>
                                <option value="Barangay 6">Barangay 6</option>
                                <option value="Barangay 7">Barangay 7</option>
                                <option value="Barangay 8">Barangay 8</option>
                                <option value="Fatima">Fatima</option>
                                <option value="Payompon">Payompon</option>
                                <option value="San Luis (Ligang)">San Luis (Ligang)</option>
                                <option value="Talabaan">Talabaan</option>
                                <option value="Tangkalan">Tangkalan</option>
                                <option value="Tayamaan">Tayamaan</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Contact Number</label>
                            <input type="text" name="contact" maxlength="10" placeholder="10 digit number"class="form-control" required>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="d-flex m-1">
                            <label for="pwd">Person with Disability:</label> <br>
                        </div>
                        <div class="d-flex m-1">
                            <input class="form-check-input" type="radio" name="pwd" value="Yes" />
                            <label class="form-check-label" for="pwd">Yes</label></br>

                        </div>
                        <div class="d-flex m-1">
                            <input class="form-check-input" type="radio" name="pwd" value="No" checked/>
                            <label class="form-check-label" for="pwd">No</label>
                        </div>
                    </div>
                    <div class="row">
                        <p style="color:red; font-size: 10px">Each file uploaded is must be less than 2MB file size</p>
                        <div class="col  mt-md-0 mt-3">
                            <div class="form-group">
                                <label for="idpresentedfile">ID Presented Front and Back<span
                                        style="color:red; font-size:12px;"> (Must be in pdf format)</span></label>
                                <input type="file" class="form-control-file" name="idpresentedfile" id="idpresentedfile"
                                    required>
                            </div>
                        </div>
                        <div class="col mt-md-0 mt-3">
                            <div class="form-group">
                                <label for="registrationfile">Registration Form</label>
                                <input type="file" name="registrationfile" id="registrationfile"
                                    class="form-control-file" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    <p style="font-size:12px; margin-top:5px;">By clicking Submit, you agree to our Terms and Privacy
                        Policy</p>
                </div>
        </div>
        </Form>
    </div>
    <!-- DISPLAY REGISTRATION ID -->
    <div class="modal" id="applicationid">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header d-flex">
                    <h5 class="modal-title">Tracking ID</h5>
                    <button type="button" class="btn-close" aria-label="Close"></button>
                    </button>
                </div>
                <div class="modal-body text-center" id="applicationidbody">
                    <!-- id -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Footer -->
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
            ?? 2022 Copyright:
            <a class="text-white" href="#">i-OSCA</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <script src="lib/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.10/dist/clipboard.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="lib/register.js"></script>
    <script>
    let copy = new ClipboardJS('#idbutton');
    copy.on('success', function(e) {
        // alert("Copied the text");
        swal("Good job!", "Application ID copied!", "success");
        setInterval(function() {
            window.location = "member";
        }, 1000);
    });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>