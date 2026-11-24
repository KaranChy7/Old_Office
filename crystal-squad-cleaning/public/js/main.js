// =============================================
// OLD SCHOOL CLEANING & MAINTENANCE SERVICES — MAIN JS
// =============================================

(function () {
  'use strict';

  // ── Broken image fallback ─────────────────────
  // If an image fails to load (network hiccup, blocked request, offline
  // testing, etc.) hide it and reveal a themed placeholder background on
  // its wrapper instead of the browser's broken-image glyph.
  document.querySelectorAll('img').forEach(img => {
    img.addEventListener('error', () => {
      img.style.display = 'none';
      const fallbackTarget = img.closest(
        '.banner__image-wrap, .how-we-work__image-wrap, .page-about__media, .ba-compare__panel'
      );
      if (fallbackTarget) fallbackTarget.classList.add('img-fallback');
    }, { once: true });
  });

  // ── Header scroll shadow ──────────────────────
  const header = document.getElementById('site-header');
  if (header) {
    const onScroll = () => {
      header.classList.toggle('scrolled', window.scrollY > 60);
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  // ── Hamburger / mobile nav toggle ─────────────
  const hamburger = document.getElementById('hamburger');
  const nav = document.getElementById('main-nav');
  const navBackdrop = document.getElementById('nav-backdrop');

  if (hamburger && nav) {
    const closeNav = () => {
      nav.classList.remove('open');
      hamburger.classList.remove('active');
      hamburger.setAttribute('aria-expanded', 'false');
      if (navBackdrop) navBackdrop.classList.remove('open');
      document.body.style.overflow = '';
    };

    hamburger.addEventListener('click', () => {
      const open = nav.classList.toggle('open');
      hamburger.classList.toggle('active', open);
      hamburger.setAttribute('aria-expanded', open);
      if (navBackdrop) navBackdrop.classList.toggle('open', open);
      document.body.style.overflow = open ? 'hidden' : '';
    });

    nav.querySelectorAll('.nav__link, .nav__cta, .nav__menu-link').forEach(link => {
      link.addEventListener('click', closeNav);
    });

    if (navBackdrop) navBackdrop.addEventListener('click', closeNav);

    // Close with the Escape key, or when the screen grows to desktop size
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && nav.classList.contains('open')) closeNav();
    });
    window.addEventListener('resize', () => {
      if (window.innerWidth > 1024 && nav.classList.contains('open')) closeNav();
    });
  }

  // ── Services dropdown (tap to open on mobile / touch) ──
  const dropdown = document.getElementById('nav-dropdown');
  const dropdownToggle = document.getElementById('nav-dropdown-toggle');
  if (dropdown && dropdownToggle) {
    dropdownToggle.addEventListener('click', () => {
      const open = dropdown.classList.toggle('open');
      dropdownToggle.setAttribute('aria-expanded', open);
    });

    document.addEventListener('click', (e) => {
      if (!dropdown.contains(e.target)) {
        dropdown.classList.remove('open');
        dropdownToggle.setAttribute('aria-expanded', 'false');
      }
    });
  }

  // ── Scroll reveal + counters ────────────────────
  // Handled by scroll-animations.js (GSAP ScrollTrigger) when available.
  // This is the no-JS-library fallback if that CDN script fails to load.
  if (!window.__scrollAnimationsActive) {

    const revealEls = document.querySelectorAll('[data-reveal]');
    if (revealEls.length) {
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const delay = entry.target.dataset.delay || 0;
            setTimeout(() => entry.target.classList.add('revealed'), delay);
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.12 });

      revealEls.forEach(el => observer.observe(el));
    }

    function animateCounter(el) {
      const target = parseInt(el.dataset.target, 10);
      const duration = 1800;
      const step = 16;
      const increment = target / (duration / step);
      let current = 0;

      const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
          current = target;
          clearInterval(timer);
        }
        el.textContent = Math.floor(current) + (el.dataset.suffix || '');
      }, step);
    }

    const counters = document.querySelectorAll('[data-counter]');
    if (counters.length) {
      const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            animateCounter(entry.target);
            counterObserver.unobserve(entry.target);
          }
        });
      }, { threshold: 0.5 });
      counters.forEach(c => counterObserver.observe(c));
    }
  }

  // ── Gallery lightbox ───────────────────────────
  const galleryItems = document.querySelectorAll('.gallery__item');
  if (galleryItems.length) {
    const lightbox = document.createElement('div');
    lightbox.className = 'gallery-lightbox';
    lightbox.innerHTML = `
      <figure class="gallery-lightbox__figure">
        <button type="button" class="gallery-lightbox__close" aria-label="Close">
          <i class="fa-solid fa-xmark" aria-hidden="true"></i>
        </button>
        <img class="gallery-lightbox__img" src="" alt="" />
        <figcaption class="gallery-lightbox__caption"></figcaption>
      </figure>`;
    document.body.appendChild(lightbox);

    const lightboxImg = lightbox.querySelector('.gallery-lightbox__img');
    const lightboxCaption = lightbox.querySelector('.gallery-lightbox__caption');
    const lightboxClose = lightbox.querySelector('.gallery-lightbox__close');

    const openLightbox = (img) => {
      if (!img) return;
      const baLabel = img.closest('.ba-compare__panel')?.querySelector('.ba-compare__label');

      lightboxImg.src = img.src;
      lightboxImg.alt = img.alt || '';
      lightboxCaption.textContent = baLabel ? baLabel.textContent : '';
      lightbox.classList.add('open');
      document.body.style.overflow = 'hidden';
    };

    const closeLightbox = () => {
      lightbox.classList.remove('open');
      document.body.style.overflow = '';
    };

    document.querySelectorAll('.gallery__item img').forEach(img => {
      img.addEventListener('click', (e) => {
        e.stopPropagation();
        openLightbox(img);
      });
    });

    lightboxClose.addEventListener('click', closeLightbox);

    lightbox.addEventListener('click', (e) => {
      if (e.target === lightbox) closeLightbox();
    });

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && lightbox.classList.contains('open')) closeLightbox();
    });
  }

  // ── Contact form / quote form submission ───────
  const contactForm = document.getElementById('contact-form') || document.getElementById('quote-form');
  if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
      e.preventDefault();
      // Spam trap filled in: silently ignore
      if (contactForm.elements.website.value) return;
      const btn = contactForm.querySelector('.contact__submit');
      const originalText = btn.textContent;
      btn.textContent = 'Sending…';
      btn.disabled = true;
      // Simulate (replace with real AJAX/fetch as needed)
      setTimeout(() => {
        btn.textContent = '✓ Message Sent!';
        btn.style.background = '#28a745';
        contactForm.reset();
        setTimeout(() => {
          btn.textContent = originalText;
          btn.style.background = '';
          btn.disabled = false;
        }, 3500);
      }, 1200);
    });
  }

  // ── Booking form submission ────────────────────
  const bookingForm = document.getElementById('booking-form');
  if (bookingForm) {
    bookingForm.addEventListener('submit', (e) => {
      e.preventDefault();
      // Spam trap filled in: silently ignore
      if (bookingForm.elements.website.value) return;
      const btn = bookingForm.querySelector('.booking__submit');
      const originalText = btn.textContent;
      btn.textContent = 'Sending…';
      btn.disabled = true;
      // Simulate (replace with real AJAX/fetch as needed)
      setTimeout(() => {
        btn.textContent = '✓ Booking Request Sent!';
        btn.style.background = '#28a745';
        bookingForm.reset();
        setTimeout(() => {
          btn.textContent = originalText;
          btn.style.background = '';
          btn.disabled = false;
        }, 3500);
      }, 1200);
    });
  }

})();
