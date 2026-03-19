<?php

include "admin_auth.php";
include "db.php";

$title = $_POST['title'];
$author = $_POST['author'];
$content = $_POST['content'];
$category = $_POST['category'];

$sql = "INSERT INTO articles (title,author,content,category)
VALUES ('$title','$author','$content','$category')";

$conn->query($sql);

header("Location: articles.php");

?>