// VIEW AS STAFF MODAL
$(document).ready(function() {
    $('.viewasstaff').click(function() {
        s_id = $(this).attr('id');
        // alert(s_id);
        $.ajax({
            type: "POST",
            url: "function/view_application.php",
            data: {
                s_id: s_id
            },
            success: function(data) {
                $("#infoUpdate").html(data);
                $("#staticBackdrop").modal('show');
            }
        });
    });
});
// VIEW AS ADMIN MODAL
$(document).ready(function() {
    $('.viewasadmin').click(function() {
        s_id = $(this).attr('id');
        // alert(s_id);
        $.ajax({
            type: "POST",
            url: "function/filtered_application.php",
            data: {
                s_id: s_id
            },
            success: function(data) {
                $("#infoUpdate").html(data);
                $("#staticBackdrop").modal('show');
            }
        });
    });
});

// REJECTED APPLICAION
$(document).on('click', '.btn-danger', function() {
    reject = $(this).attr('id');
    // alert(reject);
    $.ajax({
        type: "POST",
        url: "function/accept.php",
        data: {
            reject: reject
        },
        success: function(data) {
            swal("Rejected!", "Application rejected!", "success");
            setInterval(function() {
                location.reload();
            }, 900);

        }
    });
});

// ACCEPTED APPLICATION
$(document).on('click', '.btn-primary', function() {
    accept = $(this).attr('id'); 
    // alert(accept);
    $.ajax({
        type: "POST",
        url: "function/accept.php",
        data: {
            accept: accept
        },
        success: function(data) {
            alert(data);
            swal("Accepted!", "Application accepted!", "success");
            setInterval(function() {
                location.reload();
            }, 900);
        }
    });

});


$(document).on('click', '.btn-add', function() {
    add = $(this).attr('id');
    alert(add);
});
$(document).on('click', '.btn-reject', function() {
    reject = $(this).attr('id');
    alert(reject);
});

