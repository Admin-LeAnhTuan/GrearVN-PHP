/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**************************************!*\
  !*** ./resources/js/product/cart.js ***!
  \**************************************/
var payBtn = document.querySelector(".cart__container__button");
var popUpConfirm = document.querySelector(".cart__container__confirm");
var overlay = document.querySelector(".cart__container__overlay");
var closeBtn = document.querySelector(".cart-close-js");
payBtn.addEventListener("click", function () {
  popUpConfirm.classList.add("popup");
  overlay.classList.add("popup");
});
overlay.addEventListener("click", function () {
  overlay.classList.remove("popup");
  popUpConfirm.classList.remove("popup");
});
closeBtn.addEventListener("click", function () {
  overlay.classList.remove("popup");
  popUpConfirm.classList.remove("popup");
});
/******/ })()
;