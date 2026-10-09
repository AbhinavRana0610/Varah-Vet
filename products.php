<?php $page_title = "Our Products | Varah Healthcare Animal Feed Supplements";
  $description = "Explore the complete range of Varah Healthcare animal feed supplements, from calcium liquid and mineral mixture to poultry, dairy cattle and private label supplements.";
  include('header.php');

  // Names from the Products menu; descriptions from each product page's intro paragraph.
  $products = [
    [
      'name'  => 'Animal Feed Supplements',
      'url'   => 'animal-feed-supplements.php',
      'image' => 'images/animal-feed-supplements.webp',
      'alt'   => 'VARAH animal feed supplement range for cattle and poultry',
      'text'  => 'As a third-party manufacturer of animal feed supplements in India, VARAH HEALTHCARE is pleased to provide top-notch formulations for pets, poultry, livestock, and aquaculture. Being one of the best top third-party suppliers of animal feed supplements in India, we are dedicated to providing premium, secure, and efficient products that promote the productivity and well-being of animals.',
    ],
    [
      'name'  => 'Dairy Cattle Feed Supplements',
      'url'   => 'dairy-cattle-feed-supplements.php',
      'image' => 'images/dairy-cattle-feed-supplements.webp',
      'alt'   => 'VARAH Mastitis Granules for udder health in dairy cows',
      'text'  => 'VARAH HEALTHCARE, a trusted third-party manufacturer of dairy cattle feed supplements in India, provides nutritional solutions that are scientifically developed and customized to satisfy the unique requirements of dairy cattle. Our dedication to quality, innovation, and animal welfare guarantees that your brand provides dairy cattle with dependable, efficient nutrients that enhance immunity, milk production, and reproductive health.',
    ],
    [
      'name'  => 'Animal Nutrition Supplements',
      'url'   => 'animal-nutrition-supplements.php',
      'image' => 'images/animal-nutrition-supplements.webp',
      'alt'   => 'VARAH animal nutrition tonic bottles',
      'text'  => 'VARAH HEALTHCARE, a top third-party animal nutrition supplements manufacturer in India, is dedicated to providing high-performance, scientifically supported formulations for pets, poultry, livestock, and aquaculture. With a thorough awareness of the nutritional requirements of various species and a focus on quality and innovation, we provide dependable third-party production services that help your brand expand both domestically and abroad.',
    ],
    [
      'name'  => 'Export Animal Feed Supplements',
      'url'   => 'export-animal-feed-supplements.php',
      'image' => 'images/multivitamin-export.webp',
      'alt'   => 'VARAH Multivitamin H liquid for export',
      'text'  => 'VARAH HEALTHCARE, a reputable Export-quality animal feed supplement manufacturer in India, is committed to creating and distributing high-quality feed supplements for pets, poultry, livestock, and aquaculture worldwide. We assist global brands in providing scientifically developed and export-compliant supplements in their markets, with a particular emphasis on quality, compliance, and performance.',
    ],
    [
      'name'  => 'Private Label Animal Feed Supplements',
      'url'   => 'private-label-animal-feed-supplement.php',
      'image' => 'images/private-label-vitamin-supplement.webp',
      'alt'   => 'VARAH Vitamin Supplement product leaflet',
      'text'  => 'VARAH HEALTHCARE, a private label animal feed supplement manufacturer in India, provides premium, tailored nutritional solutions for pets, poultry, livestock, and aquaculture. We provide private labeling services that enable your brand to stand out with safe, effective, and market-ready animal feed supplements thanks to our state-of-the-art technology and scientific formulation knowledge.',
    ],
    [
      'name'  => 'Calcium Liquid',
      'url'   => 'calcium-liquid.php',
      'image' => 'images/calcium-liquid.webp',
      'alt'   => 'VARAH Calcium Xtrapower 20 litre can',
      'text'  => 'VARAH HEALTHCARE, an Indian third-party manufacturer of calcium liquid feed supplement, is pleased to provide premium calcium supplements made for dogs, poultry, and animals. We provide high-quality, safe, and efficient calcium liquid feed supplements to improve bone strength, lactation, and production thanks to our sophisticated manufacturing experience and unwavering dedication to animal health.',
    ],
    [
      'name'  => 'Livestock Feed Supplements',
      'url'   => 'livestock-feed-supplements.php',
      'image' => 'images/livestock-feed-supplements.webp',
      'alt'   => 'VARAH Calcium Granules for livestock',
      'text'  => 'VARAH HEALTHCARE is a reputable third-party manufacturer of livestock feed supplements in India that provides safe, efficient, and scientifically formulated feed solutions for cattle, buffalo, goats, and sheep. We are a reputable third-party exporter of livestock feed supplements in India because we specialize in producing high-quality feed supplements that support immunity, performance, and overall health.',
    ],
    [
      'name'  => 'Chick Feed Supplements',
      'url'   => 'chick-feed-supplements.php',
      'image' => 'images/chick-feed-supplements.webp',
      'alt'   => 'VARAH Water Soluble Vitamin B-Complex for chicks',
      'text'  => 'One of the biggest manufacturers in India of chick feed supplements, VARAH HEALTHCARE provides nutritional solutions that are properly prepared for the early stages of chicken growth. We are the perfect third-party manufacturing partner for companies looking to provide premium chick supplements under their own brand because of our solid reputation as an Indian provider of chick feed supplements.',
    ],
    [
      'name'  => 'Poultry Feed Supplements',
      'url'   => 'poultry-feed-supplements.php',
      'image' => 'images/poultry-feed-supplements.webp',
      'alt'   => 'VARAH Vitamin Supplement liquid for poultry',
      'text'  => 'VARAH HEALTHCARE is a third party manufacturer of poultry feed supplements in India that offers breeders, broilers, and layers cutting-edge, scientifically supported compositions. We provide completely adjustable solutions that satisfy industry requirements for performance, quality, and safety as a reputable third-party supplier of poultry feed supplements in India. Whether you are a third-party exporter of poultry feed supplements in India or your brand is expanding in local markets, our services are made to help.',
    ],
    [
      'name'  => 'Growth Promoter Supplements',
      'url'   => 'growth-promoter-supplements.php',
      'image' => 'images/growth-promoter-supplements.webp',
      'alt'   => 'VARAH Growth Promoter liquid premix',
      'text'  => 'VARAH HEALTHCARE, a trusted Growth promoter supplements manufacturer in India, provides scientifically developed formulations that improve muscle growth, weight gain, and general performance in aquaculture, poultry, and cattle. As a trusted Growth promoter supplements exporter in India, which serve both local and foreign markets, provide your brand with reliable, efficient, and FSSAI-compliant growth boosters.',
    ],
    [
      'name'  => 'Mineral Mixture',
      'url'   => 'mineral-mixture.php',
      'image' => 'images/mineral-mixture.webp',
      'alt'   => 'VARAH Mineral Mixture buckets',
      'text'  => 'VARAH HEALTHCARE is devoted to creating premium mineral feed supplements for cattle, poultry, pets, and other animals as a mineral Mixture third party manufacturer in India. Our carefully developed mineral blends promote animals\' general health and performance, enhance production, and preserve nutritional balance.',
    ],
  ];
