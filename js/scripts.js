$(".js-nav-menu").click(function (event) {
  event.preventDefault();

  // change page-head color to match sidebar
  $(".c-page-head").toggleClass("has-fixed-nav-menu");

  // toggle sidebar open and closed
  $(".c-sidebar").toggleClass("is-open");

  // toggle 'Menu' and 'Close' text
  $(".js-nav-menu-text").text(function (i, text) {
    return text === "Menu" ? "Close" : "Menu";
  });
});