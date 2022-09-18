<?php 
	include 'db/functions.php';
	include 'db/session.php';

	$_SESSION['id']            = NULL;
	$_SESSION['name']          = NULL;
	$_SESSION['user_name']     = NULL;
	session_destroy();
	echo "<script>window.open('login.php','_self')</script>";






 ?>