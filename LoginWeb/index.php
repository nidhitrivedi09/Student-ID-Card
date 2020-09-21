<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}


?>


<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
      
    <div class="login-form">
  <form action="verify.php" method="POST">
    <h1>Login</h1>
    <div class="content">
      <div class="input-field">
        <input type="text" placeholder="Username" name="username">
      </div>
      <div class="input-field">
        <input type="password" placeholder="Password" name="password">
      </div>
    </div>
      <input type="submit" value="Login">
      <a style="margin-bottom: -17px;" href="signup.php">Sign up</a>
  </form>
</div>

  </body>
</html>


