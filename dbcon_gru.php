<!DOCTYPE html>
<html>
<head>
	<title>Database Connection</title>
</head>
<body>
	<?php 
		$servername = "tsuts.tskoli.is";
		$username = "GRU_H3";
		$password = "mypassword";
		$databaseName = "gru_h3_gru";

		try 
		{
			$Connection = new PDO("mysql:host=$servername;dbname=$databaseName", $username, $password);
		    // set the PDO error mode to exception
		    $Connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
		}
		catch(PDOException $e)
		{
			echo "Connection failed: " . $e->getMessage();
		}
	?>
</body>
</html>