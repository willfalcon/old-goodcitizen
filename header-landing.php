<?php

  $primary = array(
  //  'container_class' => '',
    'container' => false,
    'theme_location'  => 'primary-menu',
    'menu_class'  => 'navbar-nav mx-auto w-100 justify-content-center'
  );

  $secondary = array(
    //'container_class' => '',
    'container' => false,
    'theme_location'  => 'secondary-menu',
    'menu_class'  => 'nav navbar-nav ml-auto w-100 justify-content-end'
  );

  //get theme header options
  $headerBG = get_field( 'header_background' );
  $headerClass = '';
  if ( get_field( 'page_header_text_color' ) ) {
    $headerClass .= ' page_header_text_color';
  }
  if ( $headerBG[ 'transparent_bg' ] ) {
    $headerClass .= ' gc-bg-transparent';
  } elseif ( $headerBG[ 'page_header_bg_color' ] ) {
    $headerClass .= ' page_header_bg_color';
  }
  if ( get_field( 'first_row_theme' ) ) {
    $headerClass .= ' ' . get_field( 'first_row_theme' );
    $headerTheme = get_field( 'first_row_theme' );
  } else {
    $headerClass .= ' ' . get_field( 'default_theme', 'option' );
    $headerTheme = get_field( 'default_theme', 'option' );
  }

  $header = get_field( $headerTheme, 'option' );
  $bgImg = get_field( 'first_row_image' );

  if (get_field('first_row_height') != 'auto') {
    $rowHeight = get_field('first_row_height');
    $rowHeightClass = ' gc-h' . $rowHeight;
  } elseif (!empty($bgImg)) {
    $rowHeightClass = ' gc-h700';
  }

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>

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
    </style>
  </head>

  <body <?php body_class(); ?>>
    <div class="container-fluid">
      <div class="gc-first-bg-row<?php if(!empty($rowHeightClass)){echo $rowHeightClass;}?>"<?php if(get_field('first_row_image')): ?> style="background-image: url(<?php the_field('first_row_image'); ?>), linear-gradient(rgba(100,100,100,0.2),rgba(100,100,100,0.2));"<?php endif; ?>>

        <nav class="navbar navbar-expand-md<?php echo $headerClass; ?>">

          <a class="navbar-brand d-flex w-50 mr-auto" href="<?php bloginfo('url'); ?>">
            <img src="<?php echo $header['header_logo']['url']; ?>" class="gc-nav-logo">
          </a>

          <button class="navbar-toggler gc-menu-icon" type="button" data-toggle="collapse" data-target="#gcMainNav" aria-controls="gcMainNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars <?php echo $headerClass; ?>"></i>
          </button>

          <div class = "collapse navbar-collapse gc-navbar-collapse" id="gcMainNav">

              <?php wp_nav_menu( $primary ); ?>

              <?php wp_nav_menu( $secondary ); ?>

          </div>

        </nav>
