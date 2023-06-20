const btnLogout = document.querySelectorAll(
    ".manage__container__table__logout"
);
const popupLogout = document.querySelectorAll(".manage__logout");
const overlay = document.querySelector(".manage__overlay");
const closeBtn = document.querySelectorAll(".manage-close-js");

const btnsChange = document.querySelectorAll(
    ".manage__container__table__change"
);

const popupChange = document.querySelector(".manage__change");
const closeChange = document.querySelector(".manage-close-change-js");
const idShow = document.querySelectorAll(".manage__container__table__id");
const nameShow = document.querySelectorAll(".manage__container__table__name");

const buttonAdd = document.querySelector(".manage__container__crud__button");
const formPopup = document.querySelector(".manage__container__crud__form");

btnsChange.forEach((item, index) => {
    item.addEventListener("click", () => {
        const name = document.getElementById("name");
        const id = document.getElementById("id");

        const nameChange = nameShow[index].textContent;
        const idChange = idShow[index].getAttribute("value");

        name.setAttribute("value", nameChange);
        id.setAttribute("value", idChange);
        changePopup();
    });
});

btnLogout.forEach((btn, index) => {
    btn.addEventListener("click", () => {
        overlayPopup();
        popupLogout[index].classList.add("popup");
    });
});

closeBtn.forEach((btn, index) => {
    btn.addEventListener("click", () => {
        overlayPopup();
    });
});

closeChange.addEventListener("click", () => {
    overlayPopup();
});

overlay.addEventListener("click", () => {
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
    popupLogout.forEach((item) => {
        item.classList.remove("popup");
    });
    popupChange.classList.remove("popup");
    overlay.classList.toggle("popup");
    formPopup.classList.remove("popup");
}

buttonAdd.addEventListener("click", () => {
    formPopup.classList.add("popup");
    overlay.classList.toggle("popup");
});
