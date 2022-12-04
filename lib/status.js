$(document).ready(function() {
    // code to get all records from table via select box
    $("#status").change(function() {
        var id = $(this).find(":selected").val();
        var dataString = id;

        if(id == 'null'){
        location.reload();
        }else{
        // alert(dataString); 
        $.ajax({
        url: "function/statusquery.php",
        method: 'POST',
        dataType: "json",
        data: {
            s_id: dataString
        },  
        cache: false, 
        success: function(data) {
        $("#id_firstname").val(data.fx_firstname);
        $("#id_lastname").val(data.fx_lastname);
        $("#id_initial").val(data.fx_middlename);
        $("#id_amount").val(data.fn_pension);
        $("#pwd").val(data.fx_pwd);
        $("#life_status").val(data.life_status);
        $("#age").val(data.fn_age);


        if(data.fn_status == 'Received'){
            $("#id_status").val('Received');
        }else{
            $("#id_status").val('Pending');
        }
        let today = new Date().toISOString().slice(0, 10)
        if(data.fd_pension == '0000-00-00'){
            $("#id_date").val(today);
        }else{
            $("#id_date").val(data.fd_pension);

        }
    }
});
        }
        
    })
});