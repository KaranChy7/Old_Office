// ─── HERO SLIDER ───
let currentSlide = 0;
const slides = document.querySelectorAll(".hero-slide");
const heroDots = document.querySelectorAll(".hero-dot");
let slideTimer;

function showSlide(n) {
    slides.forEach((s) => s.classList.remove("active"));
    heroDots.forEach((d) => d.classList.remove("active"));
    currentSlide = (n + slides.length) % slides.length;
    slides[currentSlide].classList.add("active");
    if (heroDots[currentSlide])
        heroDots[currentSlide].classList.add("active");
}
function changeSlide(dir) {
    clearInterval(slideTimer);
    showSlide(currentSlide + dir);
    startSlideTimer();
}
function goSlide(n) {
    clearInterval(slideTimer);
    showSlide(n);
    startSlideTimer();
}
function startSlideTimer() {
    slideTimer = setInterval(() => showSlide(currentSlide + 1), 5500);
}
startSlideTimer();

// ─── TESTIMONIAL SLIDER ───
let currentTesti = 0;
const testiTrack = document.getElementById("testiTrack");
const testiDots = document.querySelectorAll(".testi-dot");

function goTesti(n) {
    currentTesti = n;
    testiTrack.style.transform = `translateX(-${n * 100}%)`;
    testiDots.forEach((d) => d.classList.remove("active"));
    testiDots[n].classList.add("active");
}
setInterval(() => goTesti((currentTesti + 1) % 1), 7000);

// ─── MOBILE NAV ───
function toggleMobileNav() {
    const nav = document.getElementById("mobileNav");
    const overlay = document.getElementById("navOverlay");
    const ham = document.getElementById("hamburger");
    nav.classList.toggle("open");
    overlay.classList.toggle("visible");
    ham.classList.toggle("active");
}
function closeMobileNav() {
    document.getElementById("mobileNav").classList.remove("open");
    document.getElementById("navOverlay").classList.remove("visible");
    document.getElementById("hamburger").classList.remove("active");
}

// ─── HEADER SCROLL ───
window.addEventListener("scroll", () => {
    const header = document.getElementById("mainHeader");
    header.classList.toggle("scrolled", window.scrollY > 80);
    document
        .getElementById("backTop")
        .classList.toggle("show", window.scrollY > 400);
});

// ─── SCROLL REVEAL ───
const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach((e) => {
            if (e.isIntersecting) {
                setTimeout(() => e.target.classList.add("visible"), 100);
            }
        });
    },
    { threshold: 0.12 },
);
document
    .querySelectorAll(".reveal, .reveal-left, .reveal-right, .reveal-scale")
    .forEach((el) => observer.observe(el));

// ─── COUNT UP ANIMATION ───
function animateCount(el, target, suffix) {
    let current = 0;
    const step = Math.ceil(target / 60);
    const timer = setInterval(() => {
        current = Math.min(current + step, target);
        el.textContent = current.toLocaleString() + (suffix || "");
        if (current >= target) clearInterval(timer);
    }, 28);
}
const statsObserver = new IntersectionObserver(
    (entries) => {
        entries.forEach((e) => {
            if (e.isIntersecting) {
                const nums = e.target.querySelectorAll("[data-target]");
                nums.forEach((el) => {
                    const t = parseInt(el.dataset.target);
                    const suffix =
                        el.dataset.target === "100"
                            ? "%"
                            : el.dataset.target === "50"
                                ? "km"
                                : "+";
                    animateCount(el, t, suffix);
                });
                statsObserver.unobserve(e.target);
            }
        });
    },
    { threshold: 0.5 },
);
const statsArea = document.querySelector(".hero-stats-inner");
if (statsArea) statsObserver.observe(statsArea);

// ─── FAQ TOGGLE ───
function toggleFaq(btn) {
    const item = btn.parentElement;
    const isOpen = item.classList.contains("open");
    document
        .querySelectorAll(".faq-item.open")
        .forEach((i) => i.classList.remove("open"));
    if (!isOpen) item.classList.add("open");
}

// ─── GALLERY FILTER ───
document.querySelectorAll(".filter-btn").forEach((btn) => {
    btn.addEventListener("click", function () {
        document
            .querySelectorAll(".filter-btn")
            .forEach((b) => b.classList.remove("active"));
        this.classList.add("active");
    });
});

// ─── STAGGERED REVEAL DELAYS ───
document
    .querySelectorAll(
        ".features-grid .feature-card, .services-grid .service-card, .why-reasons .why-item",
    )
    .forEach((el, i) => {
        el.style.transitionDelay = i * 0.1 + "s";
    });