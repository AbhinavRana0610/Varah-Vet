<?php include('header.php') ?>


<div class="contact-container">
  <!-- Contact Details -->
  <div class="contact-details">
    <h2>Get In Touch</h2>

    <div class="info-block">
      <i class="fas fa-phone"></i>
      <div>
        <p class="label">Phone Number</p>
        <p>+91-8475070000</p>
      </div>
    </div>

    <div class="info-block">
      <i class="fas fa-envelope"></i>
      <div>
        <p class="label">E-Mail</p>
        <p>varahvet@gmail.com</p>
      </div>
    </div>

    <div class="info-block">
      <i class="fas fa-map-marker-alt"></i>
      <div>
        <p class="label">Address</p>
        <p>VARAH HEALTHCARE, C-80, Pilakhni U.P.S.I.D.C, Saharanpur - 247001, Uttar Pradesh</p>
      </div>
    </div>

    <div class="social">
      <p class="label">Follow Us:</p>
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-youtube"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
    </div>
  </div>

  <!-- Contact Form -->
  <div class="contact-form">
  <form id="contactPageForm" method="post">
    <input type="text" id="companyName" name="companyName" placeholder="Company Name" required>
    <input type="text" id="name" name="name" placeholder="Name" required>
    <input type="email" id="email" name="email" placeholder="Email" required>
    <input type="text" id="mobile" name="mobile" placeholder="Mobile" required>
    <input type="text" id="productService" name="productService" placeholder="Product/Services" required>
    <textarea id="message" name="message" rows="4" placeholder="Message" required></textarea>
    <button type="submit" class="btn">Send Message</button>
</form>

  </div>
</div>
<script>
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


      <style>
  
.contact-container {
  display: flex;
  max-width: 1200px;
  margin: auto;
  margin-top: 9rem;
  background: #fff;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0,0,0,0.1);
}

.contact-details, .contact-form {
  flex: 1;
  padding: 40px;
}

.contact-details {
  background-color: #f9fafc;
  border-right: 1px solid #ddd;
}

.contact-details h2 {
  margin-bottom: 30px;
  color: #333;
}

.info-block {
  display: flex;
  margin-bottom: 20px;
}

.info-block i {
  font-size: 20px;
  color: #007BFF;
  margin-right: 15px;
  margin-top: 5px;
}

.info-block .label {
  font-weight: bold;
  margin-bottom: 3px;
}

.social {
  margin-top: 30px;
}

.social a {
  font-size: 18px;
  margin-right: 15px;
  color: #007BFF;
  text-decoration: none;
}

.contact-form form {
  display: flex;
  flex-direction: column;
}

.row {
  display: flex;
  gap: 20px;
  margin-bottom: 20px;
}

.row.full {
  flex-direction: column;
}

input, textarea {
  flex: 1;
  padding: 12px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 6px;
}

textarea {
  resize: vertical;
}

.btn {
  padding: 12px 20px;
  background-color: #007BFF;
  color: #fff;
  font-size: 16px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  margin-top: 10px;
  align-self: flex-start;
}

.btn:hover {
  background-color: #0056b3;
}

@media screen and (max-width: 768px) {
  .contact-container {
    flex-direction: column;
  }

  .row {
    flex-direction: column;
  }
}

  #contactPageForm {
    max-width: 600px;
    margin: 40px auto;
    padding: 30px;
    background: #f9f9f9;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    font-family: 'Inter', sans-serif;
  }

  #contactPageForm input,
  #contactPageForm textarea {
    width: 100%;
    padding: 12px 16px;
    margin-bottom: 18px;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 16px;
    transition: border-color 0.3s ease;
    background-color: #fff;
  }

  #contactPageForm input:focus,
  #contactPageForm textarea:focus {
    outline: none;
    border-color: #4e9cff;
    background-color: #f0faff;
  }

  #contactPageForm textarea {
    resize: vertical;
    min-height: 120px;
  }

  #contactPageForm .btn {
    width: 100%;
    padding: 12px;
    background-color: #00aeb7;
    color: white;
    font-size: 17px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  #contactPageForm .btn:hover {
    background-color: #00aeb7;
  }

  @media (max-width: 600px) {
    #contactPageForm {
      padding: 20px;
    }
  }
</style>


 
 

<?php include('footer.php') ?>
