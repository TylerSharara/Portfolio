<?php
//comment
//
//
?>

<!DOCTYPE html>

<html lang="en">

    <head>
        <!--
        Tyler Sharara

        Final Project CIS-126-01
        -->
        <title>Tyler Sharara | Portfolio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta name="Final Project CIS-126-01" content="Home page for a mock business">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Krub&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="styles/basic.css">
    </head>

    <body>

        <!-- container for video background -->
        <div id="video-container">

            <header>
                <div id="header-div">
                    <nav class="stroke">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#project-start">Projects</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </header>

            <div class="video-wrapper">
                <video autoplay loop muted>
                    <source src="media/Coding-Background-Video.mp4" type="video/mp4">
                    Your browser doesn't like this video file.
                </video>
                <h2 class="arrow">&#10094</h2>
            </div>
            <div class="video-overlay"></div>
            <div class="overlay-content">
                <div class="name-container">
                    <div class="name-div">
                        <span class="name-span alternateLetter">T</span>
                        <span class="name-span mainLetter">T</span>
                        <span class="letter name-span">y</span>
                        <span class="letter name-span">l</span>
                        <span class="letter name-span">e</span>
                        <span class="letter name-span">r</span>
                        <span class="space name-span"> </span>
                    </div>
                    <div class="name-div">
                        <span class="name-span alternateLetter alternateLetterS">S</span>
                        <span class="name-span mainLetter">S</span>
                        <span class="letter name-span">h</span>
                        <span class="letter name-span">a</span>
                        <span class="letter name-span">r</span>
                        <span class="letter name-span">a</span>
                        <span class="letter name-span">r</span>
                        <span class="letter name-span">a</span>
                    </div>
                </div>
                <p>Designer & Full Stack Developer.</p>
                <a href="media/TylerSharara-Resume.pdf" download class="button button1"><span>Resume </span></a>
            </div>
        </div>

        <!-- About section -->
        <div class="about-container">
            <div class="about-content">
                <h1>Hi, I'm Tyler. Nice to meet you.</h1>
                <img src="media/Tyler-Avatar.webp" id="avatar-mobil" alt="Tyler Sharara Avatar">
                <p>I am a full stack web developer located in Dearborn, Michigan with a passion for creating interactive & responsive websites.
                    My goal is to continue sharpening my skills one day at a time, and hopefully make a positive impact while doing it.</p>
                <div class="about-btn-container">
                    <a type="button" href="https://www.linkedin.com/in/tyler-sharara-40485268/" class="project-btn">LinkedIn</a>
                    <a type="button" href="https://github.com/TylerSharara" class="project-btn">Github</a>
                    <!--
                    <div class="vertical-divider"></div>
                    <a type="button" href="media/TylerSharara-Resume.pdf" download class="project-btn">Resume</a>
                    -->
                </div>
            </div>
            <img src="media/Tyler-Avatar.webp" id="avatar-desk" alt="Tyler Sharara Avatar">
        </div>
        <br><br><br><br><br>

        <!-- Projects start here -->
        <div class="project-header">
            <div class="horizontal-divider fade-in"></div>
            <h1 id="project-start" class="project-start fade-in">Projects</h1>
            <div class="horizontal-divider fade-in"></div>
        </div>
        <br><br>
        <div class="project-outer fade-in">
            <h1 class="num-left">01</h1>
            <div class="project-inner fade-in">
                <div class="project-div project-one">
                    <h1 class="project-name" id="project-name-one">Every Detail Cleaning</h1>
                    <div class="project-content-right project-content-one">
                        <p>Every Detail Cleaning is a mock cleaning service business. This is a simple one page website written in HTML, CSS, JavaScript and PHP.</p>
                        <div class="btn-container">
                            <a type="button" href="https://deargodpleasework.herokuapp.com/" class="project-btn">See It Live!</a>
                            <a type="button" href="https://github.com/TylerSharara/EveryDetail" class="project-btn">See The Code!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        <div class="project-outer fade-in">
            <h1 class="num-right">02</h1>
            <div class="project-inner fade-in">
                <div class="project-div project-two">
                    <h1 class="project-name" id="project-name-two">PoopNinja Waste Removal</h1>
                    <div class="project-content-left project-content-two">
                        <p> PoopNinja is a local pet waste management service. This website was built with create-react-app and a NodeJS backend.</p>
                        <div class="btn-container">
                            <a type="button" href="https://deargodpleasework.herokuapp.com/" class="project-btn">See It Live!</a>
                            <a type="button" href="https://github.com/TylerSharara/poopninja-final" class="project-btn">See The Code!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        <div class="project-outer fade-in">
            <h1 class="num-left">03</h1>
            <div class="project-inner fade-in">
                <div class="project-div project-three">
                    <h1 class="project-name" id="project-name-three">Slightly Toxic</h1>
                    <div class="project-content-right project-content-three">
                        <p> SlightlyToxic is a portfolio for a local makeup artist. This is a WordPress website built with Elementor and Astra</p>
                        <div class="btn-container">
                            <a type="button" href="http://slightlytoxic.com/" class="project-btn">See It Live!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--
        <div class="project-header">
            <div class="horizontal-divider fade-in"></div>
            <h1 id="project-start" class="project-start fade-in">Skills</h1>
            <div class="horizontal-divider fade-in"></div>
        </div>
        <br><br>
        <div id="skill-container">
            <div class="skills">

            </div>
            <div class="skills" id="skill2">

            </div>
            <div class="skills" id="skill3">

            </div>
        </div>
        -->
        <div class="call-to-action-container" id="contact">
                <div class="gradient-border">
                    <h1 id="project-start" class="project-start">Need a Website or Looking to Hire?</h1>
                    <br>
                    <div class="horizontal-divider-full"></div>
                    <br><br>
                    <a href="mailto:tylersharara@gmail.com" target="_blank" class="button button1"><span>Get in Touch </span></a>
                </div>
            <ul class="social-icons">
                <li><a href="https://github.com/TylerSharara"><i class="fa fa-github"></i></a></li>
                <li><a href="https://www.linkedin.com/in/tyler-sharara-40485268/"><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </div>
        <footer>
            <p>Copyright Tyler Sharara 2020</p>
        </footer>
    </body>
    <script src="scripts/script.js"></script>
</html>