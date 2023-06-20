/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************************!*\
  !*** ./resources/js/product/manage-category.js ***!
  \*************************************************/
var btnLogout = document.querySelectorAll(".manage__container__table__logout");
var popupLogout = document.querySelectorAll(".manage__logout");
var overlay = document.querySelector(".manage__overlay");
var closeBtn = document.querySelectorAll(".manage-close-js");
var btnsChange = document.querySelectorAll(".manage__container__table__change");
var popupChange = document.querySelector(".manage__change");
var closeChange = document.querySelector(".manage-close-change-js");
var idShow = document.querySelectorAll(".manage__container__table__id");
var nameShow = document.querySelectorAll(".manage__container__table__name");
var buttonAdd = document.querySelector(".manage__container__crud__button");
var formPopup = document.querySelector(".manage__container__crud__form");
btnsChange.forEach(function (item, index) {
  item.addEventListener("click", function () {
    var name = document.getElementById("name");
    var id = document.getElementById("id");
    var nameChange = nameShow[index].textContent;
    var idChange = idShow[index].getAttribute("value");
    name.setAttribute("value", nameChange);
    id.setAttribute("value", idChange);
    changePopup();
  });
});
btnLogout.forEach(function (btn, index) {
  btn.addEventListener("click", function () {
    overlayPopup();
    popupLogout[index].classList.add("popup");
  });
});
closeBtn.forEach(function (btn, index) {
  btn.addEventListener("click", function () {
    overlayPopup();
  });
});
closeChange.addEventListener("click", function () {
  overlayPopup();
});
overlay.addEventListener("click", function () {
  overlayPopup();
});

function changePopup() {
  popupChange.classList.toggle("popup");
  overlay.classList.toggle("popup");
}

function addPopup() {
  formPopup.classList.toggle("popup");
  overlay.classList.toggle("popup");
}

function overlayPopup() {
  popupLogout.forEach(function (item) {
    item.classList.remove("popup");
  });
  popupChange.classList.remove("popup");
  overlay.classList.toggle("popup");
  formPopup.classList.remove("popup");
}

buttonAdd.addEventListener("click", function () {
  formPopup.classList.add("popup");
  overlay.classList.toggle("popup");
});
/******/ })()
;