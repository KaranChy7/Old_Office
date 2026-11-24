(function () {
  var items = document.querySelectorAll('[data-reveal]');
  if (!items.length) return;

  var hasGsap = typeof window.gsap !== 'undefined' && typeof window.ScrollTrigger !== 'undefined';

  if (!hasGsap) {
    items.forEach(function (el) { el.classList.add('revealed'); });
    return;
  }

  gsap.registerPlugin(ScrollTrigger);

  items.forEach(function (el) {
    var delay = (parseInt(el.getAttribute('data-delay') || '0', 10)) / 1000;

    ScrollTrigger.create({
      trigger: el,
      start: 'top 88%',
      once: true,
      onEnter: function () {
        setTimeout(function () { el.classList.add('revealed'); }, delay * 1000);
      }
    });
  });
})();
