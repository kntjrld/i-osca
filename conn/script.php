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
}
?>
