<!DOCTYPE html>
<html>
<head>
	<title>Gemer-Clan</title>
	<?php 
	if($_GET['page'] == "") {
		echo '<link rel="stylesheet" type="text/css" href="css/home.css" />'
	}else {
		echo '<link rel="stylesheet" type="text/css" href="css/normal.css" />'	
	}	
	?>
	
	<style type="text/css">
		body
		{
			background: url(img/back.jpg) no-repeat center center fixed;
        	-webkit-background-size: cover;
        	-moz-background-size: cover;
        	-o-background-size: cover;
      	background-size: cover;
		}
	</style>
	
</head>
<body>
