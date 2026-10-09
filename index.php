<?php include('header.php') ?>


<section class="top-slider fullscreen-slider" id="topSlider" aria-label="Homepage slider">
  <!-- NOTE: container used for centering slide overlay only; slides are full-width -->
  <div class="slider" id="mainSlider" tabindex="0" aria-roledescription="carousel">
    <div class="slide active hello" style="background-image: url('./img/mid-banner.jpg');" role="group" aria-roledescription="slide" aria-label="Slide 1">
      <div class="container slide-overlay-wrap">
        <div class="slide-overlay">
          <h3>Premium Herbal Veterinary Supplements</h3>
          <p>Safe, effective solutions for livestock &amp; poultry.</p>
        </div>
      </div>
    </div>

    <div class="slide" style="background-image: url('./img/3-1.jpg');" role="group" aria-roledescription="slide" aria-label="Slide 2">
      <div class="container slide-overlay-wrap">
        <div class="slide-overlay">
          <h3>GMP Certified Manufacturing</h3>
          <p>Third-party manufacturing with stringent QC.</p>
        </div>
      </div>
    </div>

    <div class="slide" style="background-image: url('./img/4-1.jpg');" role="group" aria-roledescription="slide" aria-label="Slide 3">
      <div class="container slide-overlay-wrap">
        <div class="slide-overlay">
          <h3>Private Label &amp; Custom Formulation</h3>
          <p>Turnkey production, packing and labeling for your brand.</p>
        </div>
      </div>
    </div>

    <!-- controls -->
    <button class="slider-prev" aria-label="Previous slide">‹</button>
    <button class="slider-next" aria-label="Next slide">›</button>
  </div>
</section>

<!-- Hero Section -->
<section class="hero" id="home">
  <div class="container">
    <div class="hero-content">
      <div class="hero-text">
        <h1 class="hero-title animate-fade-up">India's Leading <span class="highlight">Veterinary Feed Supplement</span> Manufacturer & Private Labelling Expert</h1>
        <p class="hero-subtitle animate-fade-up delay-1">Specialized in third-party manufacturing of premium herbal health supplements for cattle and all domestic animals.</p>
        <div class="hero-badge animate-fade-up delay-2">
          <span class="badge"><i class="fas fa-bell"></i> New!</span>
          <span>Our latest animal nutrition supplements are now available.</span>
        </div>
        <div class="hero-buttons animate-fade-up delay-3">
          <a href="animal-feed-supplements.php" class="btn btn-primary btn-large">Explore Products</a>
          <a href="contact-us.php" class="btn btn-secondary btn-large">Contact Us</a>
        </div>
      </div>
      <div class="hero-image animate-fade-left">
        <div class="image-placeholder hero-cover">
          <img src="./img/doctor.avif" alt="">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="section about" id="about">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">About VarahVet</h2>
      <p class="section-subtitle">Leading manufacturer of herbal veterinary products</p>
    </div>

    <div class="about-content">
      <div class="about-image animate-fade-right">
        <div class="image-placeholder hero-cover" style=" border-radius:12px; overflow:hidden;">
          <img src="./img/cow2.jpg" alt="">
        </div>
      </div>
      <div class="about-text animate-fade-left">
        <p>VarahVet is a leading manufacturer of herbal veterinary products, specializing in third-party manufacturing of herbal health supplements for cattle and other domestic animals. With years of experience and a commitment to quality, we have established ourselves as a trusted partner for businesses seeking premium animal health solutions.</p>
        <p>Our state-of-the-art GMP-certified manufacturing facility combines ancient herbal wisdom with modern production techniques to create effective, natural, and safe products for animal health and wellness.</p>
        <div class="mission-card">
          <h3><i class="fas fa-bullseye"></i> Our Mission</h3>
          <p>To revolutionize animal healthcare through the power of herbal by providing high-quality, effective, and natural solutions that enhance the health and wellbeing of animals while supporting sustainable farming practices.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Animals We Care For -->
