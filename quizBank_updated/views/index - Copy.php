<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
	<style>
		.navbar{
			font-size: 20px;
		}
		.txt-dark{
			color: #E9F1F2;
		}
		.bgr-dark{
			background: #2a6041;
		}
		.bgr-ldark{
			background: #D3E3FC;
		}
		.bgr-green{
			background: #00887A;
		}
		.btn-dark{
			background: #E9F1F2;
			border-color: #283D59;
			color: #0E1826;
		}
	</style>
    <title>QuizBank</title>
  </head>
  <body>
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bgr-dark">
    	<a class="navbar-brand" href="index.php">
    		<img src="img/logo.png" height="auto" width="150px">
    	</a>
    	
    	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColl" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
    	</button>
    	
    	<div class="collapse navbar-collapse" id="navbarColl">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link">Login</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Register</a>
					<div class="dropdown-menu">
						<a class="dropdown-item">Register as Question Maker</a>
						<a class="dropdown-item">Register as Problem Solver</a>
					</div>
				</li>    		    		
			</ul>  
			<form class="form-inline">
			  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
				<svg class="bi bi-search" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"/>
				  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"/>
				</svg>			  
			  </button>
			</form>	
    	</div>

    </nav>
	<div class="jumbotron text-center" style="background: #2a6041">
	 	<div class="container">
	 		<img src="img/logo.png" class="mt-5 mb-2 img-fluid" height="auto" width="500"> <br>
	 		
	 		<form>
	 			<div class="row justify-content-md-center">
					<div class="input-group col-md-7">
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
    
    <div class="container">
		<div class="row">
			<div class="col-sm">
				<p>
					<b>Quiz Bank</b> is an online platform where people can set quizzes (with MCQ) and others can solve it. User (question setter) can post quizzes of past exams (ex: SSC, HSC) or they can make and post their own questions. As a result, the number of quizzes will grow and everyone can use this platform as a “bank” or “archive”.  
				</p>				
			</div>
			
			<div class="col-sm">
				<img src="img/study.png" class="img-fluid">	
			</div>				
		
			
		</div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>