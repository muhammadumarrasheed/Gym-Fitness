<?php
include "dbconn.php";
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "delete from trainer where traineremail = '$id'";
    $result = mysqli_query($con, $sql);
    if($result){
        header("Location: trainerData.php");
    }else{
        header("Location: trainerData.php?error = there is an error");
    }
}
 ?>