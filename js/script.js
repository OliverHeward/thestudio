jQuery(document).ready(function($) {
    $('div.hero-slide').slick({
        slide: '.slide',
        infinite: true,
        dots: true,
        adaptiveHeight: true,
        lazyLoad: 'ondemand',
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
    })
    $('div.portfolio-slider').slick({
        slide: '.portfolio-slide',
        infinite: true,
        dots: false,
        adaptiveHeight: true,
        lazyLoad: 'ondemand',
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
    })
})
jQuery(document).ready(function($) {

    var mobile = $('.mobile-menu');
    $('.close-menu').on('click tap', function(){
        if($(mobile).hasClass('open')) {
            $(mobile).slideUp('fast');
        } else {
        }
    });

    $('.ham-menu').on('click tap', function() {
        if(!($(mobile).hasClass('open'))) {
            $(mobile).slideDown('fast');
            $(mobile).addClass('open');
        } else {
            $(mobile).slideDown('fast');
            $(mobile).addClass('open');
        }
    });

    var nav = $('.site-header');
    $(window).scroll(function(){
        if($(window).innerWidth() >= 1024) {
            nav.toggleClass('scrolled', $(this).scrollTop() > 450);
        } else {
            // do nothing
        }
    })
});
