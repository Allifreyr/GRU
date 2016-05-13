<?php
  	
  	include 'dbcon_gru.php';
  	$sql = "SELECT Link FROM pictures WHERE Picture_ID=1";
 	$result = mysql_query("$sql");
  	$row = mysql_fetch_assoc($result);
  	mysql_close($Connection);

  	/*while($row = mysql_fetch_array($result)) 
  	{
 		echo "img src='",$row['Link'],"'/>";
	}*/
  	echo $row['Link'];
?>