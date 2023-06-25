<?php
include "dbconn.php";
if(isset($_GET['deleteid'])){
    $userEmail = $_GET['deleteid'];
    $sql = "delete from `fitness` where userEmail ='$userEmail'";
    $result = mysqli_query($con, $sql);
    if($result){
        header("Location: fitnessData.php");
    }else{
        header("Location: fitnessData.php?error = there is an error");
    }
}
 ?>