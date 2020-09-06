$(window).scroll(function(){
    if ($(this).scrollTop() > 120) {
        $('.secondheader').show("fast");
    }
    else if ($(this).scrollTop() < 200) {
        $('.secondheader').hide("fast");
    }
})

function ToggleSearch(){
    $('.adv_search').toggle();
};

$(window).scroll(function(){
    if( $(this).scrollTop() > 160 && $(this).width() > 650) {
        $('.parts_categories').css('position','fixed');
    }
    else if ($(this).scrollTop() < 240) {
        $('.parts_categories').css('position','inherit');
    }
})



function scrollToTop(){
    $('html, body').animate({scrollTop:0}, 'slow');
};

$('.navigation-toggle').on('click', function () {
    $('.navigation').toggleClass('active');
});
