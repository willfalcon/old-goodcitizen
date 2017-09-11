<?php
  $primary = array(
    'container' => false,
    'theme_location'  => 'primary-menu',
    'menu_class'  => 'navbar-nav mx-auto w-100 justify-content-center'
  );

  $secondary = array(
    'container' => false,
    'theme_location'  => 'secondary-menu',
    'menu_class'  => 'nav navbar-nav ml-auto w-100 justify-content-end'
  );

  //get theme header options
  $headerBG = get_field( 'header_background' );
  $headerStyles = false;
  $headerClass = '';
  if ( get_field( 'page_header_text_color' ) ) {
    $headerClass .= ' page_header_text_color';
    $headerStyles = true;
  }
  if ( $headerBG[ 'transparent_bg' ] ) {
    $headerClass .= ' gc-bg-transparent';
    if ($headerStyles != true) {
      $headerStyles = true;
    }
  } elseif ( $headerBG[ 'page_header_bg_color' ] ) {
    $headerClass .= ' page_header_bg_color';
    if ($headerStyles != true) {
      $headerStyles = true;
    }
  }

  //get theme header options
  if ( get_field( 'header_theme' ) ) {
    $headerTheme = get_field( 'header_theme' );
    $headerClass .= ' ' . get_field( 'header_theme' );
  } else {
    $headerTheme = get_field( 'default_theme', 'option' );
    $headerClass .= ' ' . get_field( 'default_theme', 'option' );
  }

  $header = get_field( $headerTheme, 'option' );


  $rows = get_field( 'rows' );
  $row1 = $rows[0];
  $row1image = $row1['bg_img'];
  $row1imgCSS = 'url(' . $row1image['url'] . ')';
  $row1imgOverlay = $row1['bg_img_overlay'];
  $row1imgOverlayOpacity = $row1['bg_img_overlay_opacity'];
  if ($row1imgOverlayOpacity) {
    $row1imgOverlay .= dechex($row1imgOverlayOpacity);
  }
  $row1imgCSS .= ', linear-gradient(' . $row1imgOverlay . ',' . $row1imgOverlay . ')'
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>

    <?php if ( $headerStyles == true ) : ?>
      <style type="text/css">
        <?php if (get_field( 'page_header_text_color' ) ) : ?>
          .page_header_text_color > div > ul > li > a {
            color: <?php the_field( 'page_header_text_color' ); ?>;
          }
        <?php endif; ?>
        <?php if ( $headerBG['page_header_bg_color'] ) : ?>
          .page_header_bg_color {
            background-color: <?php echo $headerBG[ 'page_header_bg_color' ]; ?>;
          }
        <?php endif; ?>
        <?php if ( $row1image ) : ?>
          .gc-first-row-background {
            background-image: <?php echo 'url(' . $row1image['url'] . ')' ?>, linear-gradient(rgba(100,100,100,0.2),rgba(100,100,100,0.2));
          }
          <?php endif; ?>
      </style>
    <?php endif; ?>

  </head>

  <body <?php body_class(); ?>>
    <div class="container-fluid">
      <?php if ($row1image && $headerBG[ 'transparent_bg' ]) : ?><div class="gc-first-bg-row gc-first-row-background"><?php endif; ?>
      <nav class="navbar navbar-expand-md <?php echo $headerClass; ?>">
        <div class="col-8 col-md-4">
          <a class="navbar-brand d-flex w-50 mr-auto" href="<?php bloginfo('url'); ?>">
            <img src="<?php echo $header['header_logo']['url']; ?>" class="gc-nav-logo">
          </a>
        </div>


        <button class="navbar-toggler gc-menu-icon" type="button" data-toggle="collapse" data-target="#gcMainNav" aria-controls="gcMainNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars <?php echo $headerTheme; ?>"></i>
        </button>

        <div class = "collapse navbar-collapse gc-navbar-collapse" id="gcMainNav">

            <?php wp_nav_menu( $primary ); ?>

            <?php wp_nav_menu( $secondary ); ?>

        </div>
      </nav>
