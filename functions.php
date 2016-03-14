<?php
/**
 * Functions and Definitions
 *
 * @package HugoMarquez
 * @subpackage WPMinBoot
 */

if ( ! function_exists( 'minboot_setup' ) ) :
function minboot_setup() {}
endif;
add_action( 'after_setup_theme', 'minboot_setup' );


/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/includes/enqueue.php';

?>