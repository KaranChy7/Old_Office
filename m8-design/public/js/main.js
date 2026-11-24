$(document).ready(function () {
  // Header Fixed on Scroll
  $(window).on("load resize scroll", function () {
    var sticky = $(".header"),
      scroll = $(window).scrollTop();

    if (scroll >= 600) sticky.addClass("fixed-header");
    else sticky.removeClass("fixed-header");
  });

  /* Scroll Event (Go to Top on Click) */
  $(window).scroll(function () {
    if ($(this).scrollTop() > 500) {
      $(".scrollToTop").fadeIn().addClass("d-block");
    } else {
      $(".scrollToTop").fadeOut().removeClass("d-block");
    }
  });



  /* Magnific Popup Gallery */
  $(".gallery .gallery-wrapper").each(function () {
    // the containers for all your galleries
    $(this).magnificPopup({
      delegate: "a", // the selector for gallery item
      type: "image",

      mainClass: "mfp-with-zoom", // this class is for CSS animation below
      gallery: {
        enabled: true,
      },
    });
  });

  /* testimonial Slider */
  $(".testimonial-slider").slick({
    dots: true,
    arrows: false,
    prevArrow:
      "<span class='slick-arrow left'><i class='fa-solid fa-chevron-left'></i></slick>",
    nextArrow:
      "<span class='slick-arrow right'><i class='fa-solid fa-chevron-right'></i></i></slick>",
    infinite: true,
    autoplaySpeed: 2000,
    speed: 1000,
    slidesToShow: 3,
    adaptiveHeight: true,
    autoplay: false,
    centerMode: true,
    centerPadding: "5px",
    responsive: [
      {
        breakpoint: 992,
        settings: {
          dots: true,
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 768,
        settings: {
          dots: true,
          slidesToShow: 1,
        },
      },
    ],
  });

  /* For word make bold */

  document.body.innerHTML = document.body.innerHTML.replace(
    /AC BUILT GROUP/g,
    "<strong> AC BUILT  GROUP</strong>",
  );

  /* chat box */

  const widget = document.getElementById("chatWidget");
  const toggle = document.getElementById("chatToggle");
  const closeBtn = document.getElementById("chatClose");
  const chatBody = document.getElementById("chatBody");
  const chatForm = document.getElementById("chatForm");
  const chatInput = document.getElementById("chatMessage");
  const chatIcon = document.getElementById("chatIcon");
  const chatLabel = document.getElementById("chatLabel");
  const formBlock = document.getElementById("chatFormContainer");
  const detailsForm = document.getElementById("detailsForm");

  let firstMessageSent = false;

  /* OPEN / CLOSE WIDGET */
  toggle.addEventListener("click", () => {
    widget.classList.toggle("open");
    const isOpen = widget.classList.contains("open");

    chatIcon.textContent = isOpen ? "✖" : "💬";
    chatLabel.textContent = isOpen ? "Close" : "Let’s Chat";
  });

  closeBtn.addEventListener("click", () => {
    widget.classList.remove("open");
    chatIcon.textContent = "💬";
    chatLabel.textContent = "Let’s Chat";
  });

  // ===== ESCAPE HTML =====
  function escapeHtml(str) {
    return str.replace(
      /[&<>"']/g,
      (ch) =>
        ({
          "&": "&amp;",
          "<": "&lt;",
          ">": "&gt;",
          '"': "&quot;",
          "'": "&#39;",
        })[ch],
    );
  }

  // ===== HANDLE USER MESSAGE SEND =====
  chatForm.addEventListener("submit", (e) => {
    e.preventDefault();

    const text = chatInput.value.trim();
    if (!text) return;

    // create user bubble
    const msg = document.createElement("div");
    msg.className = "message user";
    msg.innerHTML = `
                <div class="message-bubble">${escapeHtml(text)}</div>
            `;
    chatBody.appendChild(msg);

    chatInput.value = "";
    chatBody.scrollTop = chatBody.scrollHeight;

    // After first message, show the form block
    if (!firstMessageSent) {
      firstMessageSent = true;
      formBlock.classList.add("is-visible");
      chatBody.scrollTop = chatBody.scrollHeight;
    }
  });

  // ===== HANDLE FORM SUBMIT INSIDE CHAT =====
  detailsForm.addEventListener("submit", (e) => {
    e.preventDefault();

    // You could send data with AJAX here if needed

    const reply = document.createElement("div");
    reply.className = "chat-message chat-message--agent";
    reply.innerHTML = `
                <div class="chat-message-bubble">
                Thank you! Our team will contact you shortly.
                </div>
            `;
    chatBody.appendChild(reply);
    chatBody.scrollTop = chatBody.scrollHeight;

    detailsForm.reset();
  });

  (function () {
    const timeline = document.getElementById("processTimeline");
    const base = document.getElementById("processLineBase");
    const fill = document.getElementById("processLineFill");
    const items = Array.from(timeline.querySelectorAll(".item"));
    const dots = items.map((item) => item.querySelector(".dot"));

    function clamp(n, min, max) {
      return Math.max(min, Math.min(max, n));
    }

    function dotCenterYRelative(dot) {
      const tRect = timeline.getBoundingClientRect();
      const dRect = dot.getBoundingClientRect();
      return dRect.top + dRect.height / 2 - tRect.top;
    }

    function update() {
      const tRect = timeline.getBoundingClientRect();
      const tTopDoc = window.scrollY + tRect.top;

      // marker point to drive progress (higher => reach last dot sooner)
      const marker = window.scrollY + window.innerHeight * 0.78;

      const yStart = dotCenterYRelative(dots[0]);
      const yEnd = dotCenterYRelative(dots[dots.length - 1]);

      // Position the BASE line from dot1 -> dot5 (removes line above dot1)
      base.style.top = yStart + "px";
      base.style.height = yEnd - yStart + "px";

      // Progress only between dot1 and dot5
      const startDoc = tTopDoc + yStart;
      const endDoc = tTopDoc + yEnd;
      const progress = clamp((marker - startDoc) / (endDoc - startDoc), 0, 1);

      // Fill line starts at dot1 and grows downward
      fill.style.top = yStart + "px";
      fill.style.height = (yEnd - yStart) * progress + "px";

      // Activate steps when fill reaches their dot centers
      const fillBottom = yStart + (yEnd - yStart) * progress;
      items.forEach((item, i) => {
        const y = dotCenterYRelative(dots[i]);
        if (y <= fillBottom + 2) item.classList.add("is-active");
        else item.classList.remove("is-active");
      });
    }

    update();
    window.addEventListener("scroll", () => requestAnimationFrame(update), {
      passive: true,
    });
    window.addEventListener("resize", () => requestAnimationFrame(update));
  })();


});







