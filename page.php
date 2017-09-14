<?php

  get_header();

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="row">
    <div class="col py-5">
      <h2><?php the_title(); ?></h2>
    </div>
  </div>

  <div class="row">
    <div class="col px-5">
      <?php the_content(); ?>
    </div>
  </div>

<?php endwhile; else : ?>

    <p><?php _e( 'Strange, no page was found.' ); ?></p>

  <?php endif; ?>

<?php get_footer(); ?>
