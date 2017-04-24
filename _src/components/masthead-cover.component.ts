import * as $ from "jquery";

import { CONFIG } from "../config";

/**
 * MastheadCoverComponent
 */
const MastheadCoverComponent = (($) => {

  const Selector = {
    "MEDIA_PARENT": ".js-masthead-cover"
  }

  if($(window).width() < CONFIG.viewportBreakpoint) {
    $(Selector.MEDIA_PARENT).css("height", window.innerHeight - CONFIG.pageHeadSize);
  }
  
  $(window).resize(() => {
    let $documentwidth = $(document).width();

    if ($documentwidth < CONFIG.viewportBreakpoint) {
      $(Selector.MEDIA_PARENT).css("height", window.innerHeight - CONFIG.pageHeadSize);
    } else {
      $(Selector.MEDIA_PARENT).removeAttr("style");
    }
  });

})(jQuery);

export default MastheadCoverComponent;
