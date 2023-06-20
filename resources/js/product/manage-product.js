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
const titleShow = document.querySelectorAll(".manage__container__table__title");
const priceShow = document.querySelectorAll(".manage__container__table__price");
const thumbnailShow = document.querySelectorAll(
    ".manage__container__table__thumbnail"
);
const discountShow = document.querySelectorAll(
    ".manage__container__table__discount"
);
const descriptionShow = document.querySelectorAll(
    ".manage__container__table__description"
);

// console.log(titleShow,priceShow,thumbnailShow,discountShow,descriptionShow)

const buttonAdd = document.querySelector(".manage__container__crud__button");
const formPopup = document.querySelector(".manage__container__crud__form");

btnsChange.forEach((item, index) => {
    item.addEventListener("click", () => {
        const id = document.getElementById("id");
        const title = document.getElementById("title_c");
        const price = document.getElementById("price_c");
        const thumbnail = document.getElementById("thumbnail_c");
        const discount = document.getElementById("discount_c");
        const description = document.getElementById("description_c");

        const idChange = idShow[index].getAttribute("value");
        const titleChange = titleShow[index].textContent;
        const priceChange = priceShow[index].textContent.replaceAll(",", "").trim();
        const thumbnailChange = thumbnailShow[index].getAttribute("src");
        const discountChange = discountShow[index].textContent;
        const descriptionChange = descriptionShow[index].textContent;

        console.log(
            titleChange,
            priceChange,
            thumbnailChange,
            discountChange,
            descriptionChange
        );

        id.setAttribute("value", idChange);
        title.setAttribute("value", titleChange);
        price.setAttribute("value", priceChange);
        thumbnail.setAttribute("value", thumbnailChange);
        discount.setAttribute("value", discountChange);
        description.setAttribute("value", descriptionChange);
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
