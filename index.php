<?php
/**
 * The main template file.
 *
 * @author Julian Dawson <julian@juliandawson.co.uk>
 * @license MIT License
 * @link https://github.com/carlislephoto/carlislephoto-org-uk-theme
 *
 * @package WordPress
 * @subpackage CarlislePhoto
 */

get_header();

while (have_posts()) : the_post(); ?>
  <main class="c-blog-page s-blog-page">
    <div class="c-band">
      <div class="o-wrapper">
        <div class="c-blog-page__content">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </main>

<?php endwhile;
get_footer(); ?>
