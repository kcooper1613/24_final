<?php 
			include ("../include/connect.php");
			include("../include/template.php");
			renderHeader("../");
?>
	<div id="contentSearch">
	    <form action="searchResults.php" name="newSearch" method="post">
			<p id="searchName">Feel free to search for a person</p><input type="text" name="personSearch" />
			<input type="submit" name="nameSearch" value="Search!"/>
		</form>
	</div>
<?php
	renderFooter("../");
?>