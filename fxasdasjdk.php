<?php 
session_start();
include('conn/connection.php');
include('function/indicator.php');

$records = $conn->query("SELECT * FROM users");

if (isset($_SESSION['user_id']) && isset($_SESSION['user_name']) && ($_SESSION["user_level"]=='admin')) {

    
    $sql="SELECT COUNT(user_name) as alladm FROM users";
    $a=mysqli_query($conn,$sql);
    $total=mysqli_fetch_assoc($a);

    $sql="SELECT COUNT(*) as adm FROM users WHERE user_level = 'admin'";
    $b=mysqli_query($conn,$sql);
    $admin=mysqli_fetch_assoc($b);

    $sql="SELECT COUNT(*) as staff FROM users WHERE user_level = 'staff'";
    $c=mysqli_query($conn,$sql);
    $staff=mysqli_fetch_assoc($c);
    
?>
<!DOCTYPE html>
<html lang="end">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Panel</title>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- ICONS AND JQUERY -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- DATA TABLE CSS -->
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap5.min.css">

    <link rel="stylesheet" type="text/css" href="css/g_style.css">
    <link rel="stylesheet" type="text/css" href="css/adminpanel.css">

    <!-- DATA TABLE JS -->
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

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
            <span class="indicator" style="<?php if($count == '0'){echo 'display:none;';}?>"><?php echo $count;?></span>
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
            <li><a href="profile" id="nav-list">
                    <i class="fas fa-user"></i>
                    <span class="nav-item">Profle</span>
                </a></li>
            <li <?php if($_SESSION['user_level']=="staff") echo 'style="display:none;"'; ?>><a href="#" id="nav-list"
                    class="active">
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
                        Admin Panel
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
        <!-- K -->
        <div class="d-flex">
            <div class="p-2 ms-auto m-2 card">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#new">
                    <span><i class="fa-solid fa-plus"></i></span>Add User</button>
            </div>
        </div>

        <div class="container">
            <div class="cardBox">
                <div class="card">
                    <div class="row">
                        <div class="numbers col" id="total"><?php echo $total['alladm']?></div>
                        <div class="col" id="iconBox"><i class="fa-solid fa-database"></i></div>
                        <div class="cardName">Total System User</div>
                    </div>
                </div>

                <div class="card cadmin">
                    <div class="row">
                        <div class="numbers col"><?php echo $admin['adm']?></div>
                        <div class="col" id="iconBox"><i class="fa-solid fa-rectangle-ad"></i></i></div>
                        <div class="cardName">Admin role</div>
                    </div>
                </div>
                <div class="card cadmin">
                    <div class="row">
                        <div class="numbers col"><?php echo $staff['staff']?></div>
                        <div class="col" id="iconBox"><i class="fa-solid fa-clipboard-user"></i></i></div>
                        <div class="cardName">Staff role</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="d-flex">
                <div class="w-100" id="container">
                    <table class="table" id="datatable">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">Profile</th>
                                <th scope="col" class="text-center">Username</th>
                                <th scope="col" class="text-center">Handle</th>
                                <th class="d-none d-sm-table-cell text-center" scope="col">User type</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Display all records in the table -->
                            <?php foreach($records as $row) :  ?>
                            <tr>
                                <td class="text-center"> <img src="image/<?php echo $row['fm_img'] ?>" class="user_img" /> </td>
                                <td class="text-center"> <?php echo $row['user_name']; ?> </td>
                                <td class="text-center"> <?php if($row['fx_street'] == ''){echo 'All';}else{echo $row['fx_street'];} ?> </td>
                                <td class="d-none d-sm-table-cell text-center"> <?php echo $row['user_level']; ?> </td>
                                <td class="text-center"> <button id='<?php echo $row['user_id']; ?>' class="view btn btn-secondary"
                                        style="width: auto;" data-bs-toggle="modal"
                                        data-bs-target="#myModal">View</button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                    </table>
                </div>
            </div>
            <!-- #################################################################################### -->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Profile</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </button>
                        </div>
                        <form action="" method="post" id="profileForm">
                            <div class="modal-body" id="infoUpdate">
                            </div>
                        </form>
                        <div class="modal-footer">
                            <button name="remove" id="remove" class="remove btn btn-danger">Remove</button>
                            <button type="submit" id="reset" name="reset" class="reset btn btn-secondary">Reset
                                Password</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #################################################################################### -->
            <div class="modal" id="passwordialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Temporary password</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </button>
                        </div>
                        <div class="modal-body" id="newpass">
                        </div>
                    </div>
                </div>
            </div>

            <!-- #################################################################################### -->
            <div class="modal" id="new">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Create new user</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </button>
                        </div>
                        <form action="pdf/generate.php" method="post">
                            <div class="modal-body">
                                <div class="mb-2">
                                    <label class="form-label">Admin/Cluster president :</label>
                                    <select class="form-select" name="barangay">
                                        <option value="---">Admin role</option>
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
                            <div class="modal-footer">
                                <button type="submit" id="add" class="btn btn-primary">Generate</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="lib/sweetalert.min.js"></script>
    <script src="lib/admin.js"></script>
    <?php include('lib/scriptalert.php');?>
</body>

</html>
<?php 
}else{
    $user_name = $_SESSION['user_name'];
	date_default_timezone_set('Asia/Manila');
    $date = date("M d, Y - h:i a");					
	$act = "INSERT INTO tbl_activities(fd_date, fx_user, fx_action) VALUES('$date', '$user_name','Attempted to access private page')";
	$result = mysqli_query($conn, $act);
    header("Location: index?error=We logged you out because you're trying to access a private page, please login again.");
     exit();
}
 ?>