<?php 
session_start();
include('conn/connection.php');

if (isset($_SESSION['user_id']) && isset($_SESSION['user_name'])) {
    
?>


<!DOCTYPE html>
<html lang="end">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/g_style.css">
    <link rel="stylesheet" type="text/css" href="css/user_style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- Navigation start -->
    <nav class="side-nav">
        <ul>
            <li>
                <a href="#" class="logo">
                    <img src="media/header.png" alt="logo">
                    <span class="nav-item">i-OSCA</span>
                </a>
            </li>
            <li><a href="dashboard" id="nav-list">
                    <i class="fas fa-home"></i>
                    <span class="nav-item">Dashboard</span>
                </a></li>
            <li><a href="records" id="nav-list">
                    <i class="fas fa-table"></i>
                    <span class="nav-item">Records</span>
                </a></li>
            <li><a href="reports" id="nav-list">
                    <i class="fas fa-tasks"></i>
                    <span class="nav-item">Reports</span>
                </a></li>
            <li><a href="status" id="nav-list">
                    <i class="fas fa-check-to-slot"></i>
                    <span class="nav-item">Pension Status</span>
                </a></li>
            <li><a href="activities" id="nav-list">
                    <i class="fas fa-solid fa-clock-rotate-left"></i>
                    <span class="nav-item">Activities</span>
                </a></li>
            <li><a href="#" id="nav-list" class="active">
                    <i class="fas fa-user"></i>
                    <span class="nav-item">Profle</span>
                </a></li>
            <li <?php if($_SESSION['user_level']=="staff") echo 'style="display:none;"'; ?>><a href="fxasdasjdk"
                    id="nav-list">
                    <i class="fas fa-folder"></i>
                    <span class="nav-item">Admin Panel</span>
                </a></li>
            <li><a href="function/logout" class="logout" id="nav-list">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-item">Logout</span>
                </a></li>
        </ul>
    </nav>
    <!-- Navigation end -->
    <div class="main-content">
        <header>
            <div class="header-title">
                <h2>
                    <label for="">
                        <span class="las la-bars">
                        </span>
                        Profile
                </h2>
            </div>
            <div class="user-wrapper">
                <img src="./image/<?php echo $_SESSION['fm_img']; ?>" class="user_img" alt="user">
                <div>
                    <h5><span class="nav-item"><?php echo $_SESSION['user_name']; ?></span></h5>
                    <p><span class="nav-item"><?php echo $_SESSION['user_level']; ?></span></p>
                </div>
            </div>

        </header>
        <!-- user profile -->
        <div class="container p-3">
            <div class="row gutters">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="account-settings">
                                <div class="cover-profile">
                                    <form action="conn/update_profile.php" method="POST" id="form"
                                        enctype="multipart/form-data">
                                        <div class="user-profile">
                                            <div class="user-avatar">
                                                <div class="cover">
                                                    <label for="simg">
                                                        <i class="fa-solid fa-pen-to-square" id="icon_upload"></i>
                                                    </label>
                                                    <input type="file" value="" name="simg" id="simg"
                                                        style="display: none;">
                                                </div>
                                                <label for="simg">
                                                    <img src="./image/<?php echo $_SESSION['fm_img'];?>" id="previewimg"
                                                        name="previewimg" alt="Profile" />
                                                    <input type='hidden' name='hiddenImage'
                                                        value='<?php echo  $_SESSION['fm_img']?>'>
                                                </label>
                                            </div>
                                            <h5 class="user-name"><?php echo $_SESSION['full_name']; ?></h5>
                                            <h6 class="user-email"><?php echo $_SESSION['email']; ?></h6>
                                        </div>
                                </div>
                                <div class="about">
                                    <h5>Roles</h5>
                                    <p><?php echo $_SESSION['role_description']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-2 text-primary">Personal Details</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullName">Full Name</label>
                                        <input type="text" class="form-control" name="fullname" id="fullname"
                                            value="<?php echo $_SESSION['full_name'];?>" placeholder="Enter full name">
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" name="phone" id="phone"
                                            value="<?php echo $_SESSION['contact_num'];?>"
                                            placeholder="Enter phone number">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" name="username" id="username"
                                            placeholder="Username" value="<?php echo $_SESSION['user_name'];?>">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                    <div class="form-group">
                                        <label for="eMail">Email</label>
                                        <input type="email" class="form-control" name="email" id="email"
                                            value="<?php echo $_SESSION['email'];?>" placeholder="Enter email ID">
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mt-3 mb-2 text-primary">Address</h6>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label for="Street">Street</label>
                                        <input type="name" class="form-control w-100" name="street" id="street"
                                            placeholder="Enter Street" value="<?php echo $_SESSION['fx_street'];?>">
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label for="ciTy">City/Municipality</label>
                                        <input type="name" class="form-control w-100" name="city" id="city"
                                            placeholder="Enter City/Municipality"
                                            value="<?php echo $_SESSION['fx_municipality'];?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters p-2">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="text-right">
                                        <button type="update" id="update" name="update"
                                            class="btn btn-primary">Update</button>
                                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                            data-bs-target="#myModal">Change Password</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal For add record-->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Change Password</h5>
                    </div>
                    <!-- CHANGE PASSWORD FORM-->
                    <div class="modal-body">
                        <form action="conn/update_profile.php" method="post" id="changeform">
                            <div id="id_result"></div>
                            <!-- OLD PASSWORD -->
                            <div class="mb-2">
                                <label class="form-label required">Old Password</label>
                                <input type="password" name="pass" id="pass" class="form-control" required>
                            </div>
                            <!-- NEW PASSWORD -->
                            <div class="mb-2">
                                <label class="form-label required">New Password</label>
                                <input type="password" name="newpass" id="newpass" class="form-control" required>
                            </div>
                            <!-- RE-TYPE PASSWORD -->
                            <div class="mb-2">
                                <label class="form-label required">Re-type Password</label>
                                <input type="password" name="repass" id="repass" class="form-control" required>
                            </div>
                            <!-- Modal button -->
                            <div class="modal-footer">
                                <button type="submit" id="changepassword" name="changepassword"
                                    class="btn btn-primary">Submit</button>
                                <input type="button" class="btn btn-secondary" value="Cancel" data-bs-dismiss="modal">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="lib/sweetalert.min.js"></script>
    <script src="lib/app.js"></script>
    <script>
    simg.onchange = evt => {
        const [file] = simg.files
        if (file) {
            previewimg.src = URL.createObjectURL(file)
        }
    }
    </script>
</body>

</html>
<?php 
}else{
     header("Location: index");
     exit();
}
 ?>
<?php include('conn/script.php');?>