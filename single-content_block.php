<?php

    get_header( 'landing' );

    // $secondRowTheme = get_field( 'second_row_theme' );
    // if ( $secondRowTheme == 'dark' ) {
    //   $secondRowClass = 'gc-theme-dark';
    // } elseif ( $secondRowTheme == 'light' ) {
    //   $secondRowClass = 'gc-theme-light';
    // }

    /**
    * Load a component into a template while supplying data.
    *
    * @param string $slug The slug name for the generic template.
    * @param array $params An associated array of data that will be extracted into the templates scope
    * @param bool $output Whether to output component or return as string.
    * @return string
    */
   function get_component($slug, $row, $output = true) {
       if(!$output) ob_start();
       if (!$template_file = locate_template("components/{$slug}.php", false, false)) {
         trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
       }
       extract($row, EXTR_SKIP);
       require($template_file);
       if(!$output) return ob_get_clean();
   }

    $theme = get_field( 'theme' );
    $bgImg = get_field( 'background_image' );
    $layout = get_field( 'layout' );
    $firstColTitle = get_field( 'first_col_title' );
    $firstColContent = get_field( 'first_col_content' );
    $rowClass = 'gc-second-row';


    switch ( $layout ) {
      case 'full_width':
        get_template_part( 'row', 'full_width' );
        break;
      case 'halves':
        get_component( 'halves_row', 2 );
        break;
      case '3_6_3':
        get_component( '3_6_3_row', 2 );
        break;
      case '4_col':
        get_component( '4_col_row', 2 );
        break;
    }

    get_footer();

?>
