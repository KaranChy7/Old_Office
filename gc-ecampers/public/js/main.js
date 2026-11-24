/**
 * GC-E CAMPERS — MAIN JS
 * Handles: header scroll, mobile nav, scroll animations,
 *          parallax, form validation, counters
 */

'use strict';

// ─── HEADER SCROLL ───────────────────────────────────────
(function () {
  const header = document.getElementById('siteHeader');
  if (!header) return;

  const onScroll = () => {
    if (window.scrollY > 60) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  };

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();
})();


// ─── BACK TO TOP ─────────────────────────────────────────
(function () {
  const btn = document.getElementById('backToTop');
  if (!btn) return;

  btn.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
})();


// ─── MOBILE NAV ──────────────────────────────────────────
(function () {
  const toggle   = document.getElementById('menuToggle');
  const nav      = document.getElementById('mobileNav');
  const overlay  = document.getElementById('mobileOverlay');
  const closeBtn = document.getElementById('mobileNavClose');

  if (!toggle || !nav) return;

  const open = () => {
    nav.classList.add('is-open');
    overlay.classList.add('is-open');
    toggle.classList.add('is-open');
    toggle.setAttribute('aria-expanded', 'true');
    document.body.classList.add('no-scroll');
  };

  const close = () => {
    nav.classList.remove('is-open');
    overlay.classList.remove('is-open');
    toggle.classList.remove('is-open');
    toggle.setAttribute('aria-expanded', 'false');
    document.body.classList.remove('no-scroll');
  };

  toggle.addEventListener('click', () => {
    nav.classList.contains('is-open') ? close() : open();
  });

  if (closeBtn) closeBtn.addEventListener('click', close);
  if (overlay)  overlay.addEventListener('click', close);

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') close();
  });

  // Hire / Fit-Outs sub-menus: tap the arrow to show/hide
  nav.querySelectorAll('.mobile-nav__toggle').forEach((btn) => {
    btn.addEventListener('click', () => {
      const group  = btn.closest('.mobile-nav__group');
      const isOpen = group.classList.toggle('is-open');
      btn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });
  });
})();


// ─── SCROLL REVEAL (Intersection Observer) ───────────────
(function () {
  const elements = document.querySelectorAll('[data-animate]');
  if (!elements.length) return;

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.15, rootMargin: '0px 0px -60px 0px' }
  );

  elements.forEach((el) => observer.observe(el));
})();


// ─── PARALLAX EFFECT ─────────────────────────────────────
(function () {
  const parallaxEls = [
    { bg: document.getElementById('parallaxBg'),   banner: document.getElementById('parallaxBanner')   },
    { bg: document.getElementById('workshopBg'),   banner: document.getElementById('workshopBanner')   },
  ];

  const onScroll = () => {
    parallaxEls.forEach(({ bg, banner }) => {
      if (!bg || !banner) return;
      const rect   = banner.getBoundingClientRect();
      const center = rect.top + rect.height / 2 - window.innerHeight / 2;
      const offset = center * 0.3;
      bg.style.transform = `translateY(${offset}px)`;
    });
  };

  window.addEventListener('scroll', onScroll, { passive: true });
})();


// ─── STAT COUNTER ANIMATION ──────────────────────────────
(function () {
  const counters = document.querySelectorAll('.stat-item__number');
  if (!counters.length) return;

  const parseNum = (str) => {
    const match = str.match(/[\d.]+/);
    return match ? parseFloat(match[0]) : null;
  };

  const animateCounter = (el, target, suffix, prefix) => {
    const duration = 1400;
    const start    = performance.now();
    const isFloat  = String(target).includes('.');

    const update = (now) => {
      const elapsed  = now - start;
      const progress = Math.min(elapsed / duration, 1);
      const ease     = 1 - Math.pow(1 - progress, 3);
      const current  = target * ease;
      el.textContent = prefix + (isFloat ? current.toFixed(1) : Math.round(current)) + suffix;
      if (progress < 1) requestAnimationFrame(update);
    };

    requestAnimationFrame(update);
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) return;

      const el      = entry.target;
      const raw     = el.textContent.trim();
      const num     = parseNum(raw);

      // Skip non-numeric values like '∞' or '★'
      if (num === null || isNaN(num)) { observer.unobserve(el); return; }

      const prefix = raw.startsWith('$') ? '$' : '';
      const suffix = raw.replace(prefix, '').replace(String(num), '');

      animateCounter(el, num, suffix, prefix);
      observer.unobserve(el);
    });
  }, { threshold: 0.5 });

  counters.forEach((c) => observer.observe(c));
})();


// ─── CONTACT FORM VALIDATION ─────────────────────────────
(function () {
  const form = document.getElementById('contactForm');
  if (!form) return;

  form.addEventListener('submit', (e) => {
    e.preventDefault();

    let valid = true;

    const name    = form.querySelector('#contact_name');
    const email   = form.querySelector('#contact_email');
    const message = form.querySelector('#contact_message');

    const setError = (el, errId, show) => {
      const err = document.getElementById(errId);
      if (err) err.classList.toggle('is-visible', show);
      el.classList.toggle('is-invalid', show);
    };

    if (!name.value.trim()) {
      setError(name, 'nameError', true); valid = false;
    } else {
      setError(name, 'nameError', false);
    }

    const emailRe = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRe.test(email.value)) {
      setError(email, 'emailError', true); valid = false;
    } else {
      setError(email, 'emailError', false);
    }

    if (!message.value.trim()) {
      setError(message, 'messageError', true); valid = false;
    } else {
      setError(message, 'messageError', false);
    }

    if (!valid) return;

    // Simulate submission (replace with real AJAX/PHP handler)
    const btn = form.querySelector('button[type="submit"]');
    btn.textContent = 'Sending…';
    btn.disabled = true;

    setTimeout(() => {
      form.hidden = true;
      const success = document.getElementById('contactSuccess');
      if (success) success.classList.add('is-visible');
    }, 900);
  });
})();


// ─── QUOTE FORM ──────────────────────────────────────────
(function () {
  const form = document.getElementById('quoteForm');
  if (!form) return;

  form.addEventListener('submit', (e) => {
    e.preventDefault();

    const btn = form.querySelector('button[type="submit"]');
    btn.textContent = 'Submitting…';
    btn.disabled = true;

    setTimeout(() => {
      const success = document.getElementById('quoteSuccess');
      if (success) success.classList.add('is-visible');
      btn.textContent = 'Enquiry Sent';
    }, 1000);
  });
})();


// ─── SMOOTH ANCHOR LINKS ─────────────────────────────────
document.querySelectorAll('a[href^="#"]').forEach((link) => {
  link.addEventListener('click', (e) => {
    const target = document.querySelector(link.getAttribute('href'));
    if (!target) return;
    e.preventDefault();
    const offset = 90;
    const top    = target.getBoundingClientRect().top + window.scrollY - offset;
    window.scrollTo({ top, behavior: 'smooth' });
  });
});


// ─── ACTIVE NAV HIGHLIGHTING (scroll spy) ────────────────
(function () {
  const sections = document.querySelectorAll('section[id]');
  const navLinks = document.querySelectorAll('.site-nav a, .mobile-nav a');

  if (!sections.length) return;

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          navLinks.forEach((link) => {
            link.classList.toggle(
              'active',
              link.getAttribute('href') && link.getAttribute('href').includes('#' + entry.target.id)
            );
          });
        }
      });
    },
    { threshold: 0.4 }
  );

  sections.forEach((s) => observer.observe(s));
})();
