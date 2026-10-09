<?php $page_title = "Poultry, Cattle and Aqua Feed Supplement Products | Varah Healthcare";
  $description = "Explore Varah Healthcare's poultry, cattle and aqua supplements, available in 100ml, 300ml, 500ml and 1 Liter liquids and 500gm, 1kg, 5kg, 20kg powders.";
  include('header.php'); ?>

<style>
    .products-page {
        background: #f8fcf9;
        padding-top: 10rem;
    }

    /* Category title */
    .product-category-title {
        margin: 80px 0 35px;
        font-size: 2rem;
        color: var(--primary-color);
        text-align: center;
        font-weight: 600;
    }

    .products-gridd {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 34px;
    }

    /* Card */
    .product-card {
        background: #fff;
        border-radius: 18px;
        border: 1px solid rgba(42, 110, 63, 0.08);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
        display: flex;
        flex-direction: column;
        text-decoration: none;
        transition: .3s ease;
        min-height: 560px;
    }

    .product-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 18px 45px rgba(42, 110, 63, 0.18);
    }

    .product-image {
        height: 260px;
        background: #f1f3f4;
    }

    .product-image img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    /* Info */
    .product-info {
        padding: 22px;
        text-align: left;
    }

    .product-title {
        font-size: 1.15rem;
        font-weight: 600;
        color: var(--primary-color);
    }

    .product-title small {
        display: block;
        font-size: 0.85rem;
        color: #6c757d;
        margin-top: 4px;
    }

    .product-spec {
        margin-top: 12px;
    }

    .spec-block {
        margin-bottom: 10px;
    }

    .spec-block strong {
        font-size: 0.8rem;
        text-transform: uppercase;
        color: var(--primary-dark);
    }

    .spec-block p {
        font-size: 0.85rem;
        color: #555;
        line-height: 1.45;
    }
</style>

