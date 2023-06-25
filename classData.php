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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Classes Dashboard</title>
</head>
<style>
body {
    margin: 0;
    padding: 0;
    background-color: #F5F5F5;
    color: #800000;
    font-family: "Poppins", sans-serif;

}

.largecontainer {
    padding: 100px 100px;
    background-image: url("./images/login.jpeg");
    align-items: center;
}

.container {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    background-color: rgba(255, 255, 255, 0.5);
    border-radius: 10px;
}

.title {
    font-size: 24px;
    font-weight: bold;
}

.heading {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
}

.addUserbtn {
    border: none;
    padding: 10px 20px;
    text-decoration: none;
}

.title {
    margin: 0;
}




.user-details {
    display: flex;
    margin-bottom: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    padding: 10px;
    border-radius: 10px;
    background-color: #f5ecec;
}

.user-info {
    display: flex;
    width: 100%;
}

.user-column {
    flex-basis: 50%;
    padding: 10px;
}

.user-label {
    font-weight: bold;
}

.user-value {
    margin-bottom: 10px;
}

.user-operations {
    text-align: right;
    margin-left: auto;
    padding: 10px;
}

.user-operations button {
    margin: 5px;
}

.user-operations a {
    color: white;
    text-decoration: none;
}

.user-operations .btn-primary {
    background-color: #337ab7;
    border: none;
}

.user-operations .btn-danger {
    background-color: #d9534f;
    border: none;
}

.user-operations .btn-primary:hover {
    background-color: #286090;
}

.user-operations .btn-danger:hover {
    background-color: #c9302c;
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

@media screen and (max-width: 1200px) {
    .container {
        padding: 10px;
    }
}

@media screen and (max-width: 992px) {
    .container {
        width: 90%;
    }
}

@media screen and (max-width: 768px) {
    .container {
        width: 100%;
    }

    .largecontainer {
        padding: 10px 10px;
    }
}

@media screen and (max-width: 454px) {
    .container {
        width: 100%;
    }

    .largecontainer {
        padding: 5px 5px;
    }
}

@media screen and (max-width: 431px) {
    .container {
        width: 100%;
    }

    .largecontainer {
        padding: 0px 0px;
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
            <a class="active" href="classData.php">Class</a>
            <a href="fitnessData.php">Fitness</a>
            <a href="paymentData.php">Payment</a>
            <a href="packageData.php">Packages</a>
            <a href="sessionData.php">Session</a>
            <a href=" allLogin.php" class="login">Log out</a>

            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
    </div>
    <div class="largecontainer">
        <div class="container">
            <div class="heading">
                <center> <label class="title">Manage Classes</label></center>
                <a href="classDataIn.php?id=<?php echo 1; ?>" class=" btn btn-primary addUserbtn text-light"
                    class="btn btn-primary addUserbtn"><i class="fa-solid fa-calendar-plus"
                        style="font-size:25px;color:white; margin-right: 6px;"></i>Add New Class</a>

            </div>
            <?php
                $sql = "select * from class";
                $result = mysqli_query($con,$sql);
                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['classid'];
                        $name = $row['classname'];
                    ?>
            <div class="user-details">
                <div class="user-info">
                    <div class="user-column">
                        <div class="user-label">Class Id:</div>
                        <div class="user-value"><?php echo $id; ?></div>
                    </div>
                    <div class="user-column">
                        <div class="user-label">Class Name:</div>
                        <div class="user-value"><?php echo $name; ?></div>
                    </div>
                </div>
                <div class="user-operations">
                    <button class="btn btn-primary my-1"><a href="classDataUpd.php?updateid=<?php echo $id; ?>"
                            class="text-light">Update</a></button>
                    <button class="btn btn-danger my-1"><a href="classDataDel.php?deleteid=<?php echo $id; ?>"
                            class="text-light">Delete</a></button>
                </div>
            </div>

            <?php
    }
  }
  ?>
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