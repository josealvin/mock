$(document).ready(function() {
	var img = document.getElementById('image'); 
	//or however you get a handle to the IMG
	var width = img.clientWidth;
	var height = img.clientHeight;
	$("#inner").css({"height":height,"width":width});
});