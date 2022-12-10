<?php
session_start();
include('conn/connection.php');
include('function/dashboard_query.php');
include('function/indicator.php');


if (isset($_SESSION['user_id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Custom css -->
    <link rel="stylesheet" type="text/css" href="css/g_style.css">
    <link rel="stylesheet" type="text/css" href="css/d_style.css">

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
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
            <li><a href="#" class="active" id="nav-list">
                    <i class="fas fa-home"></i>
                    <span class="nav-item">Dashboard</span>
                </a></li>
            <li><a href="records" id="nav-list">
                    <i class="fas fa-table"></i>
                    <span class="nav-item">Records</span>
                </a></li>
            <li><a href="reports" id="nav-list">
                    <span class="indicator" style="<?php if($count == '0'){echo 'display:none;';}?>"><?php echo $count;?></span>
                    <i class="fas fa-tasks"></i>    
                    <span class="nav-item">Reports</span>
                </a></li>
            <li <?php if($_SESSION['user_level']=="admin") echo 'style="display:none;"'; ?>><a href="status" id="nav-list">
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
                <img src="./image/<?php echo $_SESSION['fm_img']; ?>" class="user_img" alt="user">
                <div>
                    <h5><span class="nav-item"><?php echo $_SESSION['user_name']; ?></span></h5>
                    <p><span class="nav-item"><?php echo $_SESSION['user_level']; ?></span></p>
                </div>
            </div>

        </header>

        <!-- Card -->
        <div class="cardBox">
            <div class="card">
                <div class="row">
                    <div class="numbers col" id="total"><?php echo $total['total'];?></div>
                    <div class="col" id="iconBox"><i class="fa-solid fa-database"></i></div>
                    <div class="cardName">Total Active Registered</div>
                </div>
            </div>

            <div class="card">
                <div class="row">
                    <div class="numbers col"><?php if($ulevel == 'admin'){echo '15';}else{echo '1';}?></div>
                    <div class="col" id="iconBox"><i class="fa-solid fa-house-laptop"></i></div>
                    <div class="cardName">Barangay(s)</div>

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
                <div class="d-flex ms-auto">
                    <div class="p-1">
                        <h3>Analytics</h3>
                    </div>
                </div>
            </div>
            <div class="graph">
                <div class="chart-container card m-2 p-1">
                    <p class="ms-auto me-auto" style="font-size:12px;"><?php if($ulevel == 'admin'){echo'Total Records per barangay';}else{echo 'Total records between age range';} ?></p>
                    <canvas id="myChart"></canvas>
                </div>
                <div class="chart-container card m-2 p-1">
                    <p class="ms-auto me-auto" style="font-size:12px;">Yearly records</p>
                    <canvas id="yearlychart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="lib/dashboard.js"></script>
    <script>
    const yearly = document.getElementById('yearlychart');
    var yearlychart = new Chart(yearly, {
        type: 'line',
        data: {
            labels: <?php echo json_encode($ylabel);?>,
            datasets: [{
                data: <?php echo json_encode($yval);?>,
                label: "Registered",
                fill: true,
                borderColor: "rgb(60,186,159)",
                backgroundColor: "rgb(62,149,205,0.1)",
                tension: 0.1,
                borderWidth: 2
            }, {
                data: <?php echo json_encode($ydeadval)?>,
                label: "Death(s)",
                fill: true,
                borderColor: "rgb(196,88,80)",
                backgroundColor: "rgb(196,88,80,0.1)",
                tension: 0.1,
                borderWidth: 2
            }, {
                data: <?php echo json_encode($yactive)?>,
                label: "Active",
                fill: true,
                borderColor: "rgb(62,149,205)",
                backgroundColor: "rgb(62,149,205,0.1)",
                tension: 0.1,
                borderWidth: 2
            }, {
                data: <?php echo json_encode($yinactive)?>,
                label: "Inactive",
                fill: true,
                borderColor: "rgb(255,165,0)",
                backgroundColor: "rgb(255,165,0,0.1)",
                tension: 0.1,
                borderWidth: 2
            }]
        },
        options: {
            animations: {
                tension: {
                    duration: 2000,
                    easing: 'linear',
                    from: 1,
                    to: 0,
                    loop: false
                }
            }
        }
    });
    </script>
    <?php include('lib/script.php');?>
</body>

</html>
<?php
} else {
    header("Location: index");
    exit();
}
?>