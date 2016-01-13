/* 
 * /js/Estoques/index.js
 */

$(document).ready(function(){
   // alert("chegou estoques index");
    
    
    $("#btn_buscar_estoques").click(function () {        
        $( "#barra" ).removeClass( "hidden" );        
        $.get("/estoques/grid", { param_descricao: $("#txt_descricao").val()}, function (data) {            
            $("#corpo_tabela").html(data);
            
            $( "#barra" ).addClass( "hidden" );
        });
    });
    
    //Reload the browser to clean the selection search
    $("#btn_limpar").click(function () {        
            //Reload the browser to clean the selection search
       location.reload();

    });

    
});
