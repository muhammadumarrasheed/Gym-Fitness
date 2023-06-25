<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Gym Fitness</title>
    <style>
    body {
        margin: 0;
        padding: 0;
        font-family: Poppins, sans-serif;
    }

    /* Container */

    .container {
        max-width: 100%;
        padding: 20px;
        background-color: #0842a9;
        background-image: url("./public/untitled1-1@2x.png"), url("./public/rectangle-9.svg");
        background-repeat: no-repeat;
        background-position: right top;
        background-size: contain, contain;
        box-sizing: border-box;
        margin: 0;
        height: 100vh;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 0;
    }

    .logo {
        font-weight: 600;
        font-size: 24px;
        position: relative;
        top: -25px;
    }

    .navigation {
        display: flex;
        gap: 25px;
        position: relative;
        top: -30px;
    }

    .navigation a {
        text-decoration: none;
        color: #ffffff;
        font-weight: 500;
        font-size: 16px;
        border: 2px solid transparent;
        padding: 3px 5px;
        border-radius: 10px;
        transition: border-color 0.3s;
    }

    .navigation a:hover {
        font-weight: 500;
        font-size: 16px;
        background-color: #023998;
        border-color: #023998;
    }

    .main-section {
        display: flex;
        align-items: flex-start;
        padding: 0;
        padding-left: 140px;
        padding-top: 20px;
    }

    .main-section .content {
        margin-right: 20px;
        position: relative;
        top: -15px;
    }

    .main-section .content h1,
    .main-section .content p {
        color: #fff;
        text-align: left;
    }

    .subscribe-button {
        padding: 10px 40px;
        font-size: 16px;
        background: linear-gradient(100.18deg, #fea007, #fc4419);
        color: #fff;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        width: 230px;
        text-decoration: none;
    }

    .about,
    .services,
    .ourteam {
        margin-top: 100px;
    }

    .newContent {
        text-align: center;
    }

    .inline-div {
        display: inline-block;
        width: 250px;
        margin: 20px;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 5px;
        text-align: center;
        border: 2px solid #0842a9;
    }

    .icon {
        font-size: 24px;
        margin-bottom: 10px;
        background-color: #0842a9;
        width: 40px;
        border-radius: 5px;
        color: white;
    }

    .main-section .content h1 {
        font-size: 40px;
        color: white;
    }

    .head {
        font-size: 18px;
        margin-bottom: 10px;
    }

    .description {
        font-size: 14px;
    }

    .inline-div p {
        text-align: justify;
    }

    .inline-div:hover {
        background-color: #0842a9;
        color: white;
    }

    .inline-div:hover .icon {
        color: #0842a9;
        background-color: white;
    }

    .mycontainer {
        display: flex;
        align-items: flex-start;
        flex-wrap: wrap;
        margin-top: 100px;
    }

    .div1 {
        flex: 1;
        background-color: #ffffff;
        padding: 0 0 0 50px;
        margin-left: 120px;
    }

    .div2 {
        flex: 1;
        background-color: #ffffff;
        padding: 0 0 0 50px;
    }

    .div1-heading {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .div1-description {
        margin-bottom: 10px;
    }

    .div1-bullets {
        margin-left: 20px;
        list-style-type: disc;
    }

    .div2-image {
        max-width: 100%;
        max-height: 400px;
    }

    .image-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
    }

    .image-div {
        flex: 1;
        margin: 10px;
        text-align: center;
        padding: 30px;
    }

    .custom-image {
        height: 70%;
        max-width: 100%;
        object-fit: cover;
        border-radius: 5px;
    }

    .image-caption {
        background-color: #93b7f5;
        color: #FFFFFF;
        font-weight: bold;
        padding: 5px 10px;
        border-radius: 5px;
    }

    .myinlinedivs {
        display: inline-block;
        margin-left: 150px;
        margin-top: 20px;
    }

    .myinlinedivs .inline-div-1,
    .myinlinedivs .inline-div-2,
    .myinlinedivs .inline-div-3 {
        display: inline-block;
        margin-right: 50px;
    }

    .myinlinedivs .inline-div-1 h2,
    .myinlinedivs .inline-div-1 p,
    .myinlinedivs .inline-div-2 h2,
    .myinlinedivs .inline-div-2 p,
    .myinlinedivs .inline-div-3 h2,
    .myinlinedivs .inline-div-3 p {
        margin: 0;
        color: white;
    }

    .topnav {
        overflow: hidden;
        position: relative;
        top: -25px;
    }

    .topnav a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 5px 10px;
        text-decoration: none;
        font-size: 17px;
        margin: 5px;
    }



    .active {
        background-color: #0C80E7;
        border-radius: 5px;
    }

    .topnav .icon {
        display: none;
    }

    .topnav a:hover {
        background-color: rgba(255, 255, 255, 0.2);
        border-radius: 5px;
        transform: scale(1.1);
        font-weight: 400;
    }




    .submit {
        font-family: 'Poppins', sans-serif;
        cursor: pointer;
        font-size: 18px;
        font-weight: bold;
        padding: 10px 15px;
        border: none;
        background: linear-gradient(to right, #365299, #0842A9);
        color: #f5ecec;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .submit:hover {
        background: linear-gradient(to right, #0842A9, #365299);
    }

    .footer {
        background-color: #205DC9;
        color: #ffffff;
        padding: 40px 0;
        text-align: center;
        width: auto !important;
    }

    .footer-content {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        margin-bottom: 20px;
    }

    .footer-content div {
        flex: 1;
        margin: 10px;
    }

    .footer-content div p {
        margin: 0;
    }

    .subscribe-form {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 20px;
    }

    .subscribe-input {
        width: 250px;
        padding: 10px;
        border-radius: 5px 0 0 5px;
        border: none;
        font-size: 16px;
    }

    .subscribe-button {
        background-color: #F79327;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 0 5px 5px 0;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .subscribe-button:hover {
        background-color: #ce6c03ef;
    }

    .follow-us {
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 10px;
    }

    .follow-us i {
        margin: 15px;
        font-size: 21px;
        color: #ffffff;
        transition: color 0.3s ease;
    }

    .follow-us i:hover {
        color: #F79327;
        transform: scale(1.1);
    }

    .footer-bottom {
        font-size: 18px;
    }

    .about {
        font-size: 14px;
    }

    .footer h1 {
        font-size: 28px;
    }

    .nav-links {
        position: relative;
    }

    @media screen and (max-width: 1119px) {

        .topnav a:not(:first-child),
        .dropdown .dropbtn {
            display: none;
        }

        .topnav a.icon {
            float: right;
            display: block;
        }
    }

    @media screen and (max-width: 900px) {
        .topnav.responsive {
            position: relative;
        }

        .topnav.responsive .icon {
            position: absolute;
            right: 0;
            top: 0;
        }

        .topnav.responsive a {
            float: none;
            display: block;
            text-align: left;
        }

        .topnav.responsive {
            float: none;
        }
    }

    @media only screen and (max-width: 907px) {
        .footer-content {
            flex-direction: column;
            align-items: center;
        }
    }

    @media (max-width: 768px) {
        .image-div {
            flex-basis: 45%;
        }

        .custom-image {
            height: 60%;
        }

        .image-div {
            padding: 2;
            margin: 3px 6px;
            height: 65%;
        }
    }

    @media (max-width: 576px) {
        .image-div {
            flex-basis: 100%;
        }
    }

    @media (max-width: 768px) {
        .container {
            padding: 10px;
        }
    }

    @media (max-width: 480px) {
        .header {
            flex-wrap: wrap;
            justify-content: center;
        }

        .navigation {
            margin-top: 10px;
        }
    }

    @media (max-width: 464px) {
        .main-section .content h1 {
            font-size: 30px;
            padding: 0;
        }

        .custom-image {
            height: 50%;
            padding: 5px;
            margin: 5px;
        }
    }

    @media (max-width: 355px) {
        .main-section .content h1 {
            font-size: 30px;
            padding: 0;
        }
    }

    @media (max-width: 643px) {
        .div2 {
            display: none;
        }

        .mycontainer {
            display: block;
        }

        .div1 {
            margin: 0 auto;
        }
    }
    </style>
</head>

<body>
    <div class="container" id="container">
        <div class="header">
            <h2 class="logo" style="color: white;"><i class=" fa-solid fa-dumbbell"
                    style="font-size:30px;color:red;"></i>
                Gym
                Fitness
            </h2>
            <div class="topnav" id="myTopnav">
                <a class="active" href="#container">Home</a>
                <a href="#about">About Us</a>
                <a href="#service">Services</a>
                <a href="#ourteam">Our Team</a>
                <a href="userProfile.php">Profile</a>
                <a href="home.php">Log out</a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
            </div>
        </div>
        <section class="main-section">
            <div class="content">
                <h1>Welcome To Gym</h1>
                <h1>Fitness Where Now </h1>
                <p>You can achieve your fitness goals and </p>
                <p style="font-size: 16px;margin-bottom: 60px;">build a strong and healthy body.</p>
            </div>
        </section>
        <div class="myinlinedivs">
            <div class="inline-div-1">
                <h2>20</h2>
                <p>Years</p>
                <p>Experience</p>
            </div>
            <div class="inline-div-2">
                <h2>+10k</h2>
                <p>Happy</p>
                <p>Customers</p>
            </div>
            <div class="inline-div-3">
                <h2>10</h2>
                <p>Experts</p>
                <p>Trainer</p>

            </div>
        </div>
    </div>

    <div class="about" id="about">
        <center>
            <h1>About Us</h1>
            <h1>Top Workout in Gym Fitness</h1>
        </center>
    </div>
    <div class="newContent">
        <div class="inline-div">
            <center>
                <div class="icon"><i class="fa-solid fa-dumbbell"></i></div>
            </center>
            <h3 class="head">Chest Workout</h3>
            <p class="description">For some people, putting in the hard work that it takes to stay fit is as natural as
                sleeping, eating, and breathing—it's a necessary part of their life.</p>
        </div>
        <div class="inline-div">
            <center>
                <div class="icon"><i class="fa-solid fa-person-running"></i> </div>
            </center>
            <h3 class="head">Leg Work out</h3>
            <p class="description">
                For some people, putting in the hard work that it takes to stay fit is as natural as sleeping, eating,
                and breathing—it's a necessary part of their life.
            </p>
        </div>
        <div class="inline-div">
            <center>
                <div class="icon"><i class="fas fa-check"></i></div>
            </center>
            <h3 class="head">Belly Workout</h3>
            <p class="description"> For some people, putting in the hard work that it takes to stay fit is as natural as
                sleeping, eating, and breathing—it's a necessary part of their life.
            </p>
        </div>
    </div>
    <div class="service" id="service">
        <center>
            <h1>Services</h1>
        </center>
    </div>
    <div class="mycontainer">
        <div class="div1">
            <h2 class="div1-heading">The <span style="color: #0a55d6;">Benefits</span> You Get Now Insha'Allah </h2>
            <p class="div1-description">For some people, putting in the hard work that it takes</p>
            <ul class="div1-bullets">
                <li>Free Consultation</li>
                <li>Experienced Staff</li>
                <li>Latest Equipments</li>
                <li>Fitness Classes</li>
                <li>Group Exercise</li>
                <li>Locker Rooms and Showers</li>
                <li>Nutrition Counseling</li>
                <li>Personalized Workout Programs</li>
                <li>Fitness Assessments</li>
            </ul>
        </div>
        <div class="div2">
            <img class="div2-image" src="./public/rectangle-12@2x.png" alt="Image">
        </div>
    </div>
    <div class="ourteam" id="ourteam">
        <center>
            <h1>Meet Our Team</h1>
        </center>
    </div>
    <div class="image-container">
        <div class="image-div">
            <img src="./public/pexels-thisisengineering-3912944.jpg" alt="Image 1" class="custom-image">
            <div class="image-caption">Ahmed</div>
        </div>
        <div class="image-div">
            <img src="./public/pexels-mikhail-nilov-6740087.jpg" alt="Image 2" class="custom-image">
            <div class="image-caption">Diana</div>
        </div>
        <div class="image-div">
            <img src="./public/pexels-julia-larson-6456211.jpg" alt="Image 3" class="custom-image">
            <div class="image-caption">Kevin</div>
        </div>
    </div>
    <footer class="footer">
        <div class="footer-content">
            <div>
                <h1>About Us</h1>
                <p class="about">Welcome to Gym Fitness, your ultimate destination for achieving your fitness goals
                    and
                    leading a healthy lifestyle. We are dedicated to providing top-notch fitness facilities,
                    personalized training programs, and a supportive community to help you on your fitness journey.
                </p>
            </div>
            <div>
                <h1>Subscribe</h1>
                <div class="subscribe-form">
                    <input type="email" class="subscribe-input" placeholder="Enter your email">
                    <button class="subscribe-button">Subscribe</button>
                </div>
            </div>
            <div>
                <h1>Follow Us</h1>
                <div class="follow-us">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2023 Gym Fitness. All rights reserved.</p>
        </div>
        <div class="footer-bottom">
            <p>Powered by Group ...</p>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
    <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
    </script>
</body>

</html>
<!-- <p>Being physically and mentally fit is necessary for an individual to live a happy, long life. Typically,
    exercise is one of the best ways to keep a person healthy. Hence, it is always best to find a workout
    routine no matter how busy you are. With the numerous diseases that spread in the world today, many
    individuals realized the essence of workout. Specifically, having a workout routine will give an individual
    the greatest physical, mental, and social benefits. Accordingly, exercise will help you increase energy
    levels, reduce chronic disease risk, lose weight, and help improve brain health and memory. With such
    benefits, you probably will love to do workout routines soon. Luckily, you don’t need to do it yourself as
    various personal trainers, or professional fitness coaches exist to provide the help you need. And joining
    fitness classes is just at your fingertips. Today, we will provide you with ample gym websites design that
    will help fitness enthusiasts and personal trainers craft unique gym websites with innovation.</p> -->