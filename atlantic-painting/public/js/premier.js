// =============================================
// PREMIER PAINTING — MAIN JS
// =============================================

(function () {
  'use strict';

  const header = document.getElementById('pp-header');
  const nav = document.getElementById('pp-nav');
  const hamburger = document.getElementById('pp-hamburger');

  // ── Header scroll shadow ──────────────────────
  if (header) {
    const onScroll = () => header.classList.toggle('is-scrolled', window.scrollY > 10);
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  // ── Mobile nav toggle ─────────────────────────
  if (nav && hamburger) {
    const setOpen = (open) => {
      nav.classList.toggle('is-open', open);
      hamburger.classList.toggle('is-active', open);
      hamburger.setAttribute('aria-expanded', open);
      document.body.classList.toggle('nav-open', open);
    };

    hamburger.addEventListener('click', () => setOpen(!nav.classList.contains('is-open')));
    nav.querySelectorAll('a').forEach(link => link.addEventListener('click', () => setOpen(false)));
    document.addEventListener('keydown', e => { if (e.key === 'Escape') setOpen(false); });
    window.addEventListener('resize', () => { if (window.innerWidth > 1199) setOpen(false); });
  }

  // ── Active nav link on scroll ─────────────────
  // Only on the home page, where nav links are same-page anchors
  const links = document.querySelectorAll('.pp-nav__link[href^="#"]');
  const sections = [...links]
    .map(link => document.querySelector(link.getAttribute('href')))
    .filter(Boolean);

  if (sections.length && 'IntersectionObserver' in window) {
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (!entry.isIntersecting) return;
        links.forEach(link => {
          link.classList.toggle('is-active', link.getAttribute('href') === '#' + entry.target.id);
        });
      });
    }, { rootMargin: '-45% 0px -50% 0px' });

    sections.forEach(section => observer.observe(section));
  }

  // ── Quote form ────────────────────────────────
  const form = document.getElementById('pp-quote-form');
  const status = document.getElementById('pp-form-status');

  if (form && status) {
    const messages = {
      sent: ['is-success', 'Thanks — that’s in with our team. We’ll call within one business day to book your free site visit.'],
      invalid: ['is-error', 'Please enter your name, phone number and a valid email address.'],
      error: ['is-error', 'Sorry, your request couldn’t be sent. Please call us on 0430 961 644.'],
    };

    const showStatus = (key) => {
      const [cls, text] = messages[key];
      status.className = 'pp-form__status ' + cls;
      status.textContent = text;
      status.hidden = false;
    };

    // Result passed back from handlers/send-quote.php
    const result = new URLSearchParams(window.location.search).get('quote');
    if (messages[result]) showStatus(result);

    form.addEventListener('submit', (e) => {
      let valid = true;
      form.querySelectorAll('input[required], input[type="email"]').forEach(input => {
        const field = input.closest('.pp-field');
        const ok = input.checkValidity() && (!input.required || input.value.trim() !== '');
        field.classList.toggle('is-invalid', !ok);
        if (!ok) valid = false;
      });

      if (!valid) {
        e.preventDefault();
        showStatus('invalid');
        form.querySelector('.is-invalid input').focus();
      }
    });
  }
})();
