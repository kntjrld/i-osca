$('#form').on('submit', function(e) {
    e.preventDefault();
    var form=document.getElementById('form');
    var fdata=new FormData(form); 
    $.ajax({
        type: "POST",
        url: 'conn/registration.php',
        data: fdata,
        contentType: false,
        cache: false,
        processData:false,
        success: function(result){ 
            if(result){
                swal({
                    title: "Success!",
                    text: "Your Register is Successful!",
                    icon: "success",
                    button: "Ok",
                });
                setInterval(function() {
                window.location = "member.php";
                }, 1000);
            }else{
                swal("Oops", "Something went wrong!", "error");
            }
           
        }
    });
});