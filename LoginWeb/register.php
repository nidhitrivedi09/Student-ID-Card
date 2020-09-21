<?php

include 'config.php';

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

if($mysqli->query("INSERT INTO users (fname, lname, username, email, password) VALUES('$fname', '$lname', '$username', '$email', '$password')")){
	
	echo '<br/>';
}

header ("location:index.php");

?>
