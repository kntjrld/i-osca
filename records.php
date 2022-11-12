<?php
session_start();
if (isset($_SESSION['user_id']) && isset($_SESSION['user_name'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Records</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/g_style.css">
        <link rel="stylesheet" type="text/css" href="css/records_style.css">
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
            <div class="container-fluid p-3">
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
                            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                            <span class="input-group-text border-0" id="search-addon">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>
                    </div>

                    <div class="div-2.1 col-sm">
                        <select class="form-select" style="width: auto;">
                                <option>All</option>
                                <option>Payompon</option>
                                <option>Barangay 2</option>
                                <option>Barangay 3</option>
                                <option>Barangay 4</option>
                                <option>Barangay 5</option>
                                <option>Barangay 6</option>
                                <option>Barangay 7</option>
                                <option>Barangay 9</option>
                                <option>Barangay 8</option>
                        </select>
                    </div>
                    <div class="div-3 col-sm">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Add Record</button>
                    </div>
                </div>
            </div>
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
                                <input type="text" name="fistname" class="form-control" placeholder="Juan" aria-label="First name">
                            </div>
                            <div class="col">
                                <label class="form-label required">Last Name</label>
                                <input type="text" name="lastname" class="form-control" placeholder="Dela cruz" aria-label="Last name">
                            </div>
                        </div>
                            <!-- Contacts  -->
                        <div class="mb-3">
                                <label class="form-label required">Contact(number or email)</label>
                                <input type="text" name="contact" class="form-control">
                        </div>
                            <!-- Date of birth -->
                        <div class="mb-3">
                                <label class="form-label required">Birthdate</label>
                                <input type="date" name="birthdate" class="form-control">
                        </div>
                            <!-- Brgy, age and status -->
                        <div class="row">
                            <div class="col">
                            <label class="form-label required">Barangay</label>
                            <select class="form-select" name="barangay" style="width: auto;">
                                <option>Payompon</option>
                                <option>Barangay 2</option>
                                <option>Barangay 3</option>
                                <option>Barangay 4</option>
                                <option>Barangay 5</option>
                                <option>Barangay 6</option>
                                <option>Barangay 7</option>
                                <option>Barangay 9</option>
                                <option>Barangay 8</option>
                             </select>
                            </div>
                            <div class="col">
                                <label class="form-label required">Age</label>
                                <input type="number" name="age" class="form-control" placeholder="59-above" aria-label="Age">
                            </div>
                            <div class="col">
                            <div class="form-group mb-3">
                                <label for="">Pension Status</label> <br>
                                <input class="form-check-input" type="radio" name="status" value="Yes" />
                                <label class="form-check-label" for="status">Yes</label></br>
                                <input class="form-check-input" type="radio" name="status" value="No" checked/>
                                <label class="form-check-label" for="status">No</label>
                            </div>
                            </div>
                        </div>
                                 <!-- Modal button -->
                    <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        <input type="button" class="btn btn-danger" value="Cancel" data-bs-dismiss="modal">
                    </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Table start -->
            
                <div class="table-div t-1">
                    <?php
                    $conn = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($conn, 'iosca');

                    $query = "SELECT * FROM tbl_records";   
                    $query_run = mysqli_query($conn, $query);
                    ?>
                    <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Senior ID</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Birthdate</th>
                                    <th scope="col">Barangay</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Status</th>

                                </tr>
                            </thead>
                            <?php
                    if($query_run)
                    {
                    foreach($query_run as $row)
                    {
                    ?>
                        <tbody>
                            <tr>
                                <td> <?php echo $row['fx_id']; ?> </td>
                                <td> <?php echo $row['fx_firstname']; ?> </td>
                                <td> <?php echo $row['fx_lastname']; ?> </td>
                                <td> <?php echo $row['fx_contact']; ?> </td>
                                <td> <?php echo $row['fd_birthdate']; ?> </td>
                                <td> <?php echo $row['fx_barangay']; ?> </td>
                                <td> <?php echo $row['fn_age']; ?> </td>
                                <td> <?php echo $row['fn_status']; ?> </td>
                                </tr>
                            </tbody>
                            <?php           
                    }
                    }else{
                    echo "No Record Found";
                    }
                    ?>
                     </table>    
        </div>
                <!-- start -->
                
                <!-- end -->
    </div>    
                <!-- Bootstrap / js-->
                <script src="lib/records.js"></script>
                <script src="lib/sweetalert.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </body>
    </html>
<?php
} else {
    header("Location: index.php");
    exit();
}
?>