const swiper = new Swiper(".models-swiper", {
  speed: 400,
  width: 1090,
  spaceBetween: 21,
  slidesPerView: 4,
  loop: true,
  navigation: {
    nextEl: ".slider-button-next",
    prevEl: ".slider-button-prev",
  },
  // breakpoints: {
  //   // when window width is >= 320px
  //   576: {
  //     slidesPerView: 2,
  //   },
  //   // when window width is >= 480px
  //   769: {
  //     slidesPerView: 3,
  //   },
  //   // when window width is >= 992px
  //   992: {
  //     slidesPerView: 4,
  //   },
  //   // when window width is >= 1200px
  //   1000: {
  //     slidesPerView: 4,
  //   },
  //   // when window width is >= 1200px
  //   1201: {
  //     slidesPerView: 5,
  //   },
  // },
});
