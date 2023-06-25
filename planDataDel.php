<?php
include "dbconn.php";
if(isset($_GET['delname'])){
    $userEmail = $_GET['delname'];
    $sql = "delete from plan where userEmail ='$userEmail'";
    $result = mysqli_query($con, $sql);
    if($result){
        header("Location: planData.php");
    }else{
        header("Location: planData.php?error = there is an error");
    }
}
 ?>