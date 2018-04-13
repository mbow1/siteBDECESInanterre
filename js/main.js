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
