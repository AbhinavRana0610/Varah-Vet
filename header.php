<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> <?php echo isset($page_title) ? $page_title : 'Animal Feed Supplements Manufacturer in India | Varah Healthcare'; ?> </title>

  <meta name="description" content="  <?php echo isset($description) ? $description : 'Varah Healthcare is a trusted third-party manufacturer of animal feed supplements in India, dedicated to improving animal health, farm productivity, and rural livelihoods through quality nutrition.'; ?>">
  <meta name="google-site-verification" content="T7uS9ePSPdBeqQxpoWFFOL5DAXtPGKM6u7hGzOAPio8" />
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-JQDG8FTW59"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-JQDG8FTW59');
  </script>
  <meta name="keywords" content="<?php echo isset($keyword) ? $keyword : 'varahvet,Third party manufacturer of animal feed supplements in India,Third party suppliers of animal feed supplements in India,Third party exporters of animal feed supplements in India,Animal feed supplements,Feed supplement manufacturers,Animal supplement exporters,Feed additive suppliers,Veterinary supplements,Cattle feed manufacturers,third-party manufacturer of dairy cattle feed supplements in India,third-party supplier of dairy cattle feed supplements in India,third-party exporters of dairy cattle feed supplements in India,Dairy cattle feed,Cattle feed supplements,third-party animal nutrition supplements manufacturer in India,third-party animal nutrition supplements suppliers in India,third-party animal nutrition supplements exporters in India,Contract manufacturing of animal nutrition supplements India,export animal feed supplement manufacturer in India,export animal feed supplement suppliers in India'; ?>">
  <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="Varah Healthcare" />
  <meta name="author" content="Varah Healthcare">
  <meta name="publisher" content="Varah Healthcare">
  <meta name="robots" content="ALL">
  <link rel="icon" type="image/png" sizes="512x512" href="images/icon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="css/main.min.css">
  <!-- <link rel="stylesheet" href="css/main.min.css"> -->
  <link rel="stylesheet" href="css/product.min.css">
  <link rel="stylesheet" href="css/product-styles.min.css">
  <link rel="shortcut icon" href="./img/icon.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="style.min.css">

</head>

