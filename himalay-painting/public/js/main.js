$(document).ready(function () {
  AOS.init({
    duration: 800,
    once: true,
  });

  // Header Fixed on Scroll
  $(window).on("load resize scroll", function () {
    var sticky = $(".header"),
      scroll = $(window).scrollTop();

    if (scroll >= 550) sticky.addClass("fixed-header");
    else sticky.removeClass("fixed-header");
  });

  /* Banner Slider */
  var bannerSwiper = new Swiper(".banner", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,

    speed: 1500,
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },

    autoHeight: false,
    grabCursor: true,

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    effect: "creative",
    creativeEffect: {
      prev: {
        shadow: true,
        translate: ["-20%", 0, -1],
        opacity: 0.5,
      },
      next: {
        translate: ["100%", 0, 0],
        opacity: 0,
      },
    },

    // 🔹 BREAKPOINTS
    breakpoints: {
      0: {
        // 0px and above (mobile)
        autoHeight: false,
      },
      768: {
        // 768px and above (tablet+)
        autoHeight: true,
      },
    },
  });

  bannerSwiper.on("slideChangeTransitionStart", function () {
    document.querySelectorAll(".animate-item").forEach((el) => {
      el.style.opacity = "0";
      el.style.transform = "translateY(40px)";
    });
  });

  bannerSwiper.on("slideChangeTransitionEnd", function () {
    document
      .querySelectorAll(".swiper-slide-active .animate-item")
      .forEach((el, i) => {
        setTimeout(() => {
          el.style.opacity = "1";
          el.style.transform = "translateY(0)";
        }, i * 200);
      });
  });

  /* Banner Slider */
  var featureSwiper = new Swiper(".feature", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,

    speed: 1000,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },

    grabCursor: true,

    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  /* About Feature Images - looping slider on mobile only */
  if (window.innerWidth <= 576 && $(".aboutFeature-slider").length) {
    $(".aboutFeature-slider").addClass("swiper");
    $(".aboutFeature-image").addClass("swiper-wrapper");
    $(".aboutFeature-image .figure").addClass("swiper-slide");

    new Swiper(".aboutFeature-slider", {
      slidesPerView: 1.15,
      centeredSlides: true,
      spaceBetween: 15,
      loop: true,
      speed: 800,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
    });
  }

  /* Gallery */

  /* Magnific Popup Gallery */
  $(".before-after-wrap .block").each(function () {
    // the containers for all your galleries
    $(this).magnificPopup({
      delegate: "a", // the selector for gallery item
      type: "image",

      mainClass: "mfp-with-zoom", // this class is for CSS animation below
      gallery: {
        enabled: true,
        tCounter: "%curr% of %total%",
      },
    });
  });

  /* testimonial Slider */
  $(".testimonial-slider").slick({
    dots: true,
    arrows: false,
    prevArrow:
      "<span class='slick-arrow left'><i class='fa-solid fa-chevron-left'></i></slick>",
    nextArrow:
      "<span class='slick-arrow right'><i class='fa-solid fa-chevron-right'></i></i></slick>",
    infinite: true,
    autoplaySpeed: 2000,
    speed: 1000,
    slidesToShow: 3,
    adaptiveHeight: true,
    autoplay: false,
    centerMode: true,
    centerPadding: "5px",
    responsive: [
      {
        breakpoint: 1400,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
});
