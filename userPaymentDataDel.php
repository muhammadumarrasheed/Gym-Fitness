<?php
include "dbconn.php";
if(isset($_GET['delname'])){
    $userEmail = $_GET['delname'];
    $sql = "delete from `userpayment` where userEmail ='$userEmail'";
    $result = mysqli_query($con, $sql);
    if($result){
        header("Location: userPaymentData.php");
    }else{
        header("Location: userPaymentData.php?error = there is an error");
    }
}
 ?>