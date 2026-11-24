$(document).ready(function () {

    // Header Fixed on Scroll
    $(window).on("load resize scroll", function () {
        var sticky = $(".header"),
            scroll = $(window).scrollTop();

        if (scroll >= 150) sticky.addClass("fixed-header");
        else sticky.removeClass("fixed-header");
    });

    /* Scroll Event (Go to Top on Click) */
    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            $(".scrollToTop")
                .fadeIn()
                .addClass("d-block");
        } else {
            $(".scrollToTop")
                .fadeOut()
                .removeClass("d-block");
        }
    });

    $('.banner .slider').slick({
        dots: false,
        infinite: true,
        speed: 1000,
        arrows: true,
        prevArrow: "<span class='slick-arrow left'><i class='fa-solid fa-chevron-left'></i></slick>",
        nextArrow: "<span class='slick-arrow right'><i class='fa-solid fa-chevron-right'></i></slick>",
        autoplay: true,
        slidesToShow: 1,
        slidesToScroll: 1,
    });

    $('.testimonial .testimonial-wrapper').slick({
        dots: false,
        infinite: true,
        speed: 300,
        arrows: true,
        prevArrow: "<span class='slick-arrow left'><i class='fa-solid fa-chevron-left'></i></slick>",
        nextArrow: "<span class='slick-arrow right'><i class='fa-solid fa-chevron-right'></i></slick>",
        autoplay: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
            }
        },]
    });


    $slick_slider = $(".service2 .service-sections ");
    settings_slider = {
        arrows: false,
        autoplay: true,
        slidesToShow: 2,
        dots: false,
        autoplaySpeed: 3000,
        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1
            }
        }
        ]
    };
    slick_on_mobile($slick_slider, settings_slider);

    // slick on mobile
    function slick_on_mobile(slider, settings) {
        $(window).on("load resize", function () {
            if ($(window).width() > 991) {
                if (slider.hasClass("slick-initialized")) {
                    slider.slick("unslick");
                }
                return;
            }
            if (!slider.hasClass("slick-initialized")) {
                return slider.slick(settings);
            }
        });
    }



    /* Gallery Magnific Popup*/
    $('.image-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        closeOnContentClick: false,
        closeBtnInside: false,
        mainClass: 'mfp-with-zoom mfp-img-mobile',
        gallery: {
            enabled: true
        },
        zoom: {
            enabled: true,
        }

    });

});