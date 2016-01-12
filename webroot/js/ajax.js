$(document).ready(function(){
    //alert("chegou");
    
    
    $("#btn_buscar_estoques").click(function () {
        $("#msg").html("Aguarde");
        $( "#barra" ).removeClass( "hidden" );
        
        
        
        
        $.get("/estoques/ajaxMsg", { name: $("#txt_descricao").val()}, function (data) {
            $("#msg").html(data);
            $("#corpo_tabela").html(data);
            
            $( "#barra" ).addClass( "hidden" );
        });
    });
    
    
    
});
