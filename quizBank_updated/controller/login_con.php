<?php
	require_once '../model/db.php';

	if(isset($_POST['username']) && isset($_POST['pass'])){

		if(!empty($_POST['username']) && !empty($_POST['pass'])){
			$username = $_POST['username'];
			$pass = $_POST['pass'];
			
			
			//question setter check
			if(substr($username, 0, 3)=='qs-'){
				$user = substr($username, 3);
				$sql = "SELECT * FROM setter WHERE username='$user' AND pass='$pass'";

				if(num_rows($sql)){
					session_start();
					$_SESSION['logged_in'] = "true";
					$row = get_row($sql);
					$_SESSION['id']= $row['id'];
					$_SESSION['type'] = 'qs';

					header("location: ../views/set_question.php");
				}else{
					header("location: ../views/login.php?valid=0");
				}
								
			}
			//problem solver check
			else if(substr($username, 0, 3)=='ps-'){
				$user = substr($username, 3);
				$sql = "SELECT * FROM solver WHERE username='$user' AND pass='$pass'";

				if(num_rows($sql)){
					session_start();
					$_SESSION['logged_in'] = "true";
					$row = get_row($sql);
					$_SESSION['id']= $row['id'];
					$_SESSION['type'] = 'ps';
					
					header("location: ../views/browse_questions.php");
				}else{
					header("location: ../views/login.php?valid=0");
				}
								
			}			
			
			else{
				header("location: ../views/login.php?valid=0");
			}
		}
		else{
			header("location: ../views/login.php?valid=0");
		}
	}
	else{
		header("location: ../views/login.php?valid=0");
	}
			
?>