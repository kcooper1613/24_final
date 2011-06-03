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
			<img src="../images/blurBox.jpg" id="one" />
			<img src="../images/dripChocolate.jpg" id="two" />
			<img src="../images/family.jpg" id="three" />
			<img src="../images/hairCut.jpg" id="four" />
			<img src="../images/reach.jpg" id="five" />
			<img src="../images/tunnelNight.jpg" id="six" />
			<img src="../images/stickUp.jpg" id="seven" />
			<img src="../images/macCamera.jpg" id="eight" />
			<img src="../images/nightLight.jpg" id="nine" />
			<img src="../images/woods.jpg" id="ten" />
			<img src="../images/selfPortrait.jpg" id="eleven" />
			<img src="../images/lobster.jpg" id="twelve" />
		</div>
		<?php 
			renderFooter("../");
		?>
	</body>
</html>