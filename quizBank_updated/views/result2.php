<?php
	include("includes/header.php");
	head("QuizBank | Result");
	require("../controller/logged_in.php");
	require("../controller/result_con.php");
	require_once("../controller/questions_con.php");	

	$answersheet_id = $_GET['ai'];
	$answersheet = get_answersheet_row($answersheet_id);
	$answers = get_answers($answersheet_id);
	print_r($answers);
?>
<body class="bgr-light" style="padding-bottom: 300px">
<?php //include("includes/ps_nav.php") ?>
	<div class="container mt-4 paper">
	
	</div>

<?php include("includes/footer.php") ?>