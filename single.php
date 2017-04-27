<?php
/**
 * The default template for displaying all posts.
 *
 * @link https://github.com/carlislephoto/carlislephoto-org-uk-theme
 *
 * @package WordPress
 * @subpackage CarlislePhoto
 */

get_header();

while ( have_posts() ) : the_post(); ?>

<article class="c-blog-post">
  <header class="[ c-masthead c-masthead--cover ] js-masthead-cover">
    <figure class="c-masthead__media">
      <?php the_post_thumbnail( 'carlislephoto-flex-thumbnail' ); ?>
      <figcaption class="c-masthead__caption"><?php the_title(); ?>. <span class="c-masthead__credit">Julian Dawson for Carlisle Photo</span></figcaption>
    </figure>
    <div class="c-masthead__content">
      <div class="o-wrapper">
        <h1 class="c-masthead__headline"><?php the_title(); ?></h1>
        <p class="c-masthead__text"><?php the_excerpt(); ?></p>
      </div>
    </div>
  </header>
  <main>
    <div class="c-band">
      <div class="o-wrapper o-wrapper--narrow">
        <div class="c-blog-post__meta o-layout-flex">
          <div class="o-layout-flex__item u-flex-1/2">
            <span class="c-blog-post__badge c-masthead__badge [ c-badge c-badge--blog-post ]">Blog</span>
            <time class="c-blog-post__date"><?php the_time('j F Y'); ?></time>
          </div>
          <div class="c-blog-post__social c-social o-layout-flex__item u-flex-1/2">
            <ul class="c-social__list">
              <li class="c-social__item">
                <p class="c-blog-post__share">Share on:</p>
              </li>
              <li class="c-social__item">
                <a aria-label="Twitter" class="c-social__link" href="/" target="_blank">
                  <svg aria-hidden="true" class="c-social__icon" role="img">
                    <use xlink:href="#icon-twitter" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                  </svg>
                </a>
              </li>
              <li class="c-social__item">
                <a aria-label="Facebook" class="c-social__link" href="/" target="_blank">
                  <svg aria-hidden="true" class="c-social__icon" role="img">
                    <use xlink:href="#icon-facebook" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="c-blog-post__content s-blog-post">

          <?php the_content(__('(more...)')); ?>

        </div>
      </div>
    </div>
  </main>
</article>

<section class="c-band c-band--dark">
  <div class="o-wrapper">
    <div class="o-layout-flex">

      <?php $carlislephoto_posts = get_posts( array( 'posts_per_page' => 2 ) );
        foreach( $carlislephoto_posts as $post ) : setup_postdata($post);
      ?>

      <div class="o-layout-flex__item u-flex-1/2">
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
      </div>

      <?php endforeach; wp_reset_postdata(); ?>
    </div>
  </div>
</section>

<?php endwhile;
get_footer(); ?>