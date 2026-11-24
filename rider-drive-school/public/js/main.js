"use strict";

// ── HEADER SCROLL ──────────────────────────────────────────
(function () {
  const header = document.getElementById("header");
  if (!header) return;

  window.addEventListener(
    "scroll",
    function () {
      header.classList.toggle("scrolled", window.scrollY > 60);
    },
    { passive: true },
  );
})();

// ── HERO IMAGE SLIDER ──────────────────────────────────────
(function () {
  const slider = document.getElementById("heroSlider");
  if (!slider) return;

  const slides = slider.querySelectorAll(".hero-slide");
  if (slides.length < 2) return;

  let current = 0;

  setInterval(function () {
    slides[current].classList.remove("active");
    current = (current + 1) % slides.length;
    slides[current].classList.add("active");
  }, 3000);
})();

// ── TESTIMONIALS SLIDER ────────────────────────────────────
(function () {
  const viewport = document.getElementById("testiViewport");
  if (!viewport) return;

  const track = viewport.querySelector(".testimonials-grid");
  const prevBtn = document.getElementById("testiPrev");
  const nextBtn = document.getElementById("testiNext");

  function step(direction) {
    const card = track.querySelector(".testi-card");
    if (!card) return;

    const gap = parseFloat(getComputedStyle(track).gap) || 0;
    const amount = card.offsetWidth + gap;
    const maxScroll = viewport.scrollWidth - viewport.clientWidth;

    let target = viewport.scrollLeft + direction * amount;
    if (target >= maxScroll - 5) target = 0;
    else if (target < 0) target = maxScroll;

    viewport.scrollTo({ left: target, behavior: "smooth" });
  }

  if (prevBtn) prevBtn.addEventListener("click", function () { step(-1); });
  if (nextBtn) nextBtn.addEventListener("click", function () { step(1); });

  let autoplay = setInterval(function () { step(1); }, 5000);

  viewport.addEventListener("mouseenter", function () {
    clearInterval(autoplay);
  });
  viewport.addEventListener("mouseleave", function () {
    autoplay = setInterval(function () { step(1); }, 5000);
  });
})();

// ── HAMBURGER MENU ─────────────────────────────────────────
(function () {
  const hamburger = document.getElementById("hamburger");
  const mobileMenu = document.getElementById("mobileMenu");
  if (!hamburger || !mobileMenu) return;

  hamburger.addEventListener("click", function () {
    hamburger.classList.toggle("open");
    mobileMenu.classList.toggle("open");
  });

  // Close on any mobile menu link click
  mobileMenu.querySelectorAll("a").forEach(function (link) {
    link.addEventListener("click", function () {
      hamburger.classList.remove("open");
      mobileMenu.classList.remove("open");
    });
  });
})();

// ── MOBILE DROPDOWN (Cooling / Heating) ────────────────────
(function () {
  document.querySelectorAll(".mobile-dropdown-toggle").forEach(function (btn) {
    btn.addEventListener("click", function () {
      btn.closest(".mobile-dropdown").classList.toggle("open");
    });
  });
})();

// Kept as global for inline onclick (FAQ page uses it)
function closeMobile() {
  const hamburger = document.getElementById("hamburger");
  const mobileMenu = document.getElementById("mobileMenu");
  if (hamburger) hamburger.classList.remove("open");
  if (mobileMenu) mobileMenu.classList.remove("open");
}

// ── SCROLL REVEAL ──────────────────────────────────────────
(function () {
  const els = document.querySelectorAll(".reveal, .reveal-left, .reveal-right");
  if (!els.length) return;

  const observer = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.12, rootMargin: "0px 0px -60px 0px" },
  );

  els.forEach(function (el) {
    observer.observe(el);
  });
})();

