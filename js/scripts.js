$(".js-nav-menu").click(function (event) {
  event.preventDefault();
  $(".c-navbar").toggleClass("has-fixed-nav-menu");
  $(".c-sidebar").toggleClass("is-open");
});

$(".js-nav-menu__close").click(function (event) {
  event.preventDefault();
  $(".c-navbar").toggleClass("has-fixed-nav-menu");
  $(".c-sidebar").toggleClass("is-open");
});