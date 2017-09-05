<?php
  /*
    Template Name: Landing Page
  */

  get_header( 'landing' ); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="<?php if(get_field('first_row_theme')): ?> gc-landing-row-<?php echo get_field('first_row_theme'); endif;?>">
    <div class="row">
      <div class="col-12">
        <h2 class="text-center"><?php the_title() ?></h2>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
          <?php the_content(); ?>
      </div>
    </div>
  </div> <!--.gc-landing-row-->
</div> <!--.gc-first-bg-row-->

<?php
  // check if the repeater field has rows of data
  if( have_rows('rows') ):

   	// loop through the rows of data
      while ( have_rows('rows') ) : the_row();

        $layout = get_sub_field('row_layout');
        get_template_part( 'components/row', $layout );
          // display a sub field value
          //the_sub_field('sub_field_name');

      endwhile;

  else :

      // no rows found

  endif;

?>

<?php endwhile; else : ?>

  <p><?php _e( 'Strange, no page was found.' ); ?></p>

<?php endif; ?>

<?php get_footer(); ?>
