<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   <title> <?php echo isset($page_title) ? $page_title : 'Animal Feed Supplements Manufacturer in Tatarstan | Varah Healthcare'; ?> </title>

    <meta name="description" content="  <?php echo isset($description) ? $description : 'Varah Healthcare is a trusted third-party manufacturer of animal feed supplements in Tatarstan, dedicated to improving animal health, farm productivity, and rural livelihoods through quality nutrition.'; ?>">
   
   <meta name="keywords" content="<?php echo isset($keyword) ? $keyword : 'varahvet,Third party manufacturer of animal feed supplements in Tatarstan,Third party suppliers of animal feed supplements in Tatarstan,Third party exporters of animal feed supplements in Tatarstan,Animal feed supplements,Feed supplement manufacturers,Animal supplement exporters,Feed additive suppliers,Veterinary supplements,Cattle feed manufacturers,third-party manufacturer of dairy cattle feed supplements in Tatarstan,third-party supplier of dairy cattle feed supplements in Tatarstan,third-party exporters of dairy cattle feed supplements in Tatarstan,Dairy cattle feed,Cattle feed supplements,third-party animal nutrition supplements manufacturer in Tatarstan,third-party animal nutrition supplements suppliers in Tatarstan,third-party animal nutrition supplements exporters in Tatarstan,Contract manufacturing of animal nutrition supplements Tatarstan,export animal feed supplement manufacturer in Tatarstan,export animal feed supplement suppliers in Tatarstan'; ?>">
<link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

<meta property="og:type" content="website" />
<meta property="og:site_name" content="Varah Healthcare" />
   <meta name="author" content="Varah Healthcare">
    <meta name="publisher" content="Varah Healthcare">
    <meta name="robots" content="ALL">
  <link rel="icon" type="image/png" sizes="512x512" href="../images/icon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <link rel="stylesheet" href="../css/main.min.css">
  <link rel="stylesheet" href="../css/product.min.css">
  <link rel="stylesheet" href="../css/product-styles.min.css">

