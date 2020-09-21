<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}


include 'config.php';

$username = $_POST["username"];
$password = $_POST["password"];
$flag = 'true';
//$query = $mysqli->query("SELECT email, password from users");

$result = $mysqli->query('SELECT username,password from user');

if($result === FALSE){
  die(mysql_error());
}

if($result){
  while($obj = $result->fetch_object()){
    if($obj->username === $username && $obj->password === $password) {

      $_SESSION['username'] = $username;
      
      header("location:home.php");
    } else {

        if($flag === 'true'){
          redirect();
          $flag = 'false';
        }
    }
  }
}

function redirect() {
  echo '<h1>Invalid Login! Redirecting...</h1>';
  
}


?>
