$(document).ready(function () {

    // Header Fixed on Scroll
    $(window).on("load resize scroll", function () {
        var sticky = $(".header"),
            scroll = $(window).scrollTop();

        if (scroll >= 150) sticky.addClass("fixed-header");
        else sticky.removeClass("fixed-header");
    });


    /* Scroll Event (Go to Top on Click) */
    //To scroll top
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
    //Click event to scroll to top

    /* Banner Slider */
    $('.banner .banner-slider').slick({
        dots: true,
        arrows: false,
        prevArrow: "<span class='slick-arrow left'><i class='fa-solid fa-chevron-left'></i></slick>",
        nextArrow: "<span class='slick-arrow right'><i class='fa-solid fa-chevron-right'></i></i></slick>",
        infinite: true,
        autoplaySpeed: 2000,
        speed: 1000,
        slidesToShow: 1,
        adaptiveHeight: true,
        autoplay: false,
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

    /* testimonial Slider */
    $('.testimonial-slider').slick({
        dots: true,
        arrows: false,
        prevArrow: "<span class='slick-arrow left'><i class='fa-solid fa-chevron-left'></i></slick>",
        nextArrow: "<span class='slick-arrow right'><i class='fa-solid fa-chevron-right'></i></i></slick>",
        infinite: true,
        autoplaySpeed: 2000,
        speed: 1000,
        slidesToShow: 4,
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

    /* Magnific Popup Gallery */
    $('.project-wrapper').each(function () { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',

            mainClass: 'mfp-with-zoom', // this class is for CSS animation below
            gallery: {
                enabled: true
            }
        });
    });

    /* Service Tab & Pill */
    const navItems = document.querySelectorAll('.service-item');
    const tabPanes = document.querySelectorAll('.service-pane');

    navItems.forEach(item => {
        item.addEventListener('click', () => {
            navItems.forEach(nav => nav.classList.remove('active'));
            item.classList.add('active');

            const target = item.getAttribute('data-target');
            tabPanes.forEach(pane => {
                pane.classList.remove('active');
                if (pane.id === target) {
                    pane.classList.add('active');
                }
            });
        });
    });
    // $('.main-service-wrapper-tab-content .service-pane .image-wrap').slick({
    //     dots: true,
    //     arrows: false,
    //     prevArrow: "<span class='slick-arrow left'><i class='fa-solid fa-chevron-left'></i></slick>",
    //     nextArrow: "<span class='slick-arrow right'><i class='fa-solid fa-chevron-right'></i></i></slick>",
    //     infinite: true,
    //     autoplaySpeed: 2000,
    //     speed: 1000,
    //     slidesToShow: 1,
    //     adaptiveHeight: true,
    //     autoplay: false,
    //     centerMode: true,
    //     centerPadding: '5px',
    // });

});