<?php 
			include ("../include/connect.php");
			include("../include/template.php");
			renderHeader("../");
?>
<?php
	$finalSearch = $_POST['personSearch'];
	$query = "SELECT * FROM friends WHERE name LIKE '%".$finalSearch."%'";
	$searchResults = mysql_query ($query)or die ('could not complete query');
	mysql_close();
	while($newFriend = mysql_fetch_array($searchResults)){
		print("<h1>".$newFriend['name']."</h1>");
	}
?>
<?php
	renderFooter("../");
?>