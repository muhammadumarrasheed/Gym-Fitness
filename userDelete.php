<?php
include "dbconn.php";
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "delete from user where userEmail = '$id'"; // delete user
    $result = mysqli_query($con, $sql);
    if($result){
        header("Location: userData.php");
    }else{
        header("Location: userData.php?error = there is an error");
    }
}
 ?>