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

  <div class="c-hero [ c-masthead c-masthead--cover ] js-masthead-cover">
    <figure class="c-masthead__media">
      <video autoplay="" loop="" muted="" preload="auto">
        <source src="<?php echo get_template_directory_uri() . '/videos/hero-placeholder.mp4' ?>" type="video/mp4">
        <img src="<?php echo get_template_directory_uri() . '/images/hero.jpg' ?>" title="Your browser does not support the <video> element">
      </video>
    </figure>
    <div class="c-masthead__content">
      <div class="o-wrapper">
        <h1 class="c-masthead__headline">Open Call</h1>
        <p class="c-masthead__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
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
      <div class="o-layout-flex">
        <div class="o-layout-flex__item u-flex-1/3">
          <h2 id="about-headline">The Festival</h2>
          <hr class="c-dash c-dash--brand-tertiary">
        </div>
        <div class="o-layout-flex__item u-flex-1/3">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam venenatis ligula felis, non iaculis odio egestas id.
            Donec varius ex ac leo gravida laoreet. Maecenas ac nibh nec erat ornare semper id ac sem. Integer nec vehicula
            quam, in maximus nisi. Ut aliquam eros non tortor mollis, at porta mauris gravida. Suspendisse potenti.</p>
          <p>Duis tortor erat, rutrum non luctus ac, molestie a risus. Mauris luctus tellus lectus, vel blandit ex tincidunt
            id.
          </p>
        </div>
        <div class="o-layout-flex__item u-flex-1/3">
          <p>Nulla dapibus sagittis commodo. Suspendisse vehicula ligula leo, sit amet tincidunt metus sollicitudin quis. In
            hac habitasse platea dictumst. Ut luctus sapien risus, a volutpat quam porta vitae. Nullam placerat elementum
            lectus id pulvinar. Morbi interdum viverra velit, id congue mauris pretium et. Sed maximus ex neque, eu rutrum
            diam convallis ultrices.</p>
        </div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>
