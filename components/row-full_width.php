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
        $horClass = 'align-items-end mr-5 pr-5';
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
    if (get_sub_field('row_height') != 'auto') {
      $rowHeight = ' gc-h' . get_sub_field('row_height');
    } elseif (!empty($bgImg)) {
      $rowHeight = ' gc-h700';
    }

    if (get_sub_field( 'row_my' )) {
      $my = ' ' . get_sub_field( 'row_my' );
    }

    if (get_sub_field( 'row_mx' )) {
      $mx = ' ' . get_sub_field( 'row_mx' );
    } else {
      $mx = ' mx-2';
    }
?>
<?php if(!empty($bgImg)): ?><div class="gc-row-bg" style="background-image: url( <?php echo $bgImg['url']; ?> ), linear-gradient(rgba(100,100,100,0.2),rgba(100,100,100,0.2));"><?php endif; ?>
  <div class="row<?php if(!empty($rowHeight)){echo $rowHeight;}?> gc-theme-<?php echo $theme; if(!empty($mx)){echo $mx;} if(!empty($my)){echo $my;} ?>">
    <div class="col-12 d-flex flex-column <?php if(!empty($horClass)){echo $horClass;}?> <?php if(!empty($vertClass)){echo $vertClass;} ?>">
      <?php if(get_sub_field('row_title') && get_sub_field('show_title')): ?><h3><?php the_sub_field( 'row_title' ); ?></h3><?php endif; ?>
      <?php the_sub_field( 'row_content' ); ?>
    </div>
  </div>
<?php if(!empty($bgImg)): ?></div><?php endif; ?>
