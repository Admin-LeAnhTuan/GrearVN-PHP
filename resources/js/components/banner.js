import { Autoplay, EffectFade, Navigation, Pagination } from "swiper";
import Swiper from "swiper";
Swiper.use([Autoplay, Navigation, Pagination, EffectFade]);

const swiper = new Swiper(".swiper", {
    slidesPerView: 1,
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
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        clickable: true,
    },
});
