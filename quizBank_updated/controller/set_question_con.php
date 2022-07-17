<?php 
	require_once '../model/set_question_query.php';
	require_once '../entities/question_paper.php';
	require_once '../entities/question.php';
	require("../controller/logged_in.php");
	//question paper section
	if(isset($_GET['title']) && isset($_GET['name']) && isset($_SESSION['id'])){
		$question_paper = new Question_paper($_GET['title'], $_GET['name'], $_SESSION['id']);
		
	  	$index = set_question_paper($question_paper);
		echo $index;
	}

	if(isset($_GET['question']) && isset($_GET['question_paper_id']) && isset($_GET['opt1']) && isset($_GET['opt2']) && isset($_GET['opt3']) && isset($_GET['opt4'])  && isset($_GET['corrent_answer'])){
		$question = new Question($_GET['question'], $_GET['question_paper_id'], $_GET['opt1'], $_GET['opt2'], $_GET['opt3'], $_GET['opt4'], $_GET['corrent_answer']);
		echo add_question($question);
	}
	
?>