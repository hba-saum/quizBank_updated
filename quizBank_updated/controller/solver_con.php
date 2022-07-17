<?php
	require_once '../model/solver_query.php';
	require_once '../entities/solver.php';
	
	if(isset($_POST['firstName']) &&
	  isset($_POST['lastName']) &&
	  isset($_POST['username']) &&
	  isset($_POST['dob']) &&
	  isset($_POST['gender']) &&
	  isset($_POST['institute']) &&
	  isset($_POST['address']) &&
	  isset($_POST['email']) &&
	  isset($_POST['mobNo']) &&
	  isset($_POST['pass'])){

		if(!empty($_POST['firstName']) &&
		  !empty($_POST['lastName']) &&
		  !empty($_POST['username']) &&
		  !empty($_POST['dob']) &&
		  !empty($_POST['institute']) &&
		  !empty($_POST['address']) &&
		  !empty($_POST['email']) &&
		  !empty($_POST['mobNo']) &&
		  !empty($_POST['pass'])){
//	//		//($firstname, $lastname, $username, $dob, $gender, $institute, $address, $email, $mobno, $pass
			
			if($_POST['gender']=='1' || $_POST['gender']=='0'){
				$solver = new Solver($_POST['firstName'], $_POST['lastName'], $_POST['username'], $_POST['dob'], $_POST['gender'], $_POST['institute'], $_POST['address'], $_POST['email'], $_POST['mobNo'], $_POST['pass']);
				if(new_solver($solver)){
					header("Location:../views/registration_successful.php");
				}
				else{
					header("Location:../views/registration_failed.php");
				}	
			}
			else{
				header("Location:../views/registration_failed.php");
			}
			
		}
		else{
			header("Location:../views/registration_failed.php");
		}	
	}
	else{
		header("Location:../views/registration_failed.php");
	}
	


?>