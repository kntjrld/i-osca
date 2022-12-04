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
?>
<?php
}else if(isset($_SESSION['updated']) && $_SESSION['updated'] !=''){
?>
<script>
swal({
    title: "Success!",
    text: "Record Updated Successfully!",
    icon: "success",
    button: "Ok",
});
</script>
<?php
  unset($_SESSION['updated']);
  ?>
<?php
}else if(isset($_SESSION['profile']) && $_SESSION['profile'] !=''){
  ?>
<script>
swal({
    title: "Success!",
    text: "Profile Updated Successfully!",
    icon: "success",
    button: "Ok",
});
</script>
<?php
  unset($_SESSION['profile']);
  ?>
<?php
}else if(isset($_SESSION['changed']) && $_SESSION['changed'] !=''){
  ?>
<script>
swal({
    title: "Success!",
    text: "Password Changed Successfully!",
    icon: "success",
    button: "Ok",
});
</script>
<?php
  unset($_SESSION['changed']);
}elseif(isset($_SESSION['xxx']) && $_SESSION['xxx'] !=''){
?>
<script>
swal("Oops", "Something went wrong! Double check old password and new password", "error");
</script>
<?php
  unset($_SESSION['xxx']);
}
?>