<section class="products-page section">
    <div class="container">

        <h2 class="product-category-title">Our All Products.</h2>
        <p class="a" style="margin: auto; width: 90%; margin-bottom:2rem; font-weight: bold; text-align: center">Our Products are available in 100ml 300ml 500ml and 1Liter for liquids and 500gm 1kg 5kg 20kg for powder</p>
        <p class="a" style="margin: auto; width: 90%; font-weight: bold; text-align: center">For More Information Contact Us </p>

        <h3 class="product-category-title">Poultry Products</h3>

        <div class="products-gridd">

            <!-- Anti Diarrhoeal -->
            <a href="contact-us.php" class="product-card">
                <div class="product-image"><img src="./img/POULTRY MOCKUP/Anti Diarrhoeal.jpg"></div>
                <div class="product-info">
                    <h4 class="product-title">Anti Diarrhoeal <small>Liquid 5L</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>Diarrhoea, dysentery, loose droppings</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Herbal extracts & gut stabilizers</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Via drinking water as advised</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Restores gut health and digestion</p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Calcium & Phosphorus -->
            <a href="contact-us.php" class="product-card">
                <div class="product-image"><img src="./img/POULTRY MOCKUP/Calcium & Phosphorus.jpg"></div>
                <div class="product-info">
                    <h4 class="product-title">Calcium & Phosphorus <small>Liquid 5L</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>Calcium deficiency, weak bones</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Calcium, phosphorus & minerals</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>As per water schedule</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Strong bones & eggshell quality</p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Cocci -->
            <a href="contact-us.php" class="product-card">
                <div class="product-image"><img src="./img/POULTRY MOCKUP/Cocci.jpg"></div>
                <div class="product-info">
                    <h4 class="product-title">Cocci <small>Liquid 5L</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>Coccidiosis control</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Herbal anti-coccidial agents</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Via drinking water</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Improves gut integrity</p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Growth Promoter -->
            <a href="contact-us.php" class="product-card">
                <div class="product-image"><img src="./img/POULTRY MOCKUP/Growth Promoter.jpg"></div>
                <div class="product-info">
                    <h4 class="product-title">Growth Promoter <small>Liquid 5L</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>Poor growth & feed conversion</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Amino acids & herbal extracts</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Daily water supplementation</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Better weight gain & FCR</p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Liver Tonic -->
            <a href="contact-us.php" class="product-card">
                <div class="product-image"><img src="./img/POULTRY MOCKUP/Liver Tonic.jpg"></div>
                <div class="product-info">
                    <h4 class="product-title">Liver Tonic <small>Liquid 5L</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>Liver stress & toxicity</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Hepato-protective herbs</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Water administration</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Improves metabolism & appetite</p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Vitamin Supplement -->
            <a href="contact-us.php" class="product-card">
                <div class="product-image"><img src="./img/POULTRY MOCKUP/Vitamin Supplement.jpg"></div>
                <div class="product-info">
                    <h4 class="product-title">Vitamin Supplement <small>Liquid 5L</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>Vitamin deficiencies</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Multivitamins</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Drinking water</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Boosts immunity & performance</p>
                        </div>
                    </div>
                </div>
            </a>
            <!-- Gout & Kidney Acidifier -->
            <a href="contact-us.php" class="product-card">
                <div class="product-image"><img src="./img/POULTRY MOCKUP/Gout & Kidney Acidifier.jpg"></div>
                <div class="product-info">
                    <h4 class="product-title">Gout & Kidney Acidifier <small>Liquid 5L</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>Visceral gout, kidney stress</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Organic acids & herbal extracts</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Via drinking water</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Improves kidney function</p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Haematinic -->
            <a href="contact-us.php" class="product-card">
                <div class="product-image"><img src="./img/POULTRY MOCKUP/Haematinic.jpg"></div>
                <div class="product-info">
                    <h4 class="product-title">Haematinic <small>Liquid 5L</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>Anaemia, weakness</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Iron, vitamins & minerals</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Water supplementation</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Improves blood parameters</p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Immunity Modulator -->
            <a href="contact-us.php" class="product-card">
                <div class="product-image"><img src="./img/POULTRY MOCKUP/Immunity Modulator.jpg"></div>
                <div class="product-info">
                    <h4 class="product-title">Immunity Modulator <small>Liquid 5L</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>Low immunity</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Herbal immuno-boosters</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Drinking water</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Enhances disease resistance</p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Liver & Growth Supplement -->
            <a href="contact-us.php" class="product-card">
                <div class="product-image"><img src="./img/POULTRY MOCKUP/Liver & Growth Supplement.jpg"></div>
                <div class="product-info">
                    <h4 class="product-title">Liver & Growth Supplement <small>Liquid 5L</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>Poor growth & liver stress</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Amino acids & hepatics</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Via water</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Better growth & metabolism</p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Natural Disinfectant -->
            <a href="contact-us.php" class="product-card">
                <div class="product-image"><img src="./img/POULTRY MOCKUP/Natural Disinfectant.jpg"></div>
                <div class="product-info">
                    <h4 class="product-title">Natural Disinfectant <small>Liquid 5L</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>Biosecurity & sanitation</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Natural disinfecting agents</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Spray/fogging</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Controls pathogens</p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Respiratory Disinfection -->
            <a href="contact-us.php" class="product-card">
                <div class="product-image"><img src="./img/POULTRY MOCKUP/Respiratory Disinfection & Solution.jpg"></div>
                <div class="product-info">
                    <h4 class="product-title">Respiratory Disinfection & Solution <small>Liquid 5L</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>Respiratory issues</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Herbal respiratory actives</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Fogging/water</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Clear airways</p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Vit E & Selenium -->
            <a href="contact-us.php" class="product-card">
                <div class="product-image"><img src="./img/POULTRY MOCKUP/Vit. E & Selenium Supplement.jpg"></div>
                <div class="product-info">
                    <h4 class="product-title">Vit. E & Selenium <small>Liquid 5L</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>Oxidative stress</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Vitamin E & Selenium</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Water administration</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Improves fertility & immunity</p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Vitamin C -->
            <a href="contact-us.php" class="product-card">
                <div class="product-image"><img src="./img/POULTRY MOCKUP/Vitamin-C.jpg"></div>
                <div class="product-info">
                    <h4 class="product-title">Vitamin C <small>Liquid 5L</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>Heat stress</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Ascorbic acid</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Drinking water</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Stress reduction</p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Water Acidifier -->
            <a href="contact-us.php" class="product-card">
                <div class="product-image"><img src="./img/POULTRY MOCKUP/Water Acidifier.jpg"></div>
                <div class="product-info">
                    <h4 class="product-title">Water Acidifier <small>Liquid 5L</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>High water pH</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Organic acids</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Water treatment</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Improves gut health</p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Water Soluble Vitamin -->
            <a href="contact-us.php" class="product-card">
                <div class="product-image"><img src="./img/POULTRY MOCKUP/Water Soluble Vitamin.jpg"></div>
                <div class="product-info">
                    <h4 class="product-title">Water Soluble Vitamin <small>Liquid 5L</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>Nutritional deficiencies</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Water soluble vitamins</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Via water</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Improves performance</p>
                        </div>
                    </div>
                </div>
            </a>


        </div>

        <h3 class="product-category-title">Aqua Products</h3>

        <div class="products-gridd">
          <a href="contact-us.php" class="product-card">
                <div class="product-image"><img src="./img/Cattle, aqua/Aqua-C Powder.jpg"></div>
                <div class="product-info">
                    <h4 class="product-title">Varhavet Aqua-C Powder <small>Powder</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>For Fish And Aquatic Species</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Mineral Vitamins & Amino Acids</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Oral</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Improves Fish Performance and prevent diseases</p>
                        </div>
                    </div>
                </div>
            </a>

        </div>

        <h3 class="product-category-title">Cattle Products</h3>

        <div class="products-gridd">
            
             <a href="contact-us.php" class="product-card">
                <div class="product-image"><img src="./img/Cattle, aqua/Digestive Bolus.jpg"></div>
                <div class="product-info">
                    <h4 class="product-title">Digestive Bolus <small>Bolus</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>Digestive disorders</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Digestive enzymes</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Oral</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Improves digestion</p>
                        </div>
                    </div>
                </div>
            </a>

            <a href="contact-us.php" class="product-card">
                <div class="product-image"><img src="./img/Cattle, aqua/Calcium Bolus.jpg"></div>
                <div class="product-info">
                    <h4 class="product-title">Calcium Bolus <small>Bolus</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>Calcium deficiency</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Calcium salts</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Oral</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Strong bones</p>
                        </div>
                    </div>
                </div>
            </a>


            <!-- Anti Bloat -->
            <a href="contact-us.php" class="product-card">
                <div class="product-image"><img src="./img/Cattle, aqua/Anti Bloat 100ml.jpg"></div>
                <div class="product-info">
                    <h4 class="product-title">Anti Bloat <small>100 ml</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>Bloat and gas formation</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Anti-foaming herbal agents</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Oral administration</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Relieves gas and discomfort</p>
                        </div>
                    </div>
                </div>
            </a>
            <!-- Batisa Powder -->
            <a href="contact-us.php" class="product-card">
                <div class="product-image">
                    <img src="./img/Cattle, aqua/Batisa Powder.jpg" alt="Batisa Powder">
                </div>
                <div class="product-info">
                    <h4 class="product-title">Batisa Powder <small>(Powder)</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>Digestive imbalance and appetite loss</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Digestive herbs and salts</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Mix with feed as advised</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Improves appetite and digestion</p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Digestive Booster Powder -->
            <a href="contact-us.php" class="product-card">
                <div class="product-image">
                    <img src="./img/Cattle, aqua/digestive-booster.png" alt="Digestive Booster Powder">
                </div>
                <div class="product-info">
                    <h4 class="product-title">Digestive Booster Powder <small>(Powder)</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>Indigestion, low feed intake</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Enzymes and herbal digestives</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Feed supplementation</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Better nutrient absorption</p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Energy Force -->
            <a href="contact-us.php" class="product-card">
                <div class="product-image">
                    <img src="./img/Cattle, aqua/Energy Force 1ltr.jpg" alt="Energy Force">
                </div>
                <div class="product-info">
                    <h4 class="product-title">Energy Force <small>(Liquid)</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>Weakness and energy deficiency</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Energy boosters and electrolytes</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Oral liquid as advised</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Quick energy recovery</p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Fat Powder -->
            <a href="contact-us.php" class="product-card">
                <div class="product-image">
                    <img src="./img/Cattle, aqua/Fat Powder 1kg.jpg" alt="Fat Powder">
                </div>
                <div class="product-info">
                    <h4 class="product-title">Fat Powder <small>(Powder)</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>Low body condition and milk fat</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Bypass fat and energy nutrients</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Feed supplementation</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Improves milk fat & body weight</p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Mineral Mixture Powder -->
            <a href="contact-us.php" class="product-card">
                <div class="product-image">
                    <img src="./img/Cattle, aqua/Mineral Mixture 1kg.jpg" alt="Mineral Mixture Powder">
                </div>
                <div class="product-info">
                    <h4 class="product-title">Mineral Mixture Powder <small>(Powder)</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>Mineral deficiency</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Essential macro & micro minerals</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Daily feed mix</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Better fertility & production</p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Varahstress -->
            <a href="contact-us.php" class="product-card">
                <div class="product-image">
                    <img src="./img/Cattle, aqua/Varahstress 1 ltr.jpg" alt="Varahstress">
                </div>
                <div class="product-info">
                    <h4 class="product-title">Varahstress <small>(Liquid)</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>Heat & environmental stress</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Anti-stress vitamins & electrolytes</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Via drinking water</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Reduces stress and improves performance</p>
                        </div>
                    </div>
                </div>
            </a>


            <!-- Calcium Active Gel -->
            <a href="contact-us.php" class="product-card">
                <div class="product-image"><img src="./img/Cattle, aqua/Calcium Active Gel 300gm.jpg"></div>
                <div class="product-info">
                    <h4 class="product-title">Calcium Active Gel <small>300 gm</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>Milk fever, calcium deficiency</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Highly absorbable calcium gel</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Oral gel administration</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Quick calcium restoration</p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Calcium Gold -->
            <a href="contact-us.php" class="product-card">
                <div class="product-image"><img src="./img/Cattle, aqua/Chelated Calcium Gold 1ltr.jpg"></div>
                <div class="product-info">
                    <h4 class="product-title">Calcium Gold <small>1 Ltr</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>Calcium & mineral deficiency</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Chelated calcium & minerals</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Oral liquid supplementation</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Strong bones & better yield</p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Calcium Granules -->
            <a href="contact-us.php" class="product-card">
                <div class="product-image"><img src="./img/Cattle, aqua/Calcium Granules 1 kg.jpg"></div>
                <div class="product-info">
                    <h4 class="product-title">Calcium Granules <small>1 Kg</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>Long-term calcium support</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Calcium salts & minerals</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Feed supplementation</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Improves bone strength</p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Calcium Xtrapower -->
            <a href="contact-us.php" class="product-card">
                <div class="product-image"><img src="./img/Cattle, aqua/Calcium Xtrapower 1ltr.jpg"></div>
                <div class="product-info">
                    <h4 class="product-title">Calcium Xtrapower <small>1 Ltr</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>High production calcium demand</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Calcium with vitamin D3</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Oral liquid</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Enhances milk production</p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Calf Expert -->
            <a href="contact-us.php" class="product-card">
                <div class="product-image"><img src="./img/Cattle, aqua/Calf Expert 500ml.jpg"></div>
                <div class="product-info">
                    <h4 class="product-title">Calf Expert <small>500 ml</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>Weak calves, poor growth</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Vitamins, minerals & probiotics</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Oral liquid</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Improves calf immunity & growth</p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Heat Bolus -->
            <a href="contact-us.php" class="product-card">
                <div class="product-image"><img src="./img/Cattle, aqua/Heat Bolus.jpg"></div>
                <div class="product-info">
                    <h4 class="product-title">Heat Bolus <small>Bolus</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>Heat cycle induction</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Herbal estrus stimulants</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Oral bolus</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Improves fertility</p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Ionic Gel -->
            <a href="contact-us.php" class="product-card">
                <div class="product-image"><img src="./img/Cattle, aqua/Ionic Gel 300gm.jpg"></div>
                <div class="product-info">
                    <h4 class="product-title">Ionic Gel <small>300 gm</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>Weakness & dehydration</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Electrolytes & energy sources</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Oral gel</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Quick energy recovery</p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Mastitis Granules -->
            <a href="contact-us.php" class="product-card">
                <div class="product-image"><img src="./img/Cattle, aqua/Mastitis Granules Front.jpg"></div>
                <div class="product-info">
                    <h4 class="product-title">Mastitis Granules <small>750 gm</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>Mastitis & udder inflammation</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Anti-inflammatory herbs</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Feed supplementation</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Improves udder health</p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Milk Enhance Bolus -->
            <a href="contact-us.php" class="product-card">
                <div class="product-image"><img src="./img/Cattle, aqua/MILK ENHANCE BOLUS FRONT.jpg"></div>
                <div class="product-info">
                    <h4 class="product-title">Milk Enhance Bolus <small>Bolus</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>Low milk yield</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Galactagogue herbs</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Oral bolus</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Boosts milk production</p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Prolap Powder -->
            <a href="contact-us.php" class="product-card">
                <div class="product-image"><img src="./img/Cattle, aqua/Prolap-1-300x300.jpg"></div>
                <div class="product-info">
                    <h4 class="product-title">Prolap Powder <small>Powder</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>Uterine prolapse support</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Herbal uterine tonics</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>As advised by veterinarian</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Supports uterine recovery</p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Uterine Tonic -->
            <a href="contact-us.php" class="product-card">
                <div class="product-image"><img src="./img/Cattle, aqua/Uterine Tonic 1ltr.jpg"></div>
                <div class="product-info">
                    <h4 class="product-title">Uterine Tonic <small>1 Ltr</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>Post-calving recovery</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Uterine cleansing herbs</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Oral liquid</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Improves conception rate</p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Uterine Advance -->
            <a href="contact-us.php" class="product-card">
                <div class="product-image"><img src="./img/Cattle, aqua/Uterine Advance 1 ltr.jpg"></div>
                <div class="product-info">
                    <h4 class="product-title">Uterine Advance <small>1 Ltr</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>Delayed estrus</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Advanced uterine actives</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Oral administration</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Faster reproductive recovery</p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Wound Heal -->
            <a href="contact-us.php" class="product-card">
                <div class="product-image"><img src="./img/Cattle, aqua/Wound Heal 1.jpg"></div>
                <div class="product-info">
                    <h4 class="product-title">Wound Heal <small>Spray</small></h4>
                    <div class="product-spec">
                        <div class="spec-block"><strong>Indication</strong>
                            <p>External wounds & injuries</p>
                        </div>
                        <div class="spec-block"><strong>Composition</strong>
                            <p>Antiseptic healing agents</p>
                        </div>
                        <div class="spec-block"><strong>Dosage</strong>
                            <p>Topical spray</p>
                        </div>
                        <div class="spec-block"><strong>Benefits</strong>
                            <p>Faster wound healing</p>
                        </div>
                    </div>
                </div>
            </a>

        </div>

    </div>
</section>

<?php include 'footer.php' ?>