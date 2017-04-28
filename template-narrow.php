<?php
/**
 * Template Name: Template Narrow
 *
 * @author Julian Dawson <julian@juliandawson.co.uk>
 * @license MIT License
 * @link https://github.com/carlislephoto/carlislephoto-org-uk-theme
 *
 * @package WordPress
 * @subpackage CarlislePhoto
 */

get_header();

while ( have_posts() ) : the_post();

  if( has_post_thumbnail() ) : ?>
  <div class="c-masthead">
    <figure class="c-masthead__media">
      <?php the_post_thumbnail(); ?>
    </figure>
  </div>
  <?php endif; ?>

  <main class="c-blog-page s-blog-post">
    <div class="c-band">
      <div class="o-wrapper o-wrapper--narrow">
        <div class="c-blog-page__content">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </main>

<?php endwhile;
get_footer(); ?>
