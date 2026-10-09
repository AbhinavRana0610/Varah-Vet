<?php $page_title = "Site Map | Varah Healthcare";
  $description = "Explore the complete site map of Varah Healthcare. Navigate easily to all our pages including products, services, locations, and more.";
  $keyword = "varahvet site map, varah healthcare pages, animal feed supplements sitemap";
  include('header.php'); ?>

  <style>
    .sitemap-section {
      margin-top: 9rem;
      padding: 60px 20px;
      max-width: 1100px;
      margin-left: auto;
      margin-right: auto;
    }

    .sitemap-section h1 {
      font-size: 2.2rem;
      color: #111;
      margin-bottom: 10px;
    }

    .sitemap-section .underline {
      width: 80px;
      height: 4px;
      background: #00aeb7;
      border-radius: 2px;
      margin-bottom: 40px;
    }

    .sitemap-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
    }

    .sitemap-block h3 {
      font-size: 1.2rem;
      color: #00aeb7;
      margin-bottom: 12px;
      border-bottom: 2px solid #e0e0e0;
      padding-bottom: 8px;
    }

    .sitemap-block ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .sitemap-block ul li {
      margin-bottom: 8px;
    }

    .sitemap-block ul li a {
      color: #444;
      text-decoration: none;
      font-size: 0.95rem;
      transition: color 0.3s ease;
    }

    .sitemap-block ul li a:hover {
      color: #00aeb7;
    }

    @media (max-width: 768px) {
      .sitemap-section {
        padding: 40px 15px;
        margin-top: 7rem;
      }

      .sitemap-section h1 {
        font-size: 1.6rem;
      }
    }
  </style>

  <section class="sitemap-section">
    <h1>Site Map</h1>
    <div class="underline"></div>

    <div class="sitemap-grid">
      <div class="sitemap-block">
        <h3>Main Pages</h3>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about-us.php">About Us</a></li>
          <li><a href="product.php">Products</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="contact-us.php">Contact Us</a></li>
          <li><a href="locations.php">Global Locations</a></li>
        </ul>
      </div>

      <div class="sitemap-block">
        <h3>Products</h3>
        <ul>
          <li><a href="animal-feed-supplements.php">Animal Feed Supplements</a></li>
          <li><a href="dairy-cattle-feed-supplements.php">Dairy Cattle Feed Supplements</a></li>
          <li><a href="animal-nutrition-supplements.php">Animal Nutrition Supplements</a></li>
          <li><a href="export-animal-feed-supplements.php">Export Animal Feed Supplements</a></li>
          <li><a href="private-label-animal-feed-supplement.php">Private Label Animal Feed Supplements</a></li>
          <li><a href="calcium-liquid.php">Calcium Liquid</a></li>
          <li><a href="livestock-feed-supplements.php">Livestock Feed Supplements</a></li>
          <li><a href="chick-feed-supplements.php">Chick Feed Supplements</a></li>
          <li><a href="poultry-feed-supplements.php">Poultry Feed Supplements</a></li>
          <li><a href="growth-promoter-supplements.php">Growth Promoter Supplements</a></li>
          <li><a href="mineral-mixture.php">Mineral Mixture</a></li>
          <li><a href="cattle-and-poultry-feed.php">Cattle and Poultry Feed</a></li>
          <li><a href="contract-manufacturer-of-animal-feed-supplement.php">Contract Manufacturer</a></li>
        </ul>
      </div>

      <div class="sitemap-block">
        <h3>Support</h3>
        <ul>
          <li><a href="disclaimer.php">Disclaimer</a></li>
          <li><a href="privacy-policy.php">Privacy Policy</a></li>
          <li><a href="terms-and-condition.php">Terms &amp; Conditions</a></li>
          <li><a href="site-map.php">Site Map</a></li>
        </ul>
      </div>
    </div>
  </section>

<?php include('footer.php') ?>
