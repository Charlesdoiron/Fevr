
// STIKY HEADER

window.addEventListener('scroll', function() {
let header = document.querySelector('.site-branding')
let headerHeight = header.offsetHeight
let menuItems = [...document.querySelectorAll('.main-navigation li a')]
let menuBorder = [...document.querySelectorAll('.main-navigation .current-menu-item > a')]
let logo = document.querySelector('.custom-logo-link img')

    if (!header.classList.contains('active') && (window.pageYOffset > headerHeight)) {
        header.classList.add('active')
        menuItems.map(item => item.classList.add('active'))
        menuBorder.map(item => item.classList.add('active'))
        logo.src = "http://localhost:8888/wp-content/uploads/2017/09/logo.png"
    } else if (window.pageYOffset <= headerHeight && (header.classList.contains('active'))) {
        menuItems.map(item => item.classList.remove('active'))
        menuBorder.map(item => item.classList.remove('active'))
        header.classList.remove('active')
        logo.src = "http://localhost:8888/wp-content/uploads/2018/01/cropped-logoWhite.png"

    }
})

//MENU

const burger = document.querySelector('.secondary-toggle')
const menuBkg = document.querySelector('.site-branding')


burger.addEventListener('click', function () {
    menuBkg.classList.toggle('fullHeight')
            logo.src = "http://localhost:8888/wp-content/uploads/2017/09/logo.png"

})
    


