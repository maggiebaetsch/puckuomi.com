<?php session_start(); ?>

<nav>

<a href="index.php">Home</a> |
<a href="articles.php">Articles</a> |

<?php
if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){
echo '<a href="upload.php">Upload Article</a> | ';
}
?>

<?php
if(isset($_SESSION['user'])){
echo '<a href="logout.php">Logout</a>';
}
else{
echo '<a href="login.php">Login</a>';
}
?>

</nav>

<hr>