<?php
include 'dbconn.php';
$var = $_GET['updateid'];
$sql = "select * from `trainer` where traineremail = '$var'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$email = $row['traineremail'];
$name = $row['trainername'];
$password = $row['password'];
$phone = $row['phoneNum'];
$image = $row['trainer_image'];

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $phone = $_POST['phoneNum'];
    if (!empty($_FILES['trainer_image']['name'])) {
        $image = $_FILES['trainer_image']['name'];
    } else {
        $sql = "select trainer_image from `trainer` where traineremail = '$var'";
        $image = $row['trainer_image'];
    }
    $target_dir = "Trainer-Images/";
    $target_file = $target_dir . basename($image);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    // Allow only certain file types
    $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');
    if (in_array($imageFileType, $allowedTypes)) {
        move_uploaded_file($_FILES['trainer_image']['tmp_name'], $target_file);
    } else {
        // Handle invalid file type
    }
    
    $sql = "update `trainer` set traineremail = '$email', trainername = '$name', password = '$password', phoneNum = '$phone',
        trainer_image = '$image' where traineremail = '$email'";
    $result = mysqli_query($con, $sql);
    
    if ($result) {
        header("Location: trainerPanel.php");
    } else {
        header("Location:  trainerPanel.php?error=Data is duplicated");
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Panel</title>
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

.container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 100vh;
    width: auto;
}

.form-container {
    width: 50%;
    background-color: #fff;
    min-width: 320px;
}

.form-boundary {
    border-radius: 10px 0 0 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.card {
    border-radius: 10px 0 0 10px;
}

.card-body {
    padding: 20px;
}

.card-title {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 15px;
}

.form-group {
    margin-bottom: 20px;
}

.form-label {
    font-weight: bold;
    margin-bottom: 5px;
}

.form-control {
    border-radius: 5px;
    padding: 10px;
    border: 1px solid #ccc;
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

.image-container {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: url("https://images.pexels.com/photos/4164761/pexels-photo-4164761.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2");
    padding: 20px;
    height: 603px;
    border-radius: 0 10px 10px 0;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.image-caption {
    font-size: 34px;
    margin-top: 20px;
    text-align: center;
    color: whitesmoke;
    font-family: forte;
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
        width: 100%;
        padding: 20px;
    }

    .image-container {
        display: none;
    }
}
</style>


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
    <div class="container">
        <div class="form-container">
            <div class="form-boundary card">
                <div class="card-body">
                    <h2 class="card-title">Update Profile</h2>
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" placeholder="Enter your name" name="name"
                                autocomplete="off" value="<?php echo $name; ?>">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" placeholder="Enter your email address" name="email"
                                autocomplete="off" value="<?php echo $email; ?>">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <input type="text" class="form-control" placeholder="Enter password" name="password"
                                autocomplete="off" value="<?php echo $password; ?>">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Phone Number</label>
                            <input type="text" class="form-control" placeholder="Enter your phone number"
                                name="phoneNum" autocomplete="off" value="<?php echo $phone; ?>">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Trainer Image</label>
                            <input type="file" class="form-control" name="trainer_image" accept="image/*">
                        </div>

                        <button type="submit" class="submit" name="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="image-container">
            <h2 class="image-caption">Update Profile</h2>
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
    </script>
</body>

</html>