(function ($) {
  "use strict";

  // NAVBAR
  $(".navbar-nav .nav-link").click(function () {
    $(".navbar-collapse").collapse("hide");
  });

  $(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
      $(".navbar").addClass("sticky-nav");
    } else {
      $(".navbar").removeClass("sticky-nav");
    }
  });

  // BACKSTRETCH SLIDESHOW
  $("#section_1").backstretch(
    [
      "images/slide/11.jpg",
      "images/slide/12.jpg",
      "images/slide/13.png",
      "images/slide/14.jpg",
    ],
    { duration: 2700, fade: 750 }
  );
})(window.jQuery);
