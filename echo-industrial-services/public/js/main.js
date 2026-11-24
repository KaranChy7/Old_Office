$(document).ready(function () {
    // Header Fixed on Scroll
    $(window).on("load resize scroll", function () {
        var sticky = $(".header"),
            scroll = $(window).scrollTop();

        if (scroll >= 50) sticky.addClass("fixed-header");
        else sticky.removeClass("fixed-header");
    });

    //Slick Slider
    $(".banner .slider").slick({
        dots: false,
        infinite: true,
        speed: 200,
        arrows: true,
        autoplay: true,
        prevArrow:
            "<span class='slick-arrow left'><i class='fa-solid fa-chevron-left'></i></slick>",
        nextArrow:
            "<span class='slick-arrow right'><i class='fa-solid fa-chevron-right'></i></slick>",
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    arrows: false,
                },
            },
        ],
    });

    $("section.testimonials-section .row").slick({
        centerMode: false,
        arrows: true,
        dots: false,
        autoplay: true,
        prevArrow:
            "<span class='slick-arrow left'><i class='fa-solid fa-chevron-left'></i></slick>",
        nextArrow:
            "<span class='slick-arrow right'><i class='fa-solid fa-chevron-right'></i></slick>",
        slidesToShow: 1,
        dots: false,
        autoplaySpeed: 4000,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    arrows: true,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                },
            },
        ],
    });

    // slick slider on mobile only
    $slick_slider = $("section.services-section .row");
    settings_slider = {
        arrows: false,
        autoplay: true,
        slidesToShow: 2,
        dots: false,
        pauseOnHover: false,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 580,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    };
    slick_on_mobile($slick_slider, settings_slider);

    // slick on mobile
    function slick_on_mobile(slider, settings) {
        $(window).on("load resize", function () {
            if ($(window).width() > 767) {
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

    //Gallery Popup

    $(".section-body .block").magnificPopup({
        delegate: "a",
        type: "image",
        gallery: {
            enabled: true,
        },
        zoom: {
            enabled: true,
            duration: 300, // don't foget to change the duration also in CSS
            opener: function (element) {
                return element.find("img");
            },
        },
    });
});
// Scroll Event (Go to Top on Click)
//To scroll top
$(window).scroll(function () {
    if ($(this).scrollTop() > 500) {
        $(".scrollToTop").fadeIn().addClass("d-block");
    } else {
        $(".scrollToTop").fadeOut().removeClass("d-block");
    }
});
//Click event to scroll to top
$(".scrollToTop").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
});
