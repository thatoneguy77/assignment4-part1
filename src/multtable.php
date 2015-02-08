<?php
echo '<!DOCTYPE html>
<html lang="en"
<head>
<meta charset="utf-8" />
<title>multtable</title>
</head>
<body>';
$badData = 0;
$minMultiplicand = htmlspecialchars($_GET["min-multiplicand"]);
$maxMultiplicand = htmlspecialchars($_GET["max-multiplicand"]);
$minMultiplier = htmlspecialchars($_GET["min-multiplier"]);
$maxMultiplier = htmlspecialchars($_GET["max-multiplier"]);


if(is_null($minMultiplier)===true){
	echo "<p>Missing parameter min-multiplier";
	$badData++;
}
if(is_null($maxMultiplier)===true){
	echo "<p>Missing parameter max-multiplier";
	$badData++;
}
if(is_null($minMultiplicand)===true){
	echo "<p>Missing parameter min-multiplicand";
	$badData++;
}
if(is_null($maxMultiplicand)===true){
	echo "<p>Missing parameter max-multiplicand";
	$badData++;
}
if(is_numeric($minMultiplier)===false){
	echo "<p>min-multiplier is not a number";
	$badData++;
}
if(is_numeric($maxMultiplier)===false){
	echo "<p>max-multiplier is not a number";
	$badData++;
}
if(is_numeric($minMultiplicand)===false){
	echo "<p>min-multiplicand is not a number";
	$badData++;
}
if(is_numeric($maxMultiplicand)===false){
	echo "<p>max-multiplicand is not a number";
	$badData++;
}

if($minMultiplicand > $maxMultiplicand){
  echo "<p>Minimum multiplicand is greater than maxium multiplicand.";
  $badData++;
}
if($minMultiplier > $maxMultiplier){
  echo "<p>Minimum multiplier is greater than maxium multiplier.";
  $badData++;
}
if($badData > 0){
	exit();
}
$multTable = array();
$multiplicand = array();
$multiplier = array();
$multiplier[] = " ";
$multiplier[] = " ";

for($i = $minMultiplier; $i <= $maxMultiplier; $i++){
	$multiplier[] = $i;
}
for($i = $minMultiplicand; $i <= $maxMultiplicand; $i++){
	$multiplicand[] = $i;
}
for($j = 0; $j < count($multiplicand); $j++){
	for($i = 2; $i < count($multiplier); $i++){
		$multTable[] = ($multiplier[$i] * $multiplicand[$j]);
	}
}
echo '<p>
<table border="1">';
for($i = 0; $i < count($multiplier); $i++){
	echo '<tr>';
}
foreach($multiplier as $value){
	echo '<td>' . $value;// . '<td>';
}
$k=0;
for($i = 0; $i < count($multTable); $i++){
	if(($i%(count($multiplier)-2))==0){
		echo '<td>';
		echo '<tr><td>';
		echo '<td>' . $multiplicand[$k];
		echo '<td>' . $multTable[$i];
		$k++;
	}
	else{
		echo '<td>' . $multTable[$i];
	}
}
echo '<td>';
for($i = 0; $i < count($multiplier); $i++){
	echo '<tr>';
}
echo '</table>';
echo '</body>';
echo '</html>';
?>