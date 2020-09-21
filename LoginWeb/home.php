<?php
	
  if(session_id() == '' || !isset($_SESSION)){session_start();}

  include 'config.php';


?>


<html>
<head>
	<title>Audible Book!</title>
</head>
<body>

              <p><?php echo '<h3>Hello ' .$_SESSION['username'] .'</h3>'; ?></p>

             <p>Welcome in the world of Books!</p>
 
</body>
</html>