<?php
session_start();
$var = $_SESSION['email'];
include 'dbconn.php';

$sql = "SELECT * FROM `user` WHERE userEmail = '$var'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$image = $row['image'];
$oldImage = $image;

if (isset($_POST['submit'])) {
    $image = $_FILES['file-input']['name'];
    $target_dir = "user-images/";
    $target_file = $target_dir . basename($image);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');
    if (in_array($imageFileType, $allowedTypes)) {
        move_uploaded_file($_FILES['file-input']['tmp_name'], $target_file); // Use 'file-input' instead of 'image'
    } else {
        // Handle invalid file type
    }
    
    $sql = "UPDATE user SET image = '$image' WHERE userEmail = '$var'";
    $result = mysqli_query($con, $sql);    
    if ($result) {
        if (!empty($oldImage) && file_exists($target_dir . $oldImage)) {
            unlink($target_dir . $oldImage);
        }
        header("Location: userProfile.php");
    } else {
        header("Location: userProfile.php?error");
    }
    mysqli_close($con);
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>User Profile</title>
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

.title {
    color: #0c457e;
    background-color: whitesmoke;
    text-align: center;
    padding-bottom: 12px;
}


.container {
    background-color: whitesmoke;
    padding: 20px;
    margin: 20px auto;
    max-width: 600px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.profile-card {
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.card-header {
    text-align: center;
    margin-bottom: 20px;
}

.card-header h4 {
    margin: 0;
    color: #333;
}

.card-header p {
    margin: 0;
    color: #777;
}

.card-body {
    text-align: center;
    margin-bottom: 20px;
}

.profile-image img {
    width: 150px;
    height: 150px;
    object-fit: cover;
    border-radius: 50%;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.profile-image {
    position: relative;
    display: inline-block;
}

.profile-image img {
    width: 150px;
    height: 150px;
    object-fit: cover;
    border-radius: 50%;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.update-button {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 30px;
    height: 30px;
    background-color: #365299;
    color: #fff;
    border: none;
    border-radius: 50%;
    font-size: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}

.update-button:hover {
    background-color: #0842A9;
}

.info-row {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.info-label {
    font-weight: bold;
    margin-right: 10px;
    color: #555;
}

.info-value {
    color: #777;
}

.card-footer {
    text-align: center;
}

.btn {
    background-color: #365299;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #0c62b4;
}

.popup {
    display: none;
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 9999;
}

.popup-content {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.close {
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
}

.file-input {
    display: none;
}

.file-label {
    padding: 10px;
    background-color: #f5f5f5;
    border: 1px solid #ccc;
    border-radius: 5px;
    cursor: pointer;
}

.file-label:hover {
    background-color: #e0e0e0;
}

.file-label span {
    margin-left: 5px;
}

.submit {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #4caf50;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 10px;
}

@media only screen and (max-width: 781.6px) {
    .card-body {
        padding: 10px;
    }

    .profile-image img {
        width: 100px;
        height: 100px;
    }

    .info-row {
        flex-direction: column;
        align-items: flex-start;
        margin-bottom: 5px;
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
            <a href="userPanel.php">Home</a>
            <a class="active" href="userProfile.php">Profile</a>
            <a href="home.php" class="login">Log out</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
    </div>
    <div class="container">
        <h2 class="title">Profile Information</h2>

        <?php
            $sql = "select user.userEmail,user.name, user.password, user.phoneNum,user.postacode, user.city,user.streetID,user.houseNum,trainername,classname,sessionname,packagename,planname,fitnessstatus,user.image from (user join trainer on user.trainerEmail=trainer.traineremail join  class on user.classid = class.classid join session on user.sessionid = session.sessionid join  package on user.packageid = package.packageid join  plan on user.userEmail = plan.userEmail join  fitness on user.userEmail = fitness.userEmail) where user.userEmail = '$var';";
            $result = mysqli_query($con,$sql);
            if($result){
                while($row = mysqli_fetch_assoc($result)){
                    $email = $row['userEmail'];
                    $name = $row['name'];
                    $password = $row['password'];
                    $phone = $row['phoneNum'];
                    $city = $row['city'];
                    $postal = $row['postacode'];
                    $street = $row['streetID'];
                    $house = $row['houseNum'];
                    $trainer = $row['trainername'];
                    $class = $row['classname'];
                    $session = $row['sessionname'];
                    $package = $row['packagename'];
                    $plan = $row['planname'];
                    $fitness = $row['fitnessstatus'];
                    $image = $row['image'];
                    ?>

        <div class="profile-card">
            <div class="card-header">
                <h4><?php echo $name; ?></h4>
                <p><?php echo $email; ?></p>
            </div>
            <div class="card-body">
                <div class="profile-image">
                    <?php
                                // Check whether image name is available or not
                                if ($image != "") {
                                    ?>
                    <img src="user-images/<?php echo $image; ?>">
                    <button class="update-button" onclick="openPopup()">+</button>
                    <div id="uploadPopup" class="popup">
                        <div class="popup-content">
                            <span class="close" onclick="closePopup()">&times;</span>
                            <h5>Upload Image</h5>
                            <form method="post" enctype="multipart/form-data">
                                <label class="file-label">
                                    <input type="file" class="file-input" name="file-input"
                                        onchange="showFileName(event)" />
                                    <span>Select File</span>
                                </label>
                                <div id="file-name"></div>
                                <button type="submit" class="submit" name="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                    <?php
                                } else {
                                    echo "<div class='error'>Image not Added.</div>";
                                }
                                ?>
                </div>
                <div class="info-row">
                    <div class="info-label">Password:</div>
                    <div class="info-value"><?php echo $password; ?></div>
                </div>
                <div class="info-row">
                    <div class="info-label">Phone #:</div>
                    <div class="info-value"><?php echo $phone; ?></div>
                </div>
                <div class="info-row">
                    <div class="info-label">City:</div>
                    <div class="info-value"><?php echo $city; ?></div>
                </div>
                <div class="info-row">
                    <div class="info-label">Postal Code:</div>
                    <div class="info-value"><?php echo $postal; ?></div>
                </div>
                <div class="info-row">
                    <div class="info-label">Street ID:</div>
                    <div class="info-value"><?php echo $street; ?></div>
                </div>
                <div class="info-row">
                    <div class="info-label">House #:</div>
                    <div class="info-value"><?php echo $house; ?></div>
                </div>
                <div class="info-row">
                    <div class="info-label">Trainer:</div>
                    <div class="info-value"><?php echo $trainer; ?></div>
                </div>
                <div class="info-row">
                    <div class="info-label">Class:</div>
                    <div class="info-value"><?php echo $class; ?></div>
                </div>
                <div class="info-row">
                    <div class="info-label">Session:</div>
                    <div class="info-value"><?php echo $session; ?></div>
                </div>
                <div class="info-row">
                    <div class="info-label">Package:</div>
                    <div class="info-value"><?php echo $package ?></div>
                </div>
                <div class="info-row">
                    <div class="info-label">Plan:</div>
                    <div class="info-value"><?php echo $plan; ?></div>
                </div>
                <div class="info-row">
                    <div class="info-label">Fitness:</div>
                    <div class="info-value"><?php echo $fitness; ?></div>
                </div>
            </div>
            <div class="card-footer">
                <a href="userUpdateOwnPro.php?updateid=<?php echo $email; ?>" class="btn btn-primary"
                    style="font-family: 'Poppins', sans-serif;">Update</a>
            </div>
        </div>
        <?php
                }
            }
        ?>
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
    <!-- Add the necessary link for Font Awesome if you haven't already -->
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

    function openPopup() {
        document.getElementById("uploadPopup").style.display = "block";
    }

    function closePopup() {
        document.getElementById("uploadPopup").style.display = "none";
    }

    function showFileName(event) {
        const fileInput = event.target;
        const fileName = fileInput.files[0].name;
        document.getElementById("file-name").textContent = fileName;
    }
    </script>
</body>

</html>