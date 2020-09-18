<?php get_header(); ?>

<div class="main">
  <section id="shop-a">
      <div class="container py-2">
        <h1>Vertlette Boutique</h1>
      </div>
    </section>

    <section id="shop-b">
      <div class="container py-2">
        <div class="products">
          <?php if(have_posts()) : ?>
            <?php woocommerce_content(); ?>
          <?php else : ?>
            <?php echo wpautop('Sorry, No posts were found'); ?>
          <?php endif; ?>
        </div>
      </div>
    </section>
</div>

<?php get_footer(); ?>