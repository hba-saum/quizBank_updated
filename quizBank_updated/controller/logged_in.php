<?php 
	session_start();
	if(!isset($_SESSION['logged_in'])){
		header("Location: login.php?login=0");
	}else{
		//header("Location: login.php?login=0");
	}

?>