<?php
	function execute($sql){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "qb";

		$conn = new mysqli($servername, $username, $password, $dbname);
		
		return $conn->query($sql);
		$conn->close();
	}
	
	// get theexecuted id
	function execute_ei($sql){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "qb";

		$conn = new mysqli($servername, $username, $password, $dbname);		
		
		if($conn->query($sql)){
			return mysqli_insert_id($conn);
			$conn->close();
		}
		else{
			return 0;	
		}
	}

	function num_rows($sql){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "qb";

		$conn = new mysqli($servername, $username, $password, $dbname);
		
		$result=mysqli_query($conn, $sql);
		return mysqli_num_rows($result);
		$conn->close();
	}

	function get_row($sql){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "qb";

		$conn = new mysqli($servername, $username, $password, $dbname);
		
		$result = execute($sql);
		
		return mysqli_fetch_assoc($result);
	}

	function get_all_rows($sql){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "qb";

		$conn = new mysqli($servername, $username, $password, $dbname);
		$result = mysqli_query($conn, $sql);
		
		$table = array();
		$i = 0;
		while($row = mysqli_fetch_assoc($result)){
			array_push($table, $row);
		}
		
		return $table;
	}


?>
