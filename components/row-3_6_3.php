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
      $colClass = 'col-12';
      break;
    case 'col-4':
      $colClass = 'col-4';
      break;
    default:
      $colClass = 'col-6';
      break;
  }
  if (get_sub_field('row_height') != 'auto') {
    $rowHeight = ' gc-h' . get_sub_field('row_height');
  } elseif (!empty($bgImg)) {
    $rowHeight = ' gc-h700';
  }

  $margins = get_sub_field( 'row_margins' );
  if ($margins['row_my']) {
    $marginClasses = ' ' . $margins['row_my'];
  }
  if ($margins['row_mx']) {
    $marginClasses += ' ' . $margins['row_mx'];
  }
  if ($margins['row_mt']) {
    $marginClasses += ' ' . $margins['row_mt'];
  }
  if ($margins['row_mb']) {
    $marginClasses += ' ' . $margins['row_mb'];
  }
  if ($margins['row_ml']) {
    $marginClasses += ' ' . $margins['row_ml'];
  }
  if ($margins['row_mr']) {
    $marginClasses += ' ' . $margins['row_mr'];
  }
?>

<div class="row gc-3_6_3-row<?php if(!empty($rowHeight)){echo $rowHeight;}?> gc-theme-<?php echo $theme ?><?php if($marginClasses){echo $marginClasses;}?>"<?php if(!empty($bgImg)): ?> style="background-image: url( <?php echo $bgImg['url'] ?> ), linear-gradient(rgba(100,100,100,0.2),rgba(100,100,100,0.2));"<?php endif; ?>>
  <div class="<?php echo $colClass; ?><?php if(get_sub_field('col_1_hide')){echo ' d-none d-' . get_sub_field('col_1_hide') . '-block';}?> col-md-3">
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
  <div class="<?php echo $colClass; ?><?php if(get_sub_field('col_2_hide')){echo ' d-none d-' . get_sub_field('col_2_hide') . '-block';}?> col-md-6">
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
  <div class="<?php echo $colClass; ?><?php if(get_sub_field('col_3_hide')){echo ' d-none d-' . get_sub_field('col_3_hide') . '-block';}?> col-md-3">
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
</div>
