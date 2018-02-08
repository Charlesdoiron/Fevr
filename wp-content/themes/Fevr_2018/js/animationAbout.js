const slider = document.querySelector('.slider');
const mask = document.querySelector('.about__slider-mask')
const widthSlider = slider.offsetWidth
const heightSlider = slider.offsetHeight

mask.style.width = widthSlider + 'px'
mask.style.height = heightSlider + 'px'

function maskAnimation() {
	mask.style.width = "0px";
}
mask.addEventListener('mouseover', maskAnimation)



let logo = document.querySelector('.custom-logo-link img')

// HEADER COLOR SELON LES PAGES
const body = document.querySelector('body')

if (body.classList.contains('page-template-template-about')) {
    logo.src = "http://localhost:8888/wp-content/uploads/2017/09/logo.png"
}