<!-- Rejected -->
<?php
    if(isset($_SESSION['rejected']) && $_SESSION['rejected'] !=''){
    ?>
<script>
swal("Rejected!", "Application rejected!", "success");
</script>
<?php
    unset($_SESSION['rejected']);
}?>
<!-- Accepted -->
<?php
    if(isset($_SESSION['accepted']) && $_SESSION['accepted'] !=''){
    ?>
<script>
swal("Accepted!", "Application accepted!", "success");
</script>
<?php
    unset($_SESSION['accepted']);
}?>
<!-- Exist -->
<?php
    if(isset($_SESSION['exist']) && $_SESSION['exist'] !=''){
    ?>
<script>
swal("Account is limited!", {
    icon: "error",
});
</script>
<?php
    unset($_SESSION['exist']);
}?>
<!-- Pension error -->
<?php
    if(isset($_SESSION['pension_error']) && $_SESSION['pension_error'] !=''){
    ?>
<script>
swal("Invalid pension value!", {
    icon: "error",
});
</script>
<?php
    unset($_SESSION['pension_error']);
}?>
<!-- Status error -->
<?php
    if(isset($_SESSION['status_error']) && $_SESSION['status_error'] !=''){
    ?>
<script>
swal("Check pension status!", {
    icon: "error",
});
</script>
<?php
    unset($_SESSION['status_error']);
}?>
<!-- Update pension -->
<?php
    if(isset($_SESSION['penstionupdate']) && $_SESSION['penstionupdate'] !=''){
    ?>
<script>
swal({
    title: "Success!",
    text: "Pension Updated Successfully!",
    icon: "success",
    button: "Ok",
});
</script>
<?php
    unset($_SESSION['penstionupdate']);
}
?>
<!-- Update Status error -->
<?php
    if(isset($_SESSION['unsuccessp']) && $_SESSION['unsuccessp'] !=''){
    ?>
<script>
swal("Something went wrong!", {
    icon: "error",
});
</script>
<?php
    unset($_SESSION['unsuccessp']);
}?>
<!-- Success Update status -->
<?php
    if(isset($_SESSION['successp']) && $_SESSION['successp'] !=''){
    ?>
<script>
swal({
    title: "Success!",
    text: "Updated Successfully!",
    icon: "success",
    button: "Ok",
});
</script>
<?php
    unset($_SESSION['successp']);
}
?>