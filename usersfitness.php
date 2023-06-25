<?php
session_start();
$var = $_SESSION['email'];
include "dbconn.php";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Trainer Panel</title>
</head>
<style>
body {
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
    font-size: 30px;
}

.follow-us i {
    margin: 15px;
    font-size: 24px;
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



.nav-links {
    position: relative;
}


.container {
    position: relative;
    box-shadow: 0 12px 16px 0 rgba(10, 10, 95, 0.24), 0 17px 50px 0 rgba(73, 75, 199, 0.19);
    border-radius: 10px;
    padding-bottom: 10px;
    padding-top: 30px;
}


#addUserfit {
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    font-size: large;
    padding: 10px 15px;
    border-radius: 5px;
    border: none;
}



.user-fitness {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 20px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.user-fitness>div {
    margin-right: 70px;
}

.user-fitness:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.user-details {
    flex-grow: 1;
    margin-right: 20px;
}

.user-details h3 {
    margin: 0;
    font-size: 20px;
}

.user-details p {
    margin: 0;
    font-size: 18px;
    color: #555;
}

.fitness-status h4 {
    margin-right: 0px;
    font-size: 18px;
}




#container {
    display: flex;
    margin-right: 70px;
    margin-bottom: 30px;
}

.flex-container {
    justify-content: flex-end;
}


.container {
    margin-top: 60px;
    margin-bottom: 0px;
}

h1 {
    font-size: 28px;
    font-weight: bold;
    padding-bottom: 15px;
}

.text-light {
    text-decoration: none;
}

.text-light:hover {
    text-decoration: none;
}

@media (max-width: 768px) {
    .user-fitness {
        flex-direction: column;
    }

    .user-details,
    .fitness-status,
    .operation {
        flex: 1 1 100%;
    }

    .addUserbtn {
        left: 50%;
        transform: translateX(-50%);
    }
}

@media only screen and (max-width: 787px) {
    .container {
        padding: 10px;
        margin: 10px auto;
        max-width: 550px;
        text-align: center;
    }
}


@media only screen and (max-width: 907px) {
    .footer-content {
        flex-direction: column;
        align-items: center;
    }
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

    .topnav.responsive .dropdown {
        float: none;
    }

    .topnav.responsive .dropdown-content {
        position: relative;
    }

    .topnav.responsive .dropdown .dropbtn {
        display: block;
        width: 100%;
        text-align: left;
    }
}
</style>


<body>
    <div class="contact-form">
        <h2><i class="fa-solid fa-dumbbell" style="font-size:30px;color:red;"></i> Gym Fitness</h2>
        <div class="topnav" id="myTopnav">
            <a href="trainerPanel.php">Home</a>
            <a href="trainerProfile.php">Profile</a>
            <a class="active" href="usersfitness.php">Users' Fitness</a>
            <a href="usersPlans.php">Users' Plans</a>
            <a href="home.php" class="login">Log out</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
    </div>
    <div class="container" style="margin-bottom:30px;">
        <center>
            <h1>Users' Fitness</h1>
        </center>
        <div class="container1" <label class="title"></label>
            <?php
        $sql = "SELECT user.userEmail, user.name,  fitness.fitnessstatus FROM user JOIN fitness ON user.userEmail = fitness.userEmail WHERE user.trainerEmail = '$var'";
        $result = mysqli_query($con, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $email = $row['userEmail'];
                $name = $row['name'];
                $fitness = $row['fitnessstatus'];
                echo '<div class="user-fitness">
                    
        <div class="user-details">
            <h3>User: ' . $name . '</h3>
            <p>Email: ' . $email . '</p>
        </div>
        <div class="fitness-status">
            <h4>Fitness Status:</h4>
            <p>' . $fitness . '</p>
        </div>
        <div class="operation">
            <button type="button" class="btn btn-primary my-1"><a href="usersFitnessUpd.php?updateid=' . $email . '"
                    class="text-light">Update</a></button>
        </div>
    </div>';
    }
    }
    ?>
        </div>
    </div>
    <div id="container" class="flex-container">
        <div><button type="button" class="btn btn-primary my-1" id="addUserfit"><a href=" usersFitnessAdded.php"
                    class="text-light">Add
                    fitness</a></button></div>
    </div>

    <footer class="footer">
        <div class="footer-content">
            <div>
                <h1>About Us</h1>
                <p class="about">Welcome to Gym Fitness, your ultimate destination for achieving your fitness goals and
                    leading a healthy lifestyle. We are dedicated to providing top-notch fitness facilities,
                    personalized training programs, and a supportive community to help you on your fitness journey.</p>
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