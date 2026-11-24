$(document).ready(function () {

    /* ============================================================
       Header: fixed on scroll
    ============================================================ */
    (function initStickyHeader() {
        $(window).on("load resize scroll", function () {
            var sticky = $(".header"),
                scroll = $(window).scrollTop();

            if (scroll >= 150) sticky.addClass("fixed-header");
            else sticky.removeClass("fixed-header");
        });
    })();

    /* ============================================================
       Home page: banner slider
    ============================================================ */
    (function initBannerSlider() {
        $('.banner .banner-slider').slick({
            dots: false,
            arrows: true,
            prevArrow: "<span class='slick-arrow left'><i class='fa-solid fa-chevron-left'></i></span>",
            nextArrow: "<span class='slick-arrow right'><i class='fa-solid fa-chevron-right'></i></span>",
            speed: 1000,
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            adaptiveHeight: true,
            autoplay: false,
            autoplaySpeed: 3000,
        });
    })();

    /* ============================================================
       Gallery page: magnific popup
    ============================================================ */
    (function initGalleryPopup() {
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
    })();

    /* ============================================================
       Home page: testimonial slider
    ============================================================ */
    (function initTestimonialSlider() {
        $('.testimonial-slider').slick({
            dots: false,
            arrows: true,
            prevArrow: "<span class='slick-arrow left'><i class='fa-solid fa-chevron-left'></i></slick>",
            nextArrow: "<span class='slick-arrow right'><i class='fa-solid fa-chevron-right'></i></slick>",
            speed: 1000,
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
            adaptiveHeight: true,
            autoplay: true,
            autoplaySpeed: 1000,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        dots: true,
                        arrows: false,
                    }
                }
            ]
        });
    })();

    /* ============================================================
       Request a Quote page:  
    ============================================================ */
    (function initQuoteRangeSliders() {
        function initRangeField(field) {
            var input = field.querySelector('.range-input');
            var wrap = field.querySelector('.range-input-wrap');
            var bubble = field.querySelector('.range-bubble');
            var bubbleValue = field.querySelector('.range-bubble-value');
            var bubbleLabel = field.querySelector('.range-bubble-label');
            var singular = field.getAttribute('data-suffix');
            var plural = field.getAttribute('data-suffix-plural');

            function update() {
                var min = parseFloat(input.min);
                var max = parseFloat(input.max);
                var val = parseFloat(input.value);
                var percent = (val - min) / (max - min) * 100;

                input.style.setProperty('--range-progress', percent + '%');
                bubbleValue.textContent = val;
                bubbleLabel.textContent = (val === 1 ? singular : plural);

                var thumbSize = 20;
                var trackWidth = wrap.offsetWidth;
                var offset = (percent / 100) * (trackWidth - thumbSize) + thumbSize / 2;
                bubble.style.left = offset + 'px';
            }

            input.addEventListener('input', update);
            window.addEventListener('resize', update);
            update();
        }

        document.querySelectorAll('.range-field').forEach(initRangeField);
    })();

    /* ============================================================
       Request a Quote page: cleaning schedule / preferred time buttons
    ============================================================ */
    (function initQuoteOptionGroups() {
        function initOptionGroup(groupId, hiddenId) {
            var group = document.getElementById(groupId);
            if (!group) return;
            var hidden = document.getElementById(hiddenId);

            group.querySelectorAll('.option-btn').forEach(function (btn) {
                btn.addEventListener('click', function () {
                    group.querySelectorAll('.option-btn').forEach(function (b) {
                        b.classList.remove('active');
                    });
                    btn.classList.add('active');
                    hidden.value = btn.getAttribute('data-value');
                });
            });
        }

        initOptionGroup('scheduleOptions', 'scheduleInput');
        initOptionGroup('timeOptions', 'timeInput');
    })();

    /* ============================================================
       Request a Quote page: preferred date calendar
    ============================================================ */
    (function initQuoteCalendar() {
        var monthLabel = document.getElementById('calMonthLabel');
        var daysEl = document.getElementById('calDays');
        var prevBtn = document.getElementById('calPrev');
        var nextBtn = document.getElementById('calNext');
        var dateInput = document.getElementById('dateInput');

        if (!daysEl) return;

        var monthNames = ["January", "February", "March", "April", "May", "June", "July",
            "August", "September", "October", "November", "December"
        ];
        var today = new Date();
        today.setHours(0, 0, 0, 0);
        var viewYear = today.getFullYear();
        var viewMonth = today.getMonth();
        var selectedTime = null;

        function formatDate(d) {
            var y = d.getFullYear();
            var m = String(d.getMonth() + 1).padStart(2, '0');
            var day = String(d.getDate()).padStart(2, '0');
            return y + '-' + m + '-' + day;
        }

        function renderCalendar() {
            daysEl.innerHTML = '';
            monthLabel.textContent = monthNames[viewMonth] + ' ' + viewYear;

            var firstDay = new Date(viewYear, viewMonth, 1).getDay();
            var totalDays = new Date(viewYear, viewMonth + 1, 0).getDate();

            for (var i = 0; i < firstDay; i++) {
                var empty = document.createElement('span');
                empty.className = 'calendar-day is-empty';
                daysEl.appendChild(empty);
            }

            for (var d = 1; d <= totalDays; d++) {
                (function (d) {
                    var cellDate = new Date(viewYear, viewMonth, d);
                    cellDate.setHours(0, 0, 0, 0);

                    var btn = document.createElement('button');
                    btn.type = 'button';
                    btn.className = 'calendar-day';
                    btn.textContent = d;

                    if (cellDate.getTime() < today.getTime()) {
                        btn.classList.add('is-disabled');
                        btn.disabled = true;
                    } else {
                        btn.addEventListener('click', function () {
                            selectedTime = cellDate.getTime();
                            dateInput.value = formatDate(cellDate);
                            daysEl.querySelectorAll('.calendar-day.is-selected').forEach(function (el) {
                                el.classList.remove('is-selected');
                            });
                            btn.classList.add('is-selected');
                        });
                    }

                    if (cellDate.getTime() === today.getTime()) {
                        btn.classList.add('is-today');
                    }
                    if (selectedTime !== null && cellDate.getTime() === selectedTime) {
                        btn.classList.add('is-selected');
                    }

                    daysEl.appendChild(btn);
                })(d);
            }

            prevBtn.disabled = (viewYear === today.getFullYear() && viewMonth === today.getMonth());
        }

        prevBtn.addEventListener('click', function () {
            viewMonth--;
            if (viewMonth < 0) {
                viewMonth = 11;
                viewYear--;
            }
            renderCalendar();
        });
        nextBtn.addEventListener('click', function () {
            viewMonth++;
            if (viewMonth > 11) {
                viewMonth = 0;
                viewYear++;
            }
            renderCalendar();
        });

        renderCalendar();
    })();

    /* ============================================================
       Sitewide: safe text replace (skips scripts/styles/emails)
    ============================================================ */
    (function initTextReplace(root) {
        var walker = document.createTreeWalker(
            root,
            NodeFilter.SHOW_TEXT,
            null,
            false
        );

        var node;
        while ((node = walker.nextNode())) {

            // Skip SCRIPT & STYLE
            if (node.parentNode && /^(SCRIPT|STYLE)$/i.test(node.parentNode.tagName)) {
                continue;
            }

            // Skip text nodes that contain emails
            if (/\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}\b/i.test(node.nodeValue)) {
                continue;
            }

            // Replace text safely
            node.nodeValue = node.nodeValue.replace(/vrix/gi, 'VRIX');
        }
    })(document.body);

});
