/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************!*\
  !*** ./resources/js/auth/user.js ***!
  \***********************************/
var btnLogout = document.querySelector(".user__container__table__logout");
var popupLogout = document.querySelector(".user__logout");
var overlay = document.querySelector(".user__overlay");
var closeBtn = document.querySelector(".user-close-js");
var btnChange = document.querySelector(".user__container__table__change");
var popupChange = document.querySelector(".user__change");
var closeChange = document.querySelector(".user-close-change-js");
btnLogout.addEventListener("click", function () {
  logoutPopup();
});
overlay.addEventListener("click", function () {
  overlayPopup();
});
closeBtn.addEventListener("click", function () {
  logoutPopup();
});
btnChange.addEventListener("click", function () {
  changePopup();
});
closeChange.addEventListener("click", function () {
  changePopup();
});

function logoutPopup() {
  popupLogout.classList.toggle("popup");
  overlay.classList.toggle("popup");
}

function changePopup() {
  popupChange.classList.toggle("popup");
  overlay.classList.toggle("popup");
}

function overlayPopup() {
  popupLogout.classList.remove("popup");
  popupChange.classList.remove("popup");
  overlay.classList.remove("popup");
}
/******/ })()
;