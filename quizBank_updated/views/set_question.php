<?php
	include("includes/header.php");
	head("QuizBank | Add Question");

	require("../controller/logged_in.php");

?>
<body class="bgr-light" style="padding-bottom: 300px">
<?php include("includes/qs_nav.php") ?>

	<div class="container mt-4 paper-top" id="questionTitle">
	<h4 class="mt-4">Question Info</h4>
		<form id="titleForm">
			<div class="form-group mb-3">
				<label for="qname">Question Name <span class="text-muted"></span></label>
				<input type="text" class="form-control" id="qname" name="qname" placeholder="Question Name" >						
				
            	<div class="" id="qnameErr" style="width: 100%;">
             		
            	</div>	
			</div>	
			
			
			<div class="form-group mb-3">
				<label for="qTitle">Question Title</label>
				<input type="text" class="form-control" id="qTitle" name="qTitle" placeholder="Question Title" >						
				
            	<div class="" id="qTitleErr" style="width: 100%;">
             		
            	</div>	
			</div>	
				
			<div class="text-right mb-4">
				<button type="button"  class="btn btn-success" id="titleBtn">Start Setting Question!</button>	
			</div>		
		</form>
	</div>
	
	<div class="container pb-4 px-5 invisible paper-bottom" id="questions" style="background: #FFF">
		<h3 id="noQ" class="text-center text-muted">No Question Added!</h3>
	</div>
	
	
	<div class="container-fluid paper fixed-bottom pt-4 invisible" id="addQuestion">
		<div class="container" id="addQuestionForm">
			<form>
				<div class="form-group mb-3">
					<label for="question"><h4>Add Question</h4></label>
					<input type="text" class="form-control" id="question" name="question" placeholder="Question Title" >
				</div>
				<div class="row">
					<div class="form-group col-md-3 mb-3">
						<label for="opt1">Option 1</label>
						<input type="text" class="form-control" id="opt1" name="opt1" required>
					</div>
					<div class="form-group col-md-3 mb-3">
						<label for="opt2">Option 2</label>
						<input type="text" class="form-control" id="opt2" name="opt2" required>
					</div>
					<div class="form-group col-md-3 mb-3">
						<label for="opt1">Option 3</label>
						<input type="text" class="form-control" id="opt3" name="opt3" required>
					</div>
					<div class="form-group col-md-3 mb-3">
						<label for="opt1">Option 4</label>
						<input type="text" class="form-control" id="opt4" name="opt4" required>
					</div>
				</div>
				<div class="row pr-3 pl-3">
					<div class="form-group form-inline mb-3 mr-auto">
						<label class="mr-2" for="question"><b>Correct Answer: </b></label>
						<select class="custom-select mr-sm-2" id="corrAns" name="corrAns">
							<option value="0">Option 1</option>
							<option value="1">Option 2</option>
							<option value="2">Option 3</option>
							<option value="3">Option 4</option>
							
						</select>
					</div>					
					<!--
					<div class="text-right mb-4 mr-2">
						<button type="button"  class="btn btn-danger" id="finish">Finish </button>
					</div>
					-->
					<div class="text-right mb-3">
						<button type="button"  class="btn btn-success" id="addBtn">Add</button>
					</div>					
				</div>

			</form>			
		</div>		
	</div>

<script src="js/question.js"></script>
<?php include("includes/footer.php") ?>