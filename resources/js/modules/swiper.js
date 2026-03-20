import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';
import 'swiper/css';

document.querySelectorAll('.gallery-swiper').forEach((el) => {
  new Swiper(el, {
    modules: [Navigation],
    loop: true,
    navigation: {
      prevEl: el.parentElement.querySelector('.gallery-swiper-prev'),
      nextEl: el.parentElement.querySelector('.gallery-swiper-next'),
    },
  });
});
