<?php

$server ="localhost";
$username ="root";
$password ="";
$conn = new mysqli ($server, $username,$password);
if($conn->connect_error){
    die("connection failed");
}
echo "connection success";
$conn->close();
?>