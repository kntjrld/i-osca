// custom filter

// Remarks show-hide div
$(document).ready(function() {
    $(document).on('click', '#life_status', function () {
        var id = $(this).val();
        // alert(id);
        if(id == 'dead'){
            $('#div-remarks').show();
        }else if(id == 'alive'){
            $('#div-remarks').hide();
        }
    });

    $(document).on('click', '#account_status', function () {
        var id = $(this).val();
        // alert(id);
        if(id == 'inactive'){
            $('#div-remarks').show();
        }else if(id == 'active'){
            $('#div-remarks').hide();
        }
    });
});

// UPDATE SCRIPT -- if not working check the imports at the header page
$(document).on('click', '.view', function () {
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
    swal({
        title: "Are you sure?",
        text: "Once you remove, this action can't be undo!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                swal("Record has been removed!", {
                    icon: "success",
                });
                $.ajax({
                    type: "POST",
                    cache: false,
                    url: "function/remove_row.php",
                    data: $("#updateForm").serialize(),
                    success: function (data){   
                    $("#updateModal").modal('hide');
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


// TABLE SEARCH WITH DATE FILTER

var minDate, maxDate;
// Custom filtering function which will search data in column four between two values
$.fn.dataTable.ext.search.push(
    function(settings, data, dataIndex) {
        var min = minDate.val();
        var max = maxDate.val();
        var date = new Date(data[11]);

        if (
            (min === null && max === null) ||
            (min === null && date <= max) ||
            (min <= date && max === null) ||
            (min <= date && date <= max)
        ) {
            return true;
        }
        return false;
    }
);


$(document).ready(function() {
    // Create date inputs
    minDate = new DateTime($('#min'), {
        format: 'MMMM Do YYYY'
    });
    maxDate = new DateTime($('#max'), {
        format: 'MMMM Do YYYY'
    });

    // DataTables initialisation
    var table = $('table.display').DataTable();

    // Refilter the table
    $('#min, #max').on('change', function() {
        table.draw();
    });
});
$('table.display').dataTable({
    aLengthMenu: [
        [10, 25, 50, 100, -1],
        [10, 25, 50, 100, "All"]
    ],
    iDisplayLength: -1
});
