<?php

if ( get_sub_field( 'row_layout' ) == 'full-width' ) {

  // Build css for the "col" divs contained within each row div. Mainly

    $contentPadding = get_sub_field( 'content_padding' );
    $rowNum = get_row_index();


  echo '
  .gc-row-' . $rowNum . ' > div {';

      // Padding for the column content.
    if ($contentPadding['col_pt']) :
      echo '
      padding-top: ' . $contentPadding['col_pt'] . ';';
    elseif ($contentPadding['col_py']) :
      echo '
      padding-top: ' . $contentPadding['col_py'] . ';';
    endif;

    if ($contentPadding['col_pb']) :
      echo '
      padding-bottom: ' . $contentPadding['col_pb'] . ';';
    elseif ($contentPadding['col_py']) :
      echo '
      padding-bottom: ' . $contentPadding['col_py'] . ';';
    endif;

    if ($contentPadding['col_pr']) :
      echo '
      padding-right: ' . $contentPadding['col_pr'] . ';';
    elseif ($contentPadding['col_px']) :
      echo '
      padding-right: ' . $contentPadding['col_pr'] . ';';
    endif;

    if ($contentPadding['col_pl']) :
      echo '
      padding-left: ' . $contentPadding['col_pl'] . ';';
    elseif ($contentPadding['col_px']) :
      echo '
      padding-left: ' . $contentPadding['col_px'] . ';';
    endif;

  echo '
  }';

  $mdContentPadding = get_sub_field( 'content_padding_md' );

  if ( ! empty( $mdContentPadding ) ) {
    echo '@media (min-width: 768px) {
      .gc-row-' . $rowNum . ' > div {';

        if ($mdContentPadding['col_pt']) :
          echo '
          padding-top: ' . $mdContentPadding['col_pt'] . ';';
        elseif ($mdContentPadding['col_py']) :
          echo '
          padding-top: ' . $mdContentPadding['col_py'] . ';';
        endif;

        if ($mdContentPadding['col_pb']) :
          echo '
          padding-bottom: ' . $mdContentPadding['col_pb'] . ';';
        elseif ($mdContentPadding['col_py']) :
          echo '
          padding-bottom: ' . $mdContentPadding['col_py'] . ';';
        endif;

        if ($mdContentPadding['col_pr']) :
          echo '
          padding-right: ' . $mdContentPadding['col_pr'] . ';';
        elseif ($mdContentPadding['col_px']) :
          echo '
          padding-right: ' . $mdContentPadding['col_pr'] . ';';
        endif;

        if ($mdContentPadding['col_pl']) :
          echo '
          padding-left: ' . $mdContentPadding['col_pl'] . ';';
        elseif ($mdContentPadding['col_px']) :
          echo '
          padding-left: ' . $mdContentPadding['col_px'] . ';';
        endif;

      echo '
      }
    }';
  }
}

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
