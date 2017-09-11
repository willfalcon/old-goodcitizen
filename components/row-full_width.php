  <div class="row gc-row-<?php echo get_row_index(); ?> gc-theme-<?php the_sub_field( 'theme' ); echo gc_set_row_margins(); ?>">
    <div class="col-12 d-flex flex-column <?php echo gc_set_row_alignment(); ?>">
      <?php if(get_sub_field('row_title') && get_sub_field('show_title')): ?><h3 class="mb-5"><?php the_sub_field( 'row_title' ); ?></h3><?php endif; ?>
      <?php the_sub_field( 'row_content' ); ?>
    </div>
  </div>
