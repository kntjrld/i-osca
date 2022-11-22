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