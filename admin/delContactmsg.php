<?php

include "db/db.php";
	include "db/session.php";
	include "db/functions.php";
	login_restricted();


$id = $_GET['id'];

$sql = "DELETE FROM contact WHERE id='$id'";
$stmt= $db->query($sql);
if ($stmt==true) {
    $_SESSION['success_signal']="Delete successfully";
    echo "<script>window.open('contactMessage.php','_self')</script>";
}else{
    $_SESSION['error_signal']="Error, Try again later ";
    echo "<script>window.open('contactMessage.php','_self')</script>";
}










?>