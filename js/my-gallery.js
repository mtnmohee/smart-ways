// swiper gallery

const swiper = new Swiper(".swiper", {
  // Optional parameters
  speed: 500,
  spaceBetween: 100,
  direction: "horizontal",
  loop: true,
  effect: "cards",
  autoplay: {
    delay: 1500,
  },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
