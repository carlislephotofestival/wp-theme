<?php
/**
 * Template Name: Template Bare
 */
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<main class="c-blog-page s-blog-page">

  <?php the_content(__('(more...)')); ?>

</main>

<?php endwhile; else: ?>

  <p>Sorry, no pages matched your criteria.</p>

<?php endif; ?>

<?php get_footer(); ?>
