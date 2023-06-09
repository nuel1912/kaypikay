<?php
session_start();
if(!isset($_SESSION['email']))
{
header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <section class="header">
        <nav>
            <a href="index.html"><img src="img/KPK.png" alt=""></a>
            <img src="img/bars.png" id="bars" alt="menu">
            <div class="nav-links" id="navLinks">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="abt.php">ABOUT</a></li>
                    <li><a href="reg.php">REGISTRATION</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="login.php" class="log">LOGIN</a></li>
                </ul>
            </div>
        </nav>

        <div class="text-box">
            <h1>Welcome To Kaypikay University</h1>
            <p>"A little progress each day adds up to big results." - Satya Nani</p>
            <a href="abt.html" class="hero-btn change">Wanna know more?</a>
        </div>
    </section>

    <!-- Programmes -->
    <section class="programmes">
        <h1>Degrees We Offer</h1>
        <div class="row">
            <div class="pro-col">
                <h3>Associate Degree</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, eligendi!</p>
            </div>
            <div class="pro-col">
                <h3>Bachelor's Degree</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, consectetur!</p>
            </div>
            <div class="pro-col">
                <h3>Doctoral Degree</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, cupiditate?</p>
            </div>
            <div class="pro-col">
                <h3>Master's Degree</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, labore?</p>
            </div>
        </div>
    </section>

    <!-- Faculties -->
    <section class="faculty">
        <h1>Our Faculties</h1>
        <div class="row">
            <div class="faculty-col">
                <img src="img/law.jpg" alt="">
                <div class="layer">
                    <h3>LAW</h3>
                </div>
            </div>
            <div class="faculty-col">
                <img src="img/arts.jpg" alt="">
                <div class="layer">
                    <h3>ARTS</h3>
                </div>
            </div>
            <div class="faculty-col">
                <img src="img/cis.jpg" alt="">
                <div class="layer">
                    <h3>CIS</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="faculty-col">
                <img src="img/business.jpg" alt="">
                <div class="layer">
                    <h3>BUSINESS</h3>
                </div>
            </div>
            <div class="faculty-col">
                <img src="img/education.jpg" alt="">
                <div class="layer">
                    <h3>EDUCATION</h3>
                </div>
            </div>
            <div class="faculty-col">
                <img src="img/engine.jpg" alt="">
                <div class="layer">
                    <h3>ENGINEERING<br>&<br>TECHNOLOGY</h3>
                </div>
            </div>
        </div>
    </section>

    <hr>

    <!-- Footer -->
    <section class="footer">
        <h4>About Us</h4>
        <p>Progress without practice is dead...</p>
        <div class="social">
            <img src="img/facebook.png" alt="">
            <img src="img/twitter.png" alt="">
            <img src="img/instagram.png" alt="">
            <img src="img/linkedin.png" alt="">
        </div>
        <p>&copy Group 14 CSC 319 Project</p>
    </section>

    <!-- JavaScript for Toggle Menu -->
    <script src="main.js"></script>
</body>
</html>