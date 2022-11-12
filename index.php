<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/login_css.css">
    <title>Login</title>
</head>

<body>
    <nav>
        <div class="logo">
            <a href="#">
                <p>KNTJRLD</p>
            </a>
        </div>
    </nav>

    <section>
        <div class="container">
            <div class="forms">
                <div class="form login">
                    <span class="title">i-OSCA</span>
                    <form action="conn/login.php" method="post">
                        <!-- php error code -->
                        <?php if (isset($_GET['error'])) { ?>
                        <p class="error" style="color:red;"><?php echo $_GET['error']; ?></p>
                        <?php } ?>
                        <!-- continue -->
                        <div class="input-field">
                            <input type="text" name="user_name" placeholder="Enter Username" required>
                            <i class="fa-regular fa-envelope icon"></i>
                        </div>
                        <div class="input-field">
                            <input type="password" name="password" class="password" placeholder="Enter password"
                                required>
                            <i class="fa fa-lock icon"></i>
                            <i class="fa-regular fa-eye-slash showHidePw"></i>
                        </div>

                        <div class="checkbox-text">
                            <div class="checkbox-content">
                                <input type="checkbox" id="logCheck">
                                <label for="logCheck" class="text">Remember me</label>
                            </div>

                            <a href="#" class="text">Forget Password?</a>
                        </div>

                        <div class="input-field button">
                            <input type="submit" value="Login" required>
                        </div>
                    </form>

                    <div class="login-signup">
                        <span class="text">No account yet?
                            <a href="signup.php" class="text signup-link">Signup now</a>
                        </span>

                    </div>

                </div>
            </div>

        </div>
        </div>
    </section>
    <footer class="footerID">
        <div class="footer">
            <p>Copyright 2022 | Kent Jarold Abulag</p>
            <div class="media">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </footer>

    <script src="lib/app.js"></script>
</body>

</html>