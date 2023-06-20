/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************!*\
  !*** ./resources/js/auth/manage.js ***!
  \*************************************/
var btnLogout = document.querySelectorAll(".manage__container__table__logout");
var popupLogout = document.querySelectorAll(".manage__logout");
var overlay = document.querySelector(".manage__overlay");
var closeBtn = document.querySelectorAll(".manage-close-js");
var btnsChange = document.querySelectorAll(".manage__container__table__change");
btnLogout.forEach(function (btn, index) {
  btn.addEventListener("click", function () {
    overlayPopup();
    popupLogout[index].classList.add("popup");
  });
});
var popupChange = document.querySelector(".manage__change");
var closeChange = document.querySelector(".manage-close-change-js");
var nameShow = document.querySelectorAll(".manage__container__table__name");
var emailShow = document.querySelectorAll(".manage__container__table__email");
var addressShow = document.querySelectorAll(".manage__container__table__address");
var numberphoneShow = document.querySelectorAll(".manage__container__table__numberphone");
var idShow = document.querySelectorAll(".manage__container__table__id");
btnsChange.forEach(function (item, index) {
  item.addEventListener("click", function () {
    var name = document.getElementById("name");
    var email = document.getElementById("email");
    var id = document.getElementById("id");
    var numberphone = document.getElementById("numberphone");
    var address = document.getElementById("address");
    var nameChange = nameShow[index].textContent;
    var emailChange = emailShow[index].textContent;
    var numberphoneChange = numberphoneShow[index].textContent;
    var addressChange = addressShow[index].textContent;
    var idChange = idShow[index].getAttribute("value");
    numberphone.setAttribute("value", numberphoneChange);
    name.setAttribute("value", nameChange);
    email.setAttribute("value", emailChange);
    id.setAttribute("value", idChange);
    address.setAttribute("value", addressChange);
    changePopup();
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

function overlayPopup() {
  popupLogout.forEach(function (item) {
    item.classList.remove("popup");
  });
  popupChange.classList.remove("popup");
  overlay.classList.toggle("popup");
}
/******/ })()
;