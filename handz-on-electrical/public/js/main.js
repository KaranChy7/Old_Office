$(document).ready(function () {

    // Scroll Event (Go to Top on Click)
    //To scroll top
    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            $('.scrollToTop').fadeIn().addClass('d-block');
        } else {
            $('.scrollToTop').fadeOut().removeClass('d-block');
        }
    });

    //Click event to scroll to top
    $('.scrollToTop').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 600);
        return false;
    });


    // slick for banner section
    $('.main-banner .item-wrapper').slick({
        centerMode: false,
        arrows: true,
        prevArrow: "<span class='slick-arrow left'><i class='icon icon-arrow-left'></i></slick>",
        nextArrow: "<span class='slick-arrow right'><i class='icon icon-arrow-right'></i></slick>",
        autoplay: true,
        slidesToShow: 1,
        dots: true,
        autoplaySpeed: 2000,
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
            }
        }
        ]
    });

    //Magnific Popup
    $(".gallery-section .gallery-wrapper").magnificPopup({
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
    $('.testimonials-section .section-wrappers .row').slick({
        centerMode: false,
        arrows: false,
        autoplay: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: true,
        autoplaySpeed: 2000,
        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 1,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
            }
        }
        ]
    });

    // slick on mobile
    function slick_on_mobile(slider, settings) {
        $(window).on('load resize', function () {
            if ($(window).width() > 767) {
                if (slider.hasClass('slick-initialized')) {
                    slider.slick('unslick');
                }
                return
            }
            if (!slider.hasClass('slick-initialized')) {
                return slider.slick(settings);
            }
        });
    };

});



// for checkbox multiple selection value send to the mail
$(function () {
    $('input').on('click', function () {
        var values = [];
        $('input:checked').each(function () {
            values.push($(this).parent().text());
        });
        $('[name="Project"]').attr({ value: values.join(', ') });
    });
});
// ends here

