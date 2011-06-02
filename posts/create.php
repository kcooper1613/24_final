<?php
	include ("../include/connect.php");
	$newComment=$_POST['newPostComment'];
	$newTitle= $_POST['newPostTitle'];
	$newTag=$_POST['newPostTag'];
	$query = "INSERT INTO posts(content, created_at, tags, title) VALUES ('".$newComment."', NOW(), '".$newTag."', '".$newTitle."');";
	print($query);
	$results= mysql_query($query) or die("Could not complete query");
	mysql_close();
	header("Location:index.php");
?>
