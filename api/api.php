<?php

$host = "localhost"; 
$user = "antongek_form"; 
$password = "antongloom777"; 
$dbname = "antongek_form"; 

$conn = mysqli_connect($host, $user, $password,$dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$res = array('error' => false);






$conn->close();

header("Content-type: application/json");
echo json_encode($res);
die();