<section class="section animals" id="animals">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">We Care For All Animals</h2>
      <p class="section-subtitle">Specialized herbal solutions for different animal categories</p>
    </div>

    <div class="animals-grid">
      <div class="animal-card animate-scale">
        <div class="animal-image">
          <div class="image-placeholder hero-cover">
            <img src="./img/cow.png" alt="">
          </div>
        </div>
        <div class="animal-content blurred-text">
          <h3>Cattle <span class="animal-tag">(Large Animals)</span></h3>
          <p>High-quality supplements and herbal solutions to boost cattle immunity, enhance milk yield, and support digestion. Specially formulated to improve overall health and productivity in cows and buffaloes.</p>
        </div>
      </div>

      <div class="animal-card animate-scale delay-1">
        <div class="animal-image">
          <div class="image-placeholder hero-cover">
            <img src="./img/dog.jpg" alt="">
          </div>
        </div>
        <div class="animal-content blurred-text">
          <h3>Dogs <span class="animal-tag">(Companion Animals)</span></h3>
          <p>Tailored herbal care for dogs to strengthen bones, improve coat health, digestion, and immunity. Safe and effective formulas for all breeds and sizes.</p>
        </div>
      </div>

      <div class="animal-card animate-scale delay-2">
        <div class="animal-image">
          <div class="image-placeholder hero-cover">
            <img src="./img/hen1.jpg" alt="">
          </div>
        </div>
        <div class="animal-content blurred-text">
          <h3>Birds <span class="animal-tag">(Poultry & Aviary)</span></h3>
          <p>Natural supplements for birds to improve appetite, feather shine, egg production, and disease resistance. Suitable for poultry farms and pet birds alike.</p>
        </div>
      </div>

      <div class="animal-card animate-scale delay-3">
        <div class="animal-image">
          <div class="image-placeholder hero-cover">
            <img src="./img/fish.jpg" alt="">
          </div>
        </div>
        <div class="animal-content blurred-text">
          <h3>Fish <span class="animal-tag">(Aquatic Animals)</span></h3>
          <p>Boost aquatic health with our fish care range. Supports faster growth, better immunity, and water quality—ideal for commercial and small-scale fish farming.</p>
        </div>
      </div>
    </div>

    <div class="section-quote">
      <h3 class="hindi-text"><i class="fas fa-quote-left"></i> आपके पशुओं की सेहत, हमारी पहली ज़िम्मेदारी!</h3>
    </div>
  </div>
</section>

<!-- Product Range -->
<section class="section products" id="products">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">Our Product Range</h2>
      <p class="section-subtitle">We specialize in manufacturing a diverse range of herbal veterinary products for various animal categories, with a primary focus on cattle health supplements.</p>
    </div>

    <section class="product-categories-section">
      <div class="container">
        <div class="product-categories">

          <!-- CARD 1 -->
          <div class="category-card">
            <div class="category-image" style="background-image:url('./img/milkenhancer.webp');"></div>
            <div class="category-inner">
              <div class="category-icon">
                <i class="fas fa-wine-bottle"></i>
              </div>
              <h3>Milk Production Enhancers</h3>
              <p>
                Herbal formulations designed to naturally boost milk production and
                improve milk quality in dairy cattle.
              </p>
            </div>
          </div>

          <!-- CARD 2 -->
          <div class="category-card">
            <div class="category-image" style="background-image:url('./img/digestive.webp');"></div>
            <div class="category-inner">
              <div class="category-icon">
                <i class="fas fa-hospital"></i>
              </div>
              <h3>Digestive Health Supplements</h3>
              <p>
                Herbal formulations that support rumen function, improve digestion,
                and enhance nutrient absorption.
              </p>
            </div>
          </div>

          <!-- CARD 3 -->
          <div class="category-card">
            <div class="category-image" style="background-image:url('./img/reproductive.webp');"></div>
            <div class="category-inner">
              <div class="category-icon">
                <i class="fas fa-heartbeat"></i>
              </div>
              <h3>Reproductive Health Bolus</h3>
              <p>
                Specialized herbal formulations that support reproductive health,
                fertility, and overall reproductive efficiency.
              </p>
            </div>
          </div>

          <!-- CARD 4 -->
          <div class="category-card">
            <div class="category-image" style="background-image:url('./img/immunity.webp');"></div>
            <div class="category-inner">
              <div class="category-icon">
                <i class="fas fa-shield-alt"></i>
              </div>
              <h3>Immunity Boosters</h3>
              <p>
                Herbal formulations that strengthen the immune system and help cattle
                resist common infections and diseases.
              </p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <div class="products-showcase">
      <h3 class="showcase-title">Featured Products</h3>
      <div class="products-grid">
        <!-- Product cards generated by JS -->
      </div>

      <div class="show-more">
        <a href="product.php" class="btn btn-outline view-all">View All Products</a>
      </div>
    </div>
  </div>
