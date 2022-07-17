<?php 
	require_once '../model/db.php';
	//create answer sheet
	if(isset($_GET['question_paper_id']) && isset($_GET['priblem_solver_id'])){
		$question_paper_id =  $_GET['question_paper_id'];
		$priblem_solver_id = $_GET['priblem_solver_id'];
		$sql = "INSERT INTO answer_sheet VALUES(NULL, '" . $question_paper_id . "', '" . $priblem_solver_id . "', NULL)";
		echo execute_ei($sql);
		//echo "set";
	}
	//adding asnwer to db
	if(isset($_GET['given_ans']) && isset($_GET['question_id']) && isset($_GET['answer_sheet_id'])){
		$given_ans = $_GET['given_ans'];
		$question_id = $_GET['question_id'];
		$answer_sheet_id = $_GET['answer_sheet_id'];
		
		$sql = "INSERT INTO answer VALUES(NULL, '" . $given_ans . "', '" . $question_id . "', '" . $answer_sheet_id . "')";
		execute($sql);
	}
?>