<?php
    if(isset($_SESSION['success']) && $_SESSION['success'] !=''){
    ?>
    <script>
    swal({
        title: "Success!",
        text: "Record Added Successfully!",
        icon: "success",
        button: "Ok",
      });
    </script>
    <?php
    unset($_SESSION['success']);
}
?>