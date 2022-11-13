<?php
session_start();
include('conn/connection.php');

if(isset($_POST['records-limit'])){
    $_SESSION['records-limit'] = $_POST['records-limit'];
}

$limit = isset($_SESSION['records-limit']) ? $_SESSION['records-limit'] : 10;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$paginationStart = ($page - 1) * $limit;
$records = $conn->query("SELECT * FROM tbl_records ORDER BY `tbl_records`.`fx_firstname` ASC LIMIT $paginationStart, $limit");
$allrecords = $records->fetch_all(MYSQLI_ASSOC);

// Get total records
$sql = $conn->query("SELECT count(id) AS id FROM tbl_records");
$custCount = $sql->fetch_all(MYSQLI_ASSOC);
$allRecrods = $custCount[0]['id'];

// Calculate total pages
$totoalPages = ceil($allRecrods / $limit);

// Prev + Next
$prev = $page - 1;
$next = $page + 1;

if (isset($_SESSION['user_id']) && isset($_SESSION['user_name'])) {
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Records</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/g_style.css">
    <link rel="stylesheet" type="text/css" href="css/records_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
            <li><a href="dashboard.php" id="nav-list">
                    <i class="fas fa-home"></i>
                    <span class="nav-item">Dashboard</span>
                </a></li>
            <li><a href="#" class="active" id="nav-list">
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
    <!-- Main content -->
    <div class="main-content">
        <!-- Header -->
        <header>
            <div class="header-title">
                <h2>
                    <label for="">
                        <span class="las la-bars">
                        </span>
                        Records
                </h2>
            </div>
            <div class="user-wrapper">
                <img src="media/male.png" width="30px" height="30px" alt="user">
                <div>
                    <h5><span class="nav-item"><?php echo $_SESSION['user_name']; ?></span></h5>
                </div>
            </div>
        </header>
        <!-- table header-->
        <div class="container p-2">
            <div class="row">
                <div class="div-2 col-sm">
                    <select class="form-select" style="width: auto;">
                        <option>All</option>
                        <option>With Pension</option>
                        <option>Without Pension</option>
                    </select>
                </div>

                <div class="div-1 col-sm">
                    <div class="input-group rounded w-75">
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                            aria-describedby="search-addon" />
                        <span class="input-group-text border-0" id="search-addon">
                            <i class="fas fa-search"></i>
                        </span>
                    </div>
                </div>

                <div class="div-2.1 col-sm">
                    <select class="form-select" id="bselect" style="width: auto;">
                        <option>All</option>
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
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="div-3 col-sm">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Add
                        Record</button>
                    <!-- Modal -->
                    <div class="modal" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Record</h5>
                                </div>
                                <!-- Form -->
                                <div class="modal-body">
                                    <form action="conn/insert_records.php" method="post" id="form">
                                        <!-- Senior id -->
                                        <div class="mb-3">
                                            <label class="form-label required">ID Number</label>
                                            <input type="text" name="sID" class="form-control">
                                        </div>
                                        <!-- Fist and last name -->
                                        <div class="row">
                                            <div class="col">
                                                <label class="form-label required">Fist Name</label>
                                                <input type="text" name="fistname" class="form-control"
                                                    placeholder="Juan" aria-label="First name">
                                            </div>
                                            <div class="col">
                                                <label class="form-label required">Last Name</label>
                                                <input type="text" name="lastname" class="form-control"
                                                    placeholder="Dela cruz" aria-label="Last name">
                                            </div>
                                            <div class="col col-lg-2">
                                                <label class="form-label required">I.N</label>
                                                <input type="text" name="middlename" class="form-control"
                                                    placeholder="T" aria-label="Middle name">
                                            </div>
                                        </div>
                                        <!-- Contacts  -->
                                        <div class="mb-2">
                                            <label class="form-label required">Contact(number or email)</label>
                                            <input type="text" name="contact" class="form-control">
                                        </div>
                                        <!-- Date of birth -->
                                        
                                        <div class="row">
                                            <div class="col">
                                            <div class="mb-2">
                                                <label class="form-label required">Birthdate</label>
                                                <input type="date" name="birthdate" class="form-control">
                                            </div>
                                            </div>
                                            <div class="col">
                                            <label class="form-label">Sex</label>
                                                <select class="form-select" name="sex">
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Brgy, age and status -->
                                        <div class="row">
                                            <div class="col">
                                                <label class="form-label">Barangay</label>
                                                <select class="form-select" name="barangay" style="width: auto;">
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
                                                        <option value="Other">Other</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label class="form-label required">Age</label>
                                                <input type="number" name="age" class="form-control"
                                                    placeholder=" > 59" aria-label="Age">
                                            </div>
                                            <div class="col">
                                                <!-- <div class="form-group mb-2"> -->
                                                    <label for="">Pension Status</label> <br>
                                                    <input class="form-check-input" type="radio" name="status"
                                                        value="Yes" />
                                                    <label class="form-check-label" for="status">Yes</label>
                                                    <input class="form-check-input" type="radio" name="status"
                                                        value="No" checked />
                                                    <label class="form-check-label" for="status">No</label>
                                                <!-- </div> -->
                                            </div>
                                            <!-- Pension $$$ -->
                                        <div class="mb-2">
                                            <label class="form-label required">Pension</label>
                                            <input type="number" name="pension" class="form-control">
                                        </div>
                                     </div>
                                        <!-- Modal button -->
                                        <div class="modal-footer">
                                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                            <input type="button" class="btn btn-danger" value="Cancel"
                                                data-bs-dismiss="modal">
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Table start -->
        <div class="table-div t-1" id="container">
            <table id="datatable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Senior ID</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Middle</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Birthdate</th>
                        <th scope="col">Sex</th>
                        <th scope="col">Barangay</th>
                        <th scope="col">Age</th>
                        <th scope="col">Pension</th>
                        <th scope="col">Status</th>

                    </tr>
                </thead>
                <tbody>
                    <!-- Display all records in the table -->
                    <?php foreach($allrecords as $row) :  ?>
                    <tr>
                        <td> <?php echo $row['fx_id']; ?> </td>
                        <td> <?php echo $row['fx_firstname']; ?> </td>
                        <td> <?php echo $row['fx_lastname']; ?> </td>
                        <td> <?php echo $row['fx_middlename']; ?> </td>
                        <td> <?php echo $row['fx_contact']; ?> </td>
                        <td> <?php echo $row['fd_birthdate']; ?> </td>
                        <td> <?php echo $row['fx_gender']; ?> </td>
                        <td> <?php echo $row['fx_barangay']; ?> </td>
                        <td> <?php echo $row['fn_age']; ?> </td>
                        <td> <?php echo $row['fn_pension']; ?> </td>
                        <td> <?php echo $row['fn_status']; ?> </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- Pagination start-->
        <div class="d-flex justify-content-center">
            <!-- <nav aria-label="Page navigation"> -->
                <ul class="pagination">
                    <li class="page-item <?php if($page <= 1){ echo 'disabled'; } ?>">
                        <a class="page-link w-100"
                            href="<?php if($page <= 1){ echo '#'; } else { echo "?page=" . $prev; } ?>">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <?php for($i = 1; $i <= $totoalPages; $i++ ): ?>
                    <li class="page-item <?php if($page == $i) {echo 'active'; } ?>">
                        <a class="page-link w-100" href="records.php?page=<?= $i; ?>"> <?= $i; ?> </a>
                    </li>
                    <?php endfor; ?>
                    <li class="page-item <?php if($page >= $totoalPages) { echo 'disabled'; } ?>">
                        <a class="page-link w-100"
                            href="<?php if($page >= $totoalPages){ echo '#'; } else {echo "?page=". $next; } ?>">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            <!-- </nav> -->
        </div>
        <!-- pagination end -->
    </div>
    <!-- Bootstrap / js-->
    <script src="lib/sweetalert.min.js"></script>
    <script src="lib/records.js"></script>
</body>
</html>
<?php
} else {
    header("Location: index.php");
    exit();
}
?>
<?php
include('conn/script.php');
?>