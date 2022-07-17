<?php
	include("includes/header.php");
	head("QuizBank | Previous Questions");
	require_once("../controller/logged_in.php");
	require_once("../controller/questions_con.php");
	
	
	
	
?>
<body class="bgr-light" style="padding-bottom: 300px">
<?php include("includes/qs_nav.php"); ?>



	<div class="container my-4 paper">
	<?php
	$question_papers = get_question_papers_by_id($_SESSION['id']);		
	if(isset($_GET['r']) && $_GET['r']=='1'){
		echo '<div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
  				<strong>Successfully added new question!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  				</button>
				</div>';
	}
?>
		<h4 class="mt-4">Previous Questions</h4>
		<hr>
		<table class="table table-striped table-hover">
			<tr>
				<th>#</th>
				<th>Title</th>
				<th>Name</th>
				<th></th>
				<th></th>
							
			</tr>
		<?php
			$i = 1;
			foreach($question_papers as $paper){
				echo "<tr>";
				echo "<td scope='row'>" . $i . "</td>";
				echo "<td><a href='view_question.php?id=". $paper['id'] ."' class='btn'>" . $paper['title'] . "</a></td>";
				echo "<td><a href='view_question.php?id=". $paper['id'] ."' class='btn'>" . $paper['name'] . "</a></td>";
				
				echo "<td><button class='btn btn-warning'>Edit</button></td>";
				echo "<td><a href='../controller/delete_row_con.php?id=" . $paper['id'] . "'><button class='btn btn-danger'>Delete</button></a></td>";
				//echo $paper['id'];
				echo "</tr>";
				$i++;
			}
		?>
		</table>
		
	</div>
<?php include("includes/footer.php") ?>