<html>
  <head>
    <title>Config</title>
  </head>
  <body>
		<?php

            $db_hostname = "localhost";
            $db_username = "tijdelijkDB";
            $dbpassword = "Eppoipod123";
            $db_database = "tijdelijkDB";
			

			$mysqli = mysqli_connect($db_hostname, $db_username, $dbpassword, $db_database);
			

			if (!$mysqli){
				echo "FOUT: geen connectie naar database. <br>";
				echo "errno :" . mysqli_connect_errno() . "<br>";	
				echo "error :" . mysqli_connect_error() . "<br>";
				exit;
			}
		?>
  </body>
</html>