</head>
<body>

  <!-- Top Bar -->

  <div class="vra-nav-top-bar">
    <div class="vra-nav-top-left">
      <i class="fas fa-phone text-white"></i> +91-8475070000 &nbsp;|&nbsp;
      <i class="fas fa-envelope text-white"></i> <a href="mailto:varahvet@gmail.com" class="text-white">varahvet@gmail.com</a>
    </div>
    <!-- <div class="vra-nav-top-right">
       <i class="fas fa-phone-alt"></i> +91-8475070000 &nbsp;|&nbsp;
      <i class="fas fa-envelope"></i> <a href="mailto:varahvet@gmail.com">varahvet@gmail.com</a>
      <i class="fas fa-globe"></i>
      <select id="vra-nav-language-select" onchange="vraNavTranslateLanguage(this.value)">
        <option value="">🌐 Language</option>
        <option value="en">English</option>
        <option value="fr">Français</option>
        <option value="es">Español</option>
        <option value="hi">हिन्दी</option>
        <option value="ar">العربية</option>
      </select>
      &nbsp;|&nbsp;
    </div> -->
  </div>

  <!-- Main Header/Navbar -->

  <header class="vra-nav-header">
    <div class="vra-nav-navbar">
      <div class="vra-nav-logo" alt="Varahvet" title="Varahvet"><img src="../images/logo.png" alt="Varahvet" title="Varahvet"></div>
      <button class="vra-nav-menu-toggle" id="vra-nav-menu-toggle">
        <span class="bars">☰</span>
        <!-- <span class="close" style="display:none;">✕</span> -->
      </button>
      <nav class="vra-nav-nav">
        <ul class="vra-nav-links" id="vra-nav-links">
          <li class="vra-nav-close-btn" id="vra-nav-close-btn">✕</li>
          <li><a href="../animal-feed-supplements.php" alt="Home" title="Home">Home</a></li>
          <li><a href="../about-us.php" alt="About Us" title="About Us">About Us</a></li>
          <li>
            <a href="../products.php" class="vra-nav-dropdown-toggle">Products</a>
            <div class="vra-nav-dropdown-menu">
              <div class="vra-nav-dropdown-column">
                <a href="../products.php" alt="All Products" title="All Products">All Products</a>
                <!-- <h4><i class="fas fa-cow" style="margin-right:8px;"></i>Cattle</h4> -->
                <a href="animal-feed-supplements.php" alt="Animal Feed Supplements" title="Animal Feed Supplements">Animal Feed Supplements</a>
                <a href="dairy-cattle-feed-supplements.php" alt="Dairy Cattle Feed Supplements" title="Dairy Cattle Feed Supplements">Dairy Cattle Feed Supplements</a>
                <a href="animal-nutrition-supplements.php" alt="Animal Nutrition Supplements" title="Animal Nutrition Supplements">Animal Nutrition Supplements</a>
                <a href="export-animal-feed-supplements.php" alt="Export Animal Feed" title="Export Animal Feed">Export Animal Feed</a>
                <a href="private-label-animal-feed-supplement.php" alt="Private Label Animal Feed Supplement" title="Private Label Animal Feed Supplement">Private Label Animal Feed Supplement</a>
                <a href="calcium-liquid.php" alt="Calcium Liquid" title="Calcium Liquid">Calcium Liquid</a>
                <a href="livestock-feed-supplements.php" alt="Livestock Feed Supplement" title="Livestock Feed Supplement">Livestock Feed Supplement</a>
                <a href="chick-feed-supplements.php" alt="Chick Feed" title="Chick Feed">Chick Feed</a>
                <a href="poultry-feed-supplements.php" alt="Poultry Feed Supplements" title="Poultry Feed Supplements">Poultry Feed Supplements</a>
                <a href="growth-promoter-supplements.php" alt="Growth Promoter Supplements" title="Growth Promoter Supplements">Growth Promoter Supplements</a>
                <a href="mineral-mixture.php" alt="Mineral Mixture" title="Mineral Mixture">Mineral Mixture</a>
              </div>
              <!-- <div class="vra-nav-dropdown-column">
                <h4><i class="fas fa-egg" style="margin-right:8px;"></i>Poultry</h4>
                <a href="livestock-feed-supplements.php">Livestock Feed Supplement</a>
                <a href="chick-feed-supplements.php">Chick Feed</a>
                <a href="poultry-feed-supplements.php">Poultry Feed Supplements</a>
                <a href="growth-promoter-supplements.php">Growth Promoter Supplements</a>
                <a href="mineral-mixture.php">Mineral Mixture</a>
              </div> -->
            </div>
          </li>
          <li><a href="blog.php" alt="Blog" title="Blog">Blog</a></li>
          <li><a href="../contact-us.php" alt="Contact Us" title="Contact Us">Contact Us</a></li>
          <!-- <li>
            <div class="vra-nav-search-box">
              <form action="../search.php" method="GET">
                <input type="text" name="query" placeholder="Search products..." required>
                <button type="submit">Search</button>
              </form>
            </div>
          </li> -->
        </ul>
      </nav>
    </div>
  </header>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const navLinks = document.getElementById('vra-nav-links');
      const menuToggle = document.getElementById('vra-nav-menu-toggle');
      const closeBtn = document.getElementById('vra-nav-close-btn');
      const barsIcon = menuToggle.querySelector('.bars');
      const closeIcon = menuToggle.querySelector('.close');
      
      // Toggle mobile menu
      menuToggle.addEventListener('click', function(e) {
        e.stopPropagation();
        navLinks.classList.toggle('active');
        
        // Toggle between hamburger and close icon
        if (navLinks.classList.contains('active')) {
          barsIcon.style.display = 'none';
          closeIcon.style.display = 'inline';
        } else {
          barsIcon.style.display = 'inline';
          closeIcon.style.display = 'none';
        }
      });
      
      // Close menu with close button
      closeBtn.addEventListener('click', function() {
        navLinks.classList.remove('active');
        barsIcon.style.display = 'inline';
        closeIcon.style.display = 'none';
      });
      
      // Toggle dropdowns
      const dropdownToggles = document.querySelectorAll('.vra-nav-dropdown-toggle');
      dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
          // Desktop: open the products page (dropdown opens on hover); mobile: toggle the dropdown
          if (window.innerWidth > 768) return;
          e.preventDefault();
          const dropdown = this.nextElementSibling;
          const isOpen = dropdown.style.display === 'grid' || dropdown.style.display === 'block';
          
          // Close other dropdowns
          document.querySelectorAll('.vra-nav-dropdown-menu').forEach(menu => {
            if (menu !== dropdown) {
              menu.style.display = 'none';
              menu.previousElementSibling.classList.remove('active');
            }
          });
          
          // Toggle current dropdown
          if (window.innerWidth <= 768) {
            dropdown.style.display = isOpen ? 'none' : 'block';
          } else {
            dropdown.style.display = isOpen ? 'none' : 'grid';
          }
          this.classList.toggle('active', !isOpen);
        });
      });
      
      // Hover functionality for desktop
      if (window.innerWidth > 768) {
        document.querySelectorAll('.vra-nav-links > li').forEach(item => {
          if (item.querySelector('.vra-nav-dropdown-menu')) {
            item.addEventListener('mouseenter', function() {
              const dropdown = this.querySelector('.vra-nav-dropdown-menu');
              dropdown.style.display = 'grid';
              this.querySelector('.vra-nav-dropdown-toggle').classList.add('active');
            });
            
            item.addEventListener('mouseleave', function() {
              const dropdown = this.querySelector('.vra-nav-dropdown-menu');
              dropdown.style.display = 'none';
              this.querySelector('.vra-nav-dropdown-toggle').classList.remove('active');
            });
          }
        });
      }
      
      // Close dropdowns when clicking outside
      document.addEventListener('click', function(e) {
        if (!e.target.closest('.vra-nav-dropdown-toggle') && 
            !e.target.closest('.vra-nav-dropdown-menu')) {
          document.querySelectorAll('.vra-nav-dropdown-menu').forEach(menu => {
            menu.style.display = 'none';
            menu.previousElementSibling.classList.remove('active');
          });
        }
        
        // Close mobile menu when clicking outside
        if (!e.target.closest('.vra-nav-menu-toggle') && 
            !e.target.closest('.vra-nav-links') &&
            window.innerWidth <= 768) {
          navLinks.classList.remove('active');
          barsIcon.style.display = 'inline';
          closeIcon.style.display = 'none';
        }
      });
      
      // Close menu when clicking any nav link (except dropdown toggles)
      document.querySelectorAll('.vra-nav-links a').forEach(link => {
        if (!link.classList.contains('vra-nav-dropdown-toggle')) {
          link.addEventListener('click', function() {
            if (window.innerWidth <= 768) {
              navLinks.classList.remove('active');
              barsIcon.style.display = 'inline';
              closeIcon.style.display = 'none';
            }
          });
        }
      });
      
      // Window resize handler
      window.addEventListener('resize', function() {
        if (window.innerWidth > 768) {
          navLinks.classList.remove('active');
          document.querySelectorAll('.vra-nav-dropdown-menu').forEach(menu => {
            menu.style.display = 'none';
            menu.previousElementSibling.classList.remove('active');
          });
          barsIcon.style.display = 'inline';
          closeIcon.style.display = 'none';
        }
      });
    });
    
    function vraNavTranslateLanguage(lang) {
      if (lang) {
        console.log('Language changed to:', lang);
        // Add your translation logic here
      }
    }
  </script>



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

document.getElementById('whatsapp-trigger').addEventListener('click', function (e) {
    e.preventDefault();
    document.getElementById('whatsapp-popup').style.display = 'flex';
});

document.getElementById('close-whatsapp').addEventListener('click', function () {
    document.getElementById('whatsapp-popup').style.display = 'none';
});

document.getElementById('whatsappForm').addEventListener('submit', function (e) {
    e.preventDefault();
    var name = document.getElementById('whatsappName').value;
    var mobile = document.getElementById('whatsappMobile').value;
    var whatsappUrl = `https://api.whatsapp.com/send?phone=+918475070000&text=Hi, My name is ${name} and my mobile number is ${mobile}.`;
    window.open(whatsappUrl, '_blank');
});

// Handle Mail Popup
document.getElementById('mail-trigger').addEventListener('click', function (e) {
    e.preventDefault();
    document.getElementById('mail-popup').style.display = 'flex';
});

document.getElementById('close-mail').addEventListener('click', function () {
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
        }
        else {
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
    fetch('../form-handler.php', {
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
