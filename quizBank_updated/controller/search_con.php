<?php 
	require_once '../model/db.php';
	$name = $_GET['name'];
	//$name = 'asd';
	$sql = "SELECT * FROM question_paper WHERE name LIKE '%" . $name . "%'";
	$question_papers = get_all_rows($sql);
?>	
	<table class="table table-striped table-hover">
		<tr>
			<th>#</th>
			<th>Title</th>
			<th>Name</th>
			<th></th>		
		</tr>
		<?php
			$i = 1;
			foreach($question_papers as $paper){
				echo "<tr>";
				echo "<td scope='row'>" . $i . "</td>";
				echo "<td><a href='view_question.php?id=". $paper['id'] ."' class='btn'>" . $paper['title'] . "</a></td>";
				echo "<td><a href='view_question.php?id=". $paper['id'] ."' class='btn'>" . $paper['name'] . "</a></td>";
				
				echo "<td><a href='solve.php?id=" . $paper['id'] . "'><button class='btn btn-success'>Solve!</button></a></td>";
				echo "</tr>";
				$i++;
			}
		?>		
	</table>