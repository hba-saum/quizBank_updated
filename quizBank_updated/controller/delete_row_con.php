<?php
	require_once '../model/db.php';
	$id = $_GET['id'];
	$sql = "DELETE FROM question_paper WHERE id=" . $id;
	execute($sql);
	header("Location: ../views/previous_questions.php");
?>