<?php 
session_start();
include('conn/connection.php');
include('function/reports_query.php');
include('function/indicator.php');

if (isset($_SESSION['user_id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pending Application</title>
    <link rel="shortcut icon" type="image/x-icon" href="media/logo.png">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- DATA TABLE CSS -->
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="css/g_style.css">
    <link rel="stylesheet" type="text/css" href="css/reports.css">
    <!-- DATA TABLE JS -->
    <script src="lib/jquery.dataTables.min.js"></script>
    <script src="lib/dataTables.bootstrap5.min.js"></script>
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
            <li><a href="#" class="active" id=" nav-list">
                    <span class="indicator"
                        style="<?php if($count == '0'){echo 'display:none;';}?>"><?php echo $count;?></span>
                    <i class="fas fa-tasks"></i>
                    <span class="nav-item">Pending Application</span>
                </a></li>
            <li <?php if($_SESSION['user_level']=="staff") echo 'style="display:none;"'; ?>><a href="status"
                    id="nav-list">
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
                        Pending Application
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
        <div class="card m-2 p-2">
            <p class="mb-auto" style="font-size: 12px;"><?php echo $header ?> </p>
        </div>
        <!-- Table start -->
        <div class="table-div m-2 p-2 card d-flex" id="container">
            <table id="datatable" class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Date application</th>
                        <th scope="col" class="d-none d-sm-table-cell">Presented ID</th>
                        <th scope="col">Last Name</th>
                        <th scope="col" class="d-none d-sm-table-cell">First Name</th>
                        <th scope="col" class="d-none d-sm-table-cell">Middle</th>
                        <th scope="col" class="d-none d-sm-table-cell">Birthday</th>
                        <th scope="col" class="d-none d-sm-table-cell">Gender</th>
                        <th scope="col" class="d-none d-sm-table-cell">Barangay</th>
                        <th scope="col" class="d-none d-sm-table-cell">Contact</th>
                        <th scope="col" class="noExl">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Display all records in the table -->
                    <?php foreach($records as $row) :  ?>
                    <tr>
                        <td id="sid"> <?php echo $row['fd_application']; ?> </td>
                        <td class="d-none d-sm-table-cell"> <?php echo $row['fx_idpresented']; ?> </td>
                        <td> <?php echo $row['fx_lastname']; ?> </td>
                        <td class="d-none d-sm-table-cell"> <?php echo $row['fx_firstname']; ?> </td>
                        <td class="d-none d-sm-table-cell"> <?php echo $row['fx_initial']; ?> </td>
                        <td class="d-none d-sm-table-cell"> <?php echo $row['fd_birthdate']; ?> </td>
                        <td class="d-none d-sm-table-cell"> <?php echo $row['fx_gender']; ?> </td>
                        <td class="d-none d-sm-table-cell"> <?php echo $row['fx_barangay']; ?> </td>
                        <td class="d-none d-sm-table-cell"> <?php echo $row['fx_contact']; ?> </td>
                        <td class="d-flex">
                            <button id='<?php echo $row['uid']; ?>' class="
                            <?php if($_SESSION['user_level'] == 'staff'){
                            echo 'viewasstaff btn btn-secondary noExl';
                            }else{
                             echo 'viewasadmin btn btn-secondary noExl';  
                            }?>" style="width: auto; font-size:13px;" data-bs-toggle="modal" data-bs-target="<?php if($_SESSION['user_level'] == 'staff'){
                                echo '#staticBackdrop';
                            }else{
                                echo '#adminmodal';
                            }?>"><i class="fa-solid fa-check-to-slot"></i></button>
                            <button type="checkinfo" id='<?php echo $row['uid']; ?>' class="checkinfo btn noExl"
                                style="width: auto; font-size:13px;" data-bs-toggle="modal" data-bs-target="#mdfid"><i
                                    class="fa-solid fa-receipt"></i></button>

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
            <form id="updatestatus" method="post">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-body" id="infoUpdate">
                            <!-- insert here -->
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
    <!-- end -->
    <!-- modal 2 -->
    <div class="modal fade" id="adminmodal" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="adminmodalLabel" aria-hidden="true">
        <form id="adminstatus" method="post">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body" id="adminview">
                        <!-- insert here -->
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
    </div>
    <!-- modal 2 end -->
    <!-- MDF -->
    <!-- Modal -->
    <div class="modal fade" id="mdfid" tabindex="-1" role="dialog" aria-labelledby="mdftitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mdftitle">Members Data</h5>
                    <i class="fa fa-close close" data-bs-dismiss="modal"></i>
                </div>
                <div class="modal-body" id="mdf_body">
                    <!-- mdf body -->
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>
    <!-- end of mdf -->
    </div>
    <script src="lib/sweetalert.min.js"></script>
    <script src="lib/reports.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    // DATATABLE record
    $(document).ready(function() {
        $('#datatable').DataTable();
    });

    $(document).ready(function() {
        $('.checkinfo').click(function() {
            uid = $(this).attr('id');
            // alert(s_id);
            $.ajax({
                type: "POST",
                url: "function/mdf.php",
                data: {
                    uid: uid
                },
                success: function(data) {
                    $("#mdf_body").html(data);
                    $('#mdfid').modal('show');
                }
            });
        });
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
<?php include('lib/scriptalert.php'); ?>