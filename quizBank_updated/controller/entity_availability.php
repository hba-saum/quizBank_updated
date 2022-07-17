<?php
	require_once '../model/db.php';

	if(isset($_GET['username'])){
		$username = $_GET['username'];
		$sql = "SELECT * FROM solver WHERE username LIKE '%$username%'";
		if(num_rows($sql)>0){
			echo num_rows($sql);
		}
		else{
			echo "0";
		}
	}else{
		echo "nothing";
	}
?>