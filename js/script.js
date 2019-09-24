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
    });


    // Filter Portfolio Items
    $('.filter-section .filter-container .filter').on('click tap', function() {
        var filterVal = $(this).text();
        $(this).siblings().removeClass('selected');
        $('.item-wrapper').hide();
        $('div.filter-container .filter').each(function() {
            $('.item-wrapper[data-type*="'+filterVal+'"]').show();
        });
        if($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        } else {
            $(this).addClass('selected');
        }
        // IF ALL show all
        if($(this).text() === "All Photo's") {
            $('.item-wrapper').show();
        }
    });
    $('.item-wrapper').on('click tap', function() {
        var modal = $('#modal');
        var img = $(this).find('#theImage');
        var modalImg = $('#img');
        var imgSrc = img.attr('src');

        modal.css('display', 'block');
        modalImg.attr("src", imgSrc);
    });

    var span = $('.close');

    span.on('click tap', function() {
        var modal = $('#modal');

        modal.css('display', 'none');
    });

    /*
    * FORM SUBMISSION
    */

    var current_site_url = 'locahost:3000/thestudio';
    var current_wp_path = current_site_url+'/wp-contents/themes/thestudiomaldon';
    $('section.contact-grid form button[type=submit').bind('click tap', function(event){
        var error = 0;
        event.preventDefault();
        //FirstName
        if($('section.contact-grid form input[name="fname"]').val()!=='') {
            $('section.contact-container form input[name="fname"]').removeClass('error');
        } else {
            error=parseInt(error+1);
            $('section.contact-container form input[name="fname"]').addClass('error');
        }//end if

        //LastName
        if($('section.contact-grid form input[name="lname"]').val()!=='') {
            $('section.contact-grid form input[name="lname"]').removeClass('error');
        } else {
            error=parseInt(error+1);
            $('section.contact-grid form input[name="lname"').addClass('error');
        }//end if

        //Phone
        if($('section.contact-grid form input[name="phone"').val()!=='') {
            $('section.contact-grid form input[name="phone"]').removeClass('error');
        } else {
            error=parseInt(error+1);
            $('section.contact-grid form input[name="phone"]').addClass('error');
        }//end if

        //Email
        if($('section.form-container form input[name="email"]').val()!=='' && $('section.form-container form input[name="email"]').val().indexOf('@') > -1 && $('section.form-container form input[name="email"]').val().slice(-1)!=="@") {
            $('section.form-container form input[name="email"]').removeClass('error');
        } else {
            error=parseInt(error+1);
            $('section.form-container form input[name="email"]').addClass('error');
        }//end if

        //Message
        if($('section.form-container form textarea[name="message"]').val()!=='') {
            $('section.form-container form textarea[name="message"]').removeClass('error');
        } else {
            $('section.form-container form textarea[name="message"]').addClass('error');
        }//end if

        // noCaptcha reCaptcha validation
        // if(global_form_val===0) {
        //     error = parseInt(error+1);
        // }//endif

        if(error===0) {
            //Success Ribbon
            if($('#ribbon').css('display')==="none" && $('#ribbon')/Notification('.success')) {
                $('#ribbon').stop().text('Success').removeClass('error success').addClass('success').fadeIn().delay(1000).fadeOut(2000);
            }//end if

            //SubmitForm
            var data = $('#form').serialize();
            $.ajax({
                type: "POST",
                url: current_wp_path+"/submit.php",
                contentType: 'application/x-www-form-urlencoded',
                processData: false,
                data: data,
                success: function(data){
                    console.log('success');
                    console.log(data);
                }
            });

            //Reset Fields
            $('#form input[type=text], #form input[type=email], #form input[type=phone], #form textarea').val('');
        } else {
            // Fail Ribbon
            if($('#ribbon').css('display')==="none" && $('#ribbon').not('.error')) {
                $('#ribbon').text('Please check and try again.').removeClass('error success').addClass('error').stop().fadeIn().delay(1000).fadeOut(2000);
            }//endif
        }//endif
        return false;
    });
});
