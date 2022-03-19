<?php

$server="localhost";
$databasename="petraair_app";
$username="petraair_admin";
$password="?0017581994!pE";

// Create connection
$conn = new mysqli($server, $username, $password, $databasename);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// else{
//     echo"successfly";
// }

// $dsn ="mysql:host=$server;dbname=$databasename";

// try
// {
// 	$connect = new PDO($dsn,$username,$password);
// 	$connect->exec("SET character_set_connection = 'utf8'");
// 	$connect->exec("SET NAMES 'UTF8'");
// }

// catch(PDOException $error)
// {
// 	echo "unable to connect".$error->getMessage();
// }
?>