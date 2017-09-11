<?php

  switch (get_sub_field( 'xs_break' ) ) {
    case 'col-12':
      $colClass = 'col-12';
      break;
    case 'col-4':
      $colClass = 'col-4';
      break;
    default:
      $colClass = 'col-6';
      break;
  }

?>

<div class="row gc-3_6_3-row gc-row-<?php echo get_row_index(); ?> gc-theme-<?php the_sub_field( 'theme' ); echo gc_set_row_margins(); ?>">
  <div class="<?php echo $colClass; ?><?php if(get_sub_field('col_1_hide')){echo ' d-none d-' . get_sub_field('col_1_hide') . '-block';}?> col-md-3">
    <div class="gc-row-<?php echo get_row_index(); ?>-col-1 d-flex flex-column gc-col <?php echo gc_set_row_alignment(); ?>">
      <?php if(get_sub_field('col_1_title')): ?><h3><?php the_sub_field( 'col_1_title' ); ?></h3><?php endif; ?>
      <?php the_sub_field( 'col_1_content' ); ?>
      <?php if( have_rows('col_1_images') ): ?>
        <?php while ( have_rows('col_1_images') ) : the_row();?>
          <?php $image = get_sub_field('col_image'); ?>
          <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
  <div class="<?php echo $colClass; ?><?php if(get_sub_field('col_2_hide')){echo ' d-none d-' . get_sub_field('col_2_hide') . '-block';}?> col-md-6">
    <div class="gc-row-<?php echo get_row_index(); ?>-col-2 d-flex flex-column gc-col <?php echo gc_set_row_alignment(); ?>">
      <?php if(get_sub_field('col_2_title')): ?><h3><?php the_sub_field( 'col_2_title' ); ?></h3><?php endif; ?>
      <?php the_sub_field( 'col_2_content' ); ?>
      <?php if( have_rows('col_2_images') ): ?>
        <?php while ( have_rows('col_2_images') ) : the_row();?>
          <?php $image = get_sub_field('col_image'); ?>
          <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
  <div class="<?php echo $colClass; ?><?php if(get_sub_field('col_3_hide')){echo ' d-none d-' . get_sub_field('col_3_hide') . '-block';}?> col-md-3">
    <div class="gc-row-<?php echo get_row_index(); ?>-col-3 d-flex flex-column gc-col <?php echo gc_set_row_alignment(); ?>">
      <?php if(get_sub_field('col_3_title')): ?><h3><?php the_sub_field( 'col_3_title' ); ?></h3><?php endif; ?>
      <?php the_sub_field( 'col_3_content' ); ?>
      <?php if( have_rows('col_3_images') ): ?>
        <?php while ( have_rows('col_3_images') ) : the_row();?>
          <?php $image = get_sub_field('col_image'); ?>
          <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>
