<?php include "nav.php"; ?>

<?php

include "db.php";

$id = $_GET['id'];

$sql = "SELECT * FROM articles WHERE id=$id";

$result = $conn->query($sql);

$row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html>

<head>
<title><?php echo $row['title']; ?></title>
</head>

<body>

<h1><?php echo $row['title']; ?></h1>

<p>
Author: <?php echo $row['author']; ?> |
Category: <?php echo $row['category']; ?> |
Date: <?php echo $row['date_posted']; ?>
</p>

<hr>

<p>
<?php echo nl2br($row['content']); ?>
</p>

</body>
</html>