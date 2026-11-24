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


    $(".banner .slider").slick({
        centerMode: false,
        arrows: true,
        autoplay: true,
        prevArrow: "<span class='slick-arrow left'><i class='icon icon-arrow-left'></i></slick>",
        nextArrow: "<span class='slick-arrow right'><i class='icon icon-arrow-right'></i></slick>",
        slidesToShow: 1,
        dots: false,
        adaptiveHeight: true,
        autoplaySpeed: 3000
    });

    // magnific popup
    $('.gallery .gallery-wrapper').magnificPopup({
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

    /* slick for testimonial  */
    $('.testimonial .testimonial-slider').slick({
        centerMode: false,
        arrows: true,
        prevArrow: "<span class='slick-arrow left'><i class='icon icon-arrow-left'></i></slick>",
        nextArrow: "<span class='slick-arrow right'><i class='icon icon-arrow-right'></i></slick>",
        autoplay: false,
        slidesToShow: 1,
        dots: false,
        autoplaySpeed: 2000,
        responsive: [{
            breakpoint: 991,
            settings: {
                arrows: false,
                slidesToShow: 1,
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                arrows: false,
                dots: true
            }
        }
        ]
    });
    $(window).resize(function () {
        $('.testimonial .testimonial-slider').slick('resize');
    });

});