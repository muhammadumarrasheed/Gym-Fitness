<?php
$con = new mysqli('localhost', 'root', '', 'gymsystem');
if(!$con){
    echo "Database connection failed";
}
?>