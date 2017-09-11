<?php
  /*
    Template Name: Info Page
  */

  get_header();

  $rows = get_field( 'rows' );
  $row1 = $rows[0];
  $row1image = $row1[ 'bg_img' ];
  $gc_header_bg = get_field( 'header_background' );

?>

<?php
  if ( have_posts() ) : while ( have_posts() ) : the_post();
    // check if the repeater field has rows of data
    if( have_rows('rows') ):
     	// loop through the rows of data
        while ( have_rows('rows') ) : the_row();

          $bgImg = get_sub_field( 'bg_img' );
          $rowIndex = get_row_index();
          $layout = get_sub_field('row_layout'); ?>

          <?php if(!empty($bgImg)): ?>
            <?php if($rowIndex == 1 && $gc_header_bg['transparent_bg'] == true) : ?>
              <?php // if it's the first row and transparent background is activated, don't put the background image here, put it above the nav in header.php
                    // But set this to true so we know to close the div below.
                    $gc_big_background_row = 'close the div'; ?>
            <?php else: ?>
              <div class="gc-row-bg" style="background-image: url( <?php echo $bgImg['url']; ?> ), linear-gradient(rgba(100,100,100,0.2),rgba(100,100,100,0.2));">
            <?php endif; endif;?>


          <?php get_template_part( 'components/row', $layout ); ?>


          <?php if(!empty($bgImg)): ?>
            </div>
          <?php endif;

        endwhile;
    endif;
  endwhile; else : ?>

    <p><?php _e( 'Strange, no page was found.' ); ?></p>

  <?php endif; ?>

<?php get_footer(); ?>
