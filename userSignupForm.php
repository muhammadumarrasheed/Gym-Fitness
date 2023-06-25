<?php
include "dbconn.php";
if(isset($_POST['submit'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
  $email = validate($_POST['email']);
  $name = validate($_POST['name']);
  $password = validate($_POST['password']);
  $phone = validate($_POST['phoneNum']);
  $city = validate($_POST['city']);
  $postal = validate($_POST['postal']);
  $street = validate($_POST['streetID']);
  $house = validate($_POST['house']);
  $trainer = validate($_POST['Trainer']);
  $session = validate($_POST['session']);
  $package = validate($_POST['package']);
  $class = validate($_POST['class']);
  $sql =  "SELECT * from `trainer` where trainername = '$trainer'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($result);
  $trainerEmail = $row['traineremail'];
  $sql =  "SELECT * from `session` where sessionname = '$session'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($result);
  $sessionid = $row['sessionid'];
  $sql =  "SELECT * from `class` where classname = '$class'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($result);
  $classid = $row['classid'];
  $sql =  "SELECT * from `package` where packagename = '$package'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($result);
  $packageid = $row['packageid'];
  if (!empty($_FILES['user_image']['name'])) {
         $image = $_FILES['user_image']['name'];
         $target_dir = "user-images/";
         $target_file = $target_dir . basename($image);
          $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
         $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');
        if (in_array($imageFileType, $allowedTypes)) {
            move_uploaded_file($_FILES['user_image']['tmp_name'], $target_file);
        } else {
            echo "Error: Only JPG, JPEG, PNG, and GIF files are allowed.";
        }
    }

     $sql = "insert into user(userEmail,name,password,phoneNum,postacode,city,streetID,houseNum,sessionid,packageid,classid,trainerEmail,image)
           values('$email','$name','$password','$phone','$postal','$city','$street','$house','$sessionid','$packageid','$classid','$trainerEmail','$image')"; //user insert query
     $result = mysqli_query($con, $sql);
  if($result){
    $planname = "Unavailabe";
    $sql = "insert into plan(userEmail,planname)
           values('$email', '$planname')"; //insert in plan 
     $result = mysqli_query($con, $sql);
     $sql = "insert into fitness(userEmail,fitnessstatus)
           values('$email', '$planname')"; // insert in fitness
     $result = mysqli_query($con, $sql);
    header("Location: allLogin.php");
  }else{
    header("Location: allLogin.php?error = Constraint voilation");
  }
}
?>
<?php
$query = "SELECT * FROM `trainer`";
$result2 = mysqli_query($con, $query);
$options = "";
while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}

$query = "SELECT * FROM `session`";
$result3 = mysqli_query($con, $query);
$options1 = "";
while($row2 = mysqli_fetch_array($result3))
{
    $options1 = $options1."<option>$row2[1]</option>";
}

$query = "SELECT * FROM `package`";
$result4 = mysqli_query($con, $query);
$options2 = "";
while($row2 = mysqli_fetch_array($result4))
{
    $options2 = $options2."<option>$row2[1]</option>";
}

$query = "SELECT * FROM `class`";
$result4 = mysqli_query($con, $query);
$options3 = "";
while($row2 = mysqli_fetch_array($result4))
{
    $options3 = $options3."<option>$row2[1]</option>";
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
    <title>User Sign up</title>
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

.myForm {
    display: flex;
    flex-direction: column;
    border-radius: 3px;
    padding: 1em;
    padding: 100px 300px;
    background-image: url("./images/login.jpeg");

}

.row {
    display: flex;
    justify-content: stretch;
    margin-bottom: 1em;
    background-color: rgba(255, 255, 255, 0.8);

}

.column {
    flex: 1;
    padding: 0 1em;
}

.form-group {
    margin-bottom: 20px;
}

.form-label {
    display: block;
    margin-bottom: 4px;
}

.form-control {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 200px;
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
            <a href="home.php">Home</a>
            <a class="active" href="signupForm.php">Sign Up</a>
            <a href=" allLogin.php" class="login">Log In</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
    </div>


    <form class="myForm" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">

        <div class="row">
            <center>
                <h2 class="card-title" style="color:royalblue;
                font-weight: bolder; padding: 10px;">Sign up Form</h2>
            </center>
            <div class="column" id="colunm1">
                <div class="form-group">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" placeholder="Enter your email address" name="email"
                        autocomplete="off">
                    <span id="email-error" class="error"></span>
                </div>
                <div class="form-group">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" placeholder="Enter your name" name="name"
                        autocomplete="off">
                    <span id="name-error" class="error"></span>
                </div>
                <div class="form-group">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="Enter password" name="password"
                        autocomplete="off">
                    <span id="password-error" class="error"></span>
                </div>

                <div class="form-group">
                    <label class="form-label">Phone Number</label>
                    <input type="text" class="form-control" placeholder="Enter your phone number" name="phoneNum"
                        autocomplete="off">
                    <span id="phoneNum-error" class="error"></span>
                </div>

                <div class="form-group">
                    <label class="form-label">City name</label>
                    <input type="text" class="form-control" placeholder="Enter city name" name="city"
                        autocomplete="off">
                    <span id="city-error" class="error"></span>
                </div>

                <div class="form-group">
                    <label class="form-label">Postal Code</label>
                    <input type="text" class="form-control" placeholder="Enter postal code" name="postal"
                        autocomplete="off">
                    <span id="postal-error" class="error"></span>
                </div>

                <div class="form-group">
                    <label class="form-label">Street ID</label>
                    <input type="text" class="form-control" placeholder="Enter street ID" name="streetID"
                        autocomplete="off">
                    <span id="streetID-error" class="error"></span>
                </div>
            </div>
            <div class="column" id="colunm2">
                <div class="form-group" <label class="form-label">House #.</label>
                    <input type="text" class="form-control" placeholder="Enter house #" name="house" autocomplete="off">
                    <span id="house-error" class="error"></span>
                </div>

                <div class="form-group">
                    <label class="form-group">Trainer</label>
                    <select name="Trainer" class="form-control">
                        <?php echo $options; ?>
                    </select>
                    <span id="trainer-error" class="error"></span>
                </div>

                <div class="form-group">
                    <label class="form-group">Session</label>
                    <select name="session" class="form-control">
                        <?php echo $options1; ?>
                    </select>
                    <span id="session-error" class="error"></span>
                </div>

                <div class="form-group">
                    <label class="form-group">Package</label>
                    <select name="package" class="form-control">
                        <?php echo $options2; ?>
                    </select>
                    <span id="package-error" class="error"></span>
                </div>

                <div class="form-group">
                    <label class="form-group">Class</label>
                    <select name="class" class="form-control">
                        <?php echo $options3; ?>
                    </select>
                    <span id="class-error" class="error"></span>
                </div>
                <div class="form-group">
                    <label class="form-label">Profile Image</label>
                    <input type="file" class="form-control" name="user_image" accept="image/*">
                </div>
            </div>
        </div>
        <button type="submit" class="submit" name="submit">Sign Up</button>
    </form>

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
        var email = document.forms[0].email.value;
        var name = document.forms[0].name.value;
        var password = document.forms[0].password.value;
        var phoneNum = document.forms[0].phoneNum.value;
        var city = document.forms[0].city.value;
        var postal = document.forms[0].postal.value;
        var streetID = document.forms[0].streetID.value;
        var house = document.forms[0].house.value;
        var trainer = document.forms[0].Trainer.value;
        var session = document.forms[0].session.value;
        var package = document.forms[0].package.value;
        var clas = document.forms[0].class.value;
        var image = document.forms[0].user_image;
        var isValid = true;
        var errorFields = document.getElementsByClassName('error');
        for (var i = 0; i < errorFields.length; i++) {
            errorFields[i].textContent = '';
        }

        // Email validation
        if (email === '') {
            document.getElementById('email-error').textContent = 'Please enter your email address.';
            isValid = false;
        }

        // Name validation
        if (name === '') {
            document.getElementById('name-error').textContent = 'Please enter your name.';
            isValid = false;
        }

        // Password validation
        if (password === '') {
            document.getElementById('password-error').textContent = 'Please enter a password.';
            isValid = false;

        } else if (!isPasswordValid(password)) {
            document.getElementById('password-error').textContent =
                'Password must be 8-16 characters long and contain at least 1 uppercase letter, 1 lowercase letter, and 1 special character.';
            isValid = false;
        }

        // Phone number validation
        if (phoneNum === '') {
            document.getElementById('phoneNum-error').textContent = 'Please enter your phone number.';
            isValid = false;
        }

        // City validation
        if (city === '') {
            document.getElementById('city-error').textContent = 'Please enter your city name.';
            isValid = false;
        }

        // Postal code validation
        if (postal === '') {
            document.getElementById('postal-error').textContent = 'Please enter the postal code.';
            isValid = false;
        }

        // Street ID validation
        if (streetID === '') {
            document.getElementById('streetID-error').textContent = 'Please enter the street ID.';
            isValid = false;
        }

        // House number validation
        if (house === '') {
            document.getElementById('house-error').textContent = 'Please enter the house number.';
            isValid = false;
        }

        // Trainer validation
        if (trainer === '') {
            document.getElementById('trainer-error').textContent = 'Please select a trainer.';
            isValid = false;
        }

        // Session validation
        if (session === '') {
            document.getElementById('session-error').textContent = 'Please select a session.';
            isValid = false;
        }

        // Package validation
        if (package === '') {
            document.getElementById('package-error').textContent = 'Please select a package.';
            isValid = false;
        }

        // Class validation
        if (clas === '') {
            document.getElementById('class-error').textContent = 'Please select a class.';
            isValid = false;
        }
        if (image.files.length === 0) {
            alert('Select an image file');
            isValid = false;
        }

        return isValid;
    }

    function isPasswordValid(password) {
        var pattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,16}$/;
        return pattern.test(password);
    }
    </script>
</body>

</html>


<!-- also add javascript that user enter password characters 8-16 and also include atleast 1 uppercae letter 1 lowercase and -->
<!-- 1 special character -->