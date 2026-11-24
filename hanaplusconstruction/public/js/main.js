$(window).bind("load scroll", function (e) {
    var header = $(document).scrollTop();
    var headerHeight = $("header").outerHeight() - 50;
    if (header > headerHeight) {
        $("header").addClass("fixed-header");
    } else {
        $("header").removeClass("fixed-header");
    }
});

$(document).ready(function () {
    // Scroll Event (Go to Top on Click)
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
    $(".scrollToTop").click(function () {
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
    // Slider
    $(".slider").slick({
        autoplay: true,
        speed: 400,
        arrows: true,
        prevArrow: "<span class='slick-arrow left'><i class='icon icon-arrow-left'></i></slick>",
        nextArrow: "<span class='slick-arrow right'><i class='icon icon-arrow-right'></i></slick>",
        dots: true
    });

    //Magnific Popup

    $(".portfolio-block .block").magnificPopup({
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

    $(".gallery .image").magnificPopup({
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

    // slick for testimonials section
    $(".testimonials-section .testimonials-block").slick({
        centerMode: false,
        arrows: true,
        dots: false,
        autoplay: false,
        prevArrow: "<span class='slick-arrow left'><i class='icon icon-arrow-left'></i></slick>",
        nextArrow: "<span class='slick-arrow right'><i class='icon icon-arrow-right'></i></slick>",
        slidesToShow: 2,
        autoplaySpeed: 4000,
        responsive: [{
            breakpoint: 767,
            settings: {
                slidesToShow: 2
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1
            }
        }
        ]
    });

    $(window).resize(function () {
        $(".testimonials-section .testimonials-block").slick("resize");
    });

    // slick slider on mobile only
    $slick_slider = $(".services-section .service-block .row");
    settings_slider = {
        arrows: false,
        autoplay: true,
        slidesToShow: 3,
        dots: false,
        autoplaySpeed: 3000,
        responsive: [{
            breakpoint: 767,
            settings: {
                slidesToShow: 2
            }
        },
        {
            breakpoint: 480,
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


    /* =====================================================================
       FAQ TOGGLE FUNCTIONALITY (with smooth height transition)
       ===================================================================== */
    const faqBoxes = document.querySelectorAll(".faq-block .box");

    faqBoxes.forEach((box) => {
        const query = box.querySelector(".query-wrap");
        const answer = box.querySelector(".answer");
        const plusIcon = box.querySelector(".fa-plus");
        const minusIcon = box.querySelector(".fa-minus");

        query.addEventListener("click", function () {
            const isOpen = answer.classList.contains("show");

            // Close all others first
            faqBoxes.forEach((b) => {
                const ans = b.querySelector(".answer");
                ans.style.height = "0px";
                ans.classList.remove("show");
                b.querySelector(".fa-plus").style.display = "block";
                b.querySelector(".fa-minus").style.display = "none";
            });

            // Toggle current one
            if (!isOpen) {
                answer.style.height = answer.scrollHeight + "px";
                answer.classList.add("show");
                plusIcon.style.display = "none";
                minusIcon.style.display = "block";
            } else {
                answer.style.height = "0px";
                answer.classList.remove("show");
                plusIcon.style.display = "block";
                minusIcon.style.display = "none";
            }
        });
    });
});


// Starst From here
(function ($) {
    $.fn.countTo = function (options) {
        options = options || {};

        return $(this).each(function () {
            // set options for current element
            var settings = $.extend({}, $.fn.countTo.defaults, {
                from: $(this).data('from'),
                to: $(this).data('to'),
                speed: $(this).data('speed'),
                refreshInterval: $(this).data('refresh-interval'),
                decimals: $(this).data('decimals')
            }, options);

            // how many times to update the value, and how much to increment the value on each update
            var loops = Math.ceil(settings.speed / settings.refreshInterval),
                increment = (settings.to - settings.from) / loops;

            // references & variables that will change with each update
            var self = this,
                $self = $(this),
                loopCount = 0,
                value = settings.from,
                data = $self.data('countTo') || {};

            $self.data('countTo', data);

            // if an existing interval can be found, clear it first
            if (data.interval) {
                clearInterval(data.interval);
            }
            data.interval = setInterval(updateTimer, settings.refreshInterval);

            // initialize the element with the starting value
            render(value);

            function updateTimer() {
                value += increment;
                loopCount++;

                render(value);

                if (typeof (settings.onUpdate) == 'function') {
                    settings.onUpdate.call(self, value);
                }

                if (loopCount >= loops) {
                    // remove the interval
                    $self.removeData('countTo');
                    clearInterval(data.interval);
                    value = settings.to;

                    if (typeof (settings.onComplete) == 'function') {
                        settings.onComplete.call(self, value);
                    }
                }
            }

            function render(value) {
                var formattedValue = settings.formatter.call(self, value, settings);
                $self.html(formattedValue);
            }
        });
    };

    $.fn.countTo.defaults = {
        from: 0, // the number the element should start at
        to: 0, // the number the element should end at
        speed: 1000, // how long it should take to count between the target numbers
        refreshInterval: 100, // how often the element should be updated
        decimals: 0, // the number of decimal places to show
        formatter: formatter, // handler for formatting the value before rendering
        onUpdate: null, // callback method for every time the element is updated
        onComplete: null // callback method for when the element finishes updating
    };

    function formatter(value, settings) {
        return value.toFixed(settings.decimals);
    }
}(jQuery));

jQuery(function ($) {
    // custom formatting example
    $('.count-number').data('countToOptions', {
        formatter: function (value, options) {
            return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
        }
    });

    // start all the timers
    $('.timer').each(count);

    function count(options) {
        var $this = $(this);
        options = $.extend({}, options || {}, $this.data('countToOptions') || {});
        $this.countTo(options);
    }
});