// ── HERO STAT COUNTER ──────────────────────────────────────
(function () {
  const hero = document.getElementById("hero");
  if (!hero) return;

  function animateCounters() {
    document.querySelectorAll(".stat-num").forEach(function (counter) {
      const text = counter.textContent;
      const match = text.match(/(\d+)/);
      if (!match) return;

      const target = parseInt(match[1], 10);
      const suffix = text.replace(/\d+/, "");
      let start = null;

      function step(timestamp) {
        if (!start) start = timestamp;
        const progress = Math.min((timestamp - start) / 2000, 1);
        const eased = 1 - Math.pow(1 - progress, 3);
        counter.textContent = Math.floor(eased * target) + suffix;
        if (progress < 1) requestAnimationFrame(step);
      }

      requestAnimationFrame(step);
    });
  }

  const heroObserver = new IntersectionObserver(
    function (entries) {
      if (entries[0].isIntersecting) {
        setTimeout(animateCounters, 1000);
        heroObserver.disconnect();
      }
    },
    { threshold: 0.5 },
  );

  heroObserver.observe(hero);
})();

// ── FAQ ACCORDION ──────────────────────────────────────────
document.addEventListener("click", function (e) {
  const question = e.target.closest(".faq-question");
  if (!question) return;

  const item = question.closest(".faq-item");
  const isOpen = item.classList.contains("open");

  // Close all open items in the same list
  item
    .closest(".faq-list")
    .querySelectorAll(".faq-item")
    .forEach(function (i) {
      i.classList.remove("open");
    });

  if (!isOpen) item.classList.add("open");
});

// ── GALLERY FILTER ─────────────────────────────────────────
(function () {
  const filterBtns = document.querySelectorAll(".filter-btn");
  const cells = document.querySelectorAll(".g-cell");
  if (!filterBtns.length) return;

  filterBtns.forEach(function (btn) {
    btn.addEventListener("click", function () {
      filterBtns.forEach(function (b) {
        b.classList.remove("active");
      });
      btn.classList.add("active");

      const filter = btn.getAttribute("data-filter");
      cells.forEach(function (cell) {
        const cat = cell.getAttribute("data-category");
        const show = filter === "all" || cat === filter;
        cell.style.display = show ? "block" : "none";
      });
    });
  });
})();

// ── LIGHTBOX ───────────────────────────────────────────────
(function () {
  const lightbox = document.getElementById("lightbox");
  if (!lightbox) return;

  const lbImg = document.getElementById("lbImg");
  const lbCat = document.getElementById("lbCat");
  const lbTitle = document.getElementById("lbTitle");
  const lbClose = document.getElementById("lbClose");
  const lbPrev = document.getElementById("lbPrev");
  const lbNext = document.getElementById("lbNext");

  let cells = [];
  let currentIdx = 0;

  function openLightbox(idx) {
    currentIdx = idx;
    const cell = cells[idx];
    lbImg.src = cell.querySelector("img").src;
    lbImg.alt = cell.getAttribute("data-title") || "";
    if (lbCat) lbCat.textContent = cell.getAttribute("data-cat") || "";
    if (lbTitle) lbTitle.textContent = cell.getAttribute("data-title") || "";
    lightbox.classList.add("open");
    document.body.style.overflow = "hidden";
  }

  function closeLightbox() {
    lightbox.classList.remove("open");
    document.body.style.overflow = "";
  }

  document.addEventListener("click", function (e) {
    const cell = e.target.closest(".g-cell");
    if (!cell) return;
    cells = Array.from(document.querySelectorAll(".g-cell"));
    const idx = cells.indexOf(cell);
    if (idx >= 0) openLightbox(idx);
  });

  if (lbClose) lbClose.addEventListener("click", closeLightbox);

  if (lbPrev)
    lbPrev.addEventListener("click", function () {
      currentIdx = (currentIdx - 1 + cells.length) % cells.length;
      openLightbox(currentIdx);
    });

  if (lbNext)
    lbNext.addEventListener("click", function () {
      currentIdx = (currentIdx + 1) % cells.length;
      openLightbox(currentIdx);
    });

  lightbox.addEventListener("click", function (e) {
    if (e.target === lightbox) closeLightbox();
  });

  document.addEventListener("keydown", function (e) {
    if (!lightbox.classList.contains("open")) return;
    if (e.key === "Escape") closeLightbox();
    if (e.key === "ArrowLeft") lbPrev && lbPrev.click();
    if (e.key === "ArrowRight") lbNext && lbNext.click();
  });
})();

