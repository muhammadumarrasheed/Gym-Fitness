<?php
include "dbconn.php";
if(isset($_POST['submit'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
  $username = validate($_POST['username']);
  $status = validate($_POST['status']);
  $sql = "SELECT userEmail from user where name = '$username'";
  $result = mysqli_query($con,$sql);
  $row = mysqli_fetch_assoc($result);
  $userEmail = $row['userEmail'];
  if(empty($status)){
    header("Location: usersFitnessAdded.php?error = Status is required");
    exit();
  }else{
     $sql = "insert into fitness(userEmail,fitnessstatus)
           values('$userEmail','$status')";
       $result = mysqli_query($con, $sql);
  if($result){
    header("Location: usersfitness.php");
  }else{
    header("Location: usersfitness.php?error = Sorry,Users fitness already stored");
  }
}
}
?>

<?php
session_start();
$var = $_SESSION['email'];
$query = "SELECT * from user where user.trainerEmail = '$var'";
$result2 = mysqli_query($con, $query);
$options = "";
while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}
?>

<?php
include "dbconn.php";
if(isset($_POST['submit'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
  $username = validate($_POST['username']);
  $plan = validate($_POST['status']);
  $sql = "SELECT userEmail from user where name = '$username'";
  $result = mysqli_query($con,$sql);
  $row = mysqli_fetch_assoc($result);
  $userEmail = $row['userEmail'];
  if(empty($plan)){
    header("Location: userPlanAdded.php?error = Status is required");
    exit();
  }else{
     $sql = "insert into plan(userEmail,planname)
           values('$userEmail','$plan')";
       $result = mysqli_query($con, $sql);
  if($result){
    header("Location: usersPlans.php");
  }else{
    header("Location: usersPlans.php?error = Sorry,Users diet plan already stored");
  }
}
}
?>

<?php
$var = $_SESSION['email'];
$query = "SELECT * from user where user.trainerEmail = '$var'";
$result2 = mysqli_query($con, $query);
$options = "";
while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Diet Plan Update Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
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

    .fitness-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .form-container {
        width: 50%;
        background-color: #fff;
        min-width: 320px;
    }

    .image-container {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        background-image: url("https://images.pexels.com/photos/13896072/pexels-photo-13896072.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2");
        background-size: cover;
        background-position: center;
        padding: 20px;
        height: 503px;
        border-radius: 0 10px 10px 0;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        position: relative;
        overflow: hidden;
        /* Ensure the blur effect stays within the container */
    }

    .image-container::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        backdrop-filter: blur(4px);
        z-index: 1;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

    }

    .image-container h2::before {
        backdrop-filter: none;
    }


    .image-caption {
        font-size: 34px;
        margin-top: 20px;
        text-align: center;
        color: whitesmoke;
        font-family: forte;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        margin-top: 50px;
    }

    .form-container {
        border-radius: 10px 0px 0px 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 43px;
    }

    #formgroup {
        margin-bottom: 20px;
        width: 300px;
        height: 90px;
        text-align: left;
    }

    #formgroup .form-label {
        font-weight: 500;
        margin-bottom: 5px;
        text-align: left;
    }

    #formgroup .form-control {
        border-radius: 5px;
        padding: 10px;
        border: 1px solid #ccc;
        width: 100%;
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


    @media (max-width: 992px) {
        .container {
            flex-direction: column;
        }

        .form-container {
            width: 100%;
            padding: 20px;
        }

        .image-container {
            height: 50vh;
        }
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

    @media screen and (max-width: 992px) {
        .form-container {
            border-radius: 10px;
            margin-bottom: 0px;
        }

        .image-container {
            display: none;
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
</head>

<body>
    <div class="contact-form">
        <h2><i class="fa-solid fa-dumbbell" style="font-size:30px;color:red;"></i> Gym Fitness</h2>
        <div class="topnav" id="myTopnav">
            <a href="trainerPanel.php">Home</a>
            <a href="trainerProfile.php">Profile</a>
            <a href="usersfitness.php">Users' Fitness</a>
            <a href="usersPlans.php">Users' Plans</a>
            <a href="home.php" class="login">Log out</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
    </div>
    <div class="container my-5">
        <div class="form-container">
            <div class="form-boundary">
                <div class="card-body">
                    <center>
                        <h2 class="card-title" style="color: black; margin-top: 60px;">Fitness Status Add Form</h2>
                    </center>
                    <form method="post">
                        <div class="from-group" id="formgroup">
                            <label class="form-label">User</label>
                            <select name="username" class="form-control">
                                <?php echo $options;?>
                            </select>
                        </div>
                        <div class="form-group" id="formgroup">
                            <label class="form-label">Fitness Status</label>
                            <input type="text" class="form-control" placeholder="Enter fitness status" name="status"
                                autocomplete="off">
                        </div>
                        <button name="submit" class="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <span class="image-container">
            <h2 class="image-caption">Update User Fitness</h2>
        </span>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
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