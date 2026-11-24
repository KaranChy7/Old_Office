// =============================================
// TRU-LINE INSTALLS — MAIN JS
// =============================================

(function () {
  'use strict';

  // ── Header scroll behaviour ──────────────────
  const header = document.getElementById('site-header');
  if (header) {
    const onScroll = () => {
      header.classList.toggle('scrolled', window.scrollY > 60);
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  // ── Hamburger / Mobile Nav ────────────────────
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
      nav.querySelectorAll('.nav__item--dropdown.open').forEach(item => {
        item.classList.remove('open');
        const toggle = item.querySelector('.nav__dropdown-toggle');
        if (toggle) toggle.setAttribute('aria-expanded', 'false');
      });
    };

    hamburger.addEventListener('click', () => {
      const open = nav.classList.toggle('open');
      hamburger.classList.toggle('active', open);
      hamburger.setAttribute('aria-expanded', open);
      if (navBackdrop) navBackdrop.classList.toggle('open', open);
      document.body.style.overflow = open ? 'hidden' : '';
    });

    // Close on link click
    nav.querySelectorAll('.nav__link, .nav__phone, .nav__dropdown-link').forEach(link => {
      link.addEventListener('click', closeNav);
    });

    // Close on backdrop click
    if (navBackdrop) navBackdrop.addEventListener('click', closeNav);
  }

  // ── Services dropdown (header) ─────────────────
  document.querySelectorAll('.nav__dropdown-toggle').forEach(toggle => {
    toggle.addEventListener('click', (e) => {
      e.preventDefault();
      const item = toggle.closest('.nav__item--dropdown');
      if (!item) return;
      const isOpen = item.classList.toggle('open');
      toggle.setAttribute('aria-expanded', isOpen);
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

  // ── FAQ accordion ─────────────────────────────
  const faqItems = document.querySelectorAll('.faq__item');
  faqItems.forEach(item => {
    const question = item.querySelector('.faq__question');
    if (question) {
      question.addEventListener('click', () => {
        const isOpen = item.classList.contains('open');
        // Close all
        faqItems.forEach(i => i.classList.remove('open'));
        // Toggle clicked
        if (!isOpen) item.classList.add('open');
      });
    }
  });

  // ── Gallery filter ────────────────────────────
  const filterBtns = document.querySelectorAll('.gallery__filter button');
  const galleryItems = document.querySelectorAll('.gallery__item');

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filter = btn.dataset.filter;
      galleryItems.forEach(item => {
        if (filter === 'all' || item.dataset.category === filter) {
          item.style.display = '';
        } else {
          item.style.display = 'none';
        }
      });
    });
  });

  // ── Gallery lightbox ───────────────────────────
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
      const item = img.closest('.gallery__item');
      const overlayCaption = item ? item.querySelector('.gallery__overlay span') : null;
      const baLabel = img.closest('.ba-compare__panel')?.querySelector('.ba-compare__label');

      lightboxImg.src = img.src;
      lightboxImg.alt = img.alt || '';
      lightboxCaption.textContent = overlayCaption ? overlayCaption.textContent : (baLabel ? baLabel.textContent : '');
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

  // ── Hero slider — background image, framed photo and counter stay in sync ──
  const heroMediaSlides = Array.from(document.querySelectorAll('.hero__media-slide'));
  if (heroMediaSlides.length > 1) {
    const heroFrameSlides = Array.from(document.querySelectorAll('.hero__frame-img'));
    const heroCounter = document.getElementById('hero-slide-count');
    const heroProgressBar = document.getElementById('hero-slide-progress');
    const heroTotal = heroMediaSlides.length;
    let heroIndex = heroMediaSlides.findIndex(slide => slide.classList.contains('active'));
    if (heroIndex === -1) heroIndex = 0;

    const updateHeroMeta = () => {
      if (heroCounter) heroCounter.textContent = String(heroIndex + 1).padStart(2, '0');
      if (heroProgressBar) heroProgressBar.style.width = ((heroIndex + 1) / heroTotal * 100) + '%';
    };

    const goToHeroSlide = (nextIndex) => {
      heroMediaSlides[heroIndex].classList.remove('active');
      if (heroFrameSlides[heroIndex]) heroFrameSlides[heroIndex].classList.remove('active');

      heroIndex = nextIndex;

      heroMediaSlides[heroIndex].classList.add('active');
      if (heroFrameSlides[heroIndex]) heroFrameSlides[heroIndex].classList.add('active');
      updateHeroMeta();
    };

    updateHeroMeta();
    setInterval(() => goToHeroSlide((heroIndex + 1) % heroTotal), 4500);
  }

  // ── Services showcase slider (synced text + image) ──
  const servicesSlider = document.getElementById('services-slider');
  if (servicesSlider) {
    const textSlides = Array.from(servicesSlider.querySelectorAll('.services__slide-text'));
    const mediaSlides = Array.from(servicesSlider.querySelectorAll('.services__slide-media'));
    const ticks = Array.from(servicesSlider.querySelectorAll('.services__tick'));
    const prevBtn = document.getElementById('services-prev');
    const nextBtn = document.getElementById('services-next');
    const currentEl = document.getElementById('services-current');
    const moreLink = document.getElementById('services-more');
    const links = textSlides.map(el => el.dataset.link).filter(Boolean);
    const total = textSlides.length;
    let index = 0;
    let autoplayTimer = null;

    function render() {
      textSlides.forEach((el, i) => el.classList.toggle('active', i === index));
      mediaSlides.forEach((el, i) => el.classList.toggle('active', i === index));
      ticks.forEach((el, i) => el.classList.toggle('active', i === index));
      if (currentEl) currentEl.textContent = String(index + 1).padStart(2, '0');
      if (moreLink && links[index]) moreLink.setAttribute('href', links[index]);
    }

    function goTo(i) {
      index = ((i % total) + total) % total;
      render();
    }

    function startAutoplay() {
      autoplayTimer = setInterval(() => goTo(index + 1), 5000);
    }

    function restartAutoplay() {
      clearInterval(autoplayTimer);
      startAutoplay();
    }

    if (prevBtn) prevBtn.addEventListener('click', () => { goTo(index - 1); restartAutoplay(); });
    if (nextBtn) nextBtn.addEventListener('click', () => { goTo(index + 1); restartAutoplay(); });

    servicesSlider.addEventListener('mouseenter', () => clearInterval(autoplayTimer));
    servicesSlider.addEventListener('mouseleave', startAutoplay);

    render();
    startAutoplay();
  }

  // ── Testimonials slider ────────────────────────
  const testiTrack = document.getElementById('testimonials-track');
  if (testiTrack) {
    const slides = Array.from(testiTrack.children);
    const prevBtn = document.getElementById('testi-prev');
    const nextBtn = document.getElementById('testi-next');
    const dotsWrap = document.getElementById('testi-dots');
    let perView = window.innerWidth <= 768 ? 1 : 2;
    let index = 0;

    const maxIndex = () => Math.max(0, slides.length - perView);

    function buildDots() {
      dotsWrap.innerHTML = '';
      for (let i = 0; i <= maxIndex(); i++) {
        const dot = document.createElement('button');
        dot.className = 'testimonials__dot';
        dot.setAttribute('aria-label', `Go to testimonial ${i + 1}`);
        dot.addEventListener('click', () => goTo(i));
        dotsWrap.appendChild(dot);
      }
    }

    function update() {
      const cardWidth = slides[0].getBoundingClientRect().width;
      const gap = parseFloat(getComputedStyle(testiTrack).gap) || 0;
      testiTrack.style.transform = `translateX(-${index * (cardWidth + gap)}px)`;

      if (prevBtn) prevBtn.disabled = index === 0;
      if (nextBtn) nextBtn.disabled = index === maxIndex();

      dotsWrap.querySelectorAll('.testimonials__dot').forEach((dot, i) => {
        dot.classList.toggle('active', i === index);
      });
    }

    function goTo(i) {
      index = Math.min(Math.max(i, 0), maxIndex());
      update();
    }

    if (prevBtn) prevBtn.addEventListener('click', () => goTo(index - 1));
    if (nextBtn) nextBtn.addEventListener('click', () => goTo(index + 1));

    window.addEventListener('resize', () => {
      const newPerView = window.innerWidth <= 768 ? 1 : 2;
      if (newPerView !== perView) {
        perView = newPerView;
        index = 0;
        buildDots();
      }
      update();
    });

    buildDots();
    update();
  }

  // ── Discover page sticky rail ──────────────────
  const discoverRail = document.querySelector('.discover-page__rail');
  if (discoverRail) {
    const railLinks = discoverRail.querySelectorAll('.discover-page__rail-link');
    const blocks = document.querySelectorAll('.discover-page__block');

    const setActive = (id) => {
      railLinks.forEach(link => {
        link.classList.toggle('active', link.getAttribute('href') === `#${id}`);
      });
    };

    const blockObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) setActive(entry.target.id);
      });
    }, { rootMargin: '-30% 0px -60% 0px' });

    blocks.forEach(block => blockObserver.observe(block));
    if (blocks[0]) setActive(blocks[0].id);
  }

  // ── Quote builder live summary ─────────────────
  const quoteForm = document.getElementById('quote-form');
  if (quoteForm) {
    const summaryService = document.getElementById('summary-service');
    const summaryScope = document.getElementById('summary-scope');
    const summaryLocation = document.getElementById('summary-location');
    const summaryTimeline = document.getElementById('summary-timeline');
    const summaryBudget = document.getElementById('summary-budget');
    const progressBar = document.getElementById('summary-progress-bar');
    const progressLabel = document.getElementById('summary-progress-label');
    const summaryValues = [summaryService, summaryScope, summaryLocation, summaryTimeline, summaryBudget];

    const updateProgress = () => {
      const filled = summaryValues.filter(el => el && el.classList.contains('is-filled')).length;
      const total = summaryValues.length;
      if (progressBar) progressBar.style.width = (filled / total * 100) + '%';
      if (progressLabel) progressLabel.textContent = `${filled} of ${total} completed`;
    };

    const setText = (el, value, fallback) => {
      if (!el) return;
      const hasValue = Boolean(value && value.trim());
      el.textContent = hasValue ? value : fallback;
      el.classList.toggle('is-filled', hasValue);
      updateProgress();
    };

    quoteForm.querySelectorAll('input[name="service"]').forEach(input => {
      input.addEventListener('change', () => setText(summaryService, input.value, 'Not selected yet'));
    });

    quoteForm.querySelectorAll('input[name="timeline"]').forEach(input => {
      input.addEventListener('change', () => setText(summaryTimeline, input.value, 'Not selected yet'));
    });

    const scopeInput = document.getElementById('scope');
    if (scopeInput) {
      scopeInput.addEventListener('input', () => {
        const value = scopeInput.value.trim();
        setText(summaryScope, value.length > 60 ? value.slice(0, 60) + '…' : value, 'Not described yet');
      });
    }

    const locationInput = document.getElementById('quote-suburb');
    if (locationInput) {
      locationInput.addEventListener('input', () => setText(summaryLocation, locationInput.value, 'Not entered yet'));
    }

    const budgetInput = document.getElementById('budget');
    if (budgetInput) {
      budgetInput.addEventListener('change', () => {
        const selected = budgetInput.options[budgetInput.selectedIndex];
        setText(summaryBudget, selected.value ? selected.text : '', 'Not sure yet');
      });
    }

    updateProgress();

  }

  // ── Smooth scroll for anchor links ────────────
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', (e) => {
      const target = document.querySelector(anchor.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });

  // ── Form submission (contact + quote) ────────────
  // Posts to api/send-mail.php on PHP hosting. On a static host (e.g. Netlify)
  // that endpoint doesn't exist, so it falls back to a Netlify Forms post.
  function wireForm(form, buttonSelector, onReset) {
    if (!form) return;
    const btn = form.querySelector(buttonSelector);
    const status = form.querySelector('.form-status');
    const originalHTML = btn.innerHTML;

    const showStatus = (ok, message) => {
      if (!status) return;
      status.textContent = message;
      status.classList.toggle('is-success', ok);
      status.classList.toggle('is-error', !ok);
    };

    const post = (url, body) => fetch(url, {
      method: 'POST',
      headers: { 'Content-Type': 'application/x-www-form-urlencoded', 'Accept': 'application/json' },
      body
    });

    form.addEventListener('submit', async (e) => {
      e.preventDefault();
      if (!form.checkValidity()) {
        form.reportValidity();
        showStatus(false, 'Please complete the highlighted fields.');
        return;
      }

      const body = new URLSearchParams(new FormData(form)).toString();
      btn.disabled = true;
      btn.textContent = 'Sending…';
      showStatus(true, '');

      try {
        let ok = false;
        let message = '';
        const res = await post(form.getAttribute('action'), body);
        const isJson = (res.headers.get('content-type') || '').includes('application/json');

        if (isJson) {
          const data = await res.json();
          ok = Boolean(data.ok);
          message = data.message;
        } else {
          const fallback = await post('/', body);
          ok = fallback.ok;
        }

        if (ok) {
          showStatus(true, message || 'Thanks — your message has been sent. We’ll be in touch shortly.');
          form.reset();
          if (onReset) onReset();
        } else {
          showStatus(false, message || 'Sorry, something went wrong. Please call 0478 314 984 or email info@trulineinstalls.com.au.');
        }
      } catch (err) {
        showStatus(false, 'Sorry, your message couldn’t be sent. Please call 0478 314 984 or email info@trulineinstalls.com.au.');
      } finally {
        btn.disabled = false;
        btn.innerHTML = originalHTML;
      }
    });
  }

  wireForm(document.getElementById('contact-form'), '.contact__submit');
  wireForm(document.getElementById('quote-form'), '.quote__submit', () => {
    // Refresh the live summary after the form clears
    document.querySelectorAll('#quote-form input, #quote-form textarea, #quote-form select').forEach(el => {
      el.dispatchEvent(new Event(el.tagName === 'SELECT' ? 'change' : 'input'));
    });
    ['summary-service', 'summary-timeline'].forEach(id => {
      const el = document.getElementById(id);
      if (el) { el.textContent = 'Not selected yet'; el.classList.remove('is-filled'); }
    });
    const bar = document.getElementById('summary-progress-bar');
    const label = document.getElementById('summary-progress-label');
    if (bar) bar.style.width = '0%';
    if (label) label.textContent = '0 of 5 completed';
  });

})();
