(function () {
  'use strict';

  // ── Header scroll state + progress bar ──────────────────
  var header = document.getElementById('site-header');
  var progressBar = document.getElementById('scroll-progress-bar');

  // Header height varies (nav row can wrap to 1-3 lines depending on
  // viewport width), so measure it instead of hardcoding an offset.
  function updateHeaderHeightVar() {
    if (!header) return;
    var wasScrolled = header.classList.contains('scrolled');
    header.classList.remove('scrolled');
    document.documentElement.style.setProperty('--header-height', header.offsetHeight + 'px');
    header.classList.toggle('scrolled', wasScrolled);
  }
  updateHeaderHeightVar();
  window.addEventListener('resize', updateHeaderHeightVar);
  window.addEventListener('load', updateHeaderHeightVar);

  function onScroll() {
    if (header) header.classList.toggle('scrolled', window.scrollY > 20);

    if (progressBar) {
      var docHeight = document.documentElement.scrollHeight - window.innerHeight;
      var pct = docHeight > 0 ? window.scrollY / docHeight : 0;
      progressBar.style.transform = 'scaleX(' + Math.min(Math.max(pct, 0), 1) + ')';
    }
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  // ── Mobile nav (hamburger) ───────────────────────────────
  var hamburger = document.getElementById('hamburger');
  var navPanel = document.getElementById('main-nav');
  var navBackdrop = document.getElementById('nav-backdrop');

  function closeNav() {
    if (hamburger) { hamburger.classList.remove('active'); hamburger.setAttribute('aria-expanded', 'false'); }
    if (navPanel) navPanel.classList.remove('open');
    if (navBackdrop) navBackdrop.classList.remove('open');
    document.body.style.overflow = '';
  }

  function toggleNav() {
    var isOpen = navPanel && navPanel.classList.contains('open');
    if (isOpen) {
      closeNav();
    } else {
      if (hamburger) { hamburger.classList.add('active'); hamburger.setAttribute('aria-expanded', 'true'); }
      if (navPanel) navPanel.classList.add('open');
      if (navBackdrop) navBackdrop.classList.add('open');
      document.body.style.overflow = 'hidden';
    }
  }

  if (hamburger) hamburger.addEventListener('click', toggleNav);
  if (navBackdrop) navBackdrop.addEventListener('click', closeNav);
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeNav();
  });

  document.querySelectorAll('.nav__link').forEach(function (link) {
    link.addEventListener('click', closeNav);
  });

  // ── Dropdown toggles (mobile: tap to expand) ─────────────
  document.querySelectorAll('.nav__dropdown-toggle').forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      var item = btn.closest('.nav__item--dropdown');
      if (!item) return;
      var willOpen = !item.classList.contains('open');

      document.querySelectorAll('.nav__item--dropdown.open').forEach(function (openItem) {
        if (openItem !== item) openItem.classList.remove('open');
      });

      item.classList.toggle('open', willOpen);
      btn.setAttribute('aria-expanded', String(willOpen));

      if (willOpen) {
        setTimeout(function () {
          item.scrollIntoView({ block: 'nearest', behavior: 'smooth' });
        }, 360);
      }
    });
  });

  // ── Shop filter panels (expand/collapse) ─────────────────
  document.querySelectorAll('.shop__filter-toggle').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var group = btn.closest('.shop__filter-group');
      if (!group) return;
      var willOpen = !group.classList.contains('open');
      group.classList.toggle('open', willOpen);
      btn.setAttribute('aria-expanded', String(willOpen));
    });
  });

  // ── Shop filters panel (mobile collapse) ─────────────────
  var shopFiltersToggle = document.querySelector('.shop__filters-toggle');
  var shopFilters = document.getElementById('shop-filters');
  if (shopFiltersToggle && shopFilters) {
    shopFiltersToggle.addEventListener('click', function () {
      var willOpen = !shopFilters.classList.contains('open');
      shopFilters.classList.toggle('open', willOpen);
      shopFiltersToggle.setAttribute('aria-expanded', String(willOpen));
    });
  }

  // ── Shop category pages (section isolation + filters) ────
  // A category page can hold several sections (.shop__group — the
  // category's own products plus one per child sub-category). With no
  // #hash every section shows; a nav link like category-x.php#child
  // isolates that one section, matching "click the parent = see
  // everything, click a specific child = see only that child".
  var shopMain = document.querySelector('.shop__main');
  if (shopMain) {
    var shopGroups = Array.prototype.slice.call(shopMain.querySelectorAll('.shop__group'));
    var productCards = Array.prototype.slice.call(shopMain.querySelectorAll('.product-card'));
    var shopCount = document.getElementById('shop-count');
    var filterInputs = document.querySelectorAll('.shop__filter-checkbox input[type="checkbox"]');

    var facetNames = [];
    filterInputs.forEach(function (cb) {
      if (facetNames.indexOf(cb.name) === -1) facetNames.push(cb.name);
    });

    var checkedValues = function (name) {
      var checked = document.querySelectorAll('.shop__filter-checkbox input[name="' + name + '"]:checked');
      return Array.prototype.map.call(checked, function (cb) { return cb.value; });
    };

    var activeSectionCards = function () {
      return productCards.filter(function (card) {
        return !card.closest('.shop__group').hidden;
      });
    };

    // The filter panel is built from the whole page's merged facets, but a
    // section only uses some of them — recompute counts for whichever
    // section is in view, hide options that don't apply to it (0 matches),
    // and hide an entire facet group once none of its options apply.
    var updateFilterCounts = function (sectionCards) {
      document.querySelectorAll('.shop__filter-group').forEach(function (group) {
        var visibleOptions = 0;
        group.querySelectorAll('.shop__filter-checkbox').forEach(function (label) {
          var input = label.querySelector('input[type="checkbox"]');
          var countEl = label.querySelector('.shop__filter-count');
          if (!input || !countEl) return;
          var count = input.name === 'availability'
            ? (input.value === 'in-stock' ? sectionCards.length : 0)
            : sectionCards.filter(function (card) { return card.dataset[input.name] === input.value; }).length;
          countEl.textContent = '(' + count + ')';
          var applies = input.name === 'availability' || count > 0;
          label.hidden = !applies;
          if (applies) visibleOptions++;
        });
        group.hidden = visibleOptions === 0;
      });
    };

    var applyShopFilters = function () {
      var sectionCards = activeSectionCards();
      var visible = 0;

      sectionCards.forEach(function (card) {
        var show = facetNames.every(function (name) {
          var selected = checkedValues(name);
          return selected.length === 0 || selected.indexOf(card.dataset[name]) !== -1;
        });
        card.hidden = !show;
        if (show) visible++;
      });

      if (shopCount) {
        shopCount.textContent = visible === sectionCards.length
          ? 'Showing 1–' + visible + ' of ' + visible + ' products'
          : 'Showing ' + visible + ' of ' + sectionCards.length + ' products';
      }

      updateFilterCounts(sectionCards);
    };

    var applyGroupVisibility = function () {
      var targetId = window.location.hash.slice(1);
      var target = targetId && shopMain.querySelector('.shop__group#' + CSS.escape(targetId));
      shopGroups.forEach(function (group) {
        group.hidden = !!target && group !== target;
      });
    };

    var refreshShop = function () {
      applyGroupVisibility();
      applyShopFilters();
      window.scrollTo(0, 0);
    };

    filterInputs.forEach(function (cb) {
      cb.addEventListener('change', applyShopFilters);
    });
    window.addEventListener('hashchange', refreshShop);
    refreshShop();

    // Switching sections via the nav (e.g. Design Series → Opals → Celina)
    // should replace what's shown in place, not jump/scroll the page down
    // to wherever that section happens to sit.
    var currentFile = window.location.pathname.split('/').pop();
    document.querySelectorAll('.nav__link, .nav__dropdown-link').forEach(function (link) {
      var href = link.getAttribute('href') || '';
      var hashIndex = href.indexOf('#');
      if (hashIndex === -1) return;
      var targetFile = href.slice(0, hashIndex);
      if (targetFile && targetFile !== currentFile) return;
      var hash = href.slice(hashIndex);
      link.addEventListener('click', function (e) {
        e.preventDefault();
        if (window.location.hash !== hash) {
          history.pushState(null, '', hash);
          refreshShop();
        }
      });
    });
  }

  // ── Newsletter (client-side only — no backend configured) ──
  var newsletterBtn = document.getElementById('newsletter-submit');
  if (newsletterBtn) {
    newsletterBtn.addEventListener('click', function () {
      var input = newsletterBtn.previousElementSibling;
      if (!input || !input.value) return;
      var original = newsletterBtn.textContent;
      newsletterBtn.textContent = 'Thanks!';
      newsletterBtn.disabled = true;
      setTimeout(function () {
        input.value = '';
        newsletterBtn.textContent = original;
        newsletterBtn.disabled = false;
      }, 3000);
    });
  }

  // ── Contact form (client-side only — no backend configured) ──
  var contactForm = document.getElementById('contact-form');
  if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
      e.preventDefault();
      var submitBtn = contactForm.querySelector('.contact__submit');
      var original = submitBtn ? submitBtn.innerHTML : '';

      if (submitBtn) {
        submitBtn.innerHTML = 'Thanks — we\'ll be in touch shortly!';
        submitBtn.disabled = true;
      }

      setTimeout(function () {
        contactForm.reset();
        if (submitBtn) {
          submitBtn.innerHTML = original;
          submitBtn.disabled = false;
        }
      }, 3500);
    });
  }
})();
