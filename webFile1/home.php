<?php
	include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		  $result = $mysqli->query('SELECT * FROM user');
          if($result === FALSE){
            die(mysql_error());
          }

          if($result){

            while($obj = $result->fetch_object()) {

            	echo '<p>welcome '.$obj->username.'</p>';
            }

          }
	?>
</body>
</html>