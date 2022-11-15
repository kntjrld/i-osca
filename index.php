<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/404.css">
    <title>Welcome to i-OSCA</title>
</head>

<body>

    <div class="star star1"></div>
    <div class="star star2"></div>
    <div class="star star3"></div>
    <div class="star star4"></div>
    <div class="star star5"></div>

    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 b-height">
                <div class="row b-wrapper">
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 b-min-height">
                        <div class="b-logo swift_left">
                            <a href="#" target="_blank"><img src="media/logo.jpg" class="img-fluid"></a>
                        </div>

                        <div class="star star1"></div>
                        <div class="star star2"></div>
                        <div class="star star3"></div>
                        <div class="star star4"></div>
                        <div class="star star5"></div>

                        <div class="b-title text-center">
                            <h1 class="user_title">Welcome to i-OSCA</h1>
                            <p class="user_subTitle">This is Mamburao social pension program</br> register at your home.</p>
                            <button type="button" class="swift sign_in">Get Started</button>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                        <div class="b-form text-center">
                            <div class="b-form-title">
                                <h1 class="form_title">For administrator</h1>
                                <p>
                                    <span><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></span>
                                    <span><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></span>
                                    <span><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></span>
                                </p>
                                <p class="b-subtext">visit our social media</p>
                                <!-- php error code -->
                                <?php if (isset($_GET['error'])) {
                                ?><p class="b-subtext" style="color:red;"><?php echo $_GET['error']; ?></p><?php
                            }?>
                            </div>
                            <form method="post" action="conn/login.php">
                                <div class="form-group username">
                                    <input class="form-control" type="text" name="user_name" placeholder="Name">
                                    <i class="fas fa-user b-font"></i>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" name="password" placeholder="Password">
                                    <i class="fas fa-unlock-alt b-font"></i>
                                </div>
                                <div class="form-group">
                                    <span class="b-forgot">Forgot your password?</span>
                                </div>
                                <button type="submit" class="sign_in">Sign In</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- <script src="lib/main.js"></script> -->
</body>

</html>