$(window).load(function () {
    var $container = $(".galleryContainer");
    $container.isotope({
        filter: "*",
        animationOptions: {
            duration: 750,
            easing: "linear",
            queue: false
        }
    });

    $(".galleryFilter a").click(function () {
        $(".galleryFilter .current").removeClass("current");
        $(this).addClass("current");

        var selector = $(this).attr("data-filter");
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: "linear",
                queue: false
            }
        });
        return false;
    });
});
// Quote forms: carry details from the home page quick form to the full quote form,
// and hide the mobile action bar while the on-screen keyboard is open
(function () {
    var STORE_KEY = "quoteDraft";

    function readDraft() {
        try {
            return JSON.parse(sessionStorage.getItem(STORE_KEY)) || null;
        } catch (e) {
            return null;
        }
    }

    function writeDraft(draft) {
        try {
            sessionStorage.setItem(STORE_KEY, JSON.stringify(draft));
        } catch (e) {}
    }

    function clearDraft() {
        try {
            sessionStorage.removeItem(STORE_KEY);
        } catch (e) {}
    }

    function setIfEmpty(field, value) {
        if (field && value && !field.value) {
            field.value = value;
        }
    }

    var shortForms = document.querySelectorAll('form[data-quote="short"]');
    var fullForm = document.querySelector('form[data-quote="full"]');

    shortForms.forEach(function (shortForm) {
        var saveShort = function () {
            var val = function (name) {
                var el = shortForm.querySelector('[name="' + name + '"]');
                return el ? el.value.trim() : "";
            };
            var services = [];
            shortForm.querySelectorAll('input[name="Services[]"]:checked').forEach(function (cb) {
                services.push(cb.value);
            });
            writeDraft({
                name: val("Full Name"),
                phone: val("phone"),
                email: val("email"),
                suburb: val("Property Suburb"),
                services: services,
                type: val("Service Type"),
                timing: val("Preferred Timing")
            });
        };
        shortForm.addEventListener("input", saveShort);
        shortForm.addEventListener("change", saveShort);
        shortForm.addEventListener("submit", clearDraft);
    });

    if (fullForm) {
        var draft = readDraft();
        if (draft) {
            var parts = (draft.name || "").split(/\s+/).filter(Boolean);
            setIfEmpty(fullForm.querySelector("#first-name"), parts.shift());
            setIfEmpty(fullForm.querySelector("#last-name"), parts.join(" "));
            setIfEmpty(fullForm.querySelector("#email"), draft.email);
            setIfEmpty(fullForm.querySelector("#phone"), draft.phone);
            setIfEmpty(fullForm.querySelector("#suburb"), draft.suburb);
            setIfEmpty(fullForm.querySelector("#timing"), draft.timing);

            (draft.services || []).forEach(function (service) {
                fullForm.querySelectorAll('input[name="Services[]"]').forEach(function (cb) {
                    if (cb.value === service) cb.checked = true;
                });
            });

            if (draft.type && !fullForm.querySelector('input[name="Service Type"]:checked')) {
                fullForm.querySelectorAll('input[name="Service Type"]').forEach(function (radio) {
                    if (radio.value === draft.type) radio.checked = true;
                });
            }
        }
        // Service picked on the services page, e.g. page-quote?service=lawn-mowing
        var picked = new URLSearchParams(window.location.search).get("service");
        if (picked) {
            fullForm.querySelectorAll('input[name="Services[]"]').forEach(function (cb) {
                // "Lawn Health & Renovation" -> "lawn-health-renovation"
                var slug = cb.value.toLowerCase().replace(/[^a-z0-9]+/g, "-").replace(/^-|-$/g, "");
                if (slug === picked) {
                    cb.checked = true;
                }
            });
        }

        fullForm.addEventListener("submit", clearDraft);
    }

    // Bottom "Request a Quote" button: if a quote form is already on this page, scroll to it
    // instead of reloading the page (a reload would clear everything the visitor has entered)
    var quoteButton = document.querySelector(".mobile-action-bar .action-quote");

    if (quoteButton) {
        quoteButton.addEventListener("click", function (e) {
            var form = fullForm;

            // on the home page, use whichever quick form is showing
            if (!form) {
                shortForms.forEach(function (shortForm) {
                    if (shortForm.offsetParent !== null) {
                        form = shortForm;
                    }
                });
            }

            if (!form) {
                return; // no form here, so go to the quote page as normal
            }

            e.preventDefault();
            form.scrollIntoView({ behavior: "smooth", block: "start" });

            // focus the first empty text field, or the first field if all are filled
            var fields = form.querySelectorAll('input[type="text"]:not([name="_honey"]), input[type="tel"], input[type="email"]');
            var target = fields[0];
            for (var i = 0; i < fields.length; i++) {
                if (!fields[i].value) {
                    target = fields[i];
                    break;
                }
            }
            if (target) {
                target.focus({ preventScroll: true });
            }
        });
    }

    // Fields that bring up the on-screen keyboard
    var keyboardFields = 'input[type="text"], input[type="tel"], input[type="email"], input[type="number"], input[type="search"], textarea';
    var blurTimer;

    document.addEventListener("focusin", function (e) {
        if (e.target.matches && e.target.matches(keyboardFields)) {
            clearTimeout(blurTimer);
            document.body.classList.add("form-focused");
        }
    });

    document.addEventListener("focusout", function () {
        // wait a beat so moving between fields doesn't make the bar flicker
        blurTimer = setTimeout(function () {
            var active = document.activeElement;
            if (!active || !active.matches || !active.matches(keyboardFields)) {
                document.body.classList.remove("form-focused");
            }
        }, 150);
    });
})();

// Enquiry forms: need a phone number OR an email (not both), and can't be sent twice
(function () {
    var forms = document.querySelectorAll("form[data-one-contact]");

    forms.forEach(function (form) {
        var phone = form.querySelector('input[type="tel"]');
        var email = form.querySelector('input[type="email"]');
        var button = form.querySelector('button[type="submit"]');
        var buttonText = button.innerHTML;

        // the browser shows this message on the phone field if both are empty
        function checkContact() {
            if (!phone.value.trim() && !email.value.trim()) {
                phone.setCustomValidity("Please enter a phone number or an email address so we can reply.");
            } else {
                phone.setCustomValidity("");
            }
        }

        checkContact();
        phone.addEventListener("input", checkContact);
        email.addEventListener("input", checkContact);

        // the submit event only fires once the form is valid, so lock the button here
        form.addEventListener("submit", function () {
            button.disabled = true;
            button.innerHTML = "Sending&hellip;";
        });

        // unlock again if the visitor comes back with the browser's Back button
        window.addEventListener("pageshow", function () {
            button.disabled = false;
            button.innerHTML = buttonText;
        });
    });
})();
