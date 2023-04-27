'use strict'

// Menu Hamburguesa Header
let open = document.querySelector('.nav__open');
let close = document.querySelector('.nav__close');
let mobile = document.querySelector('.nav__mobile');

open.addEventListener('click', () => {
    open.style.display = 'none';
    close.style.display = 'flex';
    mobile.style.display = 'block';
});

close.addEventListener('click', () => {
    open.style.display = 'flex';
    close.style.display = 'none';
    mobile.style.display = 'none';
});

// Swiper
var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    spaceBetween: 40,
    initialSlide: 2,
    coverflowEffect: {
      rotate: 40,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

var swiperData = new Swiper(".DataSwiper", {
  pagination: {
    el: ".swiper-pagination",
  },
});

var swiperMenu = new Swiper(".MenuSwiper", {
  slidesPerView: 1,
  spaceBetween: 20,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

// Menu Swiper

if(window.location.href.indexOf('index') > -1) {
  let responsive = window.innerWidth < 999 ? true : false;

  let prev = responsive ? document.querySelector('.btn-prev') : document.querySelector('.btn-prev_desktop');
  let next = responsive ? document.querySelector('.btn-next'): document.querySelector('.btn-next_desktop');
  let page1 = document.querySelector('.page1');
  let page2 = document.querySelector('.page2');

  page2.style.display = 'none';
  prev.style.background = '#F8F8F8';
  prev.style.color = '#111111';

  next.addEventListener('click', () => {
    page1.style.display = 'none';
    page2.style.display = responsive ? 'block' : 'grid';
    next.style.background = '#F8F8F8';
    next.style.color = '#111111';
    prev.style.background = '#BEAD8E';
    prev.style.color = '#FFFFFF';

  });

  prev.addEventListener('click', () => {
    page2.style.display = 'none';
    page1.style.display = responsive ? 'block' : 'grid';
    prev.style.background = '#F8F8F8';
    prev.style.color = '#111111';
    next.style.background = '#BEAD8E';
    next.style.color = '#FFFFFF';

  });
}