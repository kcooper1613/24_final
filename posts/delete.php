<?php
	include("../include.connect.php");
	$myId= $_GET['id'];
	$query = "DELETE FROM posts WHERE id = ".$myId."";
	$results = mysql_query($query) or die("Could not complete query");
	$newPostContent = mysql_fetch_array($results);
	header("Location:index.php");
	mysql_close();
?>