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

    /* Banner Slider */
    $('.banner').slick({
        dots: false,
        arrow: true,
        prevArrow: "<span class='slick-arrow left arw-lft'><i class='fa-solid fa-chevron-left'></i></slick>",
        nextArrow: "<span class='slick-arrow right arw-right'><i class='fa-solid fa-chevron-right'></i></slick>",
        infinite: true,
        autoplaySpeed: 2000,
        speed: 1000,
        slidesToShow: 1,
        adaptiveHeight: true,
        autoplay: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    dots: true,
                }
            }
        ]
    });

    /* Testimonial Section */
    $('.testimonial .testimonial-wrapper').slick({
        infinite: true,
        dots: false,
        prevArrow: "<span class='slick-arrow left'><i class='fa-solid fa-arrow-left'></i></span>",
        nextArrow: "<span class='slick-arrow right'><i class='fa-solid fa-arrow-right'></i></i></span>",
        arrows: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        adaptiveHeight: true,
        centerMode: true,
        autoplay: true,
        autoplaySpeed: 2000,
        // fade: true,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    dots: true,
                }
            }
        ]
    });

    $('.testimonial .testimonial-wrapper').on('setPosition', function () {
        $(this).find('.slick-slide').height('auto');
        var slickTrack = $(this).find('.slick-track');
        var slickTrackHeight = $(slickTrack).height();
        $(this).find('.slick-slide').css('height', slickTrackHeight + 'px');
    });


    /* Magnific Popup Gallery */
    $('.gallery-wrapper').each(function () { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',

            mainClass: 'mfp-with-zoom', // this class is for CSS animation below
            gallery: {
                enabled: true
            }
        });
    });
});