import * as $ from "jquery";

import { CONFIG } from "../config";

/**
 * PageHeadComponent
 */
const PageHeadComponent = (($) => {

  const ClassName = {
    "PAGE_HEAD_LARGE": "c-page-head--large"
  }

  const Selector = {
    "PAGE_HEAD": ".c-page-head"
  }

  // at top of window make page-head large
  $(window).scroll(() => {
    if ($(window).scrollTop() < CONFIG.pageHeadSize) {
      $(Selector.PAGE_HEAD).addClass(ClassName.PAGE_HEAD_LARGE);
    } else {
      $(Selector.PAGE_HEAD).removeClass(ClassName.PAGE_HEAD_LARGE);
    }
  });

})(jQuery);

export default PageHeadComponent;
