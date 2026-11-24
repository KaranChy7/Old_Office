// =============================================
// CRYSTAL SQUAD CLEANING CO. — MAIN JS
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
        '.banner__media, .how-we-work__image-wrap, .page-about__media, .gallery__photo, .services__card-media, .showcase__media-item, .call-us__media, .property-types__media, .service-area__media'
      );
      if (fallbackTarget) fallbackTarget.classList.add('img-fallback');
    }, { once: true });
  });

  // ── Job videos: play muted while on screen ────
  // Used on the homepage service cards and showcase (preload="none" keeps the page light).
  const inviewVideos = document.querySelectorAll('video[data-inview-play]');
  if (inviewVideos.length && 'IntersectionObserver' in window) {
    const videoObserver = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.play().catch(() => {});
        } else {
          entry.target.pause();
        }
      });
    }, { threshold: 0.4 });
    inviewVideos.forEach(video => videoObserver.observe(video));
  }

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

    nav.querySelectorAll('.nav__link, .nav__cta, .nav__dropdown-link, .nav__submenu-link').forEach(link => {
      link.addEventListener('click', closeNav);
    });

    if (navBackdrop) navBackdrop.addEventListener('click', closeNav);
  }

  // ── Services dropdown (desktop flyout + mobile accordion) ─────
  document.querySelectorAll('.nav__dropdown-toggle').forEach(toggle => {
    toggle.addEventListener('click', (e) => {
      e.preventDefault();
      const item = toggle.closest('.nav__item--dropdown, .nav__dropdown-item');
      if (!item) return;
      const isOpen = item.classList.toggle('open');
      toggle.setAttribute('aria-expanded', isOpen);
    });
  });

  document.addEventListener('click', (e) => {
    if (e.target.closest('.nav__item--dropdown')) return;
    document.querySelectorAll('.nav__item--dropdown.open, .nav__dropdown-item.open').forEach(item => {
      item.classList.remove('open');
      const toggle = item.querySelector(':scope > .nav__dropdown-toggle');
      if (toggle) toggle.setAttribute('aria-expanded', 'false');
    });
  });

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
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" />
          </svg>
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
      const caption = img.closest('.gallery__item')?.querySelector('.gallery__item-caption');

      lightboxImg.src = img.src;
      lightboxImg.alt = img.alt || '';
      lightboxCaption.textContent = caption ? caption.textContent : '';
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

  // ── Gallery page filters ───────────────────────
  const filterBtns = document.querySelectorAll('.gallery__filter-btn');
  if (filterBtns.length) {
    const filterItems = document.querySelectorAll('.gallery__grid--page .gallery__item');

    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        filterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        const filter = btn.dataset.filter;
        filterItems.forEach(item => {
          const show = filter === 'all' || item.dataset.category === filter;
          item.classList.toggle('gallery__item--hidden', !show);
        });
      });
    });
  }

  // ── Blog card "Read more" toggle ──────────────
  document.querySelectorAll('[data-blog-toggle]').forEach(btn => {
    btn.addEventListener('click', () => {
      const card = btn.closest('.blog__card');
      if (!card) return;
      const expanded = card.classList.toggle('blog__card--expanded');
      btn.setAttribute('aria-expanded', expanded);
      const label = btn.querySelector('.blog__card-link-text');
      if (label) label.textContent = expanded ? 'Read less' : 'Read more';
    });
  });

  // ── Banner video: background on mobile/tablet, so no player controls ──
  const bannerVideo = document.getElementById('banner-video');
  if (bannerVideo) {
    const mobile = window.matchMedia('(max-width: 1024px)');
    const syncControls = () => {
      bannerVideo.controls = !mobile.matches;
      if (mobile.matches) {
        bannerVideo.muted = true;
        bannerVideo.play().catch(() => {});
      }
    };
    syncControls();
    mobile.addEventListener('change', syncControls);
  }

  // ── Contact form submission ────────────────────
  const contactForm = document.getElementById('contact-form');
  if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
      e.preventDefault();
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

})();
