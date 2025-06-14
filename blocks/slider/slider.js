document.addEventListener('DOMContentLoaded', function () {
  var slider = new Swiper(".hero-slider", {
        // slidesPerView: 1,
    effect: "fade",
    loop: true,
    lazy: true,
    speed: 600,
    autoplay: {
      delay: 3000
    },
    grabCursor: true,
    pagination: {
      el: ".swiper-pagination--home",
      clickable: true
    }
    });
  });