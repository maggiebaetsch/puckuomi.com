<?php

include "db.php";

$password = password_hash("admin123", PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username,password,role)
VALUES ('admin','$password','admin')";

$conn->query($sql);

echo "Admin created.";

?>