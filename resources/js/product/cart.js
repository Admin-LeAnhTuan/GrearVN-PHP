const payBtn = document.querySelector(".cart__container__button")
const popUpConfirm = document.querySelector(".cart__container__confirm")
const overlay = document.querySelector(".cart__container__overlay")
const closeBtn = document.querySelector(".cart-close-js")

payBtn.addEventListener("click", () => {
    popUpConfirm.classList.add("popup")
    overlay.classList.add("popup")
})

overlay.addEventListener("click", () => {
    overlay.classList.remove("popup")
    popUpConfirm.classList.remove("popup")

})

closeBtn.addEventListener("click", () => {
    overlay.classList.remove("popup")
    popUpConfirm.classList.remove("popup")
})