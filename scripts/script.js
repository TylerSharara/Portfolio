//Select all class fade-in
const faders = document.querySelectorAll('.fade-in');

//Options for Intersection Observer
const appearOptions =  {threshold: 1,
                        rootMargin: "0px 0px -50px 0px"};

//Adding appear animation if appear options are met
const appearOnScroll  = new IntersectionObserver(function(entries, appearOnScroll) {
    entries.forEach(entry => {
        if (!entry.isIntersecting){
            return;
        }
        else {
            entry.target.classList.add('appear');
            appearOnScroll.unobserve(entry.target);
        }
    })
}, appearOptions);

//Unobserve elements that have been seen already
faders.forEach(fader => {appearOnScroll.observe(fader);});

//Grabbing Project Containers and their Content
const projects = document.querySelectorAll('.project-inner');
const overlay = document.querySelectorAll('.project-overlay');
const content = document.querySelectorAll('.project-content');

//Looping to add animations
for(let i=0; i<projects.length; i++) {
    projects[i].addEventListener('mouseenter', () => {
        overlay[i].style.animation = `overlayFadeIn 0.5s ease forwards`;
        content[i].style.animation = `projectContentSlideIn 0.5s ease forwards`;
    });
    projects[i].addEventListener('mouseleave', () => {
        overlay[i].style.animation = `overlayFadeOut 0.5s ease forwards`;
        content[i].style.animation = `projectContentSlideOut 0.5s ease forwards`;
    });
}

const name = document.querySelectorAll('#svg-name path');

for(let i=0;i<name.length;i++){
    console.log(`Letter ${i} is ${name[i].getTotalLength()}`);
}
