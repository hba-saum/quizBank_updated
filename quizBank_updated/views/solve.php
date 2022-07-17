<?php
	include("includes/header.php");
	head("QuizBank | Browse Question");
	require("../controller/logged_in.php");
	require_once("../controller/questions_con.php");	
	require_once("../controller/solve_con.php");	

?>

<body class="bgr-light" style="padding-bottom: 300px">
<?php include("includes/ps_nav.php") ?>

	<div class="container paper mt-4">
		<?php
			$id = $_GET['id'];
			$questions = get_questions($id);
			$question_paper = get_row_from_id($id);
			echo "<input type='hidden' id='qid' value='" . $id . "'>";
			echo "<input type='hidden' id='sid' value='" . $_SESSION['id'] . "'>";
	
			echo "<div class='row mt-3'><p class='mr-auto ml-3'>Name: " . $question_paper['name'] . "</p></div><h3 class='text-center mt-3'>" . $question_paper['title'] . "</h3><hr>";
			$i = 1;
			echo "<div id='qbox'>";
			foreach($questions as $question){
				
				echo  "<h5>" . $i . ". " . $question['question'] . "</h5>";
				echo "<form method='GET' class='mb-3'>";
				echo "<input type='hidden' class='questionId' value='" . $question['id'] . "'>";
				echo "	<div class='row ml-3'>";
				
				echo "		<div class='col-md-6'>";
				echo "			<input type='radio' value='0' id='opt1' class='form-check-input' name='ans'>";
				echo "			<label for='opt1'>" . $question['opt1'] . "</label>	";
				echo "		</div>";
				
				echo "		<div class='col-md-6'>";
				echo "			<input type='radio' value='1' id='opt2' class='form-check-input' name='ans'>";
				echo "			<label for='opt2'>" . $question['opt2'] . "</label>	";
				echo "		</div>";
				
				echo "</div>";
				
				echo "	<div class='row ml-3'>";
				
				echo "		<div class='col-md-6'>";
				echo "			<input type='radio' value='2' id='opt3' class='form-check-input' name='ans'>";
				echo "			<label for='opt3'>" . $question['opt3'] . "</label>	";
				echo "		</div>";
				
				echo "		<div class='col-md-6'>";
				echo "			<input type='radio' value='3' id='opt4' class='form-check-input' name='ans'>";
				echo "			<label for='opt4'>" . $question['opt4'] . "</label>	";
				echo "		</div>";
				
				echo "</div>";
								
				echo "</form>";
			}
			echo "</div>";
		?>
		<button type="button" class="btn btn-success mb-3" id="submitBtn">Submit</button>
	</div>

<script src="js/solve.js"></script>
<?php include("includes/footer.php") ?>