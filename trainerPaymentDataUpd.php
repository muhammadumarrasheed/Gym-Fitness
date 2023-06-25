<?php
include 'dbconn.php';
$nonStatus = "UnDone";
$trainerEmail = $_GET['updname'];
$sql = "select * from `trainerpayment` where trainerEmail = '$trainerEmail'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$status = $row['status'];

if(isset($_POST['submit'])){
$status = $_POST['status'];
$date = $_POST['date'];
$sql = "update `trainerpayment` set trainerEmail = '$trainerEmail',status = '$status',date = '$date' where trainerEmail = '$trainerEmail'";
$result = mysqli_query($con, $sql);
if($result){
        header("Location: trainerPaymentData.php");
}else{
header("Location:  trainerPaymentData.php?error = Data is not updated");
}
}?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Update Trainer Payment</title>
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

.lgcontainer {
    border-radius: 3px;
    padding: 100px 100px;
    background-image: url("./images/login.jpeg");
    background-size: cover;
    background-position: center;
    margin: 0 auto;
    height: 100vh;
}

.container {
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 10px;
    margin: 0 auto;
    width: fit-content;
    margin-bottom: 1em;
    padding: 20px;

}

.form-group {
    margin-bottom: 20px;
}

.form-label {
    margin-bottom: 4px;
}

.form-control {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 100%;
}


.submit {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

@media (max-width: 600px) {
    .column {
        flex: 100%;
        padding: 0;
    }
}

.submit {
    display: block;

    font-family: 'Poppins', sans-serif;
    font-size: 18px;
    font-weight: bold;
    border: none;
    background: linear-gradient(to right, #365299, #0842A9);
    color: #f5ecec;
    border-radius: 5px;
    transition: background-color 0.3s ease;
    width: 390px;
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
            <a href="paymentData.php">Payment</a>
            <a href="packageData.php">Packages</a>
            <a href="sessionData.php">Session</a>

            <a href=" allLogin.php" class="login">Log out</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
    </div>
    <div class="lgcontainer my-5">
        <form class="container" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
            <center>
                <h2 style="color:#800000; padding: 5px;">Trainer Payment update Form</h2>
            </center>
            <div class="form-group">
                <label class="form-label">Payment Status</label>
                <select name="status" class="form-control">
                    <option>Done</option>
                    <option>UnDone</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label">Payment Status</label>
                <input type="date" class="form-control" placeholder="dd-mmm-yyyy" name="date" autocomplete="off">

            </div>
            <button type="submit" class="submit" name="submit">Update</button>
        </form>
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

    function validateForm() {
        var name = document.forms[0].status.value;
        var date = document.forms[0].date.value;
        var errorFields = document.getElementsByClassName('error');
        for (var i = 0; i < errorFields.length; i++) {
            errorFields[i].textContent = '';
        }
        var isValid = true;
        // Name validation
        if (name === '') {
            document.getElementById('name-error').textContent = 'Please select trainer payment status';
            isValid = false;
        }
        if (date === '') {
            document.getElementById('date-error').textContent = 'Please enter payment date';
            isValid = false;
        }
        return isValid;
    }
    </script>
</body>

</html>
<div class="container my-5">
    <form method="post">
        <div class="form-group">
            <label class="title">Trainer Payment update Form</label>
        </div>
        <div class="form-group">
            <label class="form-label">Status</label>
            <select name="status" class="form-control">
                <option>UnDone</option>
                <option>Done</option>
            </select>
        </div>
        <div class="form-group">
            <label class="form-label">Date</label>
            <input type="date" class="form-control" placeholder="dd-mmm-yyyy" name="date" autocomplete="off">
        </div>
        <button type="submit" class="submit" name="submit">Update</button>
    </form>

</div>
</body>

</html>