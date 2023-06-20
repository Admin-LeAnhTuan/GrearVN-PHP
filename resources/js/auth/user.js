const btnLogout = document.querySelector(".user__container__table__logout");
const popupLogout = document.querySelector(".user__logout");
const overlay = document.querySelector(".user__overlay");
const closeBtn = document.querySelector(".user-close-js");

const btnChange = document.querySelector(".user__container__table__change");
const popupChange = document.querySelector(".user__change");
const closeChange = document.querySelector(".user-close-change-js");

btnLogout.addEventListener("click", () => {
    logoutPopup();
});

overlay.addEventListener("click", () => {
    overlayPopup();
});

closeBtn.addEventListener("click", () => {
    logoutPopup();
});

btnChange.addEventListener("click", () => {
    changePopup();
});


closeChange.addEventListener("click", () => {
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
