<?php
	include ("../include/connect.php");
	include("../include/template.php");
	renderHeader("../");
?>
<script type="text/javascript">
function checkUserName (){
				var response=document.getElementById("friendName").value;
					if (response==""||response==""){
						document.getElementById("nameFeedback").innerHTML="<img src='../images/warning.png' alt='wrong'>Please Try Again";
						var element=document.getElementById("nameFeedback");
						element.className="highlightWarning";
					}
					else{	
						document.getElementById("nameFeedback").innerHTML="<img src='../images/confirm.png'alt='correct'>";
					}
					
			}
			/*lastname*/
			function checkUserDes (){
			var response=document.getElementById("newFriendDescription").value;
				if(response==""){
					document.getElementById("descriptionFeedback").innerHTML="<img src='../images/warning.png' alt='wrong'>Please Try Again";
					var element=document.getElementById("descriptionFeedback");
					element.className="highlightWarning";
				}
				else{
					document.getElementById("descriptionFeedback").innerHTML="<img src='../images/confirm.png' alt='right'>";
				}
			
			}
			function checkUserEmail(){
				var x=document.forms["newPost"]["email"].value
				var atpos=x.indexOf("@");
				var dotpos=x.lastIndexOf(".");
				if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length){
				  alert("Not a valid e-mail address");
				  document.getElementById("emailFeedBack").innerHTML="<img src='../images/warning.png' alt='wrong'>Please Try Again";
				  var element=document.getElementById("emailFeedBack");
				  element.className="highlightWarning";
				  }else{
					document.getElementById("emailFeedBack").innerHTML="<img src='../images/confirm.png' alt='right'>";
				}
			}


</script>
<div id='content'>
			<div id='rightContentFriends'>
				<form action="create.php" name="newPost" method="post">
					<p id="prompt">Please Become a Member</p>
					<p>Name</p>
					<input type="text" name="newFriendName" id="friendName" onchange="checkUserName();"></input>
					<p id="nameFeedback"></p>
					<p>Description</p>
					<input type="text" id="newFriendDescription" onchange="checkUserDes();"></input>
					<p id="descriptionFeedback"></p>
					<p>Email Address</p>
					<input type="text" id="newFriendEmail" onchange="checkUserEmail();" name="email"></input>
					<p id="emailFeedBack"></p>
					<input type="submit" name="newFriendSubmit" value="Become a Member!!!!"/>
				</form>
			</div>
			
				<div id='leftContentFriends'>	
					<h2>Friends</h2>
					<?php 
						$results= mysql_query("SELECT * FROM friends") or die("Could not complete query");
						mysql_close();
						while ($newFriend = mysql_fetch_array($results)) {
						print("<p id='FriendNameList'><a href='show.php?id=".$newFriend['id']."'>".$newFriend['name']." ".$newFriend['description']."</a></p>");
						}
					?>			
				</div>
			<br class='clearFloat' />
		</div>
<?php
	renderFooter("../");
?>