<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>signup</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
      
    <div class="login-form">
  <form action="register.php" method="POST">
    <h1>Join With Us!</h1>
    <div class="content">
      <div class="input-field">
        <input type="text" placeholder="First name" name="fname" required>
      </div>
      <div class="input-field">
        <input type="text" placeholder="Last name" name="lname" required>
      </div>
      <div class="input-field">
        <input type="username" placeholder="Username" name="username" required>
      </div>
      <div class="input-field">
        <input type="password" placeholder="Password" name="password" required >
      </div>
      <div class="input-field">
        <input type="email" placeholder="E-mail" name="email" required 
                   pattern="[a-z 0-9._%+-]+@[a-z 0-9.-]+\.[a-z]{2,3}$">
      </div>
        
        <div class="input-field">
        <input type="number" placeholder="Mobile no." name="Mobile no.">
      </div>
      
    </div>
      <input type="submit" value="Signup">
      <a href="index.php">Login</a>
  </form>
</div>

  </body>
</html>


