<?php
  $theme = get_sub_field( 'theme' );
  $bgImg = get_sub_field( 'bg_img' );
  switch (get_sub_field( 'hor_align' )) {
    case 'left':
      $horClass = 'align-items-start ml-5';
      break;
    case 'center':
      $horClass = 'align-items-center';
      break;
    case 'right':
      $horClass = 'align-items-end mr-5';
      break;
  }
  switch (get_sub_field( 'vert_align' )) {
    case 'top':
      $vertClass = 'justify-content-start';
      break;
    case 'center':
      $vertClass = 'justify-content-center';
      break;
    case 'bottom':
      $vertClass = 'justify-content-end';
      break;
    case 'equal':
      $vertClass = 'justify-content-around';
      break;
  }
  switch (get_sub_field( 'xs_break' ) ) {
    case 'col-12':
      $colClass = 'col-12 col-sm-4 col-md-3';
      break;
    case 'col-4':
      $colClass = 'col-4';
      break;
    default:
      $colClass = 'col-6 col-md-3';
      break;
  }

  $margins = get_sub_field( 'row_margins' );
  $marginClasses = '';
  if ($margins['row_my']) {
    $marginClasses = ' ' . $margins['row_my'];
  }
  if ($margins['row_mx']) {
    $marginClasses .= ' ' . $margins['row_mx'];
  }
  if ($margins['row_mt']) {
    $marginClasses .= ' ' . $margins['row_mt'];
  }
  if ($margins['row_mb']) {
    $marginClasses .= ' ' . $margins['row_mb'];
  }
  if ($margins['row_ml']) {
    $marginClasses .= ' ' . $margins['row_ml'];
  }
  if ($margins['row_mr']) {
    $marginClasses .= ' ' . $margins['row_mr'];
  }
?>

<?php if(!empty($bgImg)): ?><div class="gc-row-bg" style="background-image: url( <?php echo $bgImg['url']; ?> ), linear-gradient(rgba(100,100,100,0.2),rgba(100,100,100,0.2));"><?php endif; ?>
  <div class="row gc-theme-<?php echo $theme ?><?php if($marginClasses){echo $marginClasses;}?>">
    <div class="<?php echo $colClass; ?>">
      <div class="d-flex flex-column gc-col <?php if(!empty($horClass)){echo $horClass;}?> <?php if(!empty($vertClass)){echo $vertClass;} ?>">
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
    <div class="<?php echo $colClass; ?>">
      <div class="d-flex flex-column gc-col <?php if(!empty($horClass)){echo $horClass;}?> <?php if(!empty($vertClass)){echo $vertClass;} ?>">
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
    <div class="<?php echo $colClass; ?>">
      <div class="d-flex flex-column gc-col <?php if(!empty($horClass)){echo $horClass;}?> <?php if(!empty($vertClass)){echo $vertClass;} ?>">
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
    <div class="<?php echo $colClass; ?>">
      <div class="d-flex flex-column gc-col <?php if(!empty($horClass)){echo $horClass;}?> <?php if(!empty($vertClass)){echo $vertClass;} ?>">
        <?php if(get_sub_field('col_4_title')): ?><h3><?php the_sub_field( 'col_4_title' ); ?></h3><?php endif; ?>
        <?php the_sub_field( 'col_4_content' ); ?>
        <?php if( have_rows('col_4_images') ): ?>
          <?php while ( have_rows('col_4_images') ) : the_row();?>
            <?php $image = get_sub_field('col_image'); ?>
            <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php if(!empty($bgImg)): ?></div><?php endif; ?>
