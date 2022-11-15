<?php
include("../conn/connection.php");

if(isset($_POST['request'])){

    $request = $_POST['request'];

    $query = "SELECT * FROM tbl_records WHERE fx_barangay = '$request'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
?>
    <table id="datatable" class="table table-striped table-bordered">

    <?php
    if($count){

    ?>
    <thread>
    <tr>
        <th scope="col">Senior ID</th>
        <th scope="col">First</th>  
        <th scope="col">Last</th>
        <th scope="col">Contact</th>
        <th scope="col">Birthdate</th>
        <th scope="col">Barangay</th>
        <th scope="col">Age</th>
        <th scope="col">Status</th>
        <th scope="col">View</th>
        </tr>
        <?php

    }else{
        ?>
        <th scope="col">Senior ID</th>
        <th scope="col">First</th>  
        <th scope="col">Last</th>
        <th scope="col">Contact</th>
        <th scope="col">Birthdate</th>
        <th scope="col">Barangay</th>
        <th scope="col">Age</th>
        <th scope="col">Status</th>
        <th scope="col">View</th>
        <?php
    }
    ?>
    </thread>

    <tbody>
        <?php
        while($row = mysqli_fetch_assoc($result)){

        ?>
        <tr>
            <td> <?php echo $row['fx_id']; ?> </td>
            <td> <?php echo $row['fx_firstname']; ?> </td>
            <td> <?php echo $row['fx_lastname']; ?> </td>
            <td> <?php echo $row['fx_contact']; ?> </td>
            <td> <?php echo $row['fd_birthdate']; ?> </td>
            <td> <?php echo $row['fx_barangay']; ?> </td>
            <td> <?php echo $row['fn_age']; ?> </td>
            <td> <?php echo $row['fn_status']; ?> </td>
            <td> <a href="#" class="btn btn-primary" style="width: auto;">View</a></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<?php
}