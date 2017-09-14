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
  $gc_header_bg = get_field( 'header_background' );
  $gc_header_theme = gc_header_theme();
  $header = get_field( $gc_header_theme, 'option' );

  $rows = get_field( 'rows' );
  $row1 = $rows[0];
  $row1image = $row1['bg_img'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>
    <?php gc_build_head_styles(); ?>

  </head>

  <body <?php body_class(); ?>>
    <div class="container-fluid">


      <?php
      //adds a div containing the navbar and first row with the background row if the 1st row has a background image and transparent header setting is checked.
       gc_big_background_row(); ?>

      <nav class="navbar navbar-expand-md<?php echo gc_nav_class(); ?>">

        <div class="col-8 col-md-4">
          <a class="navbar-brand d-flex w-50 mr-auto" href="<?php bloginfo('url'); ?>">
            <img src="<?php echo $header['header_logo']['url']; ?>" class="gc-nav-logo">
          </a>
        </div>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#gcMainNav" aria-controls="gcMainNav" aria-expanded="false" aria-label="Toggle navigation">

           <i class="fa fa-bars fa-lg"></i>
        </button>

        <div class = "collapse navbar-collapse gc-navbar-collapse" id="gcMainNav">

            <?php wp_nav_menu( $primary ); ?>

            <?php wp_nav_menu( $secondary ); ?>

        </div>
      </nav>
