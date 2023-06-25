<?php
include "dbconn.php";
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "delete from equipment where id =$id";
    $result = mysqli_query($con, $sql);
    if($result){
        header("Location: equipmentData.php");
    }else{
        header("Location: equipmentData.php?error = there is an error");
    }
}
 ?>