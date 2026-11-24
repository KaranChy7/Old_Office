$(document).ready(function () {

    // Gallery Filter
    $('.filter .btn').on('click', function () {
        var cat = $(this).data('filter');
        $('.filter .btn').removeClass('btn-primary active').addClass('btn-primary-ghost');
        $(this).removeClass('btn-primary-ghost').addClass('btn-primary active');
        $('.gallery-slider .image').each(function () {
            $(this).toggleClass('hide', cat != 'all' && $(this).data('cat') != cat);
        });
    });

    // Header Fixed on Scroll
    $(window).on("load resize scroll", function () {
        var sticky = $(".header"),
            scroll = $(window).scrollTop();

        if (scroll >= 150) sticky.addClass("fixed-header");
        else sticky.removeClass("fixed-header");
    });

    /* Icon Slider */
    $('.icon-slider').slick({
        dots: false,
        arrows: false,
        infinite: true,
        autoplay: true,
        speed: 8000,
        autoplaySpeed: 0,
        slidesToShow: 4,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '150px',
        adaptiveHeight: true,
        cssEase: 'linear',
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    arrows: false,
                    dots: false,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    centerPadding: '40px',
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    centerPadding: '60px',
                }
            },
            {
                breakpoint: 320,
                settings: {
                    slidesToShow: 1,
                    centerPadding: '50px',
                }
            }
        ]
    });

    /* Testimonial Slider */
    $('.testimonial-slider').slick({
        dots: true,
        arrows: false,
        infinite: true,
        autoplaySpeed: 2000,
        speed: 1000,
        slidesToShow: 3,
        adaptiveHeight: true,
        autoplay: false,
        centerMode: true,
        centerPadding: '5px',
        responsive: [
            {
                breakpoint: 1400,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

    /* About Feature Image Slider */
    $('.aboutFeature-image').slick({
        dots: true,
        arrows: false,
        infinite: true,
        autoplaySpeed: 2000,
        speed: 1000,
        slidesToShow: 3,
        adaptiveHeight: true,
        autoplay: false,
        centerMode: true,
        centerPadding: '5px',
        responsive: [
            {
                breakpoint: 1400,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

    /* Service Image Slider */
    $('.service-wrapper .figure .image').slick({
        dots: false,
        arrows: false,
        infinite: true,
        autoplaySpeed: 2000,
        speed: 1000,
        slidesToShow: 1,
        adaptiveHeight: false,
        autoplay: true
    });

    $('.service_wrapper .figures .images').slick({
        dots: false,
        arrows: false,
        infinite: true,
        autoplaySpeed: 2000,
        speed: 1000,
        slidesToShow: 1,
        adaptiveHeight: false,
        autoplay: true
    });


});
