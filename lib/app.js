// login-signup 
const container = document.querySelector(".container"),
    pwdShowhide = document.querySelectorAll(".showHidePw"),
    pwFields = document.querySelectorAll(".password"),
    login = document.querySelector(".login-link"),
    signup = document.querySelector(".signup-link");


//login-signup
pwdShowhide.forEach(eyeIcon => {
    eyeIcon.addEventListener("click", () => {
        pwFields.forEach(pwFields => {
            if (pwFields.type === "password") {
                pwFields.type = "text";

                pwdShowhide.forEach(icon => {
                    icon.classList.replace("fa-eye-slash", "fa-eye")
                })
            } else {
                pwFields.type = "password";
                pwdShowhide.forEach(icon => {
                    icon.classList.replace("fa-eye", "fa-eye-slash")
                })
            }
        })
    })
})

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



