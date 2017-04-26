<?php
/**
 * Template Name: Page Home
 *
 * @link https://github.com/carlislephoto/carlislephoto-org-uk-theme
 *
 * @package WordPress
 * @subpackage CarlislePhoto
 */

get_header();

while (have_posts()) : the_post(); ?>

<div class="c-hero [ c-masthead c-masthead--cover ] js-masthead-cover">
  <figure class="c-masthead__media">
    <!--
    <video autoplay="" loop="" muted="" preload="auto">
      <source src="<?php echo get_template_directory_uri() . '/videos/hero.mp4' ?>" type="video/mp4">
      <img src="<?php echo get_template_directory_uri() . '/images/hero.jpg' ?>" title="Your browser does not support the <video> element">
    </video>
    -->
    <?php the_post_thumbnail(); ?>
  </figure>
  <div class="c-masthead__content">
    <div class="o-wrapper">
      <h1 class="c-masthead__headline"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></h1>
      <p class="c-masthead__text"><?php echo get_post(get_post_thumbnail_id())->post_content; ?></p>
      <a class="c-button" href="/">
        <span class="c-button__text">Register</span>
        <span class="c-button__icon">
            <svg class="c-button__arrow">
              <use xlink:href="#icon-arrow" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
            </svg>
          </span>
      </a>
    </div>
  </div>
</div>

<section class="c-news c-band" data-section="News">
  <div class="o-wrapper">
    <div class="o-layout-flex">
      <div class="o-layout-flex__item u-flex-1/2">

        <?php $carlislephoto_posts = get_posts( array( 'posts_per_page' => 1 ) );
          foreach( $carlislephoto_posts as $post ) : setup_postdata($post);
        ?>

        <article class="o-teaser o-teaser--featured">
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
              <p class="o-teaser__text"><?php the_excerpt(); ?></p>
            </div>
          </a>
        </article>

        <?php endforeach; wp_reset_postdata(); ?>
      </div>
      <div class="o-layout-flex__item u-flex-1/2">

        <?php $carlislephoto_posts = get_posts( array( 'posts_per_page' => 2, 'offset' => 1 ) );
          foreach( $carlislephoto_posts as $post ) : setup_postdata($post);
        ?>

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
              <p class="o-teaser__text"><?php the_excerpt(); ?></p>
            </div>
          </a>
        </article>

        <?php endforeach; wp_reset_postdata(); ?>

      </div>
    </div>
    <a class="c-button c-button--wide" href="/blog/">
      <span class="c-button__text">More News</span>
      <span class="c-button__icon">
          <svg class="c-button__arrow">
            <use xlink:href="#icon-arrow" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
          </svg>
        </span>
    </a>
  </div>
</section>

<section aria-labelledby="about-headline" class="c-about c-band" data-section="About">
  <div class="o-wrapper">
    <?php the_content(__('(more...)')); ?>
  </div>
</section>

<?php endwhile;
get_footer(); ?>