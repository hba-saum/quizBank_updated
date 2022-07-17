<?php
	require_once 'db.php';
	require_once '../entities/setter.php';

	function new_setter(Setter $setter){
		
		$sql = "INSERT INTO setter VALUES(NULL ,'" .$setter->get_firstname() . "', '" . $setter->get_lastname() . "', '" . $setter->get_username() . "', '" . $setter->get_dob() . "', '" . $setter->get_type() . "', '" . $setter->get_gender() . "', '" . $setter->get_institute() . "', '" . $setter->get_address() . "', '" . $setter->get_email() . "', '" . $setter->get_mobno() . "', '" . $setter->get_pass() . "', NULL)";	
		
		return execute($sql);	
	}
?>