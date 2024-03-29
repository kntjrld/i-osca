<?php 
session_start();
include('conn/connection.php');
include('function/indicator.php');

if (isset($_SESSION['user_id']) && isset($_SESSION['user_name']) && ($_SESSION["user_level"]=='admin')) {

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pension Status</title>
    <link rel="shortcut icon" type="image/x-icon" href="media/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/g_style.css">
    <link rel="stylesheet" type="text/css" href="css/status.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="lib/status.js"></script>
    <script src="lib/security.js"></script>
    <!-- BOOTSTRAP JS -->
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
                    <span class="indicator"
                        style="<?php if($count == '0'){echo 'display:none;';}?>"><?php echo $count;?></span>
                    <i class="fas fa-tasks"></i>
                    <span class="nav-item">Pending Application</span>
                </a></li>
            <li <?php if($_SESSION['user_level']=="staff") echo 'style="display:none;"'; ?>><a href="#" id="nav-list" class="active">
                    <i class="fas fa-check-to-slot"></i>
                    <span class="nav-item">Pension Status</span>
                </a></li>
            <li <?php if($_SESSION['user_level']=="staff") echo 'style="display:none;"'; ?>><a href="activities"
                    id="nav-list">
                    <i class="fas fa-solid fa-clock-rotate-left"></i>
                    <span class="nav-item">History</span>
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
                    <p><span class="nav-item"><?php echo $user; ?></span></p>
                </div>
            </div>

        </header>
        <div class="container">
            <div class="wrapper card rounded bg-white">
                <div class="d-flex">
                    <div class="h5 p-1" id="pension_text">Pension Form</div>
                    <div class="d-flex ms-auto">
                        <div class="d-block">
                            <div class="p-1 m-2 card w-auto">
                                <button type="button" class="btn btn-primary" style="font-size:12px;"
                                    data-bs-toggle="modal" data-bs-target="#ustatus">
                                    <span><i class="fa-solid fa-pen-to-square"></i></span> Update previous
                                    pension</button>
                            </div>
                            <div class="p-1 m-2 card" id="resetpension">
                                <button type="button" class="btn btn-primary" style="font-size:12px;"
                                    data-bs-toggle="modal" data-bs-target="#newpension">
                                    <span><i class="fa-solid fa-arrows-spin"></i></span> New pension</button>
                            </div>
                        </div>

                    </div>
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
                            <!-- remove date release here (instead get current date and insert to db) -->
                            <div class="col mt-md-2">
                                <label>Person with disablity(PWD)</label>
                                <input type="text" id="pwd" name="pwd" class="form-control" disabled>
                            </div>
                            <!-- remove life status here (Dead member is automatically inactive) -->
                        </div>
                        <button type="submit" class="btn btn-primary" disabled>Submit</button>
                    </div>
                </Form>

                <!-- change pension status modal -->
                <!-- === modal start=== -->
                <div class="modal fade" id="ustatus">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title">Update pension status</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                </button>
                            </div>
                            <form action="function/updatepstatus.php" id="updatepstatus" method="post">
                                <div class="modal-body">
                                    <div class="d-flex">
                                        <div class="input-group-prepend p-1">
                                            <span class="input-group-text" id="dtext">Registered ID:</span>
                                        </div>
                                        <select class="form-select" id="rid" name="rid">
                                            <option value="null">Select ID</option>
                                            <?php
                                                $brgy = $_SESSION['fx_street'];
                                                if($ulevel == 'staff'){
                                                    $sql = "SELECT uid FROM tbl_records WHERE fx_barangay = '$brgy' WHERE account_status = 'active'";
                                                }else{
                                                    $sql = "SELECT uid FROM tbl_records WHERE account_status = 'active'";
                                                }
                                                $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                                                while( $rows = mysqli_fetch_assoc($resultset) ) { 
                                                ?>
                                            <option value="<?php 
                                                echo $rows["uid"]; ?>"><?php echo $rows["uid"]; ?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                    <div class="d-block input-group-sm">
                                        <div class="d-flex">
                                            <div class="input-group-prepend p-1">
                                                <span class="input-group-text" id="dtext">Date from:</span>
                                            </div>
                                            <input type="date" name="min" class="form-control m-1" id="min" class="min"
                                                required>
                                        </div>

                                        <div class="d-flex">
                                            <div class="input-group-prepend p-1">
                                                <span class="input-group-text" id="dtext">Date to:</span>
                                            </div>
                                            <input type="date" name="max" class="form-control m-1" id="max" class="max"
                                                required>
                                        </div>

                                        <div class="d-flex">
                                            <div class="input-group-prepend p-1">
                                                <span class="input-group-text" id="dtext">Pension status:</span>
                                            </div>
                                            <select class="form-select m-1" id="pstatus" name="pstatus">
                                                <option value="Pending">Pending</option>
                                                <option value="Received">Received</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary ms-auto me-auto w-100"
                                        id="updatestatus">
                                        <i class="fa-solid fa-arrows-spin"></i></span> Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- === end modal ==== -->

                <!-- ==== start of modal for new pension ==== -->
                <div class="modal fade" id="newpension">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">New pension</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                </button>
                            </div>
                            <form action="#" id="resetrecords" method="post">
                                <div class="modal-body">
                                    <p style="font-size:12px;">Note: Select date range of current pension before
                                        creating
                                        new one.
                                    </p>
                                    <div class="d-block input-group-sm">
                                        <div class="d-flex">
                                            <div class="input-group-prepend p-1">
                                                <span class="input-group-text" id="dtext">Date from:</span>
                                            </div>
                                            <input type="date" name="min" class="form-control m-1" id="min" class="min"
                                                style="font-size:12px;" required>
                                        </div>
                                        <div class="d-flex">
                                            <div class="input-group-prepend p-1">
                                                <span class="input-group-text" id="dtext">Date to:</span>
                                            </div>
                                            <input type="date" name="max" class="form-control m-1" id="max" class="max"
                                                style="font-size:12px;margin:1px;" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary ms-auto me-auto w-100" id="restatus">
                                        <i class="fa-solid fa-arrows-spin"></i></span> New pension</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- === end modal === -->
            </div>
        </div>
    </div>
    <!-- Bootstrap / js-->
    <script src="lib/sweetalert.min.js"></script>
    <?php include('lib/scriptalert.php');?>
    <script>
        
    $("#restatus").click(function() {
        swal({
                title: "Continue? Please check your date",
                text: "All status will back to pending?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        type: "POST",
                        url: "function/resetrecords.php",
                        data: $("#resetrecords").serialize(),
                        success: function(data) {
                            setInterval(function() {
                                location.reload();
                            }, 900);
                        }
                    });
                } else {
                    //   swal("Your file is safe!");
                }
            });

    });
    </script>
    <script>
    $('#id_status').on('change', function() {
        if ($('#id_status option:selected').val() == 'Received') {
            $(".btn-primary").removeAttr('disabled');
        } else {
            $(".btn-primary").attr('disabled', 'disabled');
        }
    });
    </script>
</body>

</html>
<?php 

}else{
     header("Location: dashboard");
     exit();
}
 ?>
<?php include('lib/scriptalert.php');?>