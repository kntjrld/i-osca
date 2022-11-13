<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="css/signup_css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Signup</title>
</head>

<body>
    <nav class="header">
        <div class="logo">
            <a href="#">
                <p>KNTJRLD</p>
            </a>
        </div>
    </nav>
    <section>
        <div class="container">
            <div class="forms">
                <!-- Registration form-->
                <div class="form signup">
                    <span class="title">Registration</span>
                    <form action="conn/insert.php" method="post" onSubmit="return checkPassword(this)">
                        <div class="input-field">
                            <input type="text" id="username" name="user_name" placeholder="Enter your username"
                                required>
                            <i class="fa-regular fa-user icon"></i>
                        </div>
                        <div id="uname_result"></div>

                        <div class="input-field">
                            <input type="email" name="email" id="email" placeholder="Enter your email" required>
                            <i class="fa-regular fa-envelope icon"></i>
                        </div>

                        <div class="input-field">
                            <input type="password" name="password" id="password" class="password"
                                placeholder="Create a password" required>
                            <i class="fa fa-lock icon"></i>
                        </div>

                        <div class="input-field">
                            <input type="password" name="re_password" class="re_password" id="re_password"
                                placeholder="Re-enter your password" required>
                            <i class="fa fa-lock icon"></i>
                            <i class="fa-regular fa-eye-slash showHidePw"></i>
                        </div>

                        <div class="checkbox-text">
                            <div class="checkbox-content">
                                <input type="checkbox" id="logCheck">
                                <label for="logCheck" class="text">Remember me</label>
                            </div>

                            <a href="javascript:alert('Please contact the administrator')" class="text">Forget
                                Password?</a>
                        </div>

                        <div class="input-field button">
                            <input type="submit" id="submit" name="submit" value="Sign up">
                        </div>
                    </form>

                    <div class="login-signup">
                        <span class="text">Already have an account?
                            <a href="index.php" class="text login-link">login now</a>
                        </span>

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