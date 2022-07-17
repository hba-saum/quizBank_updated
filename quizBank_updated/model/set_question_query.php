<?php
	require_once 'db.php';
	require_once '../entities/question_paper.php';
	require_once '../entities/question.php';


	function set_question_paper(Question_paper $qp){
		$sql = "INSERT INTO question_paper VALUES(NULL, '" . $qp->get_title() . "', '" . $qp->get_name() . "', '" . $qp->get_question_setter_id() . "')";
		
		return execute_ei($sql);
		
	}
	function add_question(Question $q){
		$sql = "INSERT INTO question VALUES(NULL, '". $q->get_question() ."', '". $q->get_question_paper_id() ."', '". $q->get_opt1() ."', '". $q->get_opt2() ."', '". $q->get_opt3() ."', '". $q->get_opt4() ."', '" . $q->get_corr_ans() . "')";
		
		return execute($sql);
	}
	
	
?>