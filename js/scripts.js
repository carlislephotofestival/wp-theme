$(".js-page-menu-trigger").click(function (event) {
  event.preventDefault();

  // toggle sidebar open and closed
  $(".c-page-menu").toggleClass("is-open");

  // toggle 'Menu' and 'Close' text
  $(this).text(function (i, text) {
    return text === "Menu" ? "Close" : "Menu";
  });
});