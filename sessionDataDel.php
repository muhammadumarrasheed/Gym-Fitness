<?php
include "dbconn.php";
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "delete from session where sessionid =$id";
    $result = mysqli_query($con, $sql);
    if($result){
        header("Location: sessionData.php");
    }else{
        header("Location: sessionData.php?error = there is an error");
    }
}
 ?>