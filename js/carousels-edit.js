//https://swiperjs.com/demos --> utilizar a opção "Core"

async function runSwiperConfigs() {
  const swiperDomLoaded = await document.addEventListener('DOMContentLoaded', () => {
  
    //====================================== Banner Carousel ==============================================
    var swiper = new Swiper(".bannerSwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });

    //====================================== Brand Carousel ==============================================
    var swiper = new Swiper(".brandSwiper", {
      slidesPerView: 2,
      spaceBetween: 10,
      speed: 700,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      loop: true,
      breakpoints: {
        768: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
        992: {
          slidesPerView: 4,
          spaceBetween: 40,
        },
        1200: {
          slidesPerView: 5,
          spaceBetween: 50,
        },
      },
    });
    //============================================ Product Carousel ===========================================
    var swiper = new Swiper(".productSwiper", {
      slidesPerView: 1,
      spaceBetween: 10,
      centeredSlides: false,
      speed: 900,
      
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      loop: true,
      breakpoints: {
        768: {
          slidesPerView: 2,
        },
        992: {
          slidesPerView: 2,
        },
        1200: {
          slidesPerView: 2,
        },
      },
    });

    
    var swiper = new Swiper(".serviceSwiper1", {
      slidesPerView: 1,
      spaceBetween: 10,
      centeredSlides: false,
      speed: 900,
      
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      loop: true,
      breakpoints: {
        768: {
          slidesPerView: 2,
        },
        992: {
          slidesPerView: 3,
        },
        1200: {
          slidesPerView: 4,
        },
      },
    });


     //============================================ Product Carousel Intern ===========================================
     var swiper = new Swiper(".prodintSwiper", {
      pagination: {
        el: ".swiper-pagination",
        type: "fraction",
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
     });
    
  })

} runSwiperConfigs()



    // ============================= banner 02 ======================

    var bannerThumbs = new Swiper(".banner-thumb", {
      slidesPerView: 4,
      spaceBetween: 20,
      centeredSlides: false,
      loop: false,
      slideToClickedSlide: true,
      loopedSlides: 10,
      speed: 2000,

      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },

    });
  
    var bannerMain = new Swiper(".banner-main", {
      slidesPerView: 1,
      centeredSlides: false,
      loop: true,
      loopedSlides: 4,
      speed: 2200,
      direction: "horizontal",
   
  
      autoplay: {
        delay: 5000,
      },
  
      effect: "coverflow",
      coverflowEffect: {
        rotate: 20,
      },
  
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },


  // ========= comnetar esse trecho  se remover as thumbs =====
      // thumbs: { //added
      //   swiper: bannerThumbs, //added
      //   autoScrollOffset: 1,
      // },
  
    });

    // ===============================================================