$(document).ready(function() {
    $('#btn-search').click(function() {
        var id = $('#search-input').val();
        // alert(id);
        $.ajax({
            type: "POST",
            url: "function/view_regstatus.php",
            data: {
                uid: id
            },
            success: function(data) {
                $("#infoUpdate").html(data);
            }
        });
    });

    $('#search-pension').click(function() {
        var id = $('#search').val();
        // alert(id);
        $.ajax({
            type: "POST",
            url: "function/view_pstatus.php",
            data: {
                uid: id
            },
            success: function(data) {
                $("#pensionUpdate").html(data);
            }
        });
    });
    
    $("#search-input").keyup(function(event) {
        if (event.keyCode === 13) {
            $("#btn-search").click();            
        }
    });
});
