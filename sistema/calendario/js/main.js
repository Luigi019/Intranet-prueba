var api = 'AIzaSyCeSzprwFmU0SsAIf36sT9h0NLvf3ReD_4';
$ (function(){
    //lettering

    $('.nombre-sitio').lettering();

  
    //Animaciones para los numeros
    var resumenLista = jQuery('.resumen-evento');
    if(resumenLista.length > 0 ) {
        $('.resumen-evento').waypoint(function(){
             $('.resumen-evento li:nth-child(1) p').animateNumber ({number:6}, 1500);
            $('.resumen-evento li:nth-child(2) p').animateNumber ({number:16}, 3000);
            $('.resumen-evento li:nth-child(3) p').animateNumber ({number:4}, 1500);
            $('.resumen-evento li:nth-child(4) p').animateNumber ({number:9}, 1500);
        }, {
            offset:'60%'
        }); }
        //colorbox
        $('.invitado-info') .colorbox ({ inline:true, width:"50%"});
});
