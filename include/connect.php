<?php	
	$server = "10.194.111.8";
	$username = "user_a37d7be1";
	$password = "xV2324&;p$^IyR";
	$database = "db_a37d7be1";
	mysql_connect($server, $username, $password) or die ("Could not connect to server");
	mysql_select_db($database) or die ("Could not connect to database");
?>