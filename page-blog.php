<?php
/**
 * Template Name: Page Blog
 */

  get_header();
?>

<main class="c-band c-band--tall">
  <div class="o-wrapper">

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <?php $carlislephoto_posts = get_posts();
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

    <?php endwhile; else: ?>

    <p>Sorry, no pages matched your criteria.</p>

    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>