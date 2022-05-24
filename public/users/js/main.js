$(document).ready(function(){
    $('.icon-menu').click(function (){
        $('.nav__mobile__responsive').toggleClass('click-menu');
    })

    $(window).resize(function (){
        if (screen.width >= 1025) {
            $('.nav__mobile__responsive').removeClass('click-menu');
        }
    })
})