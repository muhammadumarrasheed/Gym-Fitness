<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Payment Dashboard</title>
</head>
<style>
body {
    margin: 0;
    padding: 0;
    color: #800000;
    font-family: "Poppins", sans-serif;
}


.contact-form {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px;
    background-color: #0842A9;
    width: 100vw;
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
    width: 100vw;

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


.lgcontainer {
    padding: 100px 0;
    background-image: url("./images/login.jpeg");
    background-size: cover;
    background-position: center;
    align-items: center;
    width: 100vw;
}

.additional-content {
    margin: 40px;
    background-color: rgba(255, 255, 255, 0.4);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    padding: 30px;
    border-radius: 10px;
    padding-bottom: 20px;
}

.additional-content h3 {
    color: #800000;
    margin-bottom: 10px;
}

.additional-content p {
    margin-bottom: 10px;
}

.additional-content .option {
    margin-bottom: 40px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.17);
    padding: 30px;
    border-radius: 10px;
}

.additional-content .option h3 {
    font-size: 24px;
    margin-bottom: 10px;
}

.additional-content .option-content {
    display: flex;
    align-items: center;
}

.additional-content .image-wrapper {
    margin-right: 20px;
}

.additional-content .circle-image {
    width: 100px;
    height: 100px;
    object-fit: cover;
    border-radius: 10px;
}

.additional-content .text-wrapper {
    flex: 1;
}

.additional-content .btn {
    display: inline-block;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 4px;
    background-color: #0C80E7;
    color: #fff;
    border: none;
    font-size: 16px;
    transition: background-color 0.3s ease;
    cursor: pointer;
}

.additional-content .btn:hover {
    background-color: #0842A9;
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

@media screen and (max-width: 990px) {
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
</style>

<body>
    <div class="contact-form">
        <h2><i class="fa-solid fa-dumbbell" style="font-size:30px;color:red;"></i> Gym Fitness</h2>
        <div class="topnav" id="myTopnav">
            <a href="adminpanel.php">Home</a>

            <a href="userData.php">User</a>
            <a href="trainerData.php">Trainer</a>
            <a href="equipmentData.php">Equipments</a>
            <a href="planData.php">Plan</a>
            <a href="classData.php">Class</a>
            <a href="fitnessData.php">Fitness</a>
            <a class="active" href="paymentData.php">Payment</a>
            <a href="packageData.php">Packages</a>
            <a href="sessionData.php">Session</a>
            <a href=" allLogin.php" class="login">Log out</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
    </div>
    <div class="lgcontainer">
        <div class="additional-content">
            <h3>Payment Information</h3>
            <p>As an admin, you have access to view the payment status of both users and trainers in the Gym Fitness
                community.</p>

            <div class="option">
                <h3>User Payment Status</h3>
                <div class="option-content">
                    <div class="image-wrapper">
                        <img src="./images/pexels-anna-shvets-4482900.jpg" alt="User Payment" class="circle-image">
                    </div>
                    <div class="text-wrapper">
                        <p>You can view the payment status of users, ensuring that their payments are up to date. This
                            information allows you to manage user access to premium features and benefits.</p>
                        <p>Click the button below to view the user payment status.</p>
                        <a href="userPaymentData.php" class="btn btn-primary">View User Payment Status</a>
                    </div>
                </div>
            </div>

            <div class="option">
                <h3>Trainer Payment Status</h3>
                <div class="option-content">
                    <div class="image-wrapper">
                        <img src="./images/pexels-artem-podrez-6279104.jpg" alt="Trainer Payment" class="circle-image">
                    </div>
                    <div class="text-wrapper">
                        <p>You can also monitor the payment status of trainers to ensure their accounts are in good
                            standing. This allows you to manage the services and benefits provided to trainers within
                            the Gym Fitness community.</p>
                        <p>Click the button below to view the trainer payment status.</p>
                        <a href="trainerPaymentData.php" class="btn btn-primary">View Trainer Payment Status</a>
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