// const header = document.querySelector('.site-branding')
// const headerHeight = header.offsetHeight
// const menuItems = [...document.querySelectorAll('.main-navigation li a')]
// const menuBorder = [...document.querySelectorAll('.main-navigation .current-menu-item > a')]
// let logo = document.querySelector('.custom-logo-link img')

header = document.querySelector('.site-branding')
headerHeight = header.offsetHeight
let siteContent = document.querySelector('.site-content')
let title = [...document.querySelectorAll('article header .entry-title a ')]
let articles = [...document.querySelectorAll('article')]

articles.map(article =>{
	title.map(title =>{
console.log(title)})
})



function makeHeaderGreatAgain() {
    if (body.offsetWidth <= 860) {
        siteContent.style.marginTop = headerHeight + "px"
        console.log('wjou')
    } else{
    	siteContent.style.marginTop = "0px"
    }
}


window.addEventListener('resize', makeHeaderGreatAgain)
window.addEventListener('load', makeHeaderGreatAgain)