<?php


if ( get_sub_field( 'row_layout' ) == 'halves' || get_sub_field( 'row_layout' ) == '3_6_3' || get_sub_field( 'row_layout' ) == '4_col') {
  $col_1_padding = get_sub_field( 'col_1_padding' );
  $rowNum = get_row_index();

  echo '
  .gc-row-' . $rowNum . '-col-1 {';
    if ($col_1_padding['col_pt']) :
      echo '
      padding-top: ' . $col_1_padding['col_pt'] . ';';
    elseif ($col_1_padding['col_py']) :
      echo '
      padding-top: ' . $col_1_padding['col_py'] . ';';
    endif;

    if ($col_1_padding['col_pb']) :
      echo '
      padding-bottom: ' . $col_1_padding['col_pb'] . ';';
    elseif ($col_1_padding['col_py']) :
      echo '
      padding-bottom: ' . $col_1_padding['col_py'] . ';';
    endif;

    if ($col_1_padding['col_pr']) :
      echo '
      padding-right: ' . $col_1_padding['col_pr'] . ';';
    elseif ($col_1_padding['col_px']) :
      echo '
      padding-right: ' . $col_1_padding['col_pr'] . ';';
    endif;

    if ($col_1_padding['col_pl']) :
      echo '
      padding-left: ' . $col_1_padding['col_pl'] . ';';
    elseif ($col_1_padding['col_px']) :
      echo '
      padding-left: ' . $col_1_padding['col_px'] . ';';
    endif;

    echo '
  }';
}

if ( get_sub_field( 'row_layout' ) == 'halves' || get_sub_field( 'row_layout' ) == '3_6_3' || get_sub_field( 'row_layout' ) == '4_col') {
  $col_2_padding = get_sub_field( 'col_2_padding' );
  $rowNum = get_row_index();

  echo '
  .gc-row-' . $rowNum . '-col-2 {';
    if ($col_2_padding['col_pt']) :
      echo '
      padding-top: ' . $col_2_padding['col_pt'] . ';';
    elseif ($col_2_padding['col_py']) :
      echo '
      padding-top: ' . $col_2_padding['col_py'] . ';';
    endif;

    if ($col_2_padding['col_pb']) :
      echo '
      padding-bottom: ' . $col_2_padding['col_pb'] . ';';
    elseif ($col_2_padding['col_py']) :
      echo '
      padding-bottom: ' . $col_2_padding['col_py'] . ';';
    endif;

    if ($col_2_padding['col_pr']) :
      echo '
      padding-right: ' . $col_2_padding['col_pr'] . ';';
    elseif ($col_2_padding['col_px']) :
      echo '
      padding-right: ' . $col_2_padding['col_pr'] . ';';
    endif;

    if ($col_2_padding['col_pl']) :
      echo '
      padding-left: ' . $col_2_padding['col_pl'] . ';';
    elseif ($col_2_padding['col_px']) :
      echo '
      padding-left: ' . $col_2_padding['col_px'] . ';';
    endif;

    echo '
  }';
}

if ( get_sub_field( 'row_layout' ) == '3_6_3' || get_sub_field( 'row_layout' ) == '4_col') {
  $col_3_padding = get_sub_field( 'col_3_padding' );
  $rowNum = get_row_index();

  echo '
  .gc-row-' . $rowNum . '-col-3 {';
    if ($col_3_padding['col_pt']) :
      echo '
      padding-top: ' . $col_3_padding['col_pt'] . ';';
    elseif ($col_3_padding['col_py']) :
      echo '
      padding-top: ' . $col_3_padding['col_py'] . ';';
    endif;

    if ($col_3_padding['col_pb']) :
      echo '
      padding-bottom: ' . $col_3_padding['col_pb'] . ';';
    elseif ($col_3_padding['col_py']) :
      echo '
      padding-bottom: ' . $col_3_padding['col_py'] . ';';
    endif;

    if ($col_3_padding['col_pr']) :
      echo '
      padding-right: ' . $col_3_padding['col_pr'] . ';';
    elseif ($col_3_padding['col_px']) :
      echo '
      padding-right: ' . $col_3_padding['col_pr'] . ';';
    endif;

    if ($col_3_padding['col_pl']) :
      echo '
      padding-left: ' . $col_3_padding['col_pl'] . ';';
    elseif ($col_3_padding['col_px']) :
      echo '
      padding-left: ' . $col_3_padding['col_px'] . ';';
    endif;

    echo '
  }';
}

if ( get_sub_field( 'row_layout' ) == '4_col') {
  $col_4_padding = get_sub_field( 'col_4_padding' );
  $rowNum = get_row_index();

  echo '
  .gc-row-' . $rowNum . '-col-3 {';
    if ($col_4_padding['col_pt']) :
      echo '
      padding-top: ' . $col_4_padding['col_pt'] . ';';
    elseif ($col_4_padding['col_py']) :
      echo '
      padding-top: ' . $col_4_padding['col_py'] . ';';
    endif;

    if ($col_4_padding['col_pb']) :
      echo '
      padding-bottom: ' . $col_4_padding['col_pb'] . ';';
    elseif ($col_4_padding['col_py']) :
      echo '
      padding-bottom: ' . $col_4_padding['col_py'] . ';';
    endif;

    if ($col_4_padding['col_pr']) :
      echo '
      padding-right: ' . $col_4_padding['col_pr'] . ';';
    elseif ($col_4_padding['col_px']) :
      echo '
      padding-right: ' . $col_4_padding['col_pr'] . ';';
    endif;

    if ($col_4_padding['col_pl']) :
      echo '
      padding-left: ' . $col_4_padding['col_pl'] . ';';
    elseif ($col_4_padding['col_px']) :
      echo '
      padding-left: ' . $col_4_padding['col_px'] . ';';
    endif;

    echo '
  }';
}
 ?>
