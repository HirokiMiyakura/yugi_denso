const swiper = new Swiper('.swiper', {
  loop: true,
  speed: 1000,

  autoplay: {
    delay: 5000,
  },

  pagination: {
    el: '.swiper-pagination',
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});

$(document).ready(function () {
  $('#header-btn').on('click', function () {
    $('body').toggleClass('is-openMenu');
  });
});
