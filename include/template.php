<?php
	function renderHeader($path){
		echo "<html>
				<head><title>Jordan's Photos</title>
				<link type='text/css' rel='stylesheet' href='".$path."finalCSS.css'/>
				</head>
				<body>
				<div id='header'>
					<ul class='headerNav'>
						<li class='link1'><a href='../posts/index.php'>Home</a></li>
						<li class='link2'><a href='../gallery/index.php'>Photos</a></li>
						<li class='link3'><a href='../posts/about.php'>About</a></li>
						<li class='link5'><a href='../friends/index.php'>Friends</a></li>
						<li class='link6'><a href='../include/searchFunction.php'>Search</a></li>
					</ul>
						<h1>Jordan Taffet Photography</h1>
				</div>
				";
	}
	function renderFooter($path){
		echo "<div id='footer'>
			<p>A Jordan Taffet and Kevin Cooper production</p>
			</div>
			</body>
			</html>
		";
	}

?>