/**
 * main.js — Reliable Tradies Group
 * Nav · Hero Slider · Scroll Animations · Counters
 * FAQ Accordion · Testimonial Carousel · Lightbox · Scroll Top
 */

(function () {
    'use strict';

    // =============================================
    // HEADER SCROLL
    // =============================================
    const header = document.getElementById('site-header');

    function updateHeader() {
        if (!header) return;
        header.classList.toggle('scrolled', window.scrollY > 60);
    }

    window.addEventListener('scroll', updateHeader, { passive: true });
    updateHeader();


    // =============================================
    // MOBILE NAV
    // =============================================
    const hamburger  = document.getElementById('hamburger');
    const mobileNav  = document.getElementById('mobile-nav');
    const navOverlay = document.getElementById('nav-overlay');

    function openNav() {
        if (!hamburger || !mobileNav || !navOverlay) return;
        hamburger.classList.add('open');
        mobileNav.classList.add('open');
        navOverlay.classList.add('open');
        document.body.style.overflow = 'hidden';
    }

    function closeNav() {
        if (!hamburger || !mobileNav || !navOverlay) return;
        hamburger.classList.remove('open');
        mobileNav.classList.remove('open');
        navOverlay.classList.remove('open');
        document.body.style.overflow = '';
    }

    if (hamburger) {
        hamburger.addEventListener('click', () =>
            hamburger.classList.contains('open') ? closeNav() : openNav());
        hamburger.addEventListener('keydown', e => {
            if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); hamburger.classList.contains('open') ? closeNav() : openNav(); }
        });
    }

    if (navOverlay) navOverlay.addEventListener('click', closeNav);

    // Mobile sub-menu toggle (Services)
    const mobileParent = document.querySelector('.mobile-has-sub');
    if (mobileParent) {
        const parentLink = mobileParent.querySelector('.mobile-parent-link');
        const subMenu    = mobileParent.querySelector('.mobile-sub');
        if (parentLink && subMenu) {
            parentLink.addEventListener('click', function (e) {
                // Only prevent if clicking the text/chevron, not sub-links
                const rect    = this.getBoundingClientRect();
                const clickX  = e.clientX;
                const rightZone = rect.right - 40;
                if (clickX > rightZone || e.target.classList.contains('mobile-chevron')) {
                    e.preventDefault();
                    mobileParent.classList.toggle('open');
                    subMenu.style.display = mobileParent.classList.contains('open') ? 'block' : 'none';
                }
            });
        }
    }


    // =============================================
    // HERO SLIDER
    // =============================================
    const heroSlider  = document.getElementById('hero-slider');
    const heroPrev    = document.getElementById('hero-prev');
    const heroNext    = document.getElementById('hero-next');
    const heroDots    = document.getElementById('hero-dots');
    const heroThumbs  = document.getElementById('hero-thumbs');
    const progressBar = document.getElementById('hero-progress-bar');

    if (heroSlider) {
        const slides     = Array.from(heroSlider.querySelectorAll('.hero-slide'));
        const dots       = heroDots  ? Array.from(heroDots.querySelectorAll('.hero-dot'))   : [];
        const thumbs     = heroThumbs ? Array.from(heroThumbs.querySelectorAll('.hero-thumb')) : [];
        const SLIDE_DURATION = 5500;  // ms per slide
        let currentSlide = 0;
        let autoTimer    = null;
        let progressTimer = null;
        let countersDone = false;

        function goToSlide(index) {
            // Bounds
            if (index < 0)              index = slides.length - 1;
            if (index >= slides.length) index = 0;

            // Deactivate current
            slides[currentSlide].classList.remove('active');
            dots[currentSlide]   && dots[currentSlide].classList.remove('active');
            thumbs[currentSlide] && thumbs[currentSlide].classList.remove('active');

            currentSlide = index;

            // Activate new
            slides[currentSlide].classList.add('active');
            dots[currentSlide]   && dots[currentSlide].classList.add('active');
            thumbs[currentSlide] && thumbs[currentSlide].classList.add('active');

            // Counters — run once on first slide entrance
            if (!countersDone) {
                runCounters();
                countersDone = true;
            }

            resetProgress();
        }

        function nextSlide() { goToSlide(currentSlide + 1); }
        function prevSlide() { goToSlide(currentSlide - 1); }

        function startAuto() {
            stopAuto();
            autoTimer = setInterval(nextSlide, SLIDE_DURATION);
        }

        function stopAuto() {
            clearInterval(autoTimer);
            clearTimeout(progressTimer);
        }

        function resetProgress() {
            if (!progressBar) return;
            // Kill any running transition then restart
            progressBar.style.transition = 'none';
            progressBar.style.width      = '0%';
            // Trigger reflow
            void progressBar.offsetWidth;
            progressBar.style.transition = `width ${SLIDE_DURATION}ms linear`;
            progressBar.style.width      = '100%';
        }

        // Dots
        dots.forEach((dot, i) => {
            dot.addEventListener('click', () => {
                stopAuto();
                goToSlide(i);
                startAuto();
            });
        });

        // Thumbs
        thumbs.forEach((thumb, i) => {
            thumb.addEventListener('click', () => {
                stopAuto();
                goToSlide(i);
                startAuto();
            });
        });

        // Arrows
        if (heroPrev) heroPrev.addEventListener('click', () => { stopAuto(); prevSlide(); startAuto(); });
        if (heroNext) heroNext.addEventListener('click', () => { stopAuto(); nextSlide(); startAuto(); });

        // Touch / swipe
        let touchStartX = 0;
        heroSlider.addEventListener('touchstart', e => { touchStartX = e.touches[0].clientX; }, { passive: true });
        heroSlider.addEventListener('touchend',   e => {
            const diff = touchStartX - e.changedTouches[0].clientX;
            if (Math.abs(diff) > 50) {
                stopAuto();
                diff > 0 ? nextSlide() : prevSlide();
                startAuto();
            }
        });

        // Pause on hover
        heroSlider.addEventListener('mouseenter', stopAuto);
        heroSlider.addEventListener('mouseleave', startAuto);

        // Keyboard
        document.addEventListener('keydown', e => {
            if (e.key === 'ArrowLeft')  { stopAuto(); prevSlide(); startAuto(); }
            if (e.key === 'ArrowRight') { stopAuto(); nextSlide(); startAuto(); }
        });

        // Init
        goToSlide(0);
        startAuto();
    }


    // =============================================
    // COUNTER ANIMATION
    // =============================================
    function runCounters() {
        const counters = document.querySelectorAll('[data-counter]');
        counters.forEach(function (el) {
            const target   = parseInt(el.getAttribute('data-counter'), 10);
            const duration = 1800;
            const step     = Math.max(1, Math.ceil(target / (duration / 16)));
            let current    = 0;

            const tick = function () {
                current += step;
                if (current >= target) {
                    el.textContent = target + (target >= 50 || target === 10 ? '+' : '');
                    return;
                }
                el.textContent = current;
                requestAnimationFrame(tick);
            };
            requestAnimationFrame(tick);
        });
    }

    // Also run counters on non-slider pages (about page milestones etc.)
    if (!document.getElementById('hero-slider')) {
        const counterObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    const target   = parseInt(entry.target.getAttribute('data-counter'), 10);
                    const duration = 1800;
                    const step     = Math.max(1, Math.ceil(target / (duration / 16)));
                    let current    = 0;
                    const tick = () => {
                        current += step;
                        if (current >= target) { entry.target.textContent = target + (target >= 50 || target === 10 ? '+' : ''); return; }
                        entry.target.textContent = current;
                        requestAnimationFrame(tick);
                    };
                    requestAnimationFrame(tick);
                    counterObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        document.querySelectorAll('[data-counter]').forEach(c => counterObserver.observe(c));
    }


    // =============================================
    // SCROLL ANIMATIONS
    // =============================================
    const animateEls = document.querySelectorAll('[data-animate]');

    if (animateEls.length) {
        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    const delay = parseFloat(entry.target.style.transitionDelay || '0') * 1000;
                    setTimeout(() => entry.target.classList.add('animated'), delay);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.10, rootMargin: '0px 0px -40px 0px' });

        animateEls.forEach(el => observer.observe(el));
    }


    // =============================================
    // FAQ ACCORDION
    // =============================================
    document.querySelectorAll('.faq-item').forEach(function (item) {
        const q = item.querySelector('.faq-q');
        const a = item.querySelector('.faq-a');
        if (!q || !a) return;

        q.addEventListener('click', function () {
            const isOpen = item.classList.contains('open');
            document.querySelectorAll('.faq-item').forEach(fi => {
                fi.classList.remove('open');
                const fa = fi.querySelector('.faq-a');
                if (fa) fa.classList.remove('open');
            });
            if (!isOpen) { item.classList.add('open'); a.classList.add('open'); }
        });
    });


    // =============================================
    // TESTIMONIAL CAROUSEL
    // =============================================
    const track    = document.getElementById('testi-track');
    const prevBtn  = document.getElementById('testi-prev');
    const nextBtn  = document.getElementById('testi-next');
    const dotsWrap = document.getElementById('testi-dots');

    if (track) {
        const cards    = Array.from(track.querySelectorAll('.testi-card'));
        let current    = 0;

        function getPerView() {
            if (window.innerWidth <= 600) return 1;
            if (window.innerWidth <= 991) return 2;
            return 3;
        }

        function getCardWidth() {
            return cards[0] ? cards[0].getBoundingClientRect().width + 24 : 0;
        }

        function buildDots() {
            if (!dotsWrap) return;
            const pv       = getPerView();
            const dotCount = Math.ceil(cards.length / pv);
            dotsWrap.innerHTML = '';
            for (let i = 0; i < dotCount; i++) {
                const s = document.createElement('span');
                if (i === 0) s.classList.add('active');
                s.addEventListener('click', () => goTo(i));
                dotsWrap.appendChild(s);
            }
        }

        function updateDots() {
            if (!dotsWrap) return;
            dotsWrap.querySelectorAll('span').forEach((d, i) =>
                d.classList.toggle('active', i === current));
        }

        function goTo(index) {
            const pv  = getPerView();
            const max = Math.ceil(cards.length / pv) - 1;
            current   = Math.max(0, Math.min(index, max));
            track.style.transform = `translateX(-${getCardWidth() * current * pv}px)`;
            updateDots();
        }

        if (prevBtn) prevBtn.addEventListener('click', () => goTo(current - 1));
        if (nextBtn) nextBtn.addEventListener('click', () => goTo(current + 1));

        let autoSlide = setInterval(() => {
            const pv  = getPerView();
            const max = Math.ceil(cards.length / pv) - 1;
            goTo(current >= max ? 0 : current + 1);
        }, 5000);

        track.addEventListener('mouseenter', () => clearInterval(autoSlide));
        track.addEventListener('mouseleave', () => {
            autoSlide = setInterval(() => {
                const pv  = getPerView();
                const max = Math.ceil(cards.length / pv) - 1;
                goTo(current >= max ? 0 : current + 1);
            }, 5000);
        });

        window.addEventListener('resize', () => { current = 0; buildDots(); goTo(0); });

        buildDots();
    }


    // =============================================
    // GALLERY LIGHTBOX
    // =============================================
    const lightbox = document.getElementById('lightbox');
    const lbImg    = document.getElementById('lb-img');
    const lbClose  = document.getElementById('lb-close');

    document.querySelectorAll('.gallery-item').forEach(item => {
        item.addEventListener('click', () => {
            const img = item.querySelector('img');
            if (img && lightbox && lbImg) {
                lbImg.src = img.src;
                lbImg.alt = img.alt;
                lightbox.classList.add('open');
                document.body.style.overflow = 'hidden';
            }
        });
    });

    function closeLightbox() {
        if (lightbox) { lightbox.classList.remove('open'); document.body.style.overflow = ''; }
    }

    if (lbClose)  lbClose.addEventListener('click', closeLightbox);
    if (lightbox) lightbox.addEventListener('click', e => { if (e.target === lightbox) closeLightbox(); });
    document.addEventListener('keydown', e => { if (e.key === 'Escape') closeLightbox(); });


    // =============================================
    // SCROLL TO TOP
    // =============================================
    const scrollTopBtn = document.getElementById('scroll-top');

    if (scrollTopBtn) {
        window.addEventListener('scroll', () =>
            scrollTopBtn.classList.toggle('visible', window.scrollY > 400), { passive: true });
        scrollTopBtn.addEventListener('click', () =>
            window.scrollTo({ top: 0, behavior: 'smooth' }));
    }


    // =============================================
    // SMOOTH ANCHOR SCROLL (sub-service links)
    // =============================================
    document.querySelectorAll('a[href^="#"], [data-smooth]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (!href || href === '#') return;
            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                const offset = 110;
                window.scrollTo({ top: target.getBoundingClientRect().top + window.scrollY - offset, behavior: 'smooth' });
            }
        });
    });


    // =============================================
    // FORM FEEDBACK
    // =============================================
    document.querySelectorAll('form').forEach(form => {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            const btn = form.querySelector('button[type="submit"]');
            if (!btn) return;
            const orig = btn.innerHTML;
            btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Sending...';
            btn.disabled  = true;
            setTimeout(() => {
                btn.innerHTML = '<i class="fa-solid fa-circle-check"></i> Sent Successfully!';
                btn.style.background = '#2e7d32';
                form.reset();
                setTimeout(() => { btn.innerHTML = orig; btn.style.background = ''; btn.disabled = false; }, 3500);
            }, 1200);
        });
    });

}());
