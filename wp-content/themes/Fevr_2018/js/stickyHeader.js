const header = document.querySelector('.site-branding')
const headerHeight = header.offsetHeight
const menuItems = [...document.querySelectorAll('.main-navigation li a')]
const logo = document.querySelector('.fevr__logo svg')
const logoSvg = document.querySelector('.fevr__logo svg g g')
const siteMain = document.querySelector('.site-main')
const body = document.querySelector('body')
const logoBlack = "logoSvg.style.fill = '#000';"
const logoWhite = " logoSvg.style.fill = '#FFF';"

// AUTOMATIC LOGO COLOR
const makeLogoGreatAgain = function() {
    if (!body.classList.contains('page-template-template-about')) {
        if (body.offsetWidth >= 954) {
           return logoSvg.style.fill = "#FFF";
        } else if (body.offsetWidth <= 954) {
            console.log('petit et noir')
           return logoSvg.style.fill = "#000";
        }
    }
}

// STICKY HEADER
const makeHeaderFixeAgain = function () {
    if ((!header.classList.contains('active')) && (window.pageYOffset > headerHeight)) {
        header.classList.add('active')
        menuItems.map(item => item.classList.add('active'))
       return logoSvg.style.fill = "#000";
    } else if (window.pageYOffset <= headerHeight && (header.classList.contains('active')) && body.offsetWidth >= 954) {
        menuItems.map(item => item.classList.remove('active'))
        header.classList.remove('active')
        return logoSvg.style.fill = "#FFF";
    }
}

window.addEventListener('load', makeLogoGreatAgain)
window.addEventListener('resize', makeLogoGreatAgain)
window.addEventListener('scroll',makeHeaderFixeAgain )


//MENU BURGER
const burger = document.querySelector('.secondary-toggle')
const menuBkg = document.querySelector('.site-branding')

burger.addEventListener('click', function() {
    menuBkg.classList.toggle('fullHeight')
    logoSvg.style.fill = "#000";

})