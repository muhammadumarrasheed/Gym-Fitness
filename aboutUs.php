<?php
include "dbconn.php";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Admin Panel</title>
</head>
<style>
* {
    box-sizing: border-box;
}

body {
    padding: 0;
    margin: 0;
    font-family: 'Poppins', sans-serif;
    font-size: 17px;
}

body:before {
    content: '';
    position: fixed;
    width: 100vw;
    height: 100vh;
    background: black;
    background-position: center center;
    background-image: url(pic.jpg);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    opacity: 0.9;
    -webkit-filter: blur(5px);
    -moz-filter: blur(1px);
}

.contact-form {
    display: inline-block;
    position: absolute;
    top: 10px;
    left: 820px;
    transform: translate(-50%, -50%);
    width: 1520px;
    height: 45px;
    padding: 80px 40px;
    background: transparent;
}

.contact-form h2 {
    position: absolute;
    font-family: 'poppins', 'san-serif';
    margin: 0;
    padding: 0 0 20px;
    top: 110px;
    font-size: 40px;
    left: 00px;
    color: #fff;
}

label {
    font-family: 'poppins', 'san-serif';
    margin: 0;
    padding: 0 0 20px;
    color: white;
    position: relative;
}

.contact-form li {
    font-family: 'poppins', 'san-serif';
    position: relative;
    font-size: large;
    top: 25px;
    left: 1100px;
    display: inline-block;
    margin: 0 15px;
}

.contact-form li a {
    text-decoration: none;
    color: #fff;
    padding: 5px 0;
    position: relative;
}

.contact-form li a::after {
    content: '';
    background: #ff3d00;
    width: 0;
    height: 2px;
    position: absolute;
    left: 0;
    transition: width 0.5s;
}

.contact-form li a:hover::after {
    width: 100%;
}


.contact-form .login {
    top: 100px;
    position: absolute;
    width: 70px;
    left: 1508px;
    height: 35px;
    font-size: 18px;
    font-weight: bold;
    padding: 10px;
    border: none;
    background: red;
    color: #fff;
    cursor: pointer;
    border-radius: 3px;
}


.contact4 {
    position: absolute;
    top: 65%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 860px;
    height: 450px;
    padding: 80px 40px;
    background: black;
    opacity: 0.7;
}

.contact4 .h1 {
    position: absolute;
    font-family: 'Poppins', sans-serif;
    font-size: 35px;
    color: white;
    font-weight: bolder;
    left: 40px;
    top: 30px;
}

.contact4 .h4 {
    position: absolute;
    font-family: 'Poppins', sans-serif;
    font-size: 18px;
    color: white;
    left: 40px;
    top: 100px;
}
</style>

<body>
    <div class="contact-form" method="$POST">
        <button class="login" name="submit"><a href="allLogin.php">Login</button>
        <li class="A"><a href="home.php">Home</a></li>
        <h2><i class="fa-solid fa-dumbbell" style="font-size:30px;color:red;"></i> Gym Fitness</h2>
        <li><a href="contactUs.php">Contact us</a></li>
        <li><a class="active" href="aboutUs.php">About us</a></li>
    </div>
    <div class="contact4">
        <form method="post">
            <label class="h1">ABOUT US</label>
            <label class="h4">Gym Fitness 24 provides a 24/7 Fitness facility to residents of Hostal City, as
                well as surrounding areas to help people reach and maintain their goals. We combine different types of
                fitness equipment to meet different fitness needs and levels.
                At Gym 24 you’ll find all the latest strength and cardio equipment along with a energetic group exercise
                program that includes POUND, Zumba, Kickboxing, Bootcamp, Muscle Building and many other cardio classes.
                You’ll find a supportive environment with all kinds of people who are working just as hard as you to
                meet their goals.
                Our Staff, Trainers & Group exercises are committed to offering our members a great fitness
                experience. Whether you’re a mom looking to get back into shape, a marathon runner trying to shave a few
                minutes off your personal best or just trying to stay healthy we would love to help you realize your
                potential and meet your goals!!</label>
    </div>
</body>

</html>