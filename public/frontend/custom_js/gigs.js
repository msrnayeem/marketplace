$('.carousel-control-prev, .carousel-control-next').hide();
$('.carousel').hover(function () {
    $(this).find('.carousel-control-prev, .carousel-control-next').fadeIn();
}, function () {
    $(this).find('.carousel-control-prev, .carousel-control-next').fadeOut();
});