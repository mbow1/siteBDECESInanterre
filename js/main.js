$(document).ready(function() {
    $("#FormulDinscription").fadeTo("slow",0);

    $("#inscription").click(function(){

        if( $("#conect").is( ":hidden" ) ){
             $("#conect").slideDown('slow');
             $("#FormulDinscription").fadeTo("slow",0);
            exit(0);
        }

           if( $("#conect").not( ":hidden" ) )  {
             $("#conect").slideUp('slow');
             $("#FormulDinscription").fadeIn('slow',1);
             $("#FormulDinscription").fadeTo("slow",1);

            }
    });





});
 /*$("#btnAjout1").click(function(){
        var id = $("#btnAjout1").attr('id');
        var cod = "<li>"+id+"</li>";
        $("#panier").append(cod);

});*/

function addprod(prix){
        var cod = '<li style="font-size: 17px;"> un produit a '+prix+' €</li>';
     $("#panier").append(cod);
}
