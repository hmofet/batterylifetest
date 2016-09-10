<?php
	session_start();
	$_SESSION['index'] = 0;
	$_SESSION['pages'] = array(
	"http://www.arstechnica.com/civis",
	"http://www.engadget.com",
	"http://www.fmylife.com",
	);
	header('Location:loopthroughsites.php');
?>