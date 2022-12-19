<?php 
session_start();
include('conn/connection.php');
include('function/indicator.php');

if (isset($_SESSION['user_id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pension Status</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/g_style.css">
    <link rel="stylesheet" type="text/css" href="css/status.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="lib/status.js"></script>
    <script src="lib/security.js"></script>

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
                    <span class="indicator"
                        style="<?php if($count == '0'){echo 'display:none;';}?>"><?php echo $count;?></span>
                    <i class="fas fa-tasks"></i>
                    <span class="nav-item">Reports</span>
                </a></li>
            <li><a href="#" class="active" id="nav-list">
                    <i class="fas fa-check-to-slot"></i>
                    <span class="nav-item">Pension Status</span>
                </a></li>
            <li <?php if($_SESSION['user_level']=="staff") echo 'style="display:none;"'; ?>><a href="activities"
                    id="nav-list">
                    <i class="fas fa-solid fa-clock-rotate-left"></i>
                    <span class="nav-item">Activities</span>
                </a></li>
            <li><a href="profile" id="nav-list">
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
                        Pension Status
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
        <div class="container">
            <div class="wrapper card rounded bg-white">
                <div class="d-flex">
                    <div class="h5 p-1">Pension Form</div>
                </div>
                <div class="mb-2">
                    <hr class="new1">
                </div>
                <form method="post" action="function/updatepension.php">
                    <div class="form">
                        <div class="row">
                            <div class="col-md-6 mt-md-0">
                                <label>Registered ID</label>
                                <select class="form-select" id="status" name="status">
                                    <option value="null">Select ID</option>
                                    <?php
                                    $brgy = $_SESSION['fx_street'];
                                    if($ulevel == 'staff'){
                                        $sql = "SELECT uid FROM tbl_records WHERE fx_barangay = '$brgy' AND fn_status = 'Pending' AND account_status = 'active'";
                                    }else{
                                        $sql = "SELECT uid FROM tbl_records WHERE fn_status = 'Pending' AND account_status = 'active'";
                                    }
                                    $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                                    while( $rows = mysqli_fetch_assoc($resultset) ) { 
                                    ?>
                                    <option value="<?php 
                                    echo $rows["uid"]; ?>"><?php echo $rows["uid"]; ?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="col mt-md-0 col-lg-2">
                                <label>Pension Status</label>
                                <select class="form-select" id="id_status" name="id_status">
                                    <option value="Pending">Pending</option>
                                    <option value="Received">Received</option>
                                </select>
                            </div>
                            <div class="col">
                                <label>Age</label>
                                <input type="text" id="age" name="age" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-md-0">
                                <label class="form-label required">Fist Name</label>
                                <input type="text" name="id_firstname" id="id_firstname" class="form-control"
                                    placeholder="Juan" aria-label="First name" disabled>
                            </div>
                            <div class="col mt-md-0">
                                <label class="form-label required">Last Name</label>
                                <input type="text" name="id_lastname" id="id_lastname" class="form-control"
                                    placeholder="Dela cruz" aria-label="Last name" disabled>
                            </div>
                            <div class="col mt-md-0">
                                <label class="form-label required">I.N</label>
                                <input type="text" name="id_initial" id="id_initial" class="form-control"
                                    placeholder="T" aria-label="Middle name" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-md-2">
                                <label>Amount Receive</label>
                                <input type="number" id="id_amount" name="id_amount" class="form-control" required>
                            </div>
                            <div class="col mt-md-0">
                                <label class="form-label required">Date Release</label>
                                <input type="date" name="id_date" id="id_date" value="<?php echo date('Y-m-d'); ?>"
                                    class="datepicker form-control" placeholder="" aria-label="Control Number" required>
                            </div>
                            <div class="col mt-md-2">
                                <label>Person with disablity(PWD)</label>
                                <input type="text" id="pwd" name="pwd" class="form-control" disabled>
                            </div>
                            <div class="col mt-md-2">
                                <label>Life Status</label>
                                <input type="text" id="life_status" name="life_status" class="form-control" disabled>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </Form>
            </div>
        </div>
    </div>
    <!-- Bootstrap / js-->
    <script src="lib/sweetalert.min.js"></script>
</body>

</html>
<?php 

}else{
     header("Location: dashboard");
     exit();
}
 ?>
<?php include('lib/scriptalert.php');?>