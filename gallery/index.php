<html>
	<head>
		<title>Image Gallery</title>
		<script type="text/javascript" src="src/Pic.js"></script>
		<script type="text/javascript" src="src/Gallery.js"></script>
		<script type="text/javascript" src="src/PaintingLib.js"></script>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script type="text/javascript">
			
			var gallery;
			var canvas;
			var context;	
			var xMouse;
			var yMouse;
			
			function loadImages() {
				canvas = document.getElementById("c");
				context = canvas.getContext("2d");
				gallery = new Gallery();
				gallery.createPics("one, two, three, four, five, six, seven, eight, nine, ten, eleven, twelve");
				canvas.addEventListener("mousedown", clickCanvas, false)
			}
			
			function clickCanvas(e) {
				gallery.selectPic(e.offsetX, e.offsetY);
			}
			
		</script>
			<?php 
			include ("../include/connect.php");
			include("../include/template.php");
			renderHeader("../");
		?>
	</head>
	
	<body onload="loadImages();">
	
		<canvas id="c" width="800" height="600"></canvas>
		<div style="display: none;">
			<img src="../images/blurBox.jpg" id="box" />
			<img src="../images/dripChocolate.jpg" id="chocolate" />
			<img src="../images/family.jpg" id="family" />
			<img src="../images/hairCut.jpg" id="small kid" />
			<img src="../images/reach.jpg" id="blind" />
			<img src="../images/tunnelNight.jpg" id="spin" />
			<img src="../images/stickUp.jpg" id="robber" />
			<img src="../images/macCamera.jpg" id="black and white" />
			<img src="../images/nightLight.jpg" id="light" />
			<img src="../images/woods.jpg" id="trees" />
			<img src="../images/selfPortrait.jpg" id="jordan" />
			<img src="../images/lobster.jpg" id="lobster" />
		</div>
		<?php 
			renderFooter("../");
		?>
	</body>
</html>