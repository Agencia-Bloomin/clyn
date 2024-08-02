async function runSwiperConfigs() {
  const swiperDomLoaded = await document.addEventListener('DOMContentLoaded', () => {
    //====================================== Thumb Carousel ==============================================
    var swiper = new Swiper(".thumbSwiper", {
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".thumbSwiper2", {
      spaceBetween: 10,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      thumbs: {
        swiper: swiper,
      },
    });

  })
} runSwiperConfigs()