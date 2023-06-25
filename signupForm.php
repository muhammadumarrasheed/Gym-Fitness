<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Sign up</title>
</head>
<style>
body {
    margin: 0;
    padding: 0;
    background-color: #F5F5F5;
    color: #800000;
    font-family: "Poppins", sans-serif;
}


.contact-form {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px;
    background-color: #0842A9;
    width: 100% auto;
}

h2 {
    color: white;
    margin: 0;
}

.topnav {
    overflow: hidden;
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

@media screen and (max-width: 900px) {

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

.container {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 100px;
}

.title {
    color: #333;
    font-size: 32px;
    text-align: center;
    width: 100%;
    margin-bottom: 40px;
}

.content-wrapper {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    width: 100%;
}

.image-container img {
    width: 100%;
    height: auto;
}

.content {
    width: 50%;
    padding: 0 40px;
}

.option {
    margin-bottom: 40px;
}

.option h3 {
    font-size: 24px;
    margin-bottom: 10px;
}

.option-content {
    display: flex;
    align-items: center;
}

.image-wrapper {
    margin-right: 20px;
}

.circle-image {
    width: 100px;
    height: 100px;
    object-fit: cover;
    border-radius: 50%;
}

.text-wrapper {
    flex: 1;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 4px;
}


.additional-content {
    margin-top: 40px;
    padding: 20px;
    background-color: #f5f5f5;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.additional-content h3 {
    color: #800000;
    margin-bottom: 10px;
}

.additional-content p {
    margin-bottom: 10px;
}
</style>

<body>
    <div class="contact-form">
        <h2><i class="fa-solid fa-dumbbell" style="font-size:30px;color:red;"></i> Gym Fitness</h2>
        <div class="topnav" id="myTopnav">
            <a href="home.php">Home</a>
            <a class="active" href="signupForm.php">Sign Up</a>
            <a href=" allLogin.php" class="login">Log In</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
    </div>
    <div class="container">
        <h2 class="title">Join our Gym Community</h2>
        <div class="content-wrapper" style="display: flex;">
            <div class="content" style="flex: 1;">
                <div class="option">
                    <h3>Create an Account as a User</h3>
                    <div class="option-content">
                        <div class="image-wrapper">
                            <img src="./images/pexels-photo-13345705.jpeg" alt="User" class="circle-image">
                        </div>
                        <div class="text-wrapper">
                            <p>Get access to personalized workout plans, track your progress, and connect with other
                                fitness enthusiasts.</p>
                            <ul>
                                <li>Access to workout programs</li>
                                <li>Track your fitness progress</li>
                                <li>Connect with others in the fitness community</li>
                            </ul>
                            <a href="userSignupForm.php" class="btn btn-primary">Create User Account</a>
                        </div>
                    </div>
                </div>

                <div class="option">
                    <h3>Create an Account as a Trainer</h3>
                    <div class="option-content">
                        <div class="image-wrapper">
                            <img src="./images/pexels-mikhail-nilov-6740309.jpg" alt="Trainer" class="circle-image">
                        </div>
                        <div class="text-wrapper">
                            <p>Join our team of experienced trainers and help others achieve their fitness goals.</p>
                            <ul>
                                <li>Create and share workout programs</li>
                                <li>Provide personalized coaching</li>
                                <li>Grow your client base</li>
                            </ul>
                            <a href="trainerSignupForm.php" class="btn btn-primary">Create Trainer Account</a>
                        </div>
                    </div>
                </div>

                <div class="additional-content">
                    <h3>Why Choose Our Gym?</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus in placerat mi. Vestibulum in
                        iaculis magna. Proin sollicitudin venenatis tristique. Nulla sed lectus at leo vulputate
                        eleifend. Donec nec nulla dignissim, vestibulum lacus id, malesuada nisi. Curabitur interdum
                        eleifend ligula sed aliquam.</p>
                    <p>Fusce sed lectus lacinia, viverra ex eget, rhoncus elit. Vestibulum ante ipsum primis in faucibus
                        orci luctus et ultrices posuere cubilia curae; Sed ac mauris a ipsum mattis lacinia eget ac
                        justo. Integer maximus nibh sit amet tortor hendrerit, non placerat massa mattis.</p>
                </div>
            </div>
        </div>
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