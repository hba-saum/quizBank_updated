	<nav class="navbar navbar-expand-md navbar-dark bgr-dark">
    	<a class="navbar-brand" href="index.php">
    		<img src="img/logo.png" height="auto" width="150px">
    	</a>
    	
    	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColl" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
    	</button>
    	
    	<div class="collapse navbar-collapse" id="navbarColl">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a href="login.php" class="nav-link">Login</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Register</a>
					<div class="dropdown-menu">
						<a href="register_question_setter.php" class="dropdown-item">Register as Question Setter</a>
						<a href="register_problem_solver.php" class="dropdown-item">Register as Problem Solver</a>
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
