<?php
	$serverName="localhost";
	$userName="root";
	$password="";
	$dbName="qb";
	$conn = mysqli_connect($serverName, $userName, $password, $dbName);
	
	
	$username = $_GET["username"];
	$table = $_GET["table"];
	$query = "SELECT * FROM $table WHERE username='$username'";
	$rs = mysqli_query($conn, $query);
	$num = mysqli_num_rows($rs);
	if($num>0 || $username == ''){
		echo "false";
	}
	else{
		echo "true";
	}

?>