</section>

<!-- Manufacturing Services -->
<section class="section services" id="services">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">Our Manufacturing Services</h2>
      <p class="section-subtitle">We offer comprehensive third-party manufacturing services for a wide range of herbal veterinary products</p>
    </div>

    <div class="services-grid">
      <div class="service-card animate-slide-up">
        <div class="service-header">
          <div class="service-icon"><i class="fas fa-tint"></i></div>
          <h3>Liquid Formulations</h3>
        </div>
        <p>Herbal syrups, liquid feed supplements, and oral solutions manufactured with precision to ensure stability, efficacy, and palatability.</p>
        <ul class="service-list">
          <li>Tonics & Syrups</li>
          <li>Oral Solutions</li>
          <li>Feed Supplements</li>
        </ul>
      </div>

      <div class="service-card animate-slide-up delay-1">
        <div class="service-header">
          <div class="service-icon"><i class="fas fa-cube"></i></div>
          <h3>Solid Formulations</h3>
        </div>
        <p>Powders, tablets, and bolus formulations designed for easy administration and maximum bioavailability of active herbal ingredients.</p>
        <ul class="service-list">
          <li>Herbal Powders</li>
          <li>Tablets & Bolus</li>
          <li>Feed Mineral Mixtures</li>
        </ul>
      </div>

      <div class="service-card animate-slide-up delay-2">
        <div class="service-header">
          <div class="service-icon"><i class="fas fa-cogs"></i></div>
          <h3>Custom Formulations</h3>
        </div>
        <p>Tailored herbal formulations developed to meet specific health requirements and market demands with our expert R&D support.</p>
        <ul class="service-list">
          <li>Formula Development</li>
          <li>Stability Testing</li>
          <li>Packaging Solutions</li>
        </ul>
      </div>
    </div>

    <div class="section-quote">
      <h3 class="hindi-text"><i class="fas fa-quote-left"></i> आपके पशुओं की सेहत, हमारी पहली ज़िम्मेदारी!</h3>
    </div>
  </div>
</section>

<!-- Video Section Start -->
<section class="video-section">
  <div class="container">
    <div class="video-wrapper">
      <iframe
        id="autoPlayVideo"
        data-src="https://www.youtube.com/embed/o0jLSar1ZHA?autoplay=1&mute=1&rel=0&playsinline=1"
        title="YouTube video player"
        frameborder="0"
        allow="autoplay; encrypted-media; picture-in-picture"
        allowfullscreen>
      </iframe>
    </div>
  </div>
</section>

<!-- Video Section End -->