<body>


  <!-- Top contact strip (fixed) -->
  <div class="top-strip" id="topStrip">
    <div class="top-contact">
      <span class="top-phone">
        <i class="fas fa-phone"></i>
        <a href="tel:+918475070000">+91 84750 70000</a>
      </span>

      <span class="top-email">
        <i class="fas fa-envelope"></i>
        <a href="mailto:varahvet@gmail.com">varahvet@gmail.com</a>
      </span>
    </div>
  </div>


  <!-- Header & Navigation (fixed below top-strip) -->
  <header class="header" id="siteHeader">
    <div class="container">
      <nav class="navbar">
        <a href="index.php" class="logo">
          <div class="logo-icon">
            <img src="./img/icon.png" alt="">
          </div>
          <span class="logo-text">Varah<span class="logo-highlight">Vet</span></span>
        </a>

        <div class="nav-menu" id="navMenu" aria-hidden="true">
          <ul class="nav-list">
            <li><a href="index.php" class="nav-link active">Home</a></li>

            <li><a href="about-us.php" class="nav-link">About Us</a></li>

            <!-- Products with dropdown (Option A behavior) -->
            <li class="has-dropdown">
              <a href="products.php" class="nav-link">Products</a>

              <!-- caret toggles dropdown on mobile; hover opens on desktop -->
              <button class="drop-btn" aria-expanded="false" aria-label="Toggle products">▾</button>

              <!-- SIMPLE dropdown: only category names -->
              <div class="dropdown" role="menu" aria-hidden="true">
                <a href="animal-feed-supplements.php" class="dropdown-link">Animal Feed Supplements</a>
                <a href="dairy-cattle-feed-supplements.php" class="dropdown-link">Dairy Cattle Feed Supplements</a>
                <a href="animal-nutrition-supplements.php" class="dropdown-link">Animal Nutrition Supplements</a>
                <a href="export-animal-feed-supplements.php" class="dropdown-link">Export Animal Feed Supplements</a>
                <a href="private-label-animal-feed-supplement.php" class="dropdown-link">Private Label Animal Feed Supplements</a>
                <a href="calcium-liquid.php" class="dropdown-link">Calcium Liquid</a>
                <a href="livestock-feed-supplements.php" class="dropdown-link">Livestock Feed Supplements</a>
                <a href="chick-feed-supplements.php" class="dropdown-link">Chick Feed Supplements</a>
                <a href="poultry-feed-supplements.php" class="dropdown-link">Poultry Feed Supplements</a>
                <a href="growth-promoter-supplements.php" class="dropdown-link">Growth Promoter Supplements</a>
                <a href="mineral-mixture.php" class="dropdown-link">Mineral Mixture</a>
                <a href="product.php" class="dropdown-link">Poultry & Swine</a>
                <a href="product.php" class="dropdown-link">Cattle</a>
                <a href="product.php" class="dropdown-link">Aqua</a>
              </div>
            </li>
            <li><a href="contact-us.php" class="nav-link">Contact Us</a></li>
            <li><a href="blog.php" class="nav-link">Blog</a></li>
          </ul>

          <div class="cta-button1">
            <a href="./pdf/Cattle-Catalouge.pdf" target="_blank" class="btn1   primary">Cattle Catalogue</a> 
            <a href="./pdf/Poultry-catalouge.pdf" target="_blank" class="btn1 outline">Poultry Catalogue</a>
          </div>

        </div>

        <button class="mobile-toggle" id="mobileToggle" aria-label="Toggle navigation" aria-expanded="false">
          <span></span><span></span><span></span>
        </button>
      </nav>
    </div>
  </header>

  <!-- Mobile overlay for side panel -->
  <div class="mobile-overlay" id="mobileOverlay"></div>

  <div id="prom-enquiry-forms">
    <!-- Fixed Side Icons -->
    <div class="fixed-icons">
      <a href="tel:+918475070000" class="phone-icon"><i class="fas fa-phone"></i></a>
      <a href="#" class="whatsapp-icon" id="whatsapp-trigger"><i class="fab fa-whatsapp"></i></a>
      <a href="#" class="mail-icon" id="mail-trigger"><i class="fas fa-envelope"></i></a>
    </div>

    <!-- WhatsApp Popup Form -->
    <div id="whatsapp-popup" class="popup-form">
      <div class="form-content">
        <span class="close-btn" id="close-whatsapp">&times;</span>
        <h4>Contact via WhatsApp</h4>
        <form id="whatsappForm" method="post">
          <input type="text" id="whatsappName" name="whatsappName" placeholder="Name" required>
          <input type="text" id="whatsappMobile" name="whatsappMobile" placeholder="Mobile" required>
          <button type="submit" class="btn">Submit</button>
        </form>
      </div>
    </div>

    <!-- Mail Popup Form -->
    <div id="mail-popup" class="popup-form">
      <div class="form-content">
        <span class="close-btn" id="close-mail">&times;</span>
        <h4>Contact via Email</h4>
        <form id="mailForm" method="post">
          <input type="text" id="companyName" name="companyName" placeholder="Company Name" required>
          <input type="text" id="name" name="name" placeholder="Name" required>
          <input type="email" id="email" name="email" placeholder="Email" required>
          <input type="text" id="mobile" name="mobile" placeholder="Mobile" required>
          <input type="text" id="productService" name="productService" placeholder="Product/Services" required>
          <textarea id="message" name="message" rows="2" placeholder="Message" required></textarea>
          <button type="submit" class="btn">Send Message</button>
        </form>
      </div>
    </div>
  </div>


  <script>
    // Handle WhatsApp Popup

    document.getElementById('whatsapp-trigger').addEventListener('click', function(e) {
      e.preventDefault();
      document.getElementById('whatsapp-popup').style.display = 'flex';
    });

    document.getElementById('close-whatsapp').addEventListener('click', function() {
      document.getElementById('whatsapp-popup').style.display = 'none';
    });

    document.getElementById('whatsappForm').addEventListener('submit', function(e) {
      e.preventDefault();
      var name = document.getElementById('whatsappName').value;
      var mobile = document.getElementById('whatsappMobile').value;
      var whatsappUrl = `https://api.whatsapp.com/send?phone=+918475070000&text=Hi, My name is ${name} and my mobile number is ${mobile}.`;
      window.open(whatsappUrl, '_blank');
    });

    // Handle Mail Popup
    document.getElementById('mail-trigger').addEventListener('click', function(e) {
      e.preventDefault();
      document.getElementById('mail-popup').style.display = 'flex';
    });

    document.getElementById('close-mail').addEventListener('click', function() {
      document.getElementById('mail-popup').style.display = 'none';
    });

    // document.getElementById('mailForm').addEventListener('submit', function (e) {
    //     e.preventDefault();
    //     alert("Thank you for your message! We will get back to you shortly.");
    //     document.getElementById('mail-popup').style.display = 'none';
    // });

    // Handle WhatsApp form submission
    document.getElementById('whatsappForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent default form submission

      var formData = new FormData(this);

      fetch('../form-handler.php', {
          method: 'POST',
          body: formData
        })
        .then(response => response.text())
        .then(result => {
          if (result === 'success') {
            alert('WhatsApp form submitted successfully!');
            document.getElementById('whatsapp-popup').style.display = 'none';
          } else {
            alert('There was an error submitting the form.');
          }
        })
        .catch(error => {
          console.error('Error:', error);
        });
    });

    // Handle Mail form submission
    document.getElementById('mailForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent default form submission

      var formData = new FormData(this);

      fetch('../form-handler.php', {
          method: 'POST',
          body: formData
        })
        .then(response => response.text())
        .then(result => {
          if (result === 'success') {
            alert('Mail form submitted successfully!');
            document.getElementById('mail-popup').style.display = 'none';
          } else {
            alert('There was an error submitting the form.');
          }
        })
        .catch(error => {
          console.error('Error:', error);
        });
    });

    // Handle Footer Mail Popup

    // Open the mail popup using class
    const mailPopupLinks = document.querySelectorAll('.open-mail-popup');
    mailPopupLinks.forEach(link => {
      link.onclick = function(e) {
        e.preventDefault(); // Prevent the default anchor click behavior
        document.getElementById('mail-popup').style.display = 'flex'; // Show the popup
      };
    });

    // Close the mail popup
    document.getElementById('close-mail').onclick = function() {
      document.getElementById('mail-popup').style.display = 'none'; // Hide the popup
    };

    // Close the popup when clicking outside of it
    window.onclick = function(event) {
      const popup = document.getElementById('mail-popup');
      if (event.target === popup) {
        popup.style.display = 'none'; // Hide the popup
      }
    };


    // Contact page form

    document.getElementById('contactPageForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent default form submission

      // Collect form data
      var formData = new FormData(this);

      // Send data to the PHP handler
      fetch('form-handler.php', {
          method: 'POST',
          body: formData
        })
        .then(response => response.text())
        .then(result => {
          if (result === 'success') {
            alert('Your message has been sent successfully!');
          } else {
            alert('There was an error sending your message. Please try again later.');
          }
        })
        .catch(error => {
          console.error('Error:', error);
          alert('There was an error sending your message. Please try again later.');
        });
    });
  </script>