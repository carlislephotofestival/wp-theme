  <?php get_template_part( 'template-parts/content', 'band-goodbye' ); ?>
  
  <footer class="c-page-foot">
    <div class="o-wrapper">
      <?php wp_footer(); ?>
      <span class="c-page-foot__text">&copy; 2017 Carlisle Photo. Made with <svg aria-label="Heart" class="c-page-foot__heart" role="img"><use xlink:href="#icon-heart" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg> in Bath.</span>
      <div class="c-page-foot__nav c-nav-secondary">
        <?php wp_nav_menu(
          array(
            'theme_location' => 'secondary',
            'container' => false,
            'menu_class' => 'c-nav-secondary'
          ) 
        ); ?>        
      </div>
      <div class="c-page-foot__social c-social">
        <ul class="o-list-inline">
          <li class="c-social__item o-list-inline__item">
            <a aria-label="Twitter" class="c-social__link" href="/" target="_blank">
              <svg aria-hidden="true" class="c-social__icon" role="img">
                <use xlink:href="#icon-twitter" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
              </svg>
            </a>
          </li>
          <li class="c-social__item o-list-inline__item">
            <a aria-label="Facebook" class="c-social__link" href="/" target="_blank">
              <svg aria-hidden="true" class="c-social__icon" role="img">
                <use xlink:href="#icon-facebook" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
              </svg>
            </a>
          </li>
          <li class="c-social__item o-list-inline__item">
            <a aria-label="Instagram" class="c-social__link" href="/" target="_blank">
              <svg aria-hidden="true" class="c-social__icon" role="img">
                <use xlink:href="#icon-instagram" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
              </svg>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </footer>
  <script src="<?php echo get_template_directory_uri() . '/js/vendor.bundle.js' ?>"></script>
  <script src="<?php echo get_template_directory_uri() . '/js/main.bundle.js' ?>"></script>
</body>
</html>
