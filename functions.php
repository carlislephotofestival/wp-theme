<?php

/**
 * Carlisle Photo functions and definitions.
 * @link https://codex.wordpress.org/Functions_File_Explained
 * @package carlislephoto
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

/**
 *
 */
function naked_nav($post = 0)
{
$output = "";
$subNav = "";
$params = "title_li=&depth=1&echo=0";

// always show top level
$output .= '<ul id="nav">';
$output .= wp_list_pages($params);
$output .= '</ul>';

// second level?
if($post->post_parent)
{
$params .= "&child_of=" . $post->post_parent;
}
else
{
$params .= "&child_of=" . $post->ID;
}
$subNav = wp_list_pages($params);

if ($subNav)
{
$output .= '<ul id="subNav">';
$output .= $subNav;
$output .= '</ul>';
}
return $output;
}

/**
* @desc make the site's heading & tagline an h1 on the homepage and an h4 on internal pages
* Naked's default CSS should make the two different states look identical
*/
function do_heading()
{
$output = "";

if(is_home()) $output .= "<h1>"; else  $output .= "<h4>";

$output .= "<a href='"  . get_bloginfo('url') . "'>" . get_bloginfo('name') . "</a> <span>" . get_bloginfo('description') . "</span>";

if(is_home()) $output .= "</h1>"; else  $output .= "</h4>";

return $output;
}

/**
* register_sidebar()
*
*@desc Registers the markup to display in and around a widget
*/
if ( function_exists('register_sidebar') )
{
register_sidebar(array(
'before_widget' => '<li id="%1$s" class="widget %2$s">',
'after_widget' => '</li>',
'before_title' => '',
'after_title' => '',
));
}

/**
* Check to see if this page will paginate
*
* @return boolean
*/
function will_paginate()
{
global $wp_query;

if ( !is_singular() )
{
$max_num_pages = $wp_query->max_num_pages;

if ( $max_num_pages > 1 )
{
return true;
}
}
return false;
}

?>
