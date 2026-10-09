<?php $page_title = "About Varah Healthcare | Trusted Partner in Animal Nutrition";
  $description = "Learn about Varah Healthcare’s mission to revolutionize animal healthcare through innovative, high-quality feed supplements. Discover our commitment to quality, trust, and agricultural 
Progress.";
  $keyword = "varahvet,Third party manufacturer of animal feed supplements in India,Third party suppliers of animal feed supplements in India,Third party exporters of animal feed supplements in India,Animal feed supplements,Feed supplement manufacturers,Animal supplement exporters,Feed additive suppliers,Veterinary supplements,Cattle feed manufacturers,third-party manufacturer of dairy cattle feed supplements in India,third-party supplier of dairy cattle feed supplements in India,third-party exporters of dairy cattle feed supplements in India,Dairy cattle feed,Cattle feed supplements,third-party animal nutrition supplements manufacturer in India,third-party animal nutrition supplements suppliers in India,third-party animal nutrition supplements exporters in India,Contract manufacturing of animal nutrition supplements India,export animal feed supplement manufacturer in India,export animal feed supplement suppliers in India";
  include('header.php'); ?>

  <style>
  

    .about-container {
      display: flex;
      margin-top: 9rem;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      padding: 60px 20px;
      gap: 40px;
      background: #f9f9f9;
    }

    .about-left {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 10px;
      max-width: 500px;
    }

    .about-card {
      grid-column: span 2;
      background: linear-gradient(135deg,rgb(93, 217, 209), #00aeb7);
      color: white;
      padding: 30px;
      border-radius: 10px;
    }

    .about-card h3 {
      font-size: 0.9rem;
      opacity: 0.7;
      margin-bottom: 10px;
    }

    .about-card h2 {
      font-size: 1.8rem;
      margin: 0;
    }

    .about-left img {
      width: 100%;
      border-radius: 10px;
      object-fit: cover;
      height: 150px;
    }

    .about-right {
      max-width: 500px;
    }

    .about-right h2 {
      font-size: 2rem;
      margin-bottom: 20px;
      color: #111;
    }

    .about-right p {
      color: #555;
      line-height: 1.6;
      margin-bottom: 20px;
    }

    .about-button {
      display: inline-block;
      padding: 12px 24px;
      background: #eef3fd;
      color: #00aeb7;
      border-radius: 30px;
      text-decoration: none;
      font-weight: bold;
      transition: background 0.3s ease;
    }

    .about-button:hover {
      background: #d5e2ff;
    }

    @media (max-width: 768px) {
      .about-container {
        flex-direction: column;
        padding: 40px 20px;
      }

      .about-left {
        grid-template-columns: 1fr;
      }

      .about-card {
        grid-column: span 1;
      }
    }
  </style>


  <section class="about-container">
    <div class="about-left">
      <div class="about-card">
        <h3>OUR STORY</h3>
        <h2>Nourishing Livestock, Empowering Brands</h2>
      </div>
      <img src="images/cal2.png" alt="Team 1" />
      <img src="images/cattle-feed.jpg" alt="Team 2" />
    </div>
    <div class="about-right">
      <h2>Welcome to Varah Healthcare</h2>
      <p>
      At VARAH HEALTHCARE, our work goes beyond producing animal feed supplements; we create nutrition that supports healthier farms, stronger animals, and flourishing agricultural communities.


      </p>
      <p>VARAH HEALTHCARE, founded to transform animal healthcare, has become a reliable third-party manufacturer of animal feed supplements in India, providing high-quality products that have a genuine impact at the grassroots level. With every formula we create and every batch we manufacture, we keep a commitment to quality, innovation, and trust.
</p>
      <!-- <a href="#" class="about-button">LEAD MORE</a> -->
    </div>
  </section>

  <style>
  

    .feat-section {
      background-color: #00aeb7;
      color: #fff;
      padding: 60px 20px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
    }

    .left-text {
      flex: 1 1 300px;
      max-width: 400px;
    }

    .left-text h2 {
      font-size: 2rem;
      margin-bottom: 20px;
    }

    .left-text button {
      background-color: #00aeb7;
      color: #000;
      border: none;
      padding: 12px 24px;
      font-size: 1rem;
      border-radius: 6px;
      cursor: pointer;
      transition: 0.3s ease;
    }

    .left-text button:hover {
      background-color: #00aeb7;
    }

    .feats {
      flex: 2 1 600px;
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
    }

    .feat-card {
      background-color: rgba(255, 255, 255, 0.05);
      padding: 20px;
      border-radius: 12px;
      width: 250px;
      border: 1px solid rgba(255, 255, 255, 0.2);
      text-align: left;
      color: #fff;
    }

    .feat-card.active {
      background-color: #fff;
      color: #333;
      font-weight: bold;
    }

    .feat-card h3 {
      font-size: 1rem;
      margin: 10px 0 8px;
    }

    .feat-card p {
      font-size: 0.9rem;
      color: inherit;
    }

    .feat-icon {
      font-size: 1.8rem;
      margin-bottom: 8px;
    }

    @media (max-width: 768px) {
      .feat-section {
        flex-direction: column;
        align-items: center;
        text-align: center;
      }

      .feats {
        flex-direction: column;
      }
    }
  </style>


  <section class="feat-section">
    <div class="left-text">
      <h2>What We Believe In ?
</h2>
<p>We are dedicated to environmentally conscious production methods and reducing our environmental footprint.

</p>    </div>

    <div class="feats">
      <div class="feat-card">
        <h3>Purposeful Innovation </h3>
        <p>To keep pace with changing nutritional requirements, we continuously explore novel formulations, delivery methods, and ingredient combinations.

</p>
      </div>
      <div class="feat-card active">
        <h3>Partnership Beyond Contracts</h3>
        <p>We consider every client to be a long-term partner. We succeed when you succeed.
</p>
      </div>
      <div class="feat-card">
        <h3>Quality Without Compromise</h3>
        <p>Each product dispatched from our facility embodies our dedication to purity, potency, and performance.

</p>
      </div>
    </div>
  </section>



  <style>
  
    .about-section {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      padding: 60px 20px;
      max-width: 1200px;
      margin: auto;
      align-items: center;
      gap: 40px;
    }

    .text-content {
      flex: 1 1 400px;
    }

    .text-content h2 {
      font-size: 2.2rem;
      margin-bottom: 10px;
    }

    .text-content p {
      font-size: 1rem;
      line-height: 1.6;
      margin-bottom: 30px;
      color: #444;
    }

    .vision-mission {
      display: flex;
      gap: 40px;
      flex-wrap: wrap;
    }

    .vision,
    .mission {
      flex: 1 1 200px;
    }

    .vision h3,
    .mission h3 {
      font-size: 1.1rem;
      margin-bottom: 10px;
    }

    .images {
      display: flex;
      gap: 20px;
      flex: 1 1 400px;
      justify-content: center;
    }

    .images img {
      width: 200px;
      height: 300px;
      object-fit: cover;
      border-radius: 50px;
    }

    @media (max-width: 768px) {
      .about-section {
        flex-direction: column;
        text-align: center;
      }

      .vision-mission {
        flex-direction: column;
        align-items: center;
      }

      .images {
        flex-wrap: wrap;
        justify-content: center;
      }

      .images img {
        width: 90px;
        height: 180px;
      }
    }
  </style>


  <section class="about-section">
    <div class="text-content">
      <h5>ABOUT US</h5>
      <h2>Who We Are</h2>
      <p>VARAH HEALTHCARE is ready to fulfill your requirements — with accuracy and enthusiasm — whether you need a specialized manufacturer of calcium liquid feed supplements, a producer of mineral mixtures, or a comprehensive range of growth promoter supplements.

</p>
      <div class="vision-mission">
        <div class="vision">
          <h3>Vision</h3>
          <p>To achieve international recognition as a top brand in the production of animal feed supplements, distinguished by our honesty, adherence to scientific principles, and focus on customers.
</p>
         
        </div>
        <div class="mission">
          <h3>Mission</h3>
           <p>To develop animal nutrition supplements that are innovative, effective, and cost-efficient, aiding in improved health, productivity, and profitability for our global partners.
</p>
        </div>
      </div>
    </div>

    <div class="images">
      <img src="images/expo2.png" alt="Spine">
      <img src="images/nutri.png" alt="Doctor">
     
    </div>
  </section>


<?php include('footer.php') ?>