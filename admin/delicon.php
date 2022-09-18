<?php

    include "db/db.php";
	include "db/session.php";
	include "db/functions.php";
	login_restricted();


if (isset($_GET['id']) or $_GET['id']!=NULL) {
    $id = $_GET['id'];
}else{
    echo "<script>window.open('adminfooter.php','_self')</script>";
}




$sql = "DELETE FROM footer_social WHERE id='$id'";
$stmt= $db->query($sql);
$rows=$stmt->fetch();

if ($stmt==true) {
    $_SESSION['success_signal']="Delete successfully";
    echo "<script>window.open('adminfooter.php','_self')</script>";
}else{
    $_SESSION['error_signal']="Error, Try again later ";
    echo "<script>window.open('adminfooter.php','_self')</script>";
}










?>