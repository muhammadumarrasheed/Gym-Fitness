<?php
include "dbconn.php";
if(isset($_GET['delname'])){
    $trainerEmail = $_GET['delname'];
    $sql = "delete from `trainerpayment` where trainerEmail ='$trainerEmail'";
    $result = mysqli_query($con, $sql);
    if($result){
        header("Location: trainerPaymentData.php");
    }else{
        header("Location: trainerPaymentData.php?error = there is an error");
    }
}
 ?>