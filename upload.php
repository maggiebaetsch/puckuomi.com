<?php include "admin_auth.php"; ?>
<?php include "nav.php"; ?>

<h2>Upload Article</h2>

<form action="save_article.php" method="POST">

Title<br>
<input type="text" name="title"><br><br>

Author<br>
<input type="text" name="author"><br><br>

Category<br>

<select name="category">

<option value="NHL">NHL</option>
<option value="History">History</option>
<option value="Players">Players</option>
<option value="Analytics">Analytics</option>

</select>

<br><br>

Content<br>

<textarea name="content" rows="12" cols="60"></textarea>

<br><br>

<button type="submit">Publish Article</button>

</form>