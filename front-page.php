<?php get_header(); ?>

<!-- Section A: Notre Entreprise -->
<section id="home-a" class="text-center">
  <div class="container py-2">
    <h1>Vertlette</h1>
    <h2 class="section-title">
      <a class="btn-light" href="<?php echo site_url('/presentation'); ?>">Notre Entreprise</a>
    </h2>
    <div class="bottom-line"></div>
    <div class="specials">
      <div>
        <i class="fa fa-file fa-2x"></i>
        <h3>Concepting</h3>
      </div>

      <div>
        <i class="fa fa-desktop fa-2x"></i>
        <h3>UI/UX</h3>
      </div>

      <div>
        <i class="fa fa-object-ungroup fa-2x"></i>
        <h3>Visual Design</h3>
      </div>

      <div>
        <i class="fa fa-thumbs-up fa-2x"></i>
        <h3>Interaction</h3>
        </div>
    </div>
  </div>
</section>

<!-- Section B: Nouvelles & ÉVENEMENTS -->
<section id="home-b" class="text-center">
  <div class="container py-2">
    <h2 class="section-title">
      <a class="btn-light" href="<?php echo site_url('/nouvelles'); ?>">Nouvelles & Évenements</a>
    </h2>
  </div>
</section>

<!-- Section C: Boutique/Produits -->
<section id="home-c" class="text-center py-2">
  <div class="container">
    <h2 class="section-title">
      <a class="btn-light" href="<?php echo site_url('/boutique'); ?>">Produits & Services</a>
    </h2>
  </div>
</section>

<!-- Section D: Boutique/Produits -->
<section id="home-d" class="text-center py-2">
  <div class="container">
    <h2 class="section-title">
      <a class="btn-light" href="<?php echo site_url('/boutique'); ?>">Corporative</a>
    </h2>
  </div>
</section>

<!-- Section F: Process -->
<section id="home-f" class="text-center py-2">
  <div class="container">
    <h2 class="section-title">Nous Joindre</h2>
    <div class="bottom-line"></div>

    <div class="process">
      <div>
        <a href="<?php echo site_url('/contact'); ?>">
          <i class="fa fa-phone fa-4x process-icon my-2">
            <div class="process-step">1</div>
          </i>
        </a>
        <h3>+1 (418) 555-5555</h3>
      </div>

      <div>
        <a href="<?php echo site_url('/contact'); ?>">
          <i class="fa fa-envelope fa-4x process-icon my-2">
            <div class="process-step">2</div>
          </i>
        </a>
        <h3>info@vertlette.com</h3>
      </div>

      <div>
        <a href="<?php echo site_url('/contact'); ?>">
          <i class="fa fa-address-card fa-4x process-icon my-2">
            <div class="process-step">3</div>
          </i>
        </a>
        <h3>Québec (QC), G1S-4S3, Canada</h3>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
