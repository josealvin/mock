<?php header("Content-type: text/css"); ?>
body{
		margin: 0px;
		padding: 0px;
		/*use this for image
			background: url(assets/images/body.jpg);*/
		/*use this for color
			background: #000;*/
		background: url(assets/images/body.jpg);
}
<?php 
if($_GET['page']=="index.php"){
	?>
#wrapped{
	width:100%;
	height: auto;
	margin: 0 auto;
	background: url("assets/images/top.jpg") repeat-x scroll 0 0 transparent;
}
<?php }
/*innerpage*/
elseif($_GET['page']=="page.php"){
	?>
#wrapped{
	width:100%;
	height: auto;
	margin: 0 auto;
	background-image: url("assets/images/top-page.jpg"), url("assets/images/top-page.jpg");
	background-position: 0 0, 0 bottom;
	background-repeat: repeat-x;
}
<?php } 
/*add more page if there have different header background
just copy innerpage*/
?>