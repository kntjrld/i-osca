<?php
session_start();
include('conn/connection.php');

$records = $conn->query("SELECT * FROM tbl_records ORDER BY `tbl_records`.`fx_firstname` ASC");

if (isset($_SESSION['user_id']) && isset($_SESSION['user_name'])) {
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Records</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script defer src="https://friconix.com/cdn/friconix.js"></script>

    <!-- DATA TABLE CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap5.min.css">

    <link rel="stylesheet" type="text/css" href="css/g_style.css">
    <link rel="stylesheet" type="text/css" href="css/records_style.css">

    <!-- DATA TABLE JS -->
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
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
            <li><a href="activities.php" id="nav-list">
                    <i class="fas fa-solid fa-clock-rotate-left"></i>
                    <span class="nav-item">Activities</span>
                </a></li>
            <li><a href="profile.php" id="nav-list">
                    <i class="fas fa-user"></i>
                    <span class="nav-item">Profle</span>
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
                    <h6><span class="nav-item"><?php echo $_SESSION['user_name']; ?></span></h6>
                    <p><span class="nav-item"><?php echo $_SESSION['user_level']; ?></span></p>
                </div>
            </div>
        </header>
        <!-- table header-->
        <div class="d-flex">
            <div class="p-2 me-auto">
                <button type="button" class="btn btn-primary justify-content-end"><span><i class="fa-solid fa-file-export"></i></span> Export Excel
                </button>
            </div>
            <div class="p-2 ms-auto">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                    <span><i class="fa-solid fa-plus"></i></span> Add Record</button>
            </div>
        </div>

        <!-- Modal For add record-->
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
                                <input type="text" name="sID" id="sID" class="form-control">
                                <div id="id_result"></div>
                            </div>
                            <!-- Fist , last and middle name -->
                            <div class="row">
                                <div class="col">
                                    <label class="form-label required">Fist Name</label>
                                    <input type="text" name="fistname" id="name" class="form-control" placeholder="Juan"
                                        aria-label="First name">
                                </div>
                                <div class="col">
                                    <label class="form-label required">Last Name</label>
                                    <input type="text" name="lastname" id="name" class="form-control"
                                        placeholder="Dela cruz" aria-label="Last name">
                                </div>
                                <div class="col col-lg-2">
                                    <label class="form-label required">I.N</label>
                                    <input type="text" name="middlename" id="name" class="form-control" placeholder="T"
                                        aria-label="Middle name">
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
                                    <input type="number" name="age" class="form-control" placeholder=" > 59"
                                        aria-label="Age">
                                </div>
                                <div class="col">
                                    <!-- <div class="form-group mb-2"> -->
                                    <label for="">Pension Status</label> <br>
                                    <input class="form-check-input" type="radio" name="status" value="Received" />
                                    <label class="form-check-label" for="status">Recieved</label></br>
                                    <input class="form-check-input" type="radio" name="status" value="Pending"
                                        checked />
                                    <label class="form-check-label" for="status">Pending</label>
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
                                <input type="button" class="btn btn-secondary" value="Cancel" data-bs-dismiss="modal">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal For Update and delete-->
        <div class="modal" id="updateModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="#" method="post" id="updateForm">
                        <div class="modal-header">
                            <h5 class="modal-title">Update Record</h5>
                            <a href="#" id="delete_row" value="" class="d-flex justify-content-end"
                                aria-label="Delete"><i class="fi-xnsuxl-trash-bin  fa-2x"></i></a>
                        </div>
                        <!-- Form -->
                        <div class="modal-body" id="infoUpdate">
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="submit" name="submit" id="update_record"
                                class="btn btn-primary">Update</button>
                            <input type="button" class="btn btn-secondary" id="cancel" value="Cancel"
                                data-bs-dismiss="modal">
                        </div>
                    </form>
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
                        <th scope="col" class="d-none d-sm-table-cell">Middle</th>
                        <th scope="col" class="d-none d-sm-table-cell">Contact</th>
                        <th scope="col" class="d-none d-sm-table-cell">Birthdate</th>
                        <th scope="col" class="d-none d-sm-table-cell">Sex</th>
                        <th scope="col" class="d-none d-sm-table-cell">Barangay</th>
                        <th scope="col" class="d-none d-sm-table-cell">Age</th>
                        <th scope="col" class="d-none d-sm-table-cell">Pension</th>
                        <th scope="col" class="d-none d-sm-table-cell">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Display all records in the table -->
                    <?php foreach($records as $row) :  ?>
                    <tr>
                        <td id="sid"> <?php echo $row['fx_id']; ?> </td>
                        <td> <?php echo $row['fx_firstname']; ?> </td>
                        <td> <?php echo $row['fx_lastname']; ?> </td>
                        <td class="d-none d-sm-table-cell"> <?php echo $row['fx_middlename']; ?> </td>
                        <td class="d-none d-sm-table-cell"> <?php echo $row['fx_contact']; ?> </td>
                        <td class="d-none d-sm-table-cell"> <?php echo $row['fd_birthdate']; ?> </td>
                        <td class="d-none d-sm-table-cell"> <?php echo $row['fx_gender']; ?> </td>
                        <td class="d-none d-sm-table-cell"> <?php echo $row['fx_barangay']; ?> </td>
                        <td class="d-none d-sm-table-cell"> <?php echo $row['fn_age']; ?> </td>
                        <td class="d-none d-sm-table-cell"> <?php echo $row['fn_pension']; ?> </td>
                        <td class="d-none d-sm-table-cell"> <?php echo $row['fn_status']; ?> </td>
                        <td> <button id='<?php echo $row['fx_id']; ?>' class="view btn btn-secondary"
                                style="width: auto;">View</button></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!-- </div> -->
        </div>
        <!-- Bootstrap / js-->
        <script src="lib/sweetalert.min.js"></script>
        <script src="lib/records.js"></script>
        <script src="lib/app.js"></script>

</body>

</html>
<?php
}else{
    header("Location: index.php");
    exit();
}
?>
<?php include('conn/script.php');?>