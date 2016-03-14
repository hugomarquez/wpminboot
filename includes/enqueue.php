<?php
/**
 * Enqueue scripts and styles.
 * @package HugoMarquez
 * @subpackage WPMinBoot
 */
function mb_styles() {
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '3.3.6', 'all');
  wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array('bootstrap'), '0.0.1', 'all' );
}
function mb_scripts() {
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '3.3.6', true);
}

// Add Actions
add_action( 'wp_enqueue_scripts', 'mb_styles' );
add_action( 'wp_enqueue_scripts', 'mb_scripts' );

?>