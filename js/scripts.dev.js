$(window).on("load",function() {
  $(window).scroll(function() {
    var windowBottom = $(this).scrollTop() + $(this).innerHeight();
    $(".c-band").each(function() {
      /* Check the location of each desired element */
      var objectBottom = $(this).offset().top + $(this).outerHeight();
      
      /* If the element is completely within bounds of the window, fade it in */
      if (objectBottom < windowBottom) { //object comes into view (scrolling down)
        if ($(this).css("opacity")==0) {$(this).fadeTo(250,1);}
      } else { //object goes out of view (scrolling up)
        if ($(this).css("opacity")==1) {$(this).fadeTo(250,0);}
      }
    });
  }).scroll(); //invoke scroll-handler on page-load
});

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