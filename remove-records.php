<?php
session_start();
include('conn/connection.php');
include('function/indicator.php');
include('function/records_query.php');


if (isset($_SESSION['user_id']) && isset($_SESSION['user_name'])) {
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Records</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script defer src="https://friconix.com/cdn/friconix.js"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/g_style.css">
    <link rel="stylesheet" type="text/css" href="css/records_style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Date range CSS -->
    <link rel="stylesheet" type="text/css" href="css/dataTables.dateTime.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">

    <!-- Security -->
    <script src="lib/security.js"></script>
</head>

<body>
    <!-- Navigation start -->
    <nav class="side-nav">
        <ul>
            <li>
                <a href="#" class="logo">
                    <img src="media/header.png" alt="logo">
                    <span class="nav-item" id="header-title">i-OSCA</span>
                </a>
            </li>
            <li><a href="dashboard" id="nav-list">
                    <i class="fas fa-home"></i>
                    <span class="nav-item">Dashboard</span>
                </a></li>
            <li><a href="#" class="active" id="nav-list">
                    <i class="fas fa-table"></i>
                    <span class="nav-item">Records</span>
                </a></li>
            <li><a href="reports" id="nav-list">
                    <span class="indicator"
                        style="<?php if($count == '0'){echo 'display:none;';}?>"><?php echo $count;?></span>
                    <i class="fas fa-tasks"></i>
                    <span class="nav-item">Reports</span>
                </a></li>
            <li <?php if($_SESSION['user_level']=="admin") echo 'style="display:none;"'; ?>><a href="status"
                    id="nav-list">
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
                <img src="./image/<?php echo $_SESSION['fm_img']; ?>" class="user_img" alt="user">
                <div>
                    <h6><span class="nav-item"><?php echo $_SESSION['user_name']; ?></span></h6>
                    <p><span class="nav-item"><?php echo $_SESSION['user_level']; ?></span></p>
                </div>
            </div>
        </header>

        <!-- table header-->
        <div class="table_actions" id="table_actions">
            <!-- add and export -->
            <div class="d-block card m-2">
                <div class="expand_button p-2">
                    <button type="submit" name="export" id="export"
                        class="export btn e-button btn-primary justify-content-end"><span style="font-size:12px;"
                            class="e-button-text"><i class="fa-solid fa-file-export"></i>Export to excel</span>
                    </button>
                </div>
                <div class="btn-group p-2 w-100"
                    style="<?php if($_SESSION['user_level'] != 'staff'){echo 'display:none;';} ?>">
                    <button type="button" id="dropdownac" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Removed
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="records">Active</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="inactive-records">Inactive</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Removed</a></li>
                    </ul>
                </div>
                <div class="p-2">
                    <button type="button" class="btn e-button btn-primary" data-bs-toggle="modal"
                        data-bs-target="#myModal"
                        <?php if($_SESSION['user_level'] != 'admin') echo 'style="display:none;"'?>>
                        <span class="e-button-text"><i class="fa-solid fa-plus"></i>
                            Add record</span></button>
                </div>
            </div>

            <!-- other records -->
            <div class="d-block card m-2"
                style="width:130px; <?php if($_SESSION['user_level'] == 'staff'){echo 'opacity:0;';} ?>">
                <div class="expand_button p-2 me-auto ms-auto">
                    <label class="text-center p-1">Records</label>
                </div>
                <div class="btn-group p-2 w-100">
                    <button type="button" id="dropdownac" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Removed
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="records">Active</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="inactive-records">Inactive</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Removed</a></li>
                    </ul>
                </div>
            </div>
            <!-- Generate reports -->
            <div class="d-block card m-2" id="reportdiv">
                <form method="POST" action="pdf/generate_reports.php" target="_blank">
                    <div class="expand_button p-2">
                        <label class="text-center p-1">Generate reports</label>
                    </div>
                    <div class="d-flex p-1">
                        <div class="col m-1">
                            <select class="form-select" name="action1" id="action1">
                                <?php 
                                if($xx == 'staff'){
                                    echo '<option value="'.$street.'">'.$street.'</option>';
                                }else{
                            echo'
                                <option value="All">All Barangay</option>
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
                                <option value="Tayamaan">Tayamaan</option>';
                                }?>
                            </select>
                        </div>
                        <div class="col m-1">
                            <select class="form-select" name="action2" id="action2">
                                <option value="active">Active account</option>
                                <option value="inactive">Inactive account</option>
                                <option value="removed">Removed account</option>
                                <option value="pending">Without pension</option>
                                <option value="received">With pension</option>
                                <option value="alive">Alive</option>
                                <option value="dead">Dead</option>
                            </select>
                        </div>
                        <div class="col m-1">
                            <button type="submit" id="generate" class="btn btn-primary">Generate</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- search by date -->
            <div class="d-block ms-auto card m-2">
                <div class="p-2 d-flex input-group-sm">
                    <div class="input-group-prepend p-1">
                        <span class="input-group-text" id="dtext">Date from:</span>
                    </div>
                    <input type="text" class="form-control" id="min" name="min" placeholder="mm/dd/yyyy">
                </div>
                <div class="p-2 d-flex input-group-sm">
                    <div class="input-group-prepend p-1">
                        <span class="input-group-text" id="dtext">Date to:</span>
                    </div>
                    <input type="text" class="form-control" id="max" name="max" placeholder="mm/dd/yyyy">

                </div>
            </div>
        </div>

        <!-- Modal For add record-->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title ms-auto">Add Record</h5>
                        <div class="ms-auto"> <i class="fa fa-close close" style="color:#000;"
                                data-bs-dismiss="modal"></i> </div>
                    </div>
                    <!-- Form -->
                    <div class="modal-body">
                        <form action="conn/insert_record.php" method="post" id="form">
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
                            <div class="row mt-2">
                                <div class="col">
                                    <div class="mb-2">
                                        <label class="form-label required">Contact number</label>
                                        <input type="text" name="contact" maxlength="10" placeholder="10 digit number"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-2">
                                        <label class="form-label required">Date Started</label>
                                        <input type="date" name="started" id="started" class="form-control">
                                    </div>

                                </div>
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
                                    <select class="form-select" name="barangay">
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
                                <div class="col">
                                    <label for="">Pension Status</label> <br>
                                    <input class="form-check-input" type="radio" name="status" value="Received" />
                                    <label class="form-check-label" for="status">Recieved</label></br>
                                    <input class="form-check-input" type="radio" name="status" value="Pending"
                                        checked />
                                    <label class="form-check-label" for="status">Pending</label>
                                </div>
                                <div class="col">
                                    <label for="">PWD</label> <br>
                                    <input class="form-check-input" type="radio" name="pwd" value="Yes" />
                                    <label class="form-check-label" for="pwd">Yes</label></br>
                                    <input class="form-check-input" type="radio" name="pwd" value="No" checked />
                                    <label class="form-check-label" for="pwd">No</label>
                                </div>
                                <!-- Pension $$$ -->
                                <div class="row mb-2 w-75">
                                    <div class="col">
                                        <label class="form-label required">Pension</label>
                                        <input type="number" name="pension" class="form-control">
                                    </div>
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
        <div class="modal fade" id="updateModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form action="#" method="post" id="updateForm">
                        <div class="modal-body" id="infoUpdate">
                            <!-- Form -->
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="submit" name="submit" id="update_record"
                                class="btn btn-primary">Update</button>
                            <input type="button" id="delete_row" class="btn btn-danger" id="delete" value="Remove"
                                data-bs-dismiss="modal">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <!-- Table start -->
            <div class="table-div m-2 p-2 card">
                <table id="" class="display table table-striped">
                    <thead>
                        <tr>
                            <th scope="col" class="d-none d-sm-table-cell">ID</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">First Name</th>
                            <th scope="col" class="d-none d-sm-table-cell">Initial</th>
                            <th scope="col" class="d-none d-sm-table-cell">Contact</th>
                            <th scope="col" class="d-none d-sm-table-cell">Birthdate</th>
                            <th scope="col" class="d-none d-sm-table-cell">Sex</th>
                            <th scope="col" class="d-none d-sm-table-cell">Barangay</th>
                            <th scope="col" class="d-none d-sm-table-cell">Age</th>
                            <th scope="col" class="noExl">Pwd</th>
                            <th scope="col" class="d-none d-sm-table-cell">Started date</th>
                            <th scope="col" class="d-none d-sm-table-cell">Removed date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Display all active records in the table -->
                        <?php foreach($removed  as $row) :  ?>
                        <tr>
                            <td id="sid" class="d-none d-sm-table-cell"> <?php echo $row['uid']; ?> </td>
                            <td> <?php echo $row['fx_lastname']; ?> </td>
                            <td> <?php echo $row['fx_firstname']; ?> </td>
                            <td class="d-none d-sm-table-cell"> <?php echo $row['fx_middlename']; ?> </td>
                            <td class="d-none d-sm-table-cell"> <?php echo $row['fx_contact']; ?> </td>
                            <td class="d-none d-sm-table-cell"><?php  echo dt_format($row['fd_birthdate']);?></td>
                            <td class="d-none d-sm-table-cell"> <?php echo $row['fx_gender']; ?> </td>
                            <td class="d-none d-sm-table-cell"> <?php echo $row['fx_barangay'];?></td>
                            <td class="d-none d-sm-table-cell"> <?php echo $row['fn_age']; ?> </td>
                            <td class="noExl"> <?php echo $row['fx_pwd']; ?></button> </td>
                            <td class="d-none d-sm-table-cell"> <?php echo dt_format($row['fd_started']); ?> </td>
                            <td class="d-none d-sm-table-cell"> <?php echo dt_format($row['fd_remarks']); ?> </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- end table 1 -->
        </div>
    </div>

    <script>
    // Export to active excel
    $(document).on('click', '#export', function() {
        var name = "iOSCA"
        var date = new Date();
        var current_year = date.getFullYear();
        var current_month = date.getMonth();
        var filename = name + current_month + current_year;
        $(".display").table2excel({
            exclude: ".noExl", // exclude CSS class
            name: "Worksheet Name",
            filename: filename, //do not include extension
            fileext: ".xls" // file extension
        });
        $.ajax({
            type: "POST",
            url: "function/export.php",
            data: {
                export: 'export'
            },
            success: function(data) {
                // do the message display code
            }
        });
    });
    </script>
    <!-- Data table with date range -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
    <script src="https://cdn.datatables.net/datetime/1.2.0/js/dataTables.dateTime.min.js"></script>

    <!-- Bootstrap / js-->
    <script src="lib/sweetalert.min.js"></script>
    <script src="lib/records.js"></script>
    <script src="lib/app.js"></script>

    <!-- script for table to excel -->
    <script src="lib/jquery.table2excel.js"></script>

</body>

</html>
<?php
}else{
    header("Location: index");
    exit();
}
?>
<?php include('conn/script.php');?>