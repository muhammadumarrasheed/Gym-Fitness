<?php
include "dbconn.php";
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "delete from package where packageid =$id";
    $result = mysqli_query($con, $sql);
    if($result){
        header("Location: packageData.php");
    }else{
        header("Location: packageData.php?error = there is an error");
    }
}
 ?>