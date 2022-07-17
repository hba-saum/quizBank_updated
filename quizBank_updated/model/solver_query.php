<?php
	require_once 'db.php';
	require_once '../entities/solver.php';

	function new_solver(Solver $solver){
		
		$sql = "INSERT INTO solver VALUES(NULL ,'" .$solver->get_firstname() . "', '" . $solver->get_lastname() . "', '" . $solver->get_username() . "', '" . $solver->get_dob() . "', '" . $solver->get_gender() . "', '" . $solver->get_institute() . "', '" . $solver->get_address() . "', '" . $solver->get_email() . "', '" . $solver->get_mobno() . "', '" . $solver->get_pass() . "', NULL)";	
		
		return execute($sql);	
	}
?>