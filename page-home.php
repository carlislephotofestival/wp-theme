<?php
/**
 * Template Name: Page-Home
 */
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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
        <article class="o-teaser o-teaser--featured">
          <a class="o-teaser__link" href="/post.html">
            <div class="o-teaser__media">
              <img src="<?php echo get_template_directory_uri() . '/images/placeholder-square.jpg' ?>" alt="">
            </div>
            <div class="o-teaser__content">
              <div class="o-teaser__meta">
                <div class="o-teaser__badge [ c-badge c-badge--blog-post ]">Blog</div>
                <time class="o-teaser__date">31 March 2017</time>
              </div>
              <h2 class="o-teaser__headline">Quisque vel rhoncus ex vitae tincidunt ex dolor sit amet</h2>
              <p class="o-teaser__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel rhoncus ex, vitae tincidunt ex.</p>
            </div>
          </a>
        </article>
      </div>
      <div class="o-layout-flex__item u-flex-1/2">
        <article class="o-teaser">
          <a class="o-teaser__link" href="/post.html">
            <div class="o-teaser__media">
              <img src="<?php echo get_template_directory_uri() . '/images/placeholder-square.jpg' ?>" alt="">
            </div>
            <div class="o-teaser__content">
              <div class="o-teaser__meta">
                <div class="o-teaser__badge [ c-badge c-badge--blog-post ]">Blog</div>
                <time class="o-teaser__date">31 March 2017</time>
              </div>
              <h2 class="o-teaser__headline">Quisque vel rhoncus ex vitae tincidunt ex dolor sit amet</h2>
              <p class="o-teaser__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel rhoncus ex, vitae tincidunt ex.</p>
            </div>
          </a>
        </article>
        <article class="o-teaser">
          <a class="o-teaser__link" href="/post.html">
            <div class="o-teaser__media">
              <img src="<?php echo get_template_directory_uri() . '/images/placeholder-square.jpg' ?>" alt="">
            </div>
            <div class="o-teaser__content">
              <div class="o-teaser__meta">
                <div class="o-teaser__badge [ c-badge c-badge--blog-post ]">Blog</div>
                <time class="o-teaser__date">31 March 2017</time>
              </div>
              <h2 class="o-teaser__headline">Quisque vel rhoncus ex vitae tincidunt ex dolor sit amet</h2>
              <p class="o-teaser__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel rhoncus ex, vitae tincidunt ex.</p>
            </div>
          </a>
        </article>
      </div>
    </div>
    <a class="c-button c-button--wide" href="/">
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

<?php endwhile; else: ?>

  <p>Sorry, no pages matched your criteria.</p>

<?php endif; ?>

 <?php get_template_part( 'template-parts/content', 'band-goodbye' ); ?>

<?php get_footer(); ?>
