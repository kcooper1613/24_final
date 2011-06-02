<?php
	include ('../include/connect.php');
	$newName=$_POST['newFriendName'];
	$newDescription= $_POST['newFriendDescription'];
	$newEmail=$_POST['newFriendEmail'];
	$query = "INSERT INTO friends(name, description, url) VALUES ('".$newName."', '".$newDescription."', '".$newEmail."');";
	print($query);
	$results= mysql_query($query) or die("Could not complete query");
	mysql_close();
	header("Location:index.php");
?>
