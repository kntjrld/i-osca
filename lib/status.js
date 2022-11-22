$(document).ready(function() {
    // code to get all records from table via select box
    $("#status").change(function() {
        var id = $(this).find(":selected").val();
        var dataString = id;

        if(id == 'null'){
        // $("#id_firstname").val('');
        // $("#id_lastname").val('');
        // $("#id_initial").val('');
        // $("#id_amount").val('');
        // $("#id_status").val('Pending');
        location.reload();
        }else{
        // alert(dataString); 
        $.ajax({
            url: "function/status.php",
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
        
        if(data.fn_status == 'Received'){
            $("#id_status").val('Received');
        }else{
            $("#id_status").val('Pending');
        }
        $("#id_date").val(data.fd_date);

    }
});
        }
        
    })
});