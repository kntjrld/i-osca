$(document).ready(function(){
    $("#bselect").on('change', function(){
        var value = $(this).val();
        
        $.ajax({
            url:"function/fetch.php",
            type:"POST",
            data:'request=' + value,
            beforeSend:function(){
                $("#container").html("<span>Working...</span>");
            },
            success:function(data){
                $("#container").html(data);
            }
        });
    });
});