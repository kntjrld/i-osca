
// Username checker
$(document).ready(function () {
    $('#username').on('blur', function () {
        var user_name = $(this).val().trim();
        if (user_name != '') {
            $.ajax({
                url: 'conn/username_checker.php',
                type: 'post',
                data: {
                    user_name: user_name
                },
                success: function (response) {
                    $('#uname_result').html(response);
                }
            });
        } else {
            $("#uname_result").html("");
        }
    });
});

// id checker
$(document).ready(function () {
    $('#sID').on('blur', function () {
        var sID = $(this).val().trim();
        if (sID != '') {
            $.ajax({
                url: 'conn/checker.php',
                type: 'post',   
                data: {
                    sID: sID
                },
                success: function (response) {
                    // $('#sID').val('');
                    $('#id_result').html(response);
                }
            });
        }else{
            $("#id_result").html("");
        }
    });
});