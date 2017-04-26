<?php
/**
 * The sidebar.
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @link https://github.com/carlislephoto/carlislephoto-org-uk-theme
 *
 * @package WordPress
 * @subpackage CarlislePhoto
 */

if ( is_active_sidebar( 'sidebar') ) : ?>
	<?php dynamic_sidebar( 'sidebar' );
<?php endif; ?>