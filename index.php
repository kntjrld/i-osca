<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Welcome to i-OSCA</title>
    <link rel="shortcut icon" type="image/x-icon" href="media/logo.png">
</head>

<body>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 b-height">
                <div class="row b-wrapper">
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 b-min-height">
                        <div class="b-logo swift_left">
                            <a href="#"><img src="media/header.png" class="img-fluid"></a>
                        </div>
                        <div class="b-title text-center">
                            <h1 class="user_title">Welcome to i-OSCA</h1>
                            <p class="user_subTitle">This is Mamburao social pension program,</br> register at your home
                                with ease.
                            </p>
                            <a href="member" class="swift getstarted">Get Started</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                        <div class="b-form text-center">
                            <div class="b-form-title">
                                <h1 class="form_title">For administrator</h1>
                                <p>
                                    <span><i class="fa-solid fa-shield"></i></span>
                                    <span><i class="fa-solid fa-list-check"></i></span>
                                    <span><i class="fa-solid fa-clock-rotate-left"></i></span>
                                </p>
                                <p class="b-subtext">. . .</p>
                                <!-- php error code -->
                                <?php if (isset($_GET['error'])) {
                                ?><p class="b-subtext" style="color:red;"><?php echo $_GET['error']; ?></p><?php
                            }?>
                            </div>
                            <form method="post" action="conn/login.php">
                                <div class="form-group username">
                                    <input class="form-control" type="text" name="user_name" placeholder="Username">
                                    <i class="fas fa-user b-font"></i>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" name="password" placeholder="Password">
                                    <i class="fas fa-unlock-alt b-font"></i>
                                </div>
                                <button type="submit" class="sign_in">Sign In</button>
                            </form>
                            <div class="d-block justify-content-center">
                                <a href="#" class="this" id="forgotpass">
                                    <span class="b-forgot">Forgot your password?</span>
                                </a>
                                <div class="reminder" style="display:none;">
                                    <p style="font-size:12px;color:red;">Contact the administrator</p>
                                </div>
                            </div>
                        </div>
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
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
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
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); font-size:14px;">
            © 2022 Copyright:
            <a class="text-white" href="#">i-OSCA</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <script src="lib/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.this').click(function() {
            $('.reminder').show();
        });
    });
    </script>
</body>

</html>