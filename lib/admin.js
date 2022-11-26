$(document).ready(function() {
        $('.view').click(function() {
            s_id = $(this).attr('id');
            // alert(s_id);
            $.ajax({
                type: "POST",
                url: "function/view_profile.php",
                data: {
                    s_id: s_id
                },
                success: function(data) {
                    $("#infoUpdate").html(data);
                    $("#myModal").modal('show');
                }
            });
        });
    });
    $(document).on('click', '#remove', function() {
        
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this account!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })        

            .then((willDelete) => {
                if (willDelete) {
                    
                    $.ajax({
                        type: "POST",
                        cache: false,
                        url: "function/delete_user.php",
                        data: $("#profileForm").serialize(),
                        success: function(data) {
                            // alert(data);
                            if(data == 1){
                                swal("Account cannot be deleted!", {
                                    icon: "error",
                                });
                            }else{
                                swal("Account has been deleted!", {
                                    icon: "success",
                                });
                                setInterval(function() {
                                    location.reload();
                                     }, 900);
                            }
                        }
                    });
                
                } else {
                    //   swal("Your file is safe!");
                }
            });
    });
    
    $(document).on('click', '#add', function() {
        $("#new").modal('hide');
        setTimeout(function(){
            window.location.reload();
        },800); 
    });

    $(document).ready(function () {
        $('#datatable').DataTable();
    });

    $(document).ready(function() {
        $('.reset').click(function() {
            $("#myModal").modal('hide');
            $("#passwordialog").modal('show');

            $.ajax({
                type: "POST",
                url: "function/reset.php",
                data: $("#profileForm").serialize(),
                success: function(data) {
                    $("#newpass").html(data);
                    $("#passwordialog").modal('show');
                }
            });
        });
    });

