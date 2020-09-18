<?php
/*
Template Name: Boutique Page
*/
?>

<?php get_header(); ?>

<div class="main">
  <section id="shop-a">
    <div class="showcase">
      <h1>Vertlette Boutique</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
    </div>
  </section>

  <section id="shop-b">
    <div class="container">
      <div class="products">
        <?php if(have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
            <div class="product">
              <h3><?php the_title(); ?></h3>
              <?php if(has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
              <?php endif; ?>

              <a class="btn-dark" href="<?php echo the_permalink(); ?>">Details</a>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>