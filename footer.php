<style>
  .newsletter-section {
    background: #00aeb7;
    border-radius: 10px;
    max-width: 1100px;
    margin: 60px auto 20px;
    padding: 40px 30px;
    color: white;
    display: flex;
    justify-content: center;
  }

  .newsletter-container {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 30px;
    width: 100%;
  }

  .newsletter-image img {
    max-width: 200px;
    width: 100%;
  }

  .newsletter-content {
    flex: 1;
    min-width: 280px;
  }

  .newsletter-content h2 {
    font-size: 1.5rem;
    margin-bottom: 10px;
  }

  .newsletter-content p {
    margin-bottom: 15px;
  }

  .newsletter-form {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 10px;
  }

  .newsletter-form input {
    flex: 1;
    padding: 10px;
    border-radius: 20px;
    border: none;
  }

  .newsletter-form button {
    background: white;
    color: #00aeb7;
    border: none;
    border-radius: 20px;
    padding: 10px 20px;
    font-weight: bold;
    cursor: pointer;
  }

  .newsletter-content small {
    font-size: 12px;
    color: #e0e0e0;
  }

  .newsletter-content a {
    color: white;
    text-decoration: underline;
  }
</style>

<section class="newsletter-section">
  <div class="newsletter-container">
    <div class="newsletter-image">
      <img src="images/hen1.webp" alt="Varahvet" title="Varahvet" />
    </div>
    <div class="newsletter-content">
      <h2>To get the latest updates on veterinary medicines, feed supplements connect with us !</h2>
      <p>Stay Connected with the World of Animal Health</p>
      <form class="newsletter-form">
        <input type="email" placeholder="Enter your email" required />
        <button type="submit">Submit</button>
      </form>
      <!-- <small>You will be able to unsubscribe at any time. Read our <a href="#">privacy policy</a>.</small> -->
    </div>
  </div>
</section>


<!-- Footer -->
<footer class="footer">
  <div class="container">
    <div class="footer-content">
      <div class="footer-brand">
        <a href="index.php" class="logo">
          <img src="./img/icon.png" alt="">
          <span>Varah Vet</span>
        </a>
        <p>Leading manufacturer of herbal veterinary supplements for all domestic animals.</p>
        <div class="social-links">
          <a class="ab" href="https://www.facebook.com/people/Varahvet/61576279684602/"><i class="fab fa-facebook-f"></i></a>
          <a class="ab" href="https://www.youtube.com/@VarahVet"><i class="fab fa-youtube"></i></a>
          <a class="ab" href="https://www.instagram.com/varahvet/"><i class="fab fa-instagram"></i></a>
        </div>
      </div>

      <div class="footer-links">
        <h3>Quick Links</h3>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about-us.php">About Us</a></li>
          <li><a href="locations.php"> Global</a></li>
          <li><a href="contact-us.php">Contact Us</a></li>
        </ul>
      </div>

      <div class="footer-links">
        <h3>More Links</h3>
        <ul>
          <li><a href="/site-map.php">Site Map </a></li>
          <li><a href="/disclaimer.php">Disclaimer </a></li>
          <li><a href="/privacy-policy.php">Privacy Policy </a></li>
          <li><a href="/terms-and-condition.php">Terms & Conditions</a></li>
        </ul>
      </div>

      <div class="footer-map">
        <h3>Contact Us</h3>
        <ul class="contact-info small">
          <li><strong>Address:</strong><br />C-80, U.P.S.I.D.C, Pilakhani, Saharanpur, - 247001, Uttar Pradesh</li>
          <li><strong>Phone:</strong> <a href="tel:+918475070000">+91 84750 70000</a></li>
          <li><strong>Email:</strong> <a href="mailto:varahvet@gmail.com">varahvet@gmail.com</a></li>
        </ul>

        <div class="map-wrap">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3455.0522099659092!2d77.4639672!3d30.0066572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390eed12015d2ddf%3A0x4463601e9dbece02!2sVarahVet!5e0!3m2!1sen!2sin!4v1766397377811!5m2!1sen!2sin" width="260" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <p>&copy; <span id="currentYear"></span> VarahVet. All rights reserved. | Site maintained by <a href="https://www.promopact.in/">Promopact Marketing India Pvt Ltd.</a></p>
    </div>
  </div>
</footer>


<!-- Inline accessibility helpers / small caret handler (kept minimal, main logic in scriptt.js) -->
<script>
  (function() {
    // only small accessibility helpers here; main behaviour moved to scriptt.js
    // Keep caret toggle aria attributes in sync if present
    document.addEventListener('click', function(e) {
      // This handler keeps dropdown aria-hidden consistent in case of outside clicks
      const openDropdowns = document.querySelectorAll('.dropdown.open');
      openDropdowns.forEach(dd => {
        const parent = dd.closest('.has-dropdown');
        if (!parent.contains(e.target)) {
          dd.classList.remove('open');
          dd.setAttribute('aria-hidden', 'true');
          const btn = parent.querySelector('.drop-btn');
          btn?.setAttribute('aria-expanded', 'false');
        }
      });
    });
  })();
</script>


<!-- Bootstrap 5 JS Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoA6lfLqZZ1xdloz5IRoQeFf1JGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<div id="google_translate_element" style="display: none;"></div>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script src="js/main.min.js" defer></script>
<script src="scriptt.min.js" defer></script>
</body>

</html>