// const { countBy, over } = require("lodash");

// const submenu = document.querySelector(".header__function__categories__menu");
// const listToShow = document.querySelector(".header__function__categories");
// const listMenu = document.querySelector(
//     ".header__mobile__container__categories__category__content__menu__item__subcontent"
// );
// const clickToShowMenu = document.querySelectorAll(
//     ".header__mobile__container__categories__category__content"
// );

// const titleShowSubcontent = document.querySelectorAll(
//     ".header__mobile__container__categories__category__content__menu__item__subcontent__title"
// );

// const menuSubcontent = document.querySelectorAll(
//     ".header__mobile__container__categories__category__content__menu__item__subcontent__list"
// );

// const menuIcon = document.querySelector(".header__container__logo__menu");

// const overlay = document.querySelector(".header__mobile__overlay");
// const mobileMenu = document.querySelector(".header__mobile");

// menuIcon.addEventListener("click", (e) => {
//     e.stopPropagation();
//     overlay.classList.add("show");
//     mobileMenu.classList.add("show");
// });

// overlay.addEventListener("click", () => {
//     overlay.classList.remove("show");
//     mobileMenu.classList.remove("show");
// });
// titleShowSubcontent.forEach((item, index) => {
//     item.addEventListener("click", (e) => {
//         e.stopPropagation();
//         const parent =
//             item.parentElement.parentElement.parentElement.parentElement;
//         menuSubcontent[index].classList.toggle("show");
//         updateHeight(parent);
//     });
// });
// listToShow.addEventListener("mouseover", (e) => {
//     e.stopPropagation();
//     submenu.classList.add("show");
// });

// listToShow.addEventListener("mouseout", (e) => {
//     e.stopPropagation();

//     submenu.classList.remove("show");
// });

// clickToShowMenu.forEach((item, index) => {
//     let title = item.querySelector(
//         ".header__mobile__container__categories__category__content__container"
//     );
//     item.style.height = title.clientHeight + "px";
//     item.addEventListener("click", (e) => {
//         e.stopPropagation();

//         item.classList.toggle("show");
//         updateHeight(item);
//     });
// });

// function updateHeight(item) {
//     let title = item.querySelector(
//         ".header__mobile__container__categories__category__content__container"
//     );

//     if (item.classList.contains("show")) {
//         let menu = item.querySelector(
//             ".header__mobile__container__categories__category__content__menu"
//         );
//         let height = menu.clientHeight + title.clientHeight;

//         item.style.height = height + "px";
//     } else {
//         item.style.height = title.clientHeight + "px";
//     }
// }

// setTimeout(() => {
//     let menu = document.querySelectorAll(
//         ".header__mobile__container__categories__category__content__menu"
//     );
//     let content = document.querySelectorAll(
//         ".header__mobile__container__categories__category__content__menu__item__subcontent__title"
//     );
//     menu.forEach((item) => {
//         if (item.clientHeight === 0) item.style.display = "none";
//     });

//     content.forEach((item) => {
//         if (item.clientHeight === 0) item.style.display = "none";
//     });
// }, 100);
