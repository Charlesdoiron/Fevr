
        // MAP ANIMATION
      const myMap = document.getElementById('map__container')
      function mapChangeWith(){
        myMap.classList.add('mapChangeWith')
      }
      function mapNormalWith(){
        myMap.classList.remove('mapChangeWith')
      }
      myMap.addEventListener('mouseenter', mapChangeWith)
      myMap.addEventListener('mouseleave', mapNormalWith)

      // FORM ANIMATION
      const contactBtn = document.getElementById('tab_contact')
      const jobBtn = document.getElementById('tab_job')
      const jobForm = document.getElementById('job_form')
      const contactForm = document.getElementById('contact_form')

      jobBtn.addEventListener('click', function(){
        jobForm.classList.replace('hide','show')
        contactForm.classList.replace('show','hide')
      })
        contactBtn.addEventListener('click', function(){
        contactForm.classList.replace('hide','show')
        jobForm.classList.replace('show','hide')
      })

