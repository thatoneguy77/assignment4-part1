<?php
session_start();
?>
<?php
echo '<!DOCTYPE html>
<html lang="en"
<head>
<meta charset="utf-8" />
<title>login</title>
</head>
<body>';

$_SESSION["count"] = 0;

echo '<form action="http://web.engr.oregonstate.edu/~kernsbi/assignment4-part1/content1.php?" method="post">
<fieldset>
Username <input type="text" name="username"><br>
<input type="submit" value="Login"><br>
</fieldset>
</form>';
echo '</body>';
echo '</html>';
?>