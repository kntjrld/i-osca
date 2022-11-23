<?php 
session_start();
include('conn/connection.php');

$records = $conn->query("SELECT * FROM tbl_register ORDER BY `tbl_register`.`fx_lastname` ASC");

if (isset($_SESSION['user_id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html lang="end">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Reports</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- DATA TABLE CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap5.min.css">

    <link rel="stylesheet" type="text/css" href="css/g_style.css">
    <link rel="stylesheet" type="text/css" href="css/reports.css">

    <!-- DATA TABLE JS -->
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
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
            <li><a href="#" class="active" id="nav-list">
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
                        Reports(MAINTENANCE)
                </h2>
                <p style="font-size: 12px;">You are viewing a list of application that accepted by staff</p>
            </div>
            <div class="user-wrapper">
                <img src="./image/<?php echo $_SESSION['fm_img']; ?>" class="user_img" alt="user">
                <div>
                    <h5><span class="nav-item"><?php echo $_SESSION['user_name']; ?></span></h5>
                    <p><span class="nav-item"><?php echo $_SESSION['user_level']; ?></span></p>
                </div>
            </div>

        </header>
        <!-- Table start -->
        <div class="table p-2" id="container">
            <table id="datatable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col" class="d-none d-sm-table-cell">ID Number</th>
                        <th scope="col">Date Application</th>
                        <th scope="col" class="d-none d-sm-table-cell">Presented ID</th>
                        <th scope="col">Last Name</th>
                        <th scope="col" class="d-none d-sm-table-cell">First Name</th>
                        <th scope="col" class="d-none d-sm-table-cell">I.N</th>
                        <th scope="col" class="d-none d-sm-table-cell">Birthday</th>
                        <th scope="col" class="d-none d-sm-table-cell">Gender</th>
                        <th scope="col" class="d-none d-sm-table-cell">Barangay</th>
                        <th scope="col" class="d-none d-sm-table-cell">Contact</th>
                        <th scope="col" class="d-none d-sm-table-cell">Age</th>
                        <th scope="col" class="noExl">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Display all records in the table -->
                    <?php foreach($records as $row) :  ?>
                    <tr>
                        <td id="sid" class="d-none d-sm-table-cell"> <?php echo $row['fx_idnumber']; ?> </td>
                        <td id="sid"> <?php echo $row['fd_application']; ?> </td>
                        <td class="d-none d-sm-table-cell"> <?php echo $row['fx_idpresented']; ?> </td>
                        <td> <?php echo $row['fx_lastname']; ?> </td>
                        <td class="d-none d-sm-table-cell"> <?php echo $row['fx_firstname']; ?> </td>
                        <td class="d-none d-sm-table-cell"> <?php echo $row['fx_initial']; ?> </td>
                        <td class="d-none d-sm-table-cell"> <?php echo $row['fd_birthdate']; ?> </td>
                        <td class="d-none d-sm-table-cell"> <?php echo $row['fx_gender']; ?> </td>
                        <td class="d-none d-sm-table-cell"> <?php echo $row['fx_barangay']; ?> </td>
                        <td class="d-none d-sm-table-cell"> <?php echo $row['fx_contact']; ?> </td>
                        <td class="d-none d-sm-table-cell"> <?php echo $row['fn_age']; ?> </td>
                        <td> <button id='<?php echo $row['fx_id']; ?>' class="view btn btn-secondary noExl"
                                style="width: auto;" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">Review</button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!-- </div> -->
        </div>
        <!-- start -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="d-flex">
                            <div class="ms-auto"> <i class="fa fa-close close" data-bs-dismiss="modal"></i> </div>
                        </div>
                        <div class="container">
                            <h5 class="text-uppercase">XXX 25, 1982</h5>
                            <h5 class="h6">Date of application</h5>
                            <div class="mb-3">
                                <hr class="new1">
                            </div>
                            <div class="text-center  mt-5">
                                <div class="d-flex justify-content-between">
                                    <div class="pdl">
                                        <p class="xx ml-md-6">Presented ID number: <span class="xxx">000-000-000</span>
                                    </div>
                                    <div class="pdr">
                                        <p class="xx">Presented ID type: <span class="xxx">idtype name</span></p>
                                        </p>
                                    </div>

                                </div>
                            </div>

                            <div class="text-center mt-2">
                                <div class="d-flex justify-content-between">
                                    <div class="pdl">
                                        <p class="xx ml-md-6">Last name: <span class="xxx">name xx xx</span>
                                    </div>
                                    <div class="pdr">
                                        <p class="xx">First name: <span class="xxx">lastxsx x</span></p>
                                        </p>
                                    </div>
                                    <div class="pdr">
                                        <p class="xx">Middle initial: <span class="xxx">x</span></p>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center mt-2">
                                <div class="d-flex justify-content-between">
                                    <div class="pdl">
                                        <p class="xx ml-md-6">Birthday: <span class="xxx">May 09, 1892</span>
                                    </div>
                                    <div class="pdr">
                                        <p class="xx">Gender: <span class="xxx">Male</span></p>
                                        </p>
                                    </div>
                                    <div class="pdr">
                                        <p class="xx">Barangay: <span class="xxx">Payompon</span></p>
                                        </p>
                                    </div>
                                    <div class="pdr">
                                        <p class="xx">Age: <span class="xxx">00</span></p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <hr class="new1">
                            </div>
                            <h6>Proof of Identity<span style="font-size:14px;">(Click to view/print)</span></h6>
                            <p class="xx">ID Presented: <span class="xxx">This is pdf file</span></p>
                            <p class="xx">Registration Form: <span class="xxx">This is pdf file</span></p>
                            <div class="text-center mt-5">
                                <p style="font-size: 12px;">All accepted application will proceed to next step and review by admin
                                </p>
                                <button class="btn btn-primary">Accept</button>
                                <button class="btn btn-danger">Reject</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end -->
    </div>
    <script>
    // DATATABLE record
    $(document).ready(function() {
        $('#datatable').DataTable();
    });
    </script>
</body>

</html>
<?php 

}else{
     header("Location: index");
     exit();
}
 ?>