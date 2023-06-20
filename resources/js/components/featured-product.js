import { Autoplay, EffectFade, Navigation, Pagination } from "swiper";
import Swiper from "swiper";
Swiper.use([Autoplay, Navigation, Pagination, EffectFade]);

const swiper = new Swiper(".featured__container__wrapper", {
    slidesPerView: 5,
    loop: true,
    speed: 1500,
    // autoplay: {
    //     delay: 5000,
    // },
    // effect: "fade",
    // EffectFade: {
    //     crossFade: true,
    // },
    autoplayDisableOnInteraction: false,
    allowTouchMove: false,
    clickable: false,
    // pagination: {
    //     el: ".banner__pagination",
    //     clickable: true,
    // },
  
});
