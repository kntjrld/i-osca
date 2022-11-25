$(document).ready(function () {
    $("#bselect").on('change', function () {
        var value = $(this).val();

        $.ajax({
            url: "function/fetch.php",
            type: "POST",
            data: 'request=' + value,
            beforeSend: function () {
                $("#container").html("<span>Working...</span>");
            },
            success: function (data) {
                $("#container").html(data);
            }
        });
    });
});
// UPDATE SCRIPT -- if not working check the imports at the header page
// Row to modal
$(document).ready(function () {
    $('.view').click(function () {
        s_id = $(this).attr('id');
        // alert(s_id);
            $.ajax({
            type: "POST",
            url: "function/select_update.php",
            data: { s_id: s_id },
            success: function (data) {
                $("#infoUpdate").html(data);
                $("#updateModal").modal('show');
            }
        });
    });
});

// Update
$(document).on('click', '#update_record', function () {
    $.ajax({
        type: "POST",
        url: "function/save_update.php",
        data: $("#updateForm").serialize(),
        success: function (data) {
            $("#updateModal").modal('hide');
            $('#datatable').DataTable().ajax.reload();
        }
    });
});

// Delete
$(document).on('click', '#delete_row', function () {
    // s_id = $(this).attr('id');
    // alert(s_id);
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                swal("Your file has been deleted!", {
                    icon: "success",
                });
                $.ajax({
                    type: "POST",
                    cache: false,
                    url: "function/delete_row.php",
                    data: $("#updateForm").serialize(),
                    success: function (data){   
                    $("#updateModal").modal('hide');
                     setInterval(function() {
                        location.reload();
                        //  $('#datatable').DataTable().ajax.reload();
                         }, 900);
                    }
                });
            } else {
                //   swal("Your file is safe!");
            }
        });

});
// DATATABLE record
$(document).ready(function () {
    $('#datatable').DataTable();
});

$("#export").click(function() {
    var name = "iOSCA"
    var date = new Date();
    var current_year = date.getFullYear();
    var current_month = date.getMonth();
    var filename = name+current_month+current_year;
    $("#datatable").table2excel({
        exclude: ".noExl", // exclude CSS class
        name: "Worksheet Name",
        filename: filename, //do not include extension
        fileext: ".xls" // file extension
    });
    $.ajax({
        type: "POST",
        url: "function/export.php",
        data: {export:'export'},
        success: function(data) {
     // do the message display code
        }
    });
});