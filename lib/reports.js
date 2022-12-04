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
                $("#adminview").html(data);
                $("#adminmodal").modal('show');
            }
        });
    });
});

// REJECT APPLICATION BY CLUSTER
$(document).on('click', '.btn-danger', function() {
    $.ajax({
        type: "POST",
        url: "function/rejectedbycluster.php",
        data: $("#updatestatus").serialize(),
        success: function(data) {
            setInterval(function() {
                location.reload();
            }, 900);

        }
    });
});

// ACCEPT APPLICATION BY CLUSTER
$(document).on('click', '.btn-primary', function() {
    $.ajax({
        type: "POST",
        url: "function/acceptbycluster.php",
        data: $("#updatestatus").serialize(),
        success: function(data) {
            // alert(data);
            setInterval(function() {
                location.reload();
            }, 900);
        }
    });

});


// ACCEPT APPLICATION BY ADMIN
$(document).on('click', '.btn-add', function() {
    $.ajax({
        type: "POST",
        url: "function/acceptbyadmin.php",
        data: $("#adminstatus").serialize(),
        success: function(data) {
            // alert(data);
            setInterval(function() {
                location.reload();
            }, 900);
        }
    });
});

// REJECT APPLICATION BY ADMIN
$(document).on('click', '.btn-reject', function() {
    $.ajax({
        type: "POST",
        url: "function/rejectedbyadmin.php",
        data: $("#adminstatus").serialize(),
        success: function(data) {
            // alert(data);
            setInterval(function() {
                location.reload();
            }, 900);
        }
    });
});
