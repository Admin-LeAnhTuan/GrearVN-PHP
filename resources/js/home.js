const { countBy } = require("lodash");
const { list } = require("postcss")
import "./components/banner.js";


const submenu = document.querySelector(".header__function__categories__menu")
const listToShow = document.querySelector('.header__function__categories')

listToShow.addEventListener("mouseover" , () => {
    submenu.classList.add('show')
})


listToShow.addEventListener("mouseout", () => {
    submenu.classList.remove('show')

})