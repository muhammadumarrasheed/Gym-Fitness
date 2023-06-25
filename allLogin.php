<?php
include "dbconn.php";

$errors = array(); // Array to store validation errors

if (isset($_POST['signup'])) {
    header("Location: signupForm.php");
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $opt = $_POST['clas'];
    $class = "Admin";
    $class2 = "Trainer";

    if (empty($email)) {
        $errors['email'] = "Email is required";
    }

    if (empty($pass)) {
        $errors['password'] = "Password is required";
    }

    if (empty($errors)) {
        if ($opt == $class) {
            $sql = "SELECT * FROM admin WHERE email = '$email' && password = '$pass'"; // Admin login check
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) && $opt == "Admin") {
                header("Location: adminpanel.php");
                exit();
            } else {
                $errors['invalid'] = "Invalid username and password";
            }
        } else if ($opt == $class2) {
            $sql = "SELECT * FROM trainer WHERE traineremail = '$email' && password = '$pass'"; // Trainer login check
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) && $opt == $class2) {
                session_start();
                $_SESSION['email'] = $_POST['email'];
                header("Location: trainerPanel.php");
                exit();
            } else {
                $errors['invalid'] = "Invalid username and password";
            }
        } else {
            $sql = "SELECT * FROM user WHERE userEmail = '$email' && password = '$pass'"; // User login check
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result)) {
                session_start();
                $_SESSION['email'] = $_POST['email'];
                header("Location: userPanel.php");
                exit();
            } else {
                $errors['invalid'] = "Invalid username and password";
            }
        }
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Login</title>
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

    .form-title {
        text-align: center;
        font-size: 26px;
        font-weight: bold;
        margin-bottom: 20px;
        color: #0842A9;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
        font-size: 18px;

    }

    .form-control {
        border-radius: 5px;
        padding: 12px;
        font-size: 16px;
        border: 1px solid #ccc;
        width: 100%;
    }

    .submit-btn {
        cursor: pointer;
        font-size: 18px;
        font-weight: bold;
        padding: 10px 15px;
        border: none;
        background-color: #0842A9;
        color: #fff;
        border-radius: 5px;
        width: 100%;
        transition: background-color 0.3s ease;
    }

    .submit-btn:hover {
        background-color: #0C80E7;
    }

    .signup-link {
        display: block;
        text-align: center;
        margin-top: 10px;
    }

    .signup-link a {
        color: #0842A9;
        text-decoration: none;
    }

    .error {
        color: red;
        font-size: 14px;
        margin-top: 5px;
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

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 300px;
        margin: 0 auto;
        max-width: 800px;
        margin-top: 150px;
        margin-bottom: 150px;

    }

    .form-container,
    .image-container {
        flex: 1;
        padding: 20px;
        height: 458px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-container {
        border-radius: 10px 0 0 10px;
        background-color: #fff;
        padding-right: 40px;

    }

    .image-container {
        background-image: url("./images/pexels-photo-7672103.jpeg");
        background-size: cover;
        border-radius: 0 10px 10px 0;
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

    @media (max-width: 993px) {
        .container {
            flex-direction: column;
        }

        .form-container {
            width: 50%;
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
            padding-right: 40px;
        }

        .image-container {
            display: none;
        }
    }

    .error {
        color: red;
        font-size: 14px;
    }
    </style>
</head>

<body>
    <div class="contact-form">
        <h2><i class="fa-solid fa-dumbbell" style="font-size:30px;color:red;"></i> Gym Fitness</h2>
        <div class="topnav" id="myTopnav">
            <a href="home.php">Home</a>
            <a href="signupForm.php">Sign Up</a>
            <a class="active" href=" allLogin.php" class="login">Log In</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
    </div>
    <div class="container">
        <div class="form-container">
            <h2 class="form-title">Login</h2>
            <form method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
                <div class="form-group">
                    <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter email">
                    <?php if (isset($errors['email'])) { ?>
                    <p class="error"><?php echo $errors['email']; ?></p>
                    <?php } ?>
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control"
                        placeholder="Enter password">
                    <?php if (isset($errors['password'])) { ?>
                    <p class="error"><?php echo $errors['password']; ?></p>
                    <?php } ?>
                </div>
                <div class="form-group">
                    <label for="clas" class="form-label">You are</label>
                    <select id="clas" name="clas" class="form-control">
                        <option value="Admin">Admin</option>
                        <option value="Trainer">Trainer</option>
                        <option value="User">User</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="submit-btn">Login</button>
                </div>
            </form>
            <div class="signup-link">
                <a href="signupForm.php">Create an account</a>
            </div>
        </div>
        <div class="image-container">
        </div>
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

    function validateForm() {
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;

        // Perform client-side validation
        if (email === "") {
            alert("Email is required");
            return false;
        }

        if (password === "") {
            alert("Password is required");
            return false;
        }
        return true;
    }
    </script>
</body>

</html>