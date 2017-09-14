<?php
/**
 * Custom template tags for theme pages.
 */


if ( ! function_exists( 'gc_build_head_styles' ) ) :
  /*
    Build css for page-specific styles
  */
function gc_build_head_styles() {
  $gc_header_bg = get_field( 'header_background' );
  $rows = get_field( 'rows' );
  $row1 = $rows[0];
  $row1image = $row1['bg_img'];

  echo '<style type="text/css">';

    // Start ACF row loop.
  if ( have_rows( 'rows' ) ) : while (have_rows( 'rows' ) ) : the_row();

    $rowNum = get_row_index();
    $rowHeight = '';
    $bgColor = '';

    if ( get_sub_field( 'row_height' ) ) {
      $rowHeight = get_sub_field('row_height');
    } elseif ( get_sub_field ( 'bg_img' ) ) {
      $rowHeight = '600px';
    }

    if ( get_sub_field( 'row_bg_color' ) ) {
      $bgColor = get_sub_field( 'row_bg_color' );
    }

      // Build a specific class for each row.
    echo '
    .gc-row-' . $rowNum . ' {';

        // Add the row height if set.
      if ( $rowHeight ) :
        echo '
        height: ' . $rowHeight . ';';
      endif;

        // Add the background color if set.
        /*
          This will be moved to affect the background-image div instead of here.
          As is, if row margins are set, the margins don't pick up the background color, leaving awkward spaces around w/ no color.
        */
      if ( ! get_sub_field( 'bg_img' ) && ($bgColor)) :
        echo '
        background-color: ' . $bgColor . ';';
      endif;

        // Set margins for the row
      get_template_part( 'inc/row', 'margins' );

        // Set padding for the column contents.
      get_template_part( 'inc/col', 'padding' );

    // end row loop.
  endwhile; endif;

    // add header option css if needed.
  if (get_field( 'page_header_text_color' ) ) {
    echo '
    .page_header_text_color > div > ul > li > a {
            color: ' . get_field( 'page_header_text_color' ) . ';
          }';
  }

  if ( $gc_header_bg['page_header_bg_color'] ) {
    echo '
    .page_header_bg_color {
      background-color: ' . $gc_header_bg[ 'page_header_bg_color' ] . ';
    }';
  }

  if ( $row1image ) {
    echo '
    .gc-first-row-background {
      background-image: url(' . $row1image['url'] . ')' . ', linear-gradient(rgba(100,100,100,0.2),rgba(100,100,100,0.2));
    }';
  }

  echo '</style>';
}
endif;



if ( ! function_exists( 'gc_nav_class' ) ) :
  /*
    Check options affecting nav and add them to the class string if needed, then echo the class string.
  */
function gc_nav_class() {
  $gc_nav_class = '';
  $gc_header_bg = get_field( 'header_background' );


    // Add new header text color if needed.
  if ( get_field( 'page_header_text_color' ) ) {

    $gc_nav_class .= ' page_header_text_color';

  }

    // If transparent background is selected, add that class, otherwise check the header background color option and add that class if needed.
  if ( $gc_header_bg[ 'transparent_bg' ] ) {

    $gc_nav_class .= ' gc-bg-transparent';

  } elseif ( $gc_header_bg[ 'page_header_bg_color' ] ) {

    $gc_nav_class .= ' page_header_bg_color';

  }

    // Add the basic theme class from the page option if selected, otherwise get the default from theme options.
    // The classes added earlier override these, since their css is on the page rather than in styles.css like the theme classes.
  if ( get_field( 'header_theme' ) ) {

    $gc_nav_class .= ' ' . get_field( 'header_theme' );

  } else {

    $gc_nav_class .= ' ' . get_field( 'default_theme', 'option' );

  }

  return $gc_nav_class;
}
endif;



if ( ! function_exists( 'gc_header_theme' ) ) :
  /*
    Set the header theme for the page
  */
function gc_header_theme() {

  if ( get_field( 'header_theme' ) ) {

    $gc_header_theme = get_field( 'header_theme' );

  } else {

    $gc_header_theme = get_field( 'default_theme', 'option' );

  }

  return $gc_header_theme;

}
endif;



if ( ! function_exists( 'gc_big_background_row' ) ) :
  /*
    Set up the background image for a transparent nav bar background-image
  */
function gc_big_background_row() {
    $gc_header_bg = get_field( 'header_background' );
    $rows = get_field( 'rows' );
    $row1 = $rows[0];
    $row1image = $row1['bg_img'];

    if ($row1image && $gc_header_bg[ 'transparent_bg' ]) {
      echo '<div class="gc-first-bg-row gc-first-row-background">';
    }
}
endif;
?>
