<?php include "nav.php"; ?>

<!DOCTYPE html>
<html>

<head>
<title>Articles</title>
</head>

<body>

<h2>Articles</h2>

<form method="GET">

Category:

<select name="category">

<option value="">All</option>
<option value="NHL">NHL</option>
<option value="History">History</option>
<option value="Players">Players</option>
<option value="Analytics">Analytics</option>

</select>

<button type="submit">Filter</button>

</form>

<hr>

<?php

include "db.php";

$category = $_GET['category'] ?? "";

if($category != ""){
$sql = "SELECT * FROM articles WHERE category='$category' ORDER BY date_posted DESC";
}
else{
$sql = "SELECT * FROM articles ORDER BY date_posted DESC";
}

$result = $conn->query($sql);

while($row = $result->fetch_assoc()){

echo "<p>";

echo "<a href='article.php?id=".$row['id']."'>";
echo $row['title'];
echo "</a>";

echo " - ".$row['category'];
echo " - ".$row['date_posted'];

echo "</p>";

}

?>

</body>
</html>