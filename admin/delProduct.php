<?php

    include "db/db.php";
	include "db/session.php";
	include "db/functions.php";
	login_restricted();


if (isset($_GET['id']) or $_GET['id']!=NULL) {
    $id = $_GET['id'];
}else{
    echo "<script>window.open('showPro.php','_self')</script>";
}

$get = "SELECT * FROM product WHERE id='$id' ";
$q   = $db->query($get);
while ($gal= $q->fetch()) {
    $image = $gal['foodImage'];
}


$sql = "DELETE FROM product WHERE id='$id'";
$stmt= $db->query($sql);
$rows=$stmt->fetch();

if ($stmt==true) {
    $file = "../assets/img/$image";
	unlink($file);
    $_SESSION['success_signal']="Delete successfully";
    echo "<script>window.open('showPro.php','_self')</script>";
}else{
    $_SESSION['error_signal']="Error, Try again later ";
    echo "<script>window.open('showPro.php','_self')</script>";
}










?>