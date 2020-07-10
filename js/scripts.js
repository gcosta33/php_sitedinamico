$(function(){
    $('nav.mobile').click(async function(){
        var listamenu = $('nav.mobile ul');
        if(listamenu.is(':hidden'))
            listamenu.fadeIn();
        else
            listamenu.fadeOut();
    } )
})