<?php
echo '<!DOCTYPE html>
<html lang="en"
<head>
<meta charset="utf-8" />
<title>loopback</title>
</head>
<body>';
$getTester = 0;
$postTester = 0;
if($_SERVER['REQUEST_METHOD'] === 'GET'){
	if(empty($_GET)){
		$holder = array(
		"Type" => "GET",
		"parameters" => "null"
	);
	echo json_encode($holder);
	}
	else{
		$holder = array("Type" => "GET");
		$parameters = array();
		foreach($_GET as $key=>$value){
			if($value == '0'){
				$value = '0';
			}
			elseif(empty($value) == true){
				$value = "undefined";
			}
			$parameters[$key] = $value;
		}
		$holder["parameters"] = $parameters;
		$jsonHolder = json_encode($holder);
		echo $jsonHolder;
		$getTester++;
	}
}
elseif($_SERVER['REQUEST_METHOD'] === 'POST'){
	if(empty($_POST)){
		$holder = array(
		"Type" => "POST",
		"parameters" => "null"
	);
	echo json_encode($holder);
	}
	else{
		$holder = array("Type" => "POST");
		$parameters = array();
		foreach($_POST as $key=>$value){
			if($value == '0'){
				$value = '0';
			}
			elseif(empty($value) == true){
				$value = "undefined";
			}
			$parameters[$key] = $value;
		}
		$holder["parameters"] = $parameters;
		$jsonHolder = json_encode($holder);
		echo $jsonHolder;
		$postTester++;
	}
}
//if($_SERVER['REQUEST_METHOD'] === 'GET') && empty($_GET) && $postTester < 1){
//	$holder = array(
//		"Type" => "GET",
//		"parameters" => "null"
//	);
//	echo json_encode($holder);
//}
//if($_SERVER['REQUEST_METHOD' === 'POST']) && empty($_POST) && $getTester < 1){
//	$holder = array(
//		"Type" => "POST",
//		"parameters" => "null"
//	);
//	echo json_encode($holder);
//}

echo '</body>';
echo '</html>';
?>