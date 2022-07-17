<?php
	include("includes/header.php");
	head("Home");
?>
  <body class="bgr-red">
	<nav class="navbar justify-content-end bgr-dark">
		<a href="login.php" class="btn btn-outline-danger mr-2">Login</a>
		<a href="#reg" class="btn btn-danger">Register</a>
    </nav>
	<div class="jumbotron text-center" style="background: #2a6041">
	 	<div class="container">
	 	
	 		<a href="index.php">
	 			<img src="img/logo.png" class="mb-2 img-fluid" height="auto" width="500">
	 		</a> <br>
	 		
	 		<form>
	 			<div class="row justify-content-md-center">
					<div class="input-group col-md-7 mb-2">
						<input type="text" class="form-control" placeholder="Search Quiz">
						<div class="input-group-append">
							<button class="btn btn-outline-success">
								<svg class="bi bi-search" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								  <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"/>
								  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"/>
								</svg>			  	 					
							</button>	 							
						</div>
				
					</div>
	
	 			</div>
	 			
	 		</form>
		 	<h3 class="txt-dark">An online platform to share and get quizzes.</h3>
	 	</div>
		 	
	</div>        
    
    <div class="container mb-3 bgr-red">
		<div class="row">
			<div class="col-sm my-auto">
				<p class="txt-dark">
					<b>Quiz Bank</b> is an online platform where people can set quizzes (with MCQ) and others can solve it. User (question setter) can post quizzes of past exams (ex: SSC, HSC) or they can make and post their own questions. As a result, the number of quizzes will grow and everyone can use this platform as a “bank” or “archive”.  
				</p>				
			</div>
			
			<div class="col-sm">
				<img src="img/study.svg" class="img-fluid">	
			</div>				
		
			
		</div>
    </div>
    
    
    <div class="jumbotron bgr-dark" id="reg">
		<div class="container">
			<div class="row  justify-content-md-center">
				<div class="card col-md-3 m-3"  style="width: 20em">
					<img src="img/q_setter.svg" class="card-img-top card-img">
					<div class="card-body">
						<h5 class="card-title">Register as Question Setter</h5>
						<p class="card-text">
							Set Quizes. 
						</p>
						<a href="register_question_setter.php" class="btn btn-success float-right">Register</a>
					</div>
				</div>

				<div class="card col-md-3 m-3"  style="width: 20em">
					<img src="img/q-solver.svg" class="card-img-top card-img">
					<div class="card-body">
						<h5 class="card-title">Register as Problem Solver</h5>
						<p class="card-text">
							Browse and solve quizes.
						</p>
						<a href="register_problem_solver.php" class="btn btn-success float-right">Register</a>
					</div>
				</div>			
			</div>


		</div>
    </div>

<?php include("includes/footer.php") ?>