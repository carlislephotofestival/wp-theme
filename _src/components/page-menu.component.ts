import * as $ from "jquery";

/**
 * PageMenuComponent
 */
const PageMenuComponent = (($) => {

  const Default = {
    "menuMaxWidth": 1024
  }

  const ClassName = {
    "IS_OPEN": "is-open"
  }

  const Selector = {
    "PAGE_MENU": ".c-page-menu",
    "PAGE_MENU_TRIGGER": ".js-page-menu-trigger",
  }

  // toggle menu
  $(document).on("click", Selector.PAGE_MENU_TRIGGER, (event) => {
    event.preventDefault();

    // toggle sidebar open and closed
    $(Selector.PAGE_MENU).toggleClass(ClassName.IS_OPEN);

    // toggle 'Menu' and 'Close' text
    $(Selector.PAGE_MENU_TRIGGER).text((i, text) => {
      return text === "Menu" ? "Close" : "Menu";
    });
  });

  // close menu at menuMaxWidth
  $(window).resize(() => {
    let $documentwidth = $(document).width();

    if (
      $(Selector.PAGE_MENU).hasClass(ClassName.IS_OPEN)
      && $documentwidth > Default.menuMaxWidth
    ) {
      $(Selector.PAGE_MENU).removeClass(ClassName.IS_OPEN);
    }
  });

})(jQuery);

export default PageMenuComponent;
