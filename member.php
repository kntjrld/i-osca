<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Be a member</title>
    <!-- Boostrap css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/member.css">
    <!-- Boostrap js and jquery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 b-height">
                <div class="row b-wrapper">
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 b-min-height">
                        <div class="b-logo swift_left">
                        </div>
                        <div class="b-title text-center">
                            <a href="index"><img src="media/logo.png" class="img-fluid"></a>
                            <p class="ins">If you want to register, read first the<br><a href="" data-toggle="modal"
                                    data-target="#modallong">Guide for
                                    registration</a></p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 a-min-height">
                        <div class="b-form">
                            <div class="b-title text-center">
                                <p class="user_subTitle">
                                    Register to mamburao senior pension program<span style="color:#6D9886;"> anytime and anywhere</span>
                                </p>
                            </div>
                            <div class="b-form-title">
                                <div class="form-group">
                                    <a href="register" id="this" class="btn"><i class="fas fa-id-card fa-lg"></i>New
                                        Register</a>
                                </div>
                                <div class="form-group">
                                    <a href="#" data-toggle="modal" data-target="#myModal" id="this" class="btn"><i
                                            class="fas fa-search fa-lg" aria-hidden="true"></i>Check
                                        Registration Status</a>
                                </div>
                                <div class="form-group">
                                    <a href="#" id="this" data-toggle="modal" data-target="#pensionModal" class="btn"><i class="fas fa-money-check"></i></i>Check
                                        Pension
                                        Status</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL FOR CHECK REGISTRATION STATUS -->
        <div class="modal" id="myModal" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Registration status</h5>
                        <button class="btn" id="closexx">&times;</button>
                    </div>
                    <div class="modal-body" id="infoUpdate">
                        <div class="input-group">
                            <!-- 53509855529849995454 -->
                            <div class="form-outline w-100">
                                <input id="search-input" type="text" class="form-control" maxlength="20"
                                    placeholder="20 digit unique ID" />
                                <button type="button" id="btn-search"
                                    class="btn btn-primary w-100 p-2 mt-2">Search</button>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <p>i-osca 2022</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL FOR PENSION STATUS -->
        <div class="modal" id="pensionModal" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Pension status</h5>
                        <button class="btn" id="closemodal">&times;</button>
                    </div>
                    <div class="modal-body" id="pensionUpdate">
                        <div class="input-group">
                            <!-- 53509855529849995454 -->
                            <div class="form-outline w-100">
                                <input id="search" type="text" class="form-control" maxlength="20"
                                    placeholder="20 digit unique ID" />
                                <button type="button" id="search-pension"
                                    class="btn btn-primary w-100 p-2 mt-2">Search</button>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <p>i-osca 2022</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal instruction -->
        <div class="modal fade" id="modallong" tabindex="-1" role="dialog" aria-labelledby="modallong"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="title">Instruction for online application</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>1. Download a copy of registration form <span><a href="registration/SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf" target="_blank"> here</a></span></p>
                        <p>2. Change registration form file name before uploading<span> (e.g DELACRUZ-JUAN-REGISTRATION-FORM-11/27/2022.pdf)</span></p>
                        <p>3. Check also ID Present file name before uploading<span> (e.g DELACRUZ-JUAN-ID-PRESENTED-11/27/2022.pdf)</span></p>
                        <p>4. After successful registration, copy your application ID. You can use it to check your registration and pension status.</p>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <p>i-osca 2022</p>
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
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            i-OSCA
                        </h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis ullam esse eveniet sunt!
                            Nemo dolore odit dolores soluta iste magni.
                        </p>
                    </div>
                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <p><i class="fas fa-home mr-3"></i> Mamburao, 5106, Occ. Min.</p>
                        <p><i class="fas fa-envelope mr-3"></i> pgoosca@gmail.com</p>
                        <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

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
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2022 Copyright:
            <a class="text-white" href="#">i-OSCA</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="lib/member.js"></script>
    <script>
    $('#closexx').click(function() {
        window.location = "member.php";
    });
    $('#closemodal').click(function() {
        window.location = "member.php";
    });
    </script>
</body>

</html>