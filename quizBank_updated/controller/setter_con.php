<?php 
	require_once '../model/setter_query.php';
	require_once '../entities/setter.php';

	if(isset($_POST['firstName']) &&
	  isset($_POST['lastName']) &&
	  isset($_POST['username']) &&
	  isset($_POST['dob']) &&
	  isset($_POST['gender']) &&
	  isset($_POST['type']) &&
	  isset($_POST['address']) &&
	  isset($_POST['email']) &&
	  isset($_POST['mobNo']) &&
	  isset($_POST['pass']))
	{

		if(!empty($_POST['firstName']) &&
		  !empty($_POST['lastName']) &&
		  !empty($_POST['username']) &&
		  !empty($_POST['dob']) &&
		  !empty($_POST['address']) &&
		  !empty($_POST['email']) &&
		  !empty($_POST['mobNo']) &&
		  !empty($_POST['pass']))
		{
			$institute = "-";
			if(isset($_POST['institute']) && !empty($_POST['institute']) && $_POST['type']=='1'){
				$institute = $_POST['institute'];
			}
			
			
			if(($_POST['gender']=='1' || $_POST['gender']=='0') && ($_POST['type']=='1' || $_POST['type']=='0')){
				$setter = new Setter($_POST['firstName'], $_POST['lastName'], $_POST['username'], $_POST['dob'], $_POST['gender'], $institute, $_POST['address'], $_POST['email'], $_POST['mobNo'], $_POST['pass']);
				
				$setter->set_type($_POST['type']);
				if(new_setter($setter)){
					header("Location:../views/registration_successful.php");
				}
				else{
					header("Location:../views/registration_failed.php?err=Query");
				}	
			}
			else{
				header("Location:../views/registration_failed.php?err=radio");
			}
			
		}
		else{
			header("Location:../views/registration_failed.php?err=empty");
		}	
	}
	else{
		header("Location:../views/registration_failed.php?err=notset");
	}
	
	
?>