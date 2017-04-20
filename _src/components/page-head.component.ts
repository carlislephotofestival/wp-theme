import * as $ from "jquery";

/**
 * PageHeadComponent
 */
const PageHeadComponent = (($) => {

  const Default = {
    "windowMaxScroll": 96
  }

  const ClassName = {
    "PAGE_HEAD_LARGE": "c-page-head--large"
  }

  const Selector = {
    "PAGE_HEAD": ".c-page-head"
  }

  // at top of window make page-head large
  $(window).scroll(function () {
    if ($(window).scrollTop() < Default.windowMaxScroll) {
      $(Selector.PAGE_HEAD).addClass(ClassName.PAGE_HEAD_LARGE);
    } else {
      $(Selector.PAGE_HEAD).removeClass(ClassName.PAGE_HEAD_LARGE);
    }
  });

})(jQuery);

export default PageHeadComponent;