// ── FAQ SEARCH (faq page) ──────────────────────────────────
(function () {
  const searchInput = document.getElementById("faqSearch");
  if (!searchInput) return;

  searchInput.addEventListener("input", function () {
    const term = this.value.toLowerCase().trim();
    document.querySelectorAll(".faq-item").forEach(function (item) {
      const q = item.querySelector(".faq-question").textContent.toLowerCase();
      const a = item.querySelector(".faq-answer")
        ? item.querySelector(".faq-answer").textContent.toLowerCase()
        : "";
      item.style.display =
        !term || q.includes(term) || a.includes(term) ? "" : "none";
    });
  });
})();

// ── FAQ CATEGORY FILTER (faq page) ────────────────────────
(function () {
  const catBtns = document.querySelectorAll(".faq-cat-btn");
  if (!catBtns.length) return;

  catBtns.forEach(function (btn) {
    btn.addEventListener("click", function () {
      catBtns.forEach(function (b) {
        b.classList.remove("active");
      });
      btn.classList.add("active");

      const cat = btn.getAttribute("data-cat");
      document.querySelectorAll(".faq-category").forEach(function (section) {
        const sectionCat = section.getAttribute("data-category");
        section.style.display =
          cat === "all" || sectionCat === cat ? "" : "none";
      });
    });
  });
})();

// ── MULTI-STEP QUOTE FORM ──────────────────────────────────
function nextStep(current) {
  const panel = document.getElementById("panel-" + current);
  const next = current + 1;

  // Basic required check on step 1
  if (current === 1) {
    const required = panel.querySelectorAll("[required]");
    let valid = true;
    required.forEach(function (el) {
      if (!el.value.trim()) {
        el.style.borderColor = "rgba(201,162,39,0.8)";
        valid = false;
      } else {
        el.style.borderColor = "";
      }
    });
    if (!valid) return;
  }

  panel.classList.remove("active");
  document.getElementById("panel-" + next).classList.add("active");

  // Update step dots
  document.getElementById("dot-" + current).classList.remove("active");
  document.getElementById("dot-" + current).classList.add("done");
  const nextDot = document.getElementById("dot-" + next);
  if (nextDot) nextDot.classList.add("active");
}

function prevStep(current) {
  const prev = current - 1;
  document.getElementById("panel-" + current).classList.remove("active");
  document.getElementById("panel-" + prev).classList.add("active");

  const currentDot = document.getElementById("dot-" + current);
  if (currentDot) currentDot.classList.remove("active");

  const prevDot = document.getElementById("dot-" + prev);
  if (prevDot) {
    prevDot.classList.remove("done");
    prevDot.classList.add("active");
  }
}

function submitQuote() {
  document.getElementById("panel-3").classList.remove("active");
  document.getElementById("dot-3").classList.remove("active");
  document.getElementById("dot-3").classList.add("done");
  document.getElementById("quoteSuccess").style.display = "block";
}

// ── CONTACT FORM ───────────────────────────────────────────
(function () {
  const form = document.getElementById("contactForm");
  const successMsg = document.getElementById("formSuccess");
  const errorMsg = document.getElementById("formError");

  if (!form) return;

  form.addEventListener("submit", async function (e) {
    e.preventDefault();

    successMsg.style.display = "none";
    errorMsg.style.display = "none";

    const formData = new FormData(form);

    try {
      const response = await fetch(form.action, {
        method: "POST",
        body: formData,
      });

      if (response.ok) {
        form.reset();
        form.style.display = "none";
        successMsg.style.display = "block";
      } else {
        errorMsg.style.display = "block";
      }
    } catch (error) {
      errorMsg.style.display = "block";
    }
  });
})();
// (function () {
//   const form = document.getElementById('contactForm');
//   if (!form) return;

//   form.addEventListener('submit', function (e) {
//     e.preventDefault();
//     form.style.display = 'none';
//     document.getElementById('formSuccess').style.display = 'block';
//   });
// })();
