<?php
  /*
    Template Name: Info Page
  */

  get_header();

?>

<?php
  if ( have_posts() ) : while ( have_posts() ) : the_post();
    // check if the repeater field has rows of data
    if( have_rows('rows') ):
     	// loop through the rows of data
        while ( have_rows('rows') ) : the_row();

          $layout = get_sub_field('row_layout');
          get_template_part( 'components/row', $layout );
            // display a sub field value
            //the_sub_field('sub_field_name');

        endwhile;
    endif;
  endwhile; else : ?>

    <p><?php _e( 'Strange, no page was found.' ); ?></p>

  <?php endif; ?>

<?php get_footer(); ?>
