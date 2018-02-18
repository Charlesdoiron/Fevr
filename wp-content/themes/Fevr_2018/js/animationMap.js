// MAP ANIMATION
const myMap = document.getElementById('map__container')
body = document.querySelector('body')

function mapChangeWith() {
    myMap.classList.add('mapChangeWith')
}

function mapNormalWith() {
    myMap.classList.remove('mapChangeWith')
}

myMap.addEventListener('mouseenter', mapChangeWith)
myMap.addEventListener('mouseleave', mapNormalWith)



// FORM ANIMATION
const contactBtn = document.getElementById('tab_contact')
const contactForm = document.getElementById('contact_form')
const jobBtn = document.getElementById('tab_job')
const jobForm = document.getElementById('job_form')

jobBtn.addEventListener('click', function() {
    jobForm.classList.replace('hide', 'show')
    contactForm.classList.replace('show', 'hide')
})
contactBtn.addEventListener('click', function() {
    contactForm.classList.replace('hide', 'show')
    jobForm.classList.replace('show', 'hide')
})

// ACTIVE BTN

jobBtn.addEventListener('click', function() {
    if (contactBtn.classList.contains('active')) {
        contactBtn.classList.remove('active')
        this.classList.add('active')
    }
});
contactBtn.addEventListener('click', function() {
    if (jobBtn.classList.contains('active')) {
       jobBtn.classList.remove('active')
        this.classList.add('active')
    } 
});