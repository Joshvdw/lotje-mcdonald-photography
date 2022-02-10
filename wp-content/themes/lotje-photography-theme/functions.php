<?php
/* enqueue scripts and style from parent theme */
    
// function twentytwentytwo_styles() {
//     wp_enqueue_style( 'child-style', get_stylesheet_uri(),
//     array( 'twenty-twenty-two-style' ), wp_get_theme()->get( 'Version' ) );
// }

// add_action( 'wp_enqueue_scripts', 'twentytwentytwo_styles');

function my_theme_enqueue_styles() {
    wp_register_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'parent-style' ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

// Remove the category count for WooCommerce categories
add_filter( 'woocommerce_subcategory_count_html', '__return_null' );

// change search placeholder
function html5_search_form( $form ) { 
     $form = '<section class="search"><form role="search" method="get" id="search-form" action="' . home_url( '/' ) . '" >
    <label class="screen-reader-text" for="s">' . __('',  'domain') . '</label>
     <input type="search" value="' . get_search_query() . '" name="s" id="s" placeholder="search products..." />
     <input type="submit" id="searchsubmit" value="'. esc_attr__('Go', 'domain') .'" />
     </form></section>';
     return $form;
}
 add_filter( 'get_search_form', 'html5_search_form' );