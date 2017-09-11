<?php
if ( ! function_exists( 'gc_set_row_height' ) ) :
  /*
    Get the row height option for the row and set it.
  */
function gc_set_row_height() {
  if (get_sub_field('row_height') != 'auto') {
    $rowHeight = ' gc-h' . get_sub_field('row_height');
  } elseif (!empty($bgImg)) {
    $rowHeight = ' gc-h700';
  }
  return $rowHeight;
}
endif;

if (! function_exists( 'gc_set_row_margins' ) ) :
  /*
    Get the row margin options and set them.
  */
function gc_set_row_margins() {

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

  if ($marginClasses) {
    return $marginClasses;
  }

}
endif;

if ( ! function_exists( 'gc_set_row_alignment' ) ) :
  /*
    Get row alignment options and add the appropriate classes.
  */
function gc_set_row_alignment() {

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
      $vertClass = ' justify-content-start';
      break;
    case 'center':
      $vertClass = ' justify-content-center';
      break;
    case 'bottom':
      $vertClass = ' justify-content-end';
      break;
    case 'equal':
      $vertClass = ' justify-content-around';
      break;
  }
  return $horClass . $vertClass;
}
endif;

?>
