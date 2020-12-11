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
        <title> TSharara Portfolio </title>
        <meta charset="UTF-8">
        <meta name="Final Project CIS-126-01" content="Home page for a mock business">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="styles/basic.css">
    </head>

    <body>

        <header>
            <div id="header-div">
                <nav class="stroke">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php">About Me</a></li>
                        <li><a href="index.php">Projects</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <div id="video-container"> <!-- container for video background -->
            <div class="video-wrapper">
                <video autoplay loop muted>
                    <source src="media/Hello-World.mp4" type="video/mp4">
                    Your browser doesn't like this video file.
                </video>
            </div>
            <div class="video-overlay"></div>
            <div class="arrow-container">
                <h2 class="arrow">&#10094</h2>
            </div>
            <div class="overlay-content">
                <h1 class="name">Tyler Sharara</h1>
                <p>Front-End Web Developer</p>
                <button class="button button1">Get in touch</button>
            </div>
        </div>

        <div class="project-outer fade-in">
            <h1 class="num-left">01</h1>
            <div class="project-inner fade-in">
                <div class="project-overlay"></div>
                <div class="project-div project-one">
                    <h1 class="project-name">Every Detail Cleaning</h1>
                    <div class="project-content">
                        <p>Lorem Ipsum Janna Maokai Kai'sa Rammus Renekton Rek'sai Hecarim Caitlyn Kindred Jarvan Rakan</p>
                        <div class="btn-container">
                            <input type="button" value="See It Live!" class="project-btn" onclick="">
                            <input type="button" value="See The Code!" class="project-btn" onclick="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        <div class="project-outer fade-in">
            <h1 class="num-right">02</h1>
            <div class="project-inner fade-in">
                <div class="project-overlay"></div>
                <div class="project-div project-two">
                    <h1 class="project-name"></h1>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br>
    </body>
    <script src="scripts/script.js"></script>
</html>