<?php

session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';
   
    $email = mysqli_real_escape_string($con, $_POST['email1']);
    $phonenumber = mysqli_real_escape_string($con, $_POST['no1']);
    


    $sql = "SELECT * FROM registration WHERE email='$email' AND phonenumber='$phonenumber'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            header('Location: index.php');
            exit;
        } else {
            $error = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Oh no Sorry</strong> Invalid email or phone number
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            echo $error;
        }
    } else {
        die(mysqli_error($con));
    }
}


?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Website</title>
    <link rel="stylesheet" href="BOOTSTRAP_5/dist/css/bootstrap.css">

    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <section class="sub-header">
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
        <h1>Login <span>- Returning Students</span></h1>
    </section>

    <!-- Registration Field -->
    <section class="container">
        <section class="login">
            <h1 class="title">Student Login</h1>
            <form action="login.php" method='post'>





                <div class="login-box">
                <input type="email" id="email1" name="email1" placeholder="Enter your email..." required>
                    
                    <img src="img/user.png" alt="eye">
                </div>
                <div class="login-box">
                <input type="tel" id="no1" name="no1" placeholder="Enter phone number..." required>
                 <img src="img/eyes.png" alt="eye" id="eyeslash">
                </div>



                
                <div class="remember">
                    <a href="#">Forgot password?</a>
                </div>
                <button type="submit" class="hero-btn btn-box">LOGIN</button>
            </form>
        </section>
    </section>

    <hr>

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