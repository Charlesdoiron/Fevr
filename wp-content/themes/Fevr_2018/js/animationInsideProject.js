const postContainer = document.querySelector('.post__container');
const arrowPrev = document.querySelector('.post__nav-prev');
const arrowNext = document.querySelector('.post__nav-next');

const postContainerHeight = postContainer.offsetHeight
arrowPrev.style.lineHeight = postContainerHeight + 'px'
arrowNext.style.lineHeight = postContainerHeight + 'px'

function resize() {
arrowPrev.style.lineHeight = postContainerHeight + 'px'
arrowNext.style.lineHeight = postContainerHeight + 'px'
}

window.addEventListener('resize', resize)

