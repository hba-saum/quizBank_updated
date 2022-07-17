<?php
	include("includes/header.php");
	head("QuizBank | Result");
	require("../controller/logged_in.php");
	require("../controller/result_con.php");
	require_once("../controller/questions_con.php");	

	$answersheet_id = $_GET['ai'];
	$answersheet = get_answersheet_row($answersheet_id);
	$answers = get_answers($answersheet_id);
	//print_r($answers);
?>
<body class="bgr-light" style="padding-bottom: 300px">
<?php include("includes/ps_nav.php") ?>
	<div class="container mt-4 paper">
		<?php
			$total = 0;
			$answers = get_answers($answersheet_id);
			$questions = get_questions($answersheet['question_paper_id']);
			//print_r($questions);
			$question_paper = get_row_from_id($answersheet['question_paper_id']);

			echo "<div class='row mt-3'><p class='mr-auto ml-3'>Name: " . $question_paper['name'] . "</p></div><h3 class='text-center mt-3'>" . $question_paper['title'] . "</h3><hr>";
			$i = 1;
			$tmp =  0;
			foreach($questions as $question){
				echo  "<h5>" . $i . ". " . $question['question'] . "</h5>";
				echo "<div class=''>";
				echo "	<ol>";
				echo 	"	<div class='row'>";
				echo "			<li class='col-md-6'>" . $question['opt1'] . "</li>";
				echo "			<li class='col-md-6'>" . $question['opt2'] . "</li>";
				echo "		</div>";
				echo "	</ol>";
				echo "	<ol>";
				echo 	"	<div class='row'>";
				echo "			<li class='col-md-6'>" . $question['opt3'] . "</li>";
				echo "			<li class='col-md-6'>" . $question['opt4'] . "</li>";
				echo "		</div>";
				echo "	</ol>";				
				echo "</div>";
				
				if(is_null($answers[$tmp]['given_ans'])){
						$answers[$tmp]['given_ans'] = " - ";
				}
				
				if(($question['corrent_answer']+1)==$answers[$tmp]['given_ans']){
					echo "<div class='alert alert-success'>";
					$res = $question['corrent_answer'] + 1;
					echo "Correct Answer: " . $res;		
					echo "</div>";
					$total++;
				}else{

					echo "<div class='alert alert-danger'>";
					$res = $question['corrent_answer'] + 1;
					echo "Your Answer: " . $answers[$tmp]['given_ans'] . " <b>Correct Answer: " . $res . "</b>";		
					echo "</div>";
				}
				
			
				
				
				$i++;
				$tmp++;
			}			
			echo "<h3 class='my-4 text-right'>Total: " . $total . "</h3>";
		?>
	</div>

<?php include("includes/footer.php") ?>