?>

  <style>
    .vps-section{margin-top:9rem;padding:60px 20px 70px;background:#f8f9fa}
    .vps-inner{max-width:1200px;margin:0 auto}
    .vps-head{text-align:center;max-width:760px;margin:0 auto 40px}
    .vps-head h1{font-size:2.2rem;font-weight:800;color:#00a99d;margin-bottom:12px}
    .vps-head p{font-size:1.05rem;line-height:1.7;color:#555;margin:0}
    .vps-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(320px,1fr));gap:26px}
    .vps-card{display:flex;flex-direction:column;background:#fff;border:1px solid #e6eef0;border-radius:14px;overflow:hidden;transition:transform .2s,box-shadow .2s}
    .vps-card:hover{transform:translateY(-4px);box-shadow:0 12px 28px rgba(0,174,183,.15)}
    .vps-card-img{display:block;aspect-ratio:7/5;background:#fff;border-bottom:1px solid #eef3f4}
    .vps-card-img img{width:100%;height:100%;object-fit:contain;padding:12px}
    .vps-card-body{display:flex;flex-direction:column;flex:1;padding:20px 22px 24px}
    .vps-card-body h2{font-size:1.2rem;font-weight:700;color:#212529;margin-bottom:10px}
    .vps-card-body h2 a{color:inherit;text-decoration:none}
    .vps-card-body h2 a:hover{color:#008c95}
    .vps-card-body p{font-size:.95rem;line-height:1.65;color:#555;margin-bottom:18px}
    .vps-card-link{margin-top:auto;align-self:flex-start;display:inline-flex;align-items:center;gap:8px;padding:10px 18px;border-radius:8px;background:linear-gradient(135deg,#00aeb7 0%,#00a99d 100%);color:#fff;font-weight:600;font-size:.95rem;text-decoration:none}
    .vps-card-link:hover{background:#008c95;color:#fff}
    @media (max-width:768px){.vps-section{padding:40px 16px 50px}.vps-head h1{font-size:1.7rem}.vps-grid{grid-template-columns:1fr}}
  </style>

  <section class="vps-section">
    <div class="vps-inner">
      <div class="vps-head">
        <h1>Our Products</h1>
        <p>Our Products are available in 100ml 300ml 500ml and 1Liter for liquids and 500gm 1kg 5kg 20kg for powder</p>
      </div>

      <div class="vps-grid">
        <?php foreach ($products as $product): ?>
          <article class="vps-card">
            <a href="<?php echo $product['url']; ?>" class="vps-card-img">
              <img src="<?php echo $product['image']; ?>" alt="<?php echo htmlspecialchars($product['alt']); ?>" title="<?php echo htmlspecialchars($product['name']); ?>" width="700" height="500" loading="lazy">
            </a>
            <div class="vps-card-body">
              <h2><a href="<?php echo $product['url']; ?>"><?php echo htmlspecialchars($product['name']); ?></a></h2>
              <p><?php echo htmlspecialchars($product['text']); ?></p>
              <a href="<?php echo $product['url']; ?>" class="vps-card-link" title="<?php echo htmlspecialchars($product['name']); ?>">View Details <i class="fas fa-arrow-right"></i></a>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

<?php include('footer.php') ?>
