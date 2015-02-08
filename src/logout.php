<?php
session_start();
session_unset();
session_destroy();

header('Location: http://web.engr.oregonstate.edu/~kernsbi/assignment4-part1/login.php');
?>