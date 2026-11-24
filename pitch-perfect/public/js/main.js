$(document).ready(function () {

    // Header Fixed on Scroll
    $(window).on("load resize scroll", function () {
        var sticky = $(".header"),
            scroll = $(window).scrollTop();

        if (scroll >= 150) sticky.addClass("fixed-header");
        else sticky.removeClass("fixed-header");
    });

    /* hamburger click menu for upbar nav in header  */
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
    /* slick for banner  */
    $('.banner .slider').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 2000,
        arrows: true,
        dots: false,
        fade: true,
        dragable: false,
        cssEase: "ease-in-out",
        prevArrow: "<span class='slick-arrow left'><i class='fa-solid fa-chevron-left'></i></slick>",
        nextArrow: "<span class='slick-arrow right'><i class='fa-solid fa-chevron-right'></i></i></slick>",
        slidesToShow: 1,
        responsive: [{
            breakpoint: 991,
            settings: {
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
        $('.banner .slider').slick('resize');
    });

    /* Magnific popup for gallery  */


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

    /* testimonial Slider */
    $('.testimonial-slider .slider-wrap').slick({
        dots: false,
        arrow: true,
        prevArrow: "<span class='slick-arrow left'><i class='fa-solid fa-chevron-left'></i></slick>",
        nextArrow: "<span class='slick-arrow right'><i class='fa-solid fa-chevron-right'></i></i></slick>",
        infinite: true,
        autoplaySpeed: 2000,
        speed: 1000,
        slidesToShow: 1,
        adaptiveHeight: true,
        autoplay: false,
    });

    /* slick for service-page-banner  */
    $(' .service-image-slider').slick({
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 1000,
        arrows: true,
        dots: false,
        fade: true,
        dragable: false,
        cssEase: "ease-in",
        prevArrow: "<span class='slick-arrow left'><i class='fa-solid fa-chevron-left'></i></slick>",
        nextArrow: "<span class='slick-arrow right'><i class='fa-solid fa-chevron-right'></i></i></slick>",
        slidesToShow: 1,
        responsive: [{
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                arrows: false,
                dots: true
            }
        }]
    });
    // $(window).resize(function() {
    //     $('.single-service-page .service-page-content .service-image-slider').slick('resize');
    // });
    /* for checkbox multiple selection value send to the mail  */

    $(function () {
        $('input').on('click', function () {
            var values = [];
            $('input:checked').each(function () {
                values.push($(this).parent().text());
            });
            $('[name="Bathroom_Design"]').attr({ value: values.join(', ') });
        });
    });
    /* ENDS HERE  */

});