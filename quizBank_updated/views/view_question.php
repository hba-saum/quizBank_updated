<?php
	include("includes/header.php");
	head("QuizBank | View Question");
	require_once("../controller/logged_in.php");
	require_once("../controller/questions_con.php");	
?>
<body class="bgr-light" style="padding-bottom: 300px">
<?php include("includes/qs_nav.php"); ?>
	<div class="container mt-4 paper">
		<?php
			$id = $_GET['id'];
			//$id = 31;
			$questions = get_questions($id);
			$question_paper = get_row_from_id($id);

			echo "<div class='row mt-3'><p class='mr-auto ml-3'>Name: " . $question_paper['name'] . "</p><button class='btn btn-success mr-3' id='CompleteBtn'>Complete</button></div><h3 class='text-center mt-3'>" . $question_paper['title'] . "</h3><hr>";
			$i = 1;
			foreach($questions as $question){
				echo  "<h5>" . $i . ". " . $question['question'] . "</h5>";
				echo "<div class=''>";
				echo "	<ol>";
				echo 	"	<div class='row'>";
				echo "			<li class='col-md-6'>" . $question['opt1'] . "</li>";
				echo "			<li class='col-md-6'>" . $question['opt2'] . "</li>";
				echo "		</div>";
			
				echo 	"	<div class='row'>";
				echo "			<li class='col-md-6'>" . $question['opt3'] . "</li>";
				echo "			<li class='col-md-6'>" . $question['opt4'] . "</li>";
				echo "		</div>";
				echo "	</ol>";				
				echo "</div>";
				echo "<div class='alert alert-success'>";
				$res = $question['corrent_answer']+1;
				echo "Correct Answer: " . $res;
				echo "</div>";
				
				$i++;
			}
		?>
	</div>
<?php include("includes/footer.php") ?>