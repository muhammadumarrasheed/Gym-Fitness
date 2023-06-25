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

    .dashboard-container {
        background-image: url("./images/login.jpeg");
        background-size: cover;
        background-position: center;
        height: 100vh;
        justify-content: center;
        align-items: center;
        padding: 100px;
    }

    .content {
        padding: 30px 0px;
        background-color: rgba(255, 255, 255, 0.5);
        border-radius: 10px;

    }

    .dashboard {
        display: flex;
        justify-content: center;
        align-items: center;

    }


    .box {
        background: #0C80E7;
        width: 200px;
        height: 200px;
        margin: 10px;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: white;
        transition: transform 0.3s ease;
    }

    .box:hover {
        transform: scale(1.05);
    }

    .box-heading {
        font-size: 24px;
        margin-bottom: 10px;
        color: white;
    }

    .box-value {
        font-size: 48px;
        font-weight: bold;
        color: white;

    }
    </style>
</head>

<body>
    <div class="contact-form">
        <h2><i class="fa-solid fa-dumbbell" style="font-size:30px;color:red;"></i> Gym Fitness</h2>
        <div class="topnav" id="myTopnav">
            <a class="active" href="adminPanel.php">Home</a>
            <a href="userData.php">User</a>
            <a href="trainerData.php">Trainer</a>
            <a href="equipmentData.php">Equipments</a>
            <a href="planData.php">Plan</a>
            <a href="classData.php">Class</a>
            <a href="fitnessData.php">Fitness</a>
            <a href="paymentData.php">Payment</a>
            <a href="packageData.php">Packages</a>
            <a href="sessionData.php">Session</a>
            <a href=" allLogin.php" class="login">Log In</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="navFunction()">&#9776;</a>
        </div>
    </div>
    <div class="dashboard-container">
        <?php
                $sql = "SELECT COUNT(*) AS total_users FROM user";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($result);
                $countUsers = $row['total_users'];
                
                $sql = "SELECT COUNT(*) AS total_trainers FROM trainer";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($result);
                $countTrainers = $row['total_trainers'];
                
                $sql = "SELECT COUNT(*) AS total_equip FROM equipment";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($result);
                $countEquip = $row['total_equip'];
                
                $sql = "SELECT COUNT(*) AS total_classes FROM class";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($result);
                $countClasses = $row['total_classes'];
                
              
        ?>
        <div class="content">
            <center>
                <h1 style="color: #0842A9;">Welcome to the Admin Dashboard!</h1>
                <h3 style="color: #0842A9;">Manage and monitor your gym operations efficiently</h3>
                <h3 style="color: #0842A9;">Stay organized and keep track of user, trainer, equipment, and class data.
                </h3>
            </center>
            <p></p>
            <div class="dashboard">
                <div class=" box">
                    <div class="box-heading">Users</div>

                    <div class="box-value"><?php echo $countUsers; ?></div>
                </div>
                <div class="box">
                    <div class="box-heading">Trainers</div>
                    <div class="box-value"><?php echo $countTrainers; ?></div>
                </div>
                <div class="box">
                    <div class="box-heading">Equipments</div>
                    <div class="box-value"><?php echo $countEquip;?></div>
                </div>
                <div class="box">
                    <div class="box-heading">Classes</div>
                    <div class="box-value"><?php echo $countClasses;?></div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-content">
            <div>
                <h1>About Us</h1>
                <p class="about">Welcome to Gym Fitness, your ultimate destination for achieving your fitness goals
                    and leading a healthy lifestyle. We are dedicated to providing top-notch fitness facilities,
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
    </footer>

    <script>
    function navFunction() {
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