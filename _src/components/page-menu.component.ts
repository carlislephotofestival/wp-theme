import * as $ from "jquery";

import { CONFIG } from "../config";

/**
 * PageMenuComponent
 */
const PageMenuComponent = (($) => {

  const ClassName = {
    "IS_OPEN": "is-open",
    "HAS_PAGE_MENU_OPEN": "has-page-menu-open"
  }

  const Selector = {
    "PAGE": ".c-page",
    "PAGE_MENU": ".c-page-menu",
    "PAGE_MENU_TRIGGER": ".js-page-menu-trigger",
  }

  // toggle menu
  $(document).on("click", Selector.PAGE_MENU_TRIGGER, (event) => {
    event.preventDefault();

    // toggle sidebar open and closed
    $(Selector.PAGE).toggleClass(ClassName.HAS_PAGE_MENU_OPEN);
    $(Selector.PAGE_MENU).toggleClass(ClassName.IS_OPEN);

    // toggle `Menu` and `Close` text
    $(Selector.PAGE_MENU_TRIGGER).text((i, text) => {
      return text === "Menu" ? "Close" : "Menu";
    });
  });

  // close menu at maxViewportWidth
  $(window).resize(() => {
    let $documentwidth = $(document).width();

    if (
      $(Selector.PAGE_MENU).hasClass(ClassName.IS_OPEN)
      && $documentwidth > CONFIG.viewportBreakpoint
    ) {
      $(Selector.PAGE).toggleClass(ClassName.HAS_PAGE_MENU_OPEN);
      $(Selector.PAGE_MENU).removeClass(ClassName.IS_OPEN);

      // ensure menu text is set to `menu`
      $(Selector.PAGE_MENU_TRIGGER).text("Menu");
    }
  });

})(jQuery);

export default PageMenuComponent;
