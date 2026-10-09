document.addEventListener("DOMContentLoaded", () => {
  const topStrip = document.getElementById("topStrip");
  const header = document.getElementById("siteHeader");
  const sliderSection = document.getElementById("topSlider");
  const slider = document.getElementById("mainSlider");
  const mobileToggle = document.getElementById("mobileToggle");
  const navMenu = document.getElementById("navMenu");
  const navLinks = document.querySelectorAll(".nav-link");
  function getHeaderTotalHeight() {
    let topH = topStrip ? topStrip.getBoundingClientRect().height : 0;
    let headerH = header ? header.getBoundingClientRect().height : 0;
    if (navMenu && navMenu.classList.contains("active")) {
      const navH = navMenu.getBoundingClientRect().height || 0;
      if (navH > headerH) headerH = navH;
    }
    return Math.round(topH + headerH);
  }
  function adjustSliderHeight() {
    if (!slider) return;
    const available = Math.max(
      window.innerHeight - getHeaderTotalHeight(),
      260
    );
    slider.style.height = `${available}px`;
  }
  adjustSliderHeight();
  window.addEventListener("resize", adjustSliderHeight);
  window.addEventListener("orientationchange", () => {
    setTimeout(adjustSliderHeight, 200);
  });
  const observeNav = new MutationObserver(() => {
    requestAnimationFrame(adjustSliderHeight);
  });
  if (navMenu) observeNav.observe(navMenu, { attributes: true });
  if (mobileToggle && navMenu) {
    mobileToggle.addEventListener("click", () => {
      const isOpen = mobileToggle.classList.toggle("active");
      navMenu.classList.toggle("active", isOpen);
      document.body.style.overflow = isOpen ? "hidden" : "auto";
      setTimeout(adjustSliderHeight, 120);
    });
  }
  navLinks.forEach((link) => {
    link.addEventListener("click", () => {
      if (mobileToggle && getComputedStyle(mobileToggle).display !== "none") {
        mobileToggle.classList.remove("active");
        navMenu.classList.remove("active");
        document.body.style.overflow = "auto";
        setTimeout(adjustSliderHeight, 120);
      }
      navLinks.forEach((l) => l.classList.remove("active"));
      link.classList.add("active");
    });
  });
  document.querySelectorAll(".has-dropdown .drop-btn").forEach((btn) => {
    btn.addEventListener("click", (e) => {
      e.preventDefault();
      e.stopPropagation();
      const parent = btn.closest(".has-dropdown");
      const dropdown = parent.querySelector(".dropdown");
      const isOpen = dropdown.classList.toggle("open");
      btn.setAttribute("aria-expanded", isOpen ? "true" : "false");
      dropdown.setAttribute("aria-hidden", !isOpen ? "true" : "false");
    });
  });
  document.addEventListener("click", (e) => {
    document.querySelectorAll(".dropdown.open").forEach((dd) => {
      const parent = dd.closest(".has-dropdown");
      if (!parent.contains(e.target)) {
        dd.classList.remove("open");
        parent
          .querySelector(".drop-btn")
          ?.setAttribute("aria-expanded", "false");
        dd.setAttribute("aria-hidden", "true");
      }
    });
  });
  const year = document.getElementById("currentYear");
  if (year) year.textContent = new Date().getFullYear();
  const products = [
    {
      name: "Animal Feed Supplement",
      minOrder: "1000ml",
      image: "images/feed.png",
    },
    {
      name: "Dairy Cattle Feed Supplement",
      minOrder: "1000 ml",
      image: "images/mid2.png",
    },
    {
      name: "Animal Nutrition Supplement",
      minOrder: "1000 ml",
      image: "images/nutri.png",
    },
    {
      name: "Vit-H Gold",
      minOrder: "1000 ml",
      image: "img/Cattle, aqua/Vit-H Gold.jpg",
    },
    {
      name: "Private Label Animal Feed Supplement",
      minOrder: "1000 ml",
      image: "images/ani1.png",
    },
    {
      name: "Calcium Liquid",
      minOrder: "1000 ml",
      image: "images/cal1.png",
    },
  ];
  const productsGrid = document.querySelector(".products-grid");
  if (productsGrid) {
    productsGrid.innerHTML = "";
    products.forEach((p, i) => {
      const card = document.createElement("div");
      card.className = "product-card animate-scale";
      if (i >= 3) card.classList.add("delay-1");
      card.innerHTML = `
        <div class="product-image">
          <img 
            src="${p.image}" 
            alt="${p.name}" 
            loading="lazy"
            onerror="this.parentElement.classList.add('no-image')"
          >
        </div>
        <div class="product-content">
          <h4>${p.name}</h4>
          <div class="product-meta">
            <span class="product-price">Min. Order: ${p.minOrder}</span>
            <a href="contact-us.php" class="btn btn-primary btn-small">Inquire</a>
          </div>
        </div>
      `;
      productsGrid.appendChild(card);
    });
  }
  const contactForm = document.getElementById("contactForm");
  if (contactForm) {
    contactForm.addEventListener("submit", (e) => {
      e.preventDefault();
      const name = document.getElementById("name").value.trim();
      const email = document.getElementById("email").value.trim();
      const message = document.getElementById("message").value.trim();
      if (!name || !email || !message) {
        alert("Please fill in all required fields.");
        return;
      }
      alert(`Thank you ${name}! Your message has been sent.`);
      contactForm.reset();
    });
  }
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = "1";
          entry.target.style.transform = "translateY(0) translateX(0) scale(1)";
        } else {
          entry.target.style.opacity = "";
          entry.target.style.transform = "";
        }
      });
    },
    { threshold: 0.1 }
  );
  document
    .querySelectorAll(
      ".animate-fade-up, .animate-fade-left, .animate-fade-right, .animate-scale, .animate-slide-up"
    )
    .forEach((el) => observer.observe(el));
  function updateActiveNavOnScroll() {
    const sections = document.querySelectorAll("section[id]");
    const scrollPos = window.scrollY + getHeaderTotalHeight() + 20;
    sections.forEach((section) => {
      const top = section.offsetTop;
      const height = section.offsetHeight;
      const id = section.getAttribute("id");
      if (id && scrollPos >= top && scrollPos < top + height) {
        navLinks.forEach((l) => l.classList.remove("active"));
        document
          .querySelector(`.nav-link[href="#${id}"]`)
          ?.classList.add("active");
      }
    });
  }
  window.addEventListener("scroll", updateActiveNavOnScroll);
  updateActiveNavOnScroll();
  (function sliderInit() {
    if (!slider) return;
    const slides = Array.from(slider.querySelectorAll(".slide"));
    const prev = slider.querySelector(".slider-prev");
    const next = slider.querySelector(".slider-next");
    let index = 0;
    let autoplay;
    const DELAY = 2500;
    function show(i) {
      slides.forEach((s, k) => s.classList.toggle("active", k === i));
      index = i;
    }
    function nextSlide() {
      show((index + 1) % slides.length);
    }
    function prevSlide() {
      show((index - 1 + slides.length) % slides.length);
    }
    function start() {
      clearInterval(autoplay);
      autoplay = setInterval(nextSlide, DELAY);
    }
    next?.addEventListener("click", () => {
      nextSlide();
      start();
    });
    prev?.addEventListener("click", () => {
      prevSlide();
      start();
    });
    slider.addEventListener("mouseenter", () => clearInterval(autoplay));
    slider.addEventListener("mouseleave", start);
    show(0);
    start();
  })();
  setTimeout(adjustSliderHeight, 100);
});
document.addEventListener("DOMContentLoaded", function () {
  const videoSection = document.querySelector(".video-section");
  const iframe = document.getElementById("autoPlayVideo");
  if (!videoSection || !iframe) return;
  let played = false;
  const observer = new IntersectionObserver(
    function (entries) {
      entries.forEach(entry => {
        if (entry.isIntersecting && !played) {
          iframe.src = iframe.dataset.src;
          played = true;
          observer.disconnect();
        }
      });
    },
    {
      threshold: 0.5
    }
  );
  observer.observe(videoSection);
});