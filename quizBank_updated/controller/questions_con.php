<?php 
	require_once '../model/db.php';
	require_once("../controller/logged_in.php");

	function get_question_papers_by_id($id){
		$sql = "SELECT * FROM question_paper WHERE question_setter_id=" . $id;
		return get_all_rows($sql);
	}
	
	function get_questions($id){
		$sql = "SELECT * FROM question WHERE question_paper_id=" . $id;
		return get_all_rows($sql);
	}
	function get_row_from_id($id){
		$sql = "SELECT * FROM question_paper WHERE id=" . $id;
		return get_row($sql);
	}
?>