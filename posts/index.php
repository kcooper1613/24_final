<?php 
	include ("../include/connect.php");
	include("../include/template.php");
	renderHeader("../");
?>
		<div id='content'>
			<div id='rightContent'>
				<form action="create.php" name="newPost" method="post">
					<p id="prompt">Please post a comment about my photos</p>
					<p>Title</p>
					<textArea type="text" name="newPostTitle" ></textArea>
					<p>Comment</p>
					<textArea type="text" name="newPostComment" ></textArea>
					<p>Tags</p>
					<textArea type="text" name="newPostTag" ></textArea>
					<input type="submit" name="newPostSubmit" value="Submit your Comment"/>
				</form>
			</div>
				<div id='leftContent'>	
					<?php 
						$results= mysql_query("SELECT * FROM posts") or die("Could not complete query");
						mysql_close();
						while ($newComment = mysql_fetch_array($results)) {
							print("<p id='comment'><a href='show.php?id=".$newComment['id']."'> ".$newComment['title']." ".$newComment['content']."</a></p>");
						}
					?>			
				</div>
			<br class='clearFloat' />
		</div>
<?php 
	renderFooter("../");
?>