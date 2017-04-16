<?php
/**
 * The front page template file.
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear. Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package carlislephoto
 */
?>

  <?php get_header(); ?>

  <section class="c-news c-band" data-section="News">
    <div class="o-wrapper">
      <div class="c-news__header">
        <hr class="c-dash c-news__dash">
        <p class="c-news__meta">News</p>
        <h2 class="c-news__title">The latest and greatest from around the festival</h2>
      </div>

      <?php if (have_posts()): ?>

      <div class="c-stories [ o-layout-flex o-layout-flex--gutters ]">

        <?php while (have_posts()) : the_post(); ?>

        <article class="c-story o-layout-flex__item u-flex-1/3">
          <a class="c-story__masthead" href="<?php the_permalink() ?>">
            <?php the_post_thumbnail( 'carlislephoto-flex-thumbnail', array('class' => 'c-story__media' ) ); ?>
          </a>
          <a href="<?php the_permalink() ?>">
            <h3 class="c-story__title"><?php the_title(); ?></h3>
          </a>
          <p>By <a class="c-story__author" href="/"><?php the_author(); ?></a>, <span class="c-post__date"><?php the_time('F j, Y'); ?> - <?php the_time(); ?></span></p>
        </article>

        <?php endwhile; ?>

      </div>

      <?php else: ?>

      <?php endif; ?>
      <div class="c-news__footer">
        <a class="c-button c-news__more" href="/">More News</a>
      </div>
    </div>
  </section>

  <?php get_template_part( 'template-parts/content', 'panels' ); ?>

  <section class="c-band" data-section="Sponsors">
    <div class="o-wrapper">
      <div class="c-news__header">
        <hr class="c-dash c-news__dash">
        <p class="c-news__meta">About</p>
        <h2 class="c-news__title">Thanks to our amazing sponsors</h2>
      </div>
      <ul class="c-sponsors__list o-list-inline">
        <li class="c-sponsors__item o-list-inline__item">
          <img class="c-sponsors__logo" src="<?php echo get_template_directory_uri() . '/images/sponsors-2.png' ?>" alt="">
        </li>
        <li class="c-sponsors__item o-list-inline__item">
          <img class="c-sponsors__logo" src="<?php echo get_template_directory_uri() . '/images/sponsors-1.png' ?>" alt="">
        </li>
        <li class="c-sponsors__item o-list-inline__item">
          <img class="c-sponsors__logo" src="<?php echo get_template_directory_uri() . '/images/sponsors-3.png' ?>" alt="">
        </li>
        <li class="c-sponsors__item o-list-inline__item">
          <img class="c-sponsors__logo" src="<?php echo get_template_directory_uri() . '/images/sponsors-4.png' ?>" alt="">
        </li>
      </ul>
    </div>
  </section>

  <?php get_template_part( 'template-parts/content', 'band-parallax' ); ?>

  <?php get_template_part( 'template-parts/content', 'band-subscribe' ); ?>

  <?php get_footer(); ?>
