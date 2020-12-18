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
const projectOne = document.querySelectorAll('.project-one');
const projectTwo = document.querySelectorAll('.project-two');
const projectThree = document.querySelectorAll('.project-three');
const projectContentOne = document.querySelectorAll('.project-content-one');
const projectContentTwo = document.querySelectorAll('.project-content-two');
const projectContentThree = document.querySelectorAll('.project-content-three');

//Looping to add animations for project one
for(let i=0; i<projectOne.length; i++) {
    projectOne[i].addEventListener('mouseenter', () => {
        projectContentOne[i].style.animation = `projectContentSlideIn 0.5s ease forwards`;
    });
    projectOne[i].addEventListener('mouseleave', () => {
        projectContentOne[i].style.animation = `projectContentSlideOut 0.5s ease forwards`;
    });
}

//Looping to add animations for project two
for(let i=0; i<projectTwo.length; i++) {
    projectTwo[i].addEventListener('mouseenter', () => {
        projectContentTwo[i].style.animation = `projectContentSlideIn2 0.5s ease forwards`;
    });
    projectTwo[i].addEventListener('mouseleave', () => {
        projectContentTwo[i].style.animation = `projectContentSlideOut2 0.5s ease forwards`;
    });
}

//Looping to add animations for project three
for(let i=0; i<projectThree.length; i++) {
    projectThree[i].addEventListener('mouseenter', () => {
        projectContentThree[i].style.animation = `projectContentSlideIn 0.5s ease forwards`;
    });
    projectThree[i].addEventListener('mouseleave', () => {
        projectContentThree[i].style.animation = `projectContentSlideOut 0.5s ease forwards`;
    });
}

//Grabbing letters in name
const alternateLetter = document.querySelectorAll('.alternateLetter');
const mainLetter = document.querySelectorAll('.mainLetter');

//looping to add animation to main letter
for(let i=0; i<alternateLetter.length; i++) {
    alternateLetter[i].addEventListener('mouseenter', () => {
        alternateLetter[i].style.animation = `alternateLetterAnimationIn 0.5s forwards`;
        mainLetter[i].style.animation = `mainLetterAnimationIn 0.5s forwards`;
    });
    alternateLetter[i].addEventListener('mouseleave', () => {
        alternateLetter[i].style.animation = `alternateLetterAnimationOut 0.5s`;
        mainLetter[i].style.animation = `mainLetterAnimationOut 0.5s`;
    });
}
