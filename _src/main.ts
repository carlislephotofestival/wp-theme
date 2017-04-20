import * as $ from "jquery";

$(".js-page-menu-trigger").click(function (event) {
  event.preventDefault();

  var $this = $(this);
  var $menu = $(".c-page-menu");

  // toggle sidebar open and closed
  $menu.toggleClass("is-open");

  // toggle 'Menu' and 'Close' text
  $this.text(function (i, text) {
    return text === "Menu" ? "Close" : "Menu";
  });
});

$(window).scroll(function () {
  var $this = $(this);
  var $head = $('.c-page-head');

  if ($(window).scrollTop() < 96) {
    $head.addClass('c-page-head--large');
  } else {
    $head.removeClass('c-page-head--large');
  }
});
