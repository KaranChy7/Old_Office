$(document).ready(function () {

    // Header Fixed on Scroll
    $(window).on("load resize scroll", function () {
        var sticky = $(".header"),
            scroll = $(window).scrollTop();

        if (scroll >= 150) sticky.addClass("fixed-header");
        else sticky.removeClass("fixed-header");
    });

    /* Banner Slider */
    $('.banner').slick({
        dots: false,
        arrows: false,
        prevArrow: "<span class='slick-arrow left arw-lft'><i class='icon icon-arrow-left'></i></slick>",
        nextArrow: "<span class='slick-arrow right arw-right'><i class='icon icon-arrow-right'></i></slick>",
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        lazyLoad: 'ondemand',
        fade: true,
        cssEase: 'linear'
    });


    /* Gallery Section */
    $(".gallery").magnificPopup({
        delegate: "a",
        type: "image",
        mainClass: "mfp-with-zoom mfp-img-mobile",
        gallery: {
            enabled: true
        },
        zoom: {
            enabled: true,
            duration: 300
        }
    });

    /* slick for testimonials section */
    $(".testimonial_section .testimonial-wrapper").slick({
        // centerMode: false,
        arrows: false,
        autoplay: true,
        prevArrow: "<span class='slick-arrow left arw-lft'><i class='icon icon-arrow-left'></i></slick>",
        nextArrow: "<span class='slick-arrow right arw-right'><i class='icon icon-arrow-right'></i></slick>",
        slidesToShow: 2,
        dots: false,
        autoplaySpeed: 2000,
        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 1
            }
        },
        {
            breakpoint: 690,
            settings: {
                slidesToShow: 1,
                dots: true,
                arrows: false,
            }
        }
        ]
    });

    $(window).resize(function () {
        $(".testimonial_section .testimonial-wrapper").slick("resize");
    });


});