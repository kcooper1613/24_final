/**
  * Gallery constructor. Instantiate a new array and an empty focusPic variable.
  */
function Gallery() {
	this.pics = new Array();
	this.focusPic = null ;
	var galleryInstance = this;
	setInterval(function() {galleryInstance.paint()}, 25);
}

/**
  * Given a string of photo IDs, e.g. "one, two, three, four"
  * this method will split the list of names into an array, create a new pic
  * for every ID, and place it accordingly in a 4x3 grid of 200px by 200px thumbnails
  * @param newPictures a string of ID names separated by a comma and a space
  */
Gallery.prototype.createPics = function(newPictures) {
	this.picsID = newPictures.split(", ");
	var colCounter = 0;
	var rowCounter = 0;
	var PPR = 4;
	for(i = 0; i < this.picsID.length ; i++){
		var newY = rowCounter * 203;
		var newX = colCounter * 205 + 5 ;
		var p =new Pic(this.picsID[i], newX, newY);
		this.pics.push(p);
		colCounter++;
		if(colCounter == PPR){
			colCounter = 0;
			rowCounter++;
		}
	}
}

/**
  * Given x and y coordinates, zoom in or zoom out (or do nothing) depending on 
  * the current state of the app and which item was selected.
  * @param xx the x coordinate of the user click
  * @param yy the y coordinate of the user click
  */
Gallery.prototype.selectPic = function(xx, yy) {
	if(this.focusPic == null){
		for(var i = 0; i < this.pics.length ; i++){
			if(this.pics[i].contains(xx, yy) == true){
				this.pics[i].zoomIn();
				this.focusPic = this.pics[i];
			}else {
				this.pics[i].zoomOut();
			}
		}
	} else { 
		this.focusPic.zoomOut();
		this.focusPic = null;
	}
}
/**
  * Clear the canvas, paint all of the thumbnails, then paint the zoomed in image on top (if available)
  */
Gallery.prototype.paint = function() {
 clearCanvas();
	for(var i = 0; i < this.pics.length ; i++){
		this.pics[i].paint();
	}
	if(this.focusPic == null){
		null
	}else{
		this.focusPic.paint();
	}
	
}