<?php
/**
 * Carlisle Photo functions and definitions.
 *
 * @link https://github.com/carlislephoto/carlislephoto-org-uk-theme
 *
 * @package WordPress
 * @subpackage CarlislePhoto
 */

if ( ! function_exists( 'carlislephoto_setup' ) ) :

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function carlislephoto_setup() {

  /**
   * Enable support for Post Thumbnails.
   * @link https://codex.wordpress.org/Post_Thumbnails
   */
  add_theme_support( 'post-thumbnails' );

	// Featured Post Main Thumbnail on the front page & single page template
	add_image_size( 'carlislephoto-flex-thumbnail', false, false, true );

  /**
   * Enable support for Custom Header.
   * @link https://codex.wordpress.org/Custom_Headers
   */
  add_theme_support( 'custom-header' );

  /**
   * Register multiple custom navigation menus.
   * @link https://codex.wordpress.org/Function_Reference/register_nav_menus
   */
  register_nav_menus(
    array(
      'primary' => __( 'Primary Nav' ),
      'secondary' => __( 'Secondary Nav' ),
      'social' => __(' Social Follow Links')
    )
  );

}
endif;

add_action( 'after_setup_theme', 'carlislephoto_setup' );
?>