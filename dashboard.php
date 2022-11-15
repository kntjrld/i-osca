<?php
session_start();
include('conn/connection.php');

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


    <!-- charts -->

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
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
                    <p><span class="nav-item"><?php echo $_SESSION['user_level']; ?></span></p>
                </div>
            </div>

        </header>
        <!-- SELECT -->
        <?php
        // select total
        $sql="SELECT COUNT(*) as total from tbl_records";
        $result=mysqli_query($conn,$sql);
        $total=mysqli_fetch_assoc($result);
        // select distinct total barangay
        $sql="SELECT COUNT(DISTINCT fx_barangay) as total from tbl_records";
        $result=mysqli_query($conn,$sql);
        $totalbarangay=mysqli_fetch_assoc($result);
        // filter with
        $sql="SELECT COUNT(*) as total from tbl_records WHERE fn_status = 'Received'";
        $result=mysqli_query($conn,$sql);
        $withp=mysqli_fetch_assoc($result);
        // filter without
        $sql="SELECT COUNT(*) as total from tbl_records WHERE fn_status = 'Pending'";
        $result=mysqli_query($conn,$sql);
        $withoutp=mysqli_fetch_assoc($result);

        // Filter Female from Barangay 1
        $sql = "SELECT COUNT(*) as total FROM tbl_records WHERE fx_barangay = 'Barangay 1' AND fx_gender = 'Female' ";
        $result=mysqli_query($conn,$sql);
        $Fbrgy1=mysqli_fetch_assoc($result);

        // Filter Male from Barangay 1
        $sql = "SELECT COUNT(*) as total FROM tbl_records WHERE fx_barangay = 'Barangay 1' AND fx_gender = 'Male' ";
        $result=mysqli_query($conn,$sql);
        $Mbrgy1=mysqli_fetch_assoc($result);
        
        // Filter Female from Barangay 2
        $sql = "SELECT COUNT(*) as total FROM tbl_records WHERE fx_barangay = 'Barangay 2' AND fx_gender = 'Female' ";
        $result=mysqli_query($conn,$sql);
        $Fbrgy2=mysqli_fetch_assoc($result);

        // Filter Male from Barangay 2
        $sql = "SELECT COUNT(*) as total FROM tbl_records WHERE fx_barangay = 'Barangay 2' AND fx_gender = 'Male' ";
        $result=mysqli_query($conn,$sql);
        $Mbrgy2=mysqli_fetch_assoc($result);

        $chart_data = '';
        $brgy = array("Barangay 1", "Barangay 2", "Barangay 3", "Barangay 4", "Barangay 5", "Barangay 6", "Barangay 7", "Barangay 8", "Balansay"
                    ,"Fatima", "Payompon", "San Luis(Ligang)", "Talabaan", "Tangkalan", "Tayamaan");
        $male = array("32", "31", "42", "40", "32", "31", "42", "40", "31", "42", "40", "32", "31", "42", "40");
        $female = array("10", "34", "41", "50", "10", "34", "41", "50", "31", "42", "40", "32", "31", "42", "40");
        
        for ($i = 0; $i < count($brgy); $i++) {
            $chart_data .= "{ y:'$brgy[$i]', Male:'$male[$i]', Female:'$female[$i]'}, ";
        }

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
                <div class="d-flex bd-highlight">
                    <div class="p-2 w-100 bd-highlight">
                        <h3>Analytics</h3>
                    </div>
                    <div class="p-2 flex-shrink-1 bd-highlight">
                        <select class="form-select" name="barangay" style="width: auto;">
                            <option value="All">All</option>
                            <option value="Balansay">Balansay</option>
                            <option value="Barangay 1">Barangay 1</option>
                            <option value="Barangay 2">Barangay 2</option>
                            <option value="Barangay 3">Barangay 3</option>
                            <option value="Barangay 4">Barangay 4</option>
                            <option value="Barangay 5">Barangay 5</option>
                            <option value="Barangay 6">Barangay 6</option>
                            <option value="Barangay 7">Barangay 7</option>
                            <option value="Barangay 8">Barangay 8</option>
                            <option value="Fatima">Fatima</option>
                            <option value="Payompon">Payompon</option>
                            <option value="San Luis (Ligang)">San Luis (Ligang)</option>
                            <option value="Talabaan">Talabaan</option>
                            <option value="Tangkalan">Tangkalan</option>
                            <option value="Tayamaan">Tayamaan</option>
                        </select>
                    </div>
                </div>
            </div>
            <div id="analytics"></div>
        </div>
    </div>

    <script>
    Morris.Bar({
                element: 'analytics',
                data: [<?php echo $chart_data; ?>],
                xkey: 'y',
                ykeys: ['Male', 'Female'],
                labels: ['Male', 'Female'],
                stacked: true,
                resize: true,
                redraw: true,
                barColors:['#6D9886', '#393E46'],
    });
    </script>
</body>

</html>
<?php
} else {
    header("Location: index.php");
    exit();
}
?>