<?php
	include("includes/header.php");
	head("QuizBank | Browse Questions");

	require("../controller/logged_in.php");

?>
<body class="bgr-light" style="padding-bottom: 300px">
<?php include("includes/ps_nav.php") ?>
	 <div class="container mt-4 paper">
		<h4 class="mt-4 mb-3">Questions</h4>
		<form>
			<input type="text" class="form-control mb-3" id="search" onKeyUp="search_table()" placeholder="Search for Questions...start typing"><hr>
		</form>
		<h5>Search Results</h5>
		<div id="results">
			
		</div>			
		
	 </div>


<script src="js/search_questions.js"></script>

<?php include("includes/footer.php") ?>