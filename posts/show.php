<?php
	include ("../include/connect.php");
	include("../include/template.php");
	renderHeader("../");
?>
	<?php
		$myId = $_GET['id'];
		$query = "SELECT * FROM posts WHERE id = ".$myId;
		$results = mysql_query($query) or die ("Could not get query");
		$newPostContent = mysql_fetch_array($results);
		print("<p class='showPage'>Title: ".$newPostContent['title']. " Content: ".$newPostContent['content']." Tags: ".$newPostContent['tags']."</p>");
		print('<p id="delete"><a href="../posts/delete.php">DELETE</a></p>');
		mysql_close();
	?>
<?php 
	renderFooter("../");
?>