<!-- Why Choose Us -->
<section class="section features">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">Why Choose VarahVet</h2>
      <p class="section-subtitle">Partner with us for reliable, high-quality, and effective herbal veterinary products</p>
    </div>

    <div class="features-grid">
      <div class="feature-card">
        <div class="feature-icon"><i class="fas fa-certificate"></i></div>
        <h3>GMP Certified Facility</h3>
        <p>Our manufacturing facility adheres to Good Manufacturing Practices (GMP) standards, ensuring consistent quality, safety, and efficacy of all products.</p>
      </div>

      <div class="feature-card">
        <div class="feature-icon"><i class="fas fa-flask"></i></div>
        <h3>Experienced R&D Team</h3>
        <p>Our team of experienced herbal practitioners and veterinary experts develop effective formulations based on traditional knowledge and modern research.</p>
      </div>

      <div class="feature-card">
        <div class="feature-icon"><i class="fas fa-leaf"></i></div>
        <h3>Pure Herbal Ingredients</h3>
        <p>We source the highest quality herbs and natural ingredients, ensuring purity, potency, and sustainability in all our formulations.</p>
      </div>

      <div class="feature-card">
        <div class="feature-icon"><i class="fas fa-check-circle"></i></div>
        <h3>Quality Assurance</h3>
        <p>Stringent quality control measures at every stage of production to guarantee product safety and effectiveness.</p>
      </div>

      <div class="feature-card">
        <div class="feature-icon"><i class="fas fa-clipboard-list"></i></div>
        <h3>Customized Solutions</h3>
        <p>We work closely with partners to develop customized formulations that meet specific market needs and requirements.</p>
      </div>

      <div class="feature-card">
        <div class="feature-icon"><i class="fas fa-industry"></i></div>
        <h3>Bulk Production Capacity</h3>
        <p>Large-scale production capabilities to meet high-volume orders while maintaining consistent quality standards.</p>
      </div>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section class="section contact" id="contact">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">Ready to Partner with VarahVet?</h2>
      <p class="section-subtitle">Join hands with India's trusted manufacturer of herbal veterinary products</p>
    </div>

    <div class="contact-content">
      <div class="contact-form animate-fade-right">
        <h3>Send us a Message</h3>
        <a href="contact-us.php" class="btn btn-whatsapp" target="_blank">
          Contact Us
        </a>

        <img class="contact-image" src="./img/2cows.jpg" alt="">



        <!-- <form id="contactForm">
            <div class="form-group">
              <input type="text" id="name" placeholder="Your Name" required>
            </div>
            <div class="form-group">
              <input type="email" id="email" placeholder="Your Email" required>
            </div>
            <div class="form-group">
              <input type="tel" id="phone" placeholder="Your Phone Number">
            </div>
            <div class="form-group">
              <input type="text" id="subject" placeholder="Subject">
            </div>
            <div class="form-group">
              <textarea id="message" rows="5" placeholder="Your Message" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Send Message</button>
          </form> -->
      </div>

      <div class="contact-info animate-fade-left">
        <h3>Contact Information</h3>
        <div class="info-item">
          <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
          <div class="info-content">
            <h4>Address</h4>
            <p> <span style="font-weight: bold;">VARAHVET</span> C-80, Pilakhni U.P.S.I.D.C<br>Saharanpur – 247001, Uttar Pradesh</p>
          </div>
        </div>

        <div class="info-item">
          <div class="info-icon"><i class="fas fa-phone"></i></div>
          <div class="info-content">
            <h4>Phone</h4>
            <p>+91 8475070000<br>+91 80774 29051</p>
          </div>
        </div>

        <div class="info-item">
          <div class="info-icon"><i class="fas fa-clock"></i></div>
          <div class="info-content">
            <h4>Business Hours</h4>
            <p>Monday – Saturday: 9:00 AM – 6:00 PM<br>Sunday: Closed</p>
          </div>
        </div>

        <div class="whatsapp-contact">
          <a href="https://wa.me/918475070000" class="btn btn-whatsapp" target="_blank">
            <i class="fab fa-whatsapp"></i> WhatsApp us
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<?php include('footer.php') ?>