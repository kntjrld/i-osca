<?php
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/g_style.css">
    <link rel="stylesheet" type="text/css" href="css/d_style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- Navigation start -->
    <nav class="side-nav">
        <ul>
            <li>
                <a href="#" class="logo">
                    <img src="media/logo.jpg" alt="logo">
                    <span class="nav-item">i-OSCA</span>
                </a>
            </li>
            <li><a href="#" class="active" id="nav-list">
                    <i class="fas fa-home"></i>
                    <span class="nav-item">Dashboard</span>
                </a></li>
            <li><a href="records.php" id="nav-list">
                    <i class="fas fa-table"></i>
                    <span class="nav-item">Records</span>
                </a></li>
            <li><a href="reports.php" id="nav-list">
                    <i class="fas fa-tasks"></i>
                    <span class="nav-item">Reports</span>
                </a></li>
            <li><a href="#" id="nav-list">
                    <i class="fas fa-user"></i>
                    <span class="nav-item">Users</span>
                </a></li>
            <li><a href="activities.php" id="nav-list">
                    <i class="fas fa-solid fa-clock-rotate-left"></i>
                    <span class="nav-item">Activities</span>
                </a></li>
            <li><a href="function/logout.php" class="logout" id="nav-list">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-item">Logout</span>
                </a></li>
        </ul>
    </nav>
    <!-- Navigation end -->
    <div class="main-content">
        <!-- Header -->
        <header>
            <div class="header-title">
                <h2>
                    <label for="">
                        <span class="las la-bars">
                        </span>
                        Dashboard
                </h2>
            </div>
            <div class="user-wrapper">
                <img src="media/male.png" width="30px" height="30px" alt="user">
                <div>
                    <h5><span class="nav-item"><?php echo $_SESSION['user_name']; ?></span></h5>
                </div>
            </div>

        </header>
        <!-- SELECT -->
        <?php
        $conn = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($conn, 'iosca');
        // select total
        $sql="SELECT COUNT(*) as total from tbl_records";
        $result=mysqli_query($conn,$sql);
        $total=mysqli_fetch_assoc($result);
        // select distinct total barangay
        $sql="SELECT COUNT(DISTINCT fx_barangay) as total from tbl_records";
        $result=mysqli_query($conn,$sql);
        $totalbarangay=mysqli_fetch_assoc($result);
        // filter with
        $sql="SELECT COUNT(*) as total from tbl_records WHERE fn_status = 'Yes'";
        $result=mysqli_query($conn,$sql);
        $withp=mysqli_fetch_assoc($result);
        // filter without
        $sql="SELECT COUNT(*) as total from tbl_records WHERE fn_status = 'No'";
        $result=mysqli_query($conn,$sql);
        $withoutp=mysqli_fetch_assoc($result);
    ?>
        <!-- Card -->
        <div class="cardBox">
            <div class="card">
                <div class="row">
                    <div class="numbers col" id="total"><?php echo $total['total'];?></div>
                    <div class="col" id="iconBox"><i class="fa-solid fa-database"></i></div>
                    <div class="cardName">Total Registered</div>
                </div>
            </div>

            <div class="card">
                <div class="row">
                    <div class="numbers col">15</div>
                    <div class="col" id="iconBox"><i class="fa-solid fa-house-laptop"></i></div>
                    <div class="cardName">Barangays</div>
                </div>
            </div>
            <div class="card">
                <div class="row">
                    <div class="numbers col" id="withp"><?php echo $withp['total'];?></div>
                    <div class="col" id="iconBox"><i class="fa-solid fa-people-group"></i></div>
                    <div class="cardName">With Pension</div>
                </div>
            </div>
            <div class="card">
                <div class="row">
                    <div class="numbers col" id="withoutp"><?php echo $withoutp['total'];?></div>
                    <div class="col" id="iconBox"><i class="fa-solid fa-user-group"></i></div>
                    <div class="cardName">Without Pension</div>
                </div>
            </div>
        </div>

        <!-- Data analytics -->
        <div class="details">
            <div class="datalist">
                <div class="cardHeader">
                    <h3>Analytics</h3>
                </div>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
</body>

</html>
<?php
} else {
    header("Location: index.php");
    exit();
}
?>