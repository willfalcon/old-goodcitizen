<div class="row gc-halves-row gc-row-<?php echo get_row_index(); ?> <?php if(!empty($bgImg)){echo 'gc-row-bg';}?> gc-theme-<?php the_sub_field( 'theme' ); echo gc_set_row_margins(); ?>">
  <div class="col-12 col-md-6 gc-row-<?php echo get_row_index(); ?>-col-1">
    <div class="d-flex flex-column gc-col  <?php echo gc_set_row_alignment(); ?>">
      <?php if(get_sub_field( 'col_1_title' )): ?><h3><?php the_sub_field( 'col_1_title' ); ?></h3><?php endif; ?>
      <?php the_sub_field( 'col_1_content' ); ?>
      <?php if(have_rows('col_1_images')) : while (have_rows('col_1_images')) : the_row();?>
        <?php $image = get_sub_field('col_image'); ?>
        <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endwhile; endif; ?>
    </div>
  </div>
  <div class="col-12 col-md-6 gc-row-<?php echo get_row_index(); ?>-col-2 ?>">
    <div class="d-flex flex-column gc-col  <?php echo gc_set_row_alignment(); ?>">
      <?php if(get_sub_field( 'col_2_title' )): ?><h3><?php the_sub_field( 'col_2_title' ); ?></h3><?php endif; ?>
      <?php the_sub_field( 'col_2_content' ); ?>
      <?php if( have_rows('col_2_images') ) : while ( have_rows('col_2_images') ) : the_row(); ?>
        <?php $image = get_sub_field('col_image'); ?>
        <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endwhile; endif; ?>
    </div>
  </div>
</div>
