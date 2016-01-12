$(document).ready(function(){
    //alert("chegou");
    
    
    $("#click").click(function () {
        $("#msg").html("Aguarde");
        $( "#barra" ).removeClass( "hidden" );
        
        $.get("/estoques/ajaxMsg", null, function (data) {
            $("#msg").html(data);
            $( "#barra" ).addClass( "hidden" );
        });
    });
});
