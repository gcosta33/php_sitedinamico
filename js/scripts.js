$(function(){
    $('nav.mobile').click(async function(){
        var listamenu = $('nav.mobile ul');
        // Mostrar atraves de fade
        // if(listamenu.is(':hidden'))
        //     listamenu.fadeIn();
        // else
        //     listamenu.fadeOut();

        // Abrir ou fechar menu
        var icone = $('.botao-menu-mobile').find('i');
        if(listamenu.is(':hidden')){
            icone.removeClass('fas fa-bars');
            icone.addClass('fas fa-times');
            listamenu.slideToggle();
        }
        else{
            icone.removeClass('fas fa-times');   
            icone.addClass('fas fa-bars');
            listamenu.slideToggle();
        }

    } )
})