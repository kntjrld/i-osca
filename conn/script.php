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
<!-- Profile alert if updated -->
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
<!-- Profile alert if no data change -->
<?php
}else if(isset($_SESSION['xprofile']) && $_SESSION['xprofile'] !=''){
  ?>
<script>
swal({
    title: "Failed!",
    text: "No Update",
    icon: "error",
    button: "Ok",
});
</script>
<?php
  unset($_SESSION['xprofile']);
  ?>
<!-- Password changed alert  -->
<?php
}//changed password
else if(isset($_SESSION['changed']) && $_SESSION['changed'] !=''){
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
swal("Something went wrong!", "Your old password is incorrect", "error");
</script>
<?php
  unset($_SESSION['xxx']);
}
?>