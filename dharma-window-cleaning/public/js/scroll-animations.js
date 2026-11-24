// =============================================
// GLINT PLUS PAINTING SERVICE — SCROLL ANIMATIONS (GSAP)
// =============================================
// Progressive enhancement layer over the base [data-reveal] system in
// main.js. If GSAP/ScrollTrigger fail to load (CDN blocked, offline),
// main.js falls back to its own IntersectionObserver + CSS transitions.

(function () {
  'use strict';

  if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;

  gsap.registerPlugin(ScrollTrigger);
  window.__scrollAnimationsActive = true;

  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // ── Scroll progress bar ───────────────────────────
  const progressBar = document.getElementById('scroll-progress-bar');
  if (progressBar) {
    gsap.set(progressBar, { scaleX: 0, transformOrigin: 'left center' });
    gsap.to(progressBar, {
      scaleX: 1,
      ease: 'none',
      scrollTrigger: {
        trigger: document.documentElement,
        start: 'top top',
        end: 'bottom bottom',
        scrub: 0.3
      }
    });
  }

  // ── Scroll reveal (replaces main.js IntersectionObserver) ────────
  document.querySelectorAll('[data-reveal]').forEach((el) => {
    el.style.transition = 'none'; // hand off to GSAP so CSS doesn't fight the ticker

    if (reduceMotion) {
      gsap.set(el, { opacity: 1, x: 0, y: 0 });
      el.classList.add('revealed');
      return;
    }

    const dir = el.getAttribute('data-reveal');
    const delay = (parseInt(el.dataset.delay, 10) || 0) / 1000;
    const fromVars = { opacity: 0, scale: 0.96 };
    if (dir === 'left') fromVars.x = -46;
    else if (dir === 'right') fromVars.x = 46;
    else fromVars.y = 38;

    gsap.fromTo(el, fromVars, {
      opacity: 1,
      x: 0,
      y: 0,
      scale: 1,
      duration: 1,
      delay,
      ease: 'power3.out',
      onStart: () => el.classList.add('revealed'),
      scrollTrigger: {
        trigger: el,
        start: 'top 88%',
        once: true
      }
    });
  });

  // ── Animated counters (replaces main.js setInterval version) ─────
  document.querySelectorAll('[data-counter]').forEach((el) => {
    const target = parseInt(el.dataset.target, 10) || 0;
    const suffix = el.dataset.suffix || '';

    if (reduceMotion) {
      el.textContent = target + suffix;
      return;
    }

    const proxy = { val: 0 };
    ScrollTrigger.create({
      trigger: el,
      start: 'top 90%',
      once: true,
      onEnter: () => {
        gsap.to(proxy, {
          val: target,
          duration: 1.8,
          ease: 'power2.out',
          onUpdate: () => { el.textContent = Math.floor(proxy.val) + suffix; }
        });
      }
    });
  });

  // ── Hero recede parallax (home banner) ────────────
  if (!reduceMotion) {
    const banner = document.querySelector('.banner');
    const bannerContent = banner && banner.querySelector('.banner__content');
    if (bannerContent) {
      gsap.to(bannerContent, {
        yPercent: 18,
        opacity: 0.35,
        ease: 'none',
        scrollTrigger: {
          trigger: banner,
          start: 'top top',
          end: 'bottom top',
          scrub: true
        }
      });
    }
  }

  // ── Keep trigger positions accurate as layout shifts ──────────────
  window.addEventListener('load', () => ScrollTrigger.refresh());

})();
