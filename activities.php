<?php 
session_start();
include('conn/connection.php');

$records = $conn->query("SELECT * FROM tbl_activities ORDER BY `tbl_activities`.`id` ASC");

if (isset($_SESSION['user_id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Activities</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/g_style.css">
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- DATA TABLE CSS -->
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
                    <i class="fas fa-tasks"></i>
                    <span class="nav-item">Reports</span>
                </a></li>
            <li><a href="status" id="nav-list">
                    <i class="fas fa-check-to-slot"></i>
                    <span class="nav-item">Pension Status</span>
                </a></li>
            <li><a href="#" class="active" id="nav-list">
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
                        Activities
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
        <div class="d-flex">
            <div class="p-2 ms-auto">
                <button type="submit" name="delete" id="delete" value="Truncate Table"
                    class="btn btn-danger justify-content-end"><span><i class="fa-solid fa-trash"></i></span> Delete
                    activities</button>
            </div>
        </div>
        <div class="container p-2">
            <table class="table" id="datatable">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">Date</th>
                        <th class="text-center" scope="col">User</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Display all records in the table -->
                    <?php foreach($records as $row) :  ?>
                    <tr>
                        <td class="text-center"> <?php echo $row['fd_date']; ?> </td>
                        <td class="text-center"> <?php echo $row['fx_user']; ?> </td>
                        <td class="text-center"
                            <?php if(preg_match('/Added/',$row['fx_action'])) echo 'style="color:green;"'; ?>
                            <?php if(preg_match('/Updated/',$row['fx_action'])) echo 'style="color:green;"'; ?>
                            <?php if(preg_match('/Accepted/',$row['fx_action'])) echo 'style="color:green;"'; ?>
                            <?php if(preg_match('/Deleted/',$row['fx_action'])) echo 'style="color:red;"'; ?>
                            <?php if(preg_match('/Removed/',$row['fx_action'])) echo 'style="color:red;"'; ?>
                            <?php if(preg_match('/Rejected/',$row['fx_action'])) echo 'style="color:red;"'; ?>
                            <?php if(preg_match('/Attempted/',$row['fx_action'])) echo 'style="color:red;"'; ?>>
                            <?php echo $row['fx_action']; ?> </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="lib/sweetalert.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#datatable').DataTable();
    });
    </script>
    <script>
    $("#delete").click(function() {
        swal({
                title: "Are you sure?",
                text: "You're trying to delete all activities",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal("Activities is successfully deleted!", {
                        icon: "success",
                    });
                    $.ajax({
                        type: "POST",
                        url: "function/truncate.php",
                        data: {
                            delete: 'delete'
                        },
                        success: function(data) {
                            setInterval(function() {
                                location.reload();
                            }, 900);
                        }
                    });
                } else {
                    //   swal("Your file is safe!");
                }
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