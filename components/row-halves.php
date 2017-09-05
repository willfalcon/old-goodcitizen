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
  $margins = get_sub_field( 'row_margins' );
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

  if (get_sub_field('col_1_padding')) {
    $col1Padding = get_sub_field('col_1_padding');
    $paddingClass = '';
    if ($col1Padding['col_py']) {
      $padding1Class = ' ' . $col1Padding['col_py'];
    }
    if ($col1Padding['col_px']) {
      $padding1Class = ' ' . $col1Padding['col_px'];
    }
    if ($col1Padding['col_pt']) {
      $padding1Class = ' ' . $col1Padding['col_pt'];
    }
    if ($col1Padding['col_pr']) {
      $padding1Class = ' ' . $col1Padding['col_pr'];
    }
    if ($col1Padding['col_pb']) {
      $padding1Class = ' ' . $col1Padding['col_pb'];
    }
    if ($col1Padding['col_pl']) {
      $padding1Class = ' ' . $col1Padding['col_pl'];
    }
  }
  if (get_sub_field('col_2_padding')) {
    $col1Padding = get_sub_field('col_2_padding');
    $paddingClass = '';
    if ($col2Padding['col_py']) {
      $padding2Class = ' ' . $col2Padding['col_py'];
    }
    if ($col2Padding['col_px']) {
      $padding2Class = ' ' . $col2Padding['col_px'];
    }
    if ($col2Padding['col_pt']) {
      $padding2Class = ' ' . $col2Padding['col_pt'];
    }
    if ($col2Padding['col_pr']) {
      $padding2Class = ' ' . $col2Padding['col_pr'];
    }
    if ($col2Padding['col_pb']) {
      $padding2Class = ' ' . $col2Padding['col_pb'];
    }
    if ($col2Padding['col_pl']) {
      $padding2Class = ' ' . $col2Padding['col_pl'];
    }
  }
?>

<div class="row gc-halves-row <?php if(!empty($bgImg)){echo 'gc-row-bg';}?> gc-theme-<?php echo $theme ?><?php if($marginClasses){echo $marginClasses;}?>"<?php if(!empty($bgImg)): ?> style="background-image: url( <?php echo $bgImg['url'] ?> ), linear-gradient(rgba(100,100,100,0.2),rgba(100,100,100,0.2));"<?php endif; ?>>
  <div class="col-12 col-md-6 <?php if($padding1Class){echo $padding1Class;} ?>">
    <div class="d-flex flex-column gc-col <?php if(!empty($horClass)){echo $horClass;}?> <?php if(!empty($vertClass)){echo $vertClass;} ?>">
      <?php if(get_sub_field( 'col_1_title' )): ?><h3><?php the_sub_field( 'col_1_title' ); ?></h3><?php endif; ?>
      <?php the_sub_field( 'col_1_content' ); ?>
      <?php if(have_rows('col_1_images')) : while (have_rows('col_1_images')) : the_row();?>
        <?php $image = get_sub_field('col_image'); ?>
        <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endwhile; endif; ?>
    </div>
  </div>
  <div class="col-12 col-md-6 <?php if($padding2Class){echo $padding2Class;} ?>">
    <div class="d-flex flex-column gc-col <?php if(!empty($horClass)){echo $horClass;}?> <?php if(!empty($vertClass)){echo $vertClass;} ?>">
      <?php if(get_sub_field( 'col_2_title' )): ?><h3><?php the_sub_field( 'col_2_title' ); ?></h3><?php endif; ?>
      <?php the_sub_field( 'col_2_content' ); ?>
      <?php if( have_rows('col_2_images') ) : while ( have_rows('col_2_images') ) : the_row(); ?>
          <?php $image = get_sub_field('col_image'); ?>
          <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endwhile; endif; ?>
    </div>
  </div>
</div>
