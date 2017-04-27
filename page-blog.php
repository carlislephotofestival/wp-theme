<?php
/**
 * Template Name: Page Blog
 *
 * @link https://github.com/carlislephoto/carlislephoto-org-uk-theme
 *
 * @package WordPress
 * @subpackage CarlislePhoto
 */

get_header();

while ( have_posts() ) : the_post(); ?>

<main class="c-band c-band--tall">
  <div class="o-wrapper">
    <?php
    /**
     * Get all posts.
     */

    $carlislephoto_posts = get_posts();
    foreach( $carlislephoto_posts as $post ) : setup_postdata($post); ?>

    <article class="o-teaser">
      <a class="o-teaser__link" href="<?php the_permalink() ?>">
        <div class="o-teaser__media">
          <?php the_post_thumbnail( 'carlislephoto-flex-thumbnail' ); ?>
        </div>
        <div class="o-teaser__content">
          <div class="o-teaser__meta">
            <div class="o-teaser__badge [ c-badge c-badge--blog-post ]">Blog</div>
            <time class="o-teaser__date"><?php the_time('j F Y'); ?></time>
          </div>
          <h2 class="o-teaser__headline"><?php the_title(); ?></h2>
          <?php the_excerpt(); ?>
        </div>
      </a>
    </article>

    <?php endforeach; wp_reset_postdata(); ?>
  </div>
</main>

<?php endwhile;
get_footer(); ?>