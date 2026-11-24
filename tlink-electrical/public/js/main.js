$(document).ready(function () {

    // Header Fixed on Scroll
    $(window).on("load resize scroll", function () {
        var sticky = $(".header"),
            scroll = $(window).scrollTop();

        if (scroll >= 150) sticky.addClass("fixed-header");
        else sticky.removeClass("fixed-header");
    });

    // for banner
    $('.slider').slick({
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: "<span class='slick-arrow left'><i class='fa-solid fa-chevron-left'></i></slick>",
        nextArrow: "<span class='slick-arrow right'><i class='fa-solid fa-chevron-right'></i></slick>",
        speed: 1000,
        fade: true,
        cssEase: 'linear',
        autoplayspeed: 3000,
        autoplay: false,
        adaptiveHeight: true,
        responsive: [{
            breakpoint: 480,
            settings: {
                dots: true,
                arrows: false,

            }
        }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    // 
    $('#icon1').click(function () {
        $('.paragraph1').toggle('slow', function () {

        });
    });
    $('#icon2').click(function () {
        $('.paragraph2').toggle('slow', function () {

        });
    });
    $('#icon3').click(function () {
        $('.paragraph3').toggle('slow', function () {

        });
    });

    // for testimonial
    $('.testi-wrapper .testi-slider').slick({
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        speed: 1000,
        autoplayspeed: 3000,
        autoplay: true,

    });




    //Gallery Section magnific-popup

    $('.gallery .gallery-wrapper').magnificPopup({
        delegate: 'a',
        type: 'image',
        mainClass: 'mfp-with-zoom mfp-img-mobile',
        gallery: {
            enabled: true
        },
        zoom: {
            enabled: true,
            duration: 300,
        }

    });


    // for checkbox multiple selection value send to the mail
    $(function () {
        $('input').on('click', function () {
            var values = [];
            $('input:checked').each(function () {
                values.push($(this).parent().text());
            });
            $('[name="Project"]').attr({ value: values.join(', ') });
        });
    });
    // ends here

});