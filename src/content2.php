<?php
session_start();
?>
<?php

$username = $_SESSION["username"];
if(empty($username) == true){
	header('Location: http://web.engr.oregonstate.edu/~kernsbi/assignment4-part1/login.php');
}
echo '<!DOCTYPE html>
<html lang="en"
<head>
<meta charset="utf-8" />
<title>login</title>
</head>
<body>';

echo "Click <a href='https://www.youtube.com/watch?v=dQw4w9WgXcQ'>here</a>";

echo '</body>';
echo '</html>';
?>