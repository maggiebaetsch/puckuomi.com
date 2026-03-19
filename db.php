<?php

$conn = new mysqli("localhost","root","","puckuomi");

if($conn->connect_error){
die("Database connection failed");
}

?>