<?php
	include("connect.php");
	$myId= $_GET['id'];
	$query = "DELETE FROM friends WHERE id = ".$myId."";
	$results = mysql_query($query) or die("Could not complete query");
	$newFriend = mysql_fetch_array($results);
	header("Location:index.php");
	mysql_close();
?>