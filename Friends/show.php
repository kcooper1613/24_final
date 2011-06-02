<?php
	include ("../include/connect.php");
	include("../include/template.php");
	renderHeader("../");
?>
	<?php
		$myId = $_GET['id'];
		$query = "SELECT * FROM friends WHERE id = ".$myId;
		$results = mysql_query($query) or die ("Could not get query");
		$newFriend = mysql_fetch_array($results);
		print("<p class='showPage'>Name: ".$newFriend['name']. "</p>");
		print("<p class='showPage'> Description: ".$newFriend['description']." </p>");
		print("<p class='showPage'> Email Address: ".$newFriend['url']."</p>");
		print('<p><a href="delete.php">DELETE</a></p>');
		mysql_close();
	?>
<?php 
	renderFooter("../");
?>