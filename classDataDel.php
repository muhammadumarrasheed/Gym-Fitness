<?php
include "dbconn.php";
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "delete from class where classid =$id";
    $result = mysqli_query($con, $sql);
    if($result){
        header("Location: classData.php");
    }else{
        header("Location: classData.php?error = there is an error");
    }
}
 ?>