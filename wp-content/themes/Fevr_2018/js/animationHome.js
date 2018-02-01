const header = document.querySelector('.site-branding')
const headerHeight = header.offsetHeight
const menuItems = [...document.querySelectorAll('.main-navigation li a')]
const menuBorder = [...document.querySelectorAll('.main-navigation .current-menu-item > a')]
const logo = document.querySelector('.custom-logo-link img')




// HEADER COLOR SELON LES PAGES
const body = document.querySelector('body')

if (body.classList.contains('page-template-template-about')) {
    logo.src = "http://localhost:8888/wp-content/uploads/2017/09/logo.png"
}

// // MASK POST ANIMATION
// const maskProject = document.querySelector('.mask__project')
// const projects = [...document.querySelectorAll('.post-thumbnail')]

// projects.map(project => {
//     project.addEventListener('click', function() {
//         // e.stopImmediatePropagation()
//         const bodyHeight = body.offsetHeight;
//         maskProject.style.height = bodyHeight + "px";
//         // maskProject.style.transform = "translateX(0)";
//         maskProject.style.animation = "maskProject 1s";

//     })
// })