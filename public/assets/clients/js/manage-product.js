/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************************!*\
  !*** ./resources/js/product/manage-product.js ***!
  \************************************************/
var btnLogout = document.querySelectorAll(".manage__container__table__logout");
var popupLogout = document.querySelectorAll(".manage__logout");
var overlay = document.querySelector(".manage__overlay");
var closeBtn = document.querySelectorAll(".manage-close-js");
var btnsChange = document.querySelectorAll(".manage__container__table__change");
var popupChange = document.querySelector(".manage__change");
var closeChange = document.querySelector(".manage-close-change-js");
var idShow = document.querySelectorAll(".manage__container__table__id");
var titleShow = document.querySelectorAll(".manage__container__table__title");
var priceShow = document.querySelectorAll(".manage__container__table__price");
var thumbnailShow = document.querySelectorAll(".manage__container__table__thumbnail");
var discountShow = document.querySelectorAll(".manage__container__table__discount");
var descriptionShow = document.querySelectorAll(".manage__container__table__description"); // console.log(titleShow,priceShow,thumbnailShow,discountShow,descriptionShow)

var buttonAdd = document.querySelector(".manage__container__crud__button");
var formPopup = document.querySelector(".manage__container__crud__form");
btnsChange.forEach(function (item, index) {
  item.addEventListener("click", function () {
    var id = document.getElementById("id");
    var title = document.getElementById("title_c");
    var price = document.getElementById("price_c");
    var thumbnail = document.getElementById("thumbnail_c");
    var discount = document.getElementById("discount_c");
    var description = document.getElementById("description_c");
    var idChange = idShow[index].getAttribute("value");
    var titleChange = titleShow[index].textContent;
    var priceChange = priceShow[index].textContent.replaceAll(",", "").trim();
    var thumbnailChange = thumbnailShow[index].getAttribute("src");
    var discountChange = discountShow[index].textContent;
    var descriptionChange = descriptionShow[index].textContent;
    console.log(titleChange, priceChange, thumbnailChange, discountChange, descriptionChange);
    id.setAttribute("value", idChange);
    title.setAttribute("value", titleChange);
    price.setAttribute("value", priceChange);
    thumbnail.setAttribute("value", thumbnailChange);
    discount.setAttribute("value", discountChange);
    description.setAttribute("value", descriptionChange);
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