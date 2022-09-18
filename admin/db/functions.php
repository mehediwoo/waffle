<?php

include "db/db.php";


	function userLogin($user,$pasword){
		global $db;
		$sql = "SELECT * FROM admin WHERE userName=:user AND password=:pasword";
		$stmt= $db->prepare($sql);
		$stmt->bindValue(':user',$user);
		$stmt->bindValue(':pasword',$pasword);
		$stmt->execute();
		$result = $stmt->rowcount();
		if ($result==1) {
			return $user_data = $stmt->fetch();
		}else{
			return null;
		}
	}

	function login_restricted(){
		if (isset($_SESSION['id'])) {
			return true;
		}else{
			$_SESSION['error_signal']="Plese login first!!";
			echo "<script>window.open('login.php','_self')</script>";
		}
	}









?>