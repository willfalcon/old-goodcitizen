<?php

 /*====================================*/
 /*=== functions.php - Version 1.2 ===*/
 /*====================================*/


add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );
add_theme_support( 'woocommerce' );
add_theme_support( 'widgets' );


add_action( 'wp_enqueue_scripts', 'gc_theme_styles' );
add_action( 'wp_enqueue_scripts', 'gc_theme_scripts' );

function gc_theme_styles() {
  wp_enqueue_style( 'boostrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
  wp_enqueue_style( 'google_fonts', 'https://fonts.googleapis.com/css?family=Oxygen' );
  wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/fa/css/font-awesome.min.css');
  wp_enqueue_style( 'main_styles', get_template_directory_uri() . '/style.css' );
}

function gc_theme_scripts() {
  wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js', '', '', false );
  wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.js', array( 'jquery', 'popper' ), '', true );
  wp_enqueue_script( 'gc_js', get_template_directory_uri() . '/assets/js/gc.js', array( 'jquery' ), '', true );
}

add_action( 'init', 'register_theme_menus' );

function register_theme_menus() {
	register_nav_menus(
		array(
			'primary-menu' 	=> __( 'Center Menu', 'goodcitizen-main' ),
      'secondary-menu' => __( 'Right-Side Menu', 'goodcitizen-secondary' )
		)
	);
}

//add .nav-item to link tags in menus.
add_filter('nav_menu_css_class' , 'gc_nav_a_class' , 10 , 2);
function gc_nav_a_class($classes, $item){
    $classes[] = 'nav-item';
    return $classes;
}

gc_create_widget( 'Shop Widget', 'shop-widget', 'Displays below the items on the shop page.' );
gc_create_widget( 'Right-Side Footer', 'footer-right', 'Displays on the right side of the footer.' );

function gc_create_widget( $name, $id, $description ) {
	register_sidebar(array(
		'name' => __( $name ),
		'id' => $id,
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}

// Include theme options
add_filter('acf/settings/path', 'my_acf_settings_path');

function my_acf_settings_path( $path ) {
    $path = get_stylesheet_directory() . '/inc/acf/';
    return $path;
}

add_filter('acf/settings/dir', 'my_acf_settings_dir');

function my_acf_settings_dir( $dir ) {
    $dir = get_stylesheet_directory_uri() . '/inc/acf/';
    return $dir;
}

// Hide ACF field group menu
//add_filter('acf/settings/show_admin', '__return_false');

include_once( get_stylesheet_directory() . '/inc/acf/acf.php' );

// Theme options page
if (function_exists( 'acf_add_options_page' )) {

  acf_add_options_page( array(
    'page_title' => 'Theme Options',
    'menu_title' => 'Theme Options',
    'menu_slug' => 'gc-options',
    'compatibility' => 'edit_posts',
    'redirect' => 'false'
  ));

  acf_add_options_sub_page(array(
		'page_title' 	=> 'Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'gc-options',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'gc-options',
	));

}
// Include fields
//include_once( get_stylesheet_directory() . '/inc/fields.php' );

/*===================*/
/*=== WooCommerce ===*/
/*===================*/
//remove breadcrumbs on shop page
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
//remove catalog ording option on shop page
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

//adjust product title output on shop page. (add .gc-product-title)
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
add_action( 'woocommerce_shop_loop_item_title', 'gc_template_loop_product_title', 10 );
function gc_template_loop_product_title() {
  echo '<h4 class="woocommerce-loop-product__title gc-product-title">' . get_the_title() . '</h4>';
}

//adjust add to cart button output
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
add_action( 'woocommerce_after_shop_loop_item', 'gc_template_loop_add_to_cart', 10 );
if ( ! function_exists( 'gc_template_loop_add_to_cart' ) ) {

	/**
	 * Get the add to cart template for the loop.
	 *
	 * @subpackage    Loop
	 *
	 * @param array $args
	 */
	function gc_template_loop_add_to_cart( $args = array() ) {
		global $product;

		if ( $product ) {
			$defaults = array(
				'quantity' => 1,
				'class'    => implode( ' ', array_filter( array(
						'btn btn-outline-secondary gc-add-to-cart',
						'product_type_' . $product->get_type(),
						$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
						$product->supports( 'ajax_add_to_cart' ) ? 'ajax_add_to_cart' : '',
				) ) ),
			);

			$args = apply_filters( 'woocommerce_loop_add_to_cart_args', wp_parse_args( $args, $defaults ), $product );

			wc_get_template( 'loop/add-to-cart.php', $args );
		}
	}
}

//remove sidebar call on shop archive page
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

 /*=====================*/
 /*=== Gravity Forms ===*/
 /*=====================*/

add_filter( 'gform_submit_button', 'form_submit_button', 10, 2 );
function form_submit_button( $button, $form ) {
    return "<button class='btn btn-outline-secondary' id='gform_submit_button_{$form['id']}'>Submit</button>";
}

require get_parent_theme_file_path( '/inc/head_styles.php' );
require get_parent_theme_file_path( '/inc/row_formatting.php' );



?>
