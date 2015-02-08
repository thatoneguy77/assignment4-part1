<?php
session_start();
?>
<?php

if(is_null($_SESSION["count"])){
	header('Location: http://web.engr.oregonstate.edu/~kernsbi/assignment4-part1/login.php');
}

echo '<!DOCTYPE html>
<html lang="en"
<head>
<meta charset="utf-8" />
<title>login</title>
</head>
<body>';
if($_SESSION["count"] > 0){
	$username = $_SESSION["username"];
}
elseif($_SESSION["count"] == 0){
	$username = htmlspecialchars($_POST["username"]);
	$username = ltrim($username);
	$_SESSION["username"] = $username;
}


if(empty($username) == true){
	echo "A username must be entered. Click <a href='http://web.engr.oregonstate.edu/~kernsbi/assignment4-part1/login.php'>here</a> to return to the login screen.";
	exit();
}

$counter = $_SESSION["count"];

echo "Hello " . $_SESSION["username"] . " you have visited this page " . $_SESSION["count"] . " time(s) before.<p>  Click <a href='http://web.engr.oregonstate.edu/~kernsbi/assignment4-part1/logout.php'>here</a>  to logout.<p>";

echo "Click <a href='http://web.engr.oregonstate.edu/~kernsbi/assignment4-part1/content2.php'>here</a> to go to content2.php";

$_SESSION["loginAttempt"] = true;

$counter++;

$_SESSION["count"] = $counter;

echo '</body>';
echo '</html>';
?>