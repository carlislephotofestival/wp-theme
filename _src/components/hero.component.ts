import * as $ from "jquery";

import { CONFIG } from "../config";

/**
 * HeroComponent
 */
const HeroComponent = (($) => {

  const Selector = {
    "HERO": ".c-hero"
  }

  if($(window).width() < CONFIG.viewportBreakpoint) {
    $(Selector.HERO).css("height", window.innerHeight - CONFIG.pageHeadSize);
  }

  // at top of window make page-head large
  $(window).resize(() => {
    let $documentwidth = $(document).width();

    if ($documentwidth < CONFIG.viewportBreakpoint) {
      $(Selector.HERO).css("height", window.innerHeight - CONFIG.pageHeadSize);
    } else {
      $(Selector.HERO).removeAttr("style");
    }
  });

})(jQuery);

export default HeroComponent;
