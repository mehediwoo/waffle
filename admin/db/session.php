<?php 
	session_start();



	function error_signal(){

		if (isset($_SESSION['error_signal'])) {
			$signal_div = "<div class='alert alert-danger'>";
			$signal_div.= htmlentities($_SESSION['error_signal']);
			$signal_div.= "</div>";
			$_SESSION['error_signal']= NULL;
			return $signal_div;
		}
	}

		function success_signal(){

		if (isset($_SESSION['success_signal'])) {
			$signal_div = "<div class='alert alert-success'>";
			$signal_div.= htmlentities($_SESSION['success_signal']);
			$signal_div.= "</div>";
			$_SESSION['success_signal']= NULL;
			return $signal_div;
		}
	}




 ?>