<section id="news-a">

</section>

<section id="news-b">
  <article id="posts-list">
    <div class="post-info">
      <?php if(has_post_thumbnail()) :?>
        <div class="post-thumnail post-image">
          <?php the_post_thumbnail('all-post-image-size'); ?>
        </div>
      <?php endif; ?>

      <div class="post-info-text">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <div class="meta">
          Catégory:
          <?php 
            $categories = get_the_category();
            $separator = ", ";
            $output = '';

            if($categories){
              foreach($categories as $category){
                $output .= '<a href="' . get_category_link($category->term_id).'">'.$category->cat_name.'</a>'. $separator;
              }
            }

            echo trim($output, $separator);
          ?>
        </div>
        
        <?php the_excerpt(); ?>
        <br />
        <a class="btn-dark" href="<?php the_permalink(); ?>">Read More</a>
      </div>
    </div>
  </article>
  <div class="hr-line"></div>
</section>
