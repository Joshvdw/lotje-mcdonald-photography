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