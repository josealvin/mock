<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
		<title>Sample</title>
		<link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
		<?php $currentFile = $_SERVER["SCRIPT_NAME"];
		  $parts = Explode('/', $currentFile);
		  $currentFile = $parts[count($parts) - 1];
		?>
		<link rel="stylesheet" type="text/css" media="screen" href="style-config.php?page=<?php echo $currentFile?>" >
		<script type="text/javascript" src="assets/js/jquery.js"></script>
		<script type="text/javascript" src="assets/js/myJquery.js"></script>
</head>
<body>