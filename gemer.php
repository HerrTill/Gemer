<?php
include'includes/head.php';
include'includes/ontop.html';
include'includes/nav.php';

if($_GET['page'] == "arma") {
	include 'content/arma.html';
}else if($_GET['page'] == "csgo") {
	include 'content/csgo.html';
}else if($_GET['page'] == "main") {
	include 'content/main.html';
}else {
include 'index.php';
}

include'includes/foot.html';
?>