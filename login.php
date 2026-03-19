<?php
include "db.php";
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

$row = $result->fetch_assoc();

if(password_verify($password,$row['password'])){

$_SESSION['user'] = $row['username'];
$_SESSION['role'] = $row['role'];

header("Location: index.php");

}

}
?>

<h2>Login</h2>

<form method="POST">

Username<br>
<input type="text" name="username"><br><br>

Password<br>
<input type="password" name="password"><br><br>

<button type="submit">Login</button>

</form>