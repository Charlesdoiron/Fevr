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

console.log('plouf')