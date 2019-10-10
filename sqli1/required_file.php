<?php


$server = "localhost";
$user = "defri";
$password = "defrindr";
$dbname = "challenge1";

$con = new PDO("mysql:host=".$server.";dbname=".$dbname,$user,$password) or die("Connection Error");


$looping = 30;



?>