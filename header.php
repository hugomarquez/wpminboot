<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package HugoMarquez
 * @subpackage WPMinBoot
 */
?>
<!DOCTYPE html>
  <html <?php language_attributes(); ?>>
    <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
      
    </body>