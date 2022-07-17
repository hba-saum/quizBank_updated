<?php
include("includes/header.php");

head("QuizBank | Register as Problem Solver");

?>
<body class="bgr-light">
<?php include("includes/nav.php") ?>
	<div class="container my-5" style="max-width: 600px;">
		<h4>Register as Problem Solver</h4>
		<form action="../controller/solver_con.php" class="needs-validation" id="form" method="post" novalidate>
			<div class="row">
				<div class="form-group col-md-6 mb-3">
					<label for="firstName">First Name</label>
					<input type="text" class="form-control" id="firstName" name="firstName" required>
					<div class="invalid-feedback">
						First Name is required.
					</div>
				</div>
				<div class="form-group col-md-6 mb-3">
					<label for="lastName">Last Name</label>
					<input type="text" class="form-control" id="lastName" name="lastName" required>
					<div class="invalid-feedback">
						Last Name is required.
					</div>
				</div>				
			</div>
			
			<div class="form-group mb-3">
				<label for="username">Username <span class="text-muted">(you will have "qs-" in front of your username)</span></label>
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">ps-</span>
					</div>
					<input type="text" class="form-control" id="username" name="username" placeholder="Username" required>						
				</div>
				<div class="" id="usernameErr" style="width: 100%;">
             		
            	</div>	
			</div>
			
			<div class="form-group mb-3">
				<label for="dob">Date of Birth</label>
				<input type="date" class="form-control" name="dob" id="dob" required>
				<div class="invalid-feedback" style="width: 100%;">
             		Date of birth is required.
            	</div>							
			</div>
			<h5>Gender</h5>
			<div class="form-group mb-3">
				<div class="form-check">
					<input type="radio" class="form-check-input"  id="male"  name="gender" value="0"  required>
					<label for="male">Male</label>					
				</div>
				<div class="form-check">
					<input type="radio" class="form-check-input"  id="Female"  name="gender" value="1" required>
					<label for="Female">Female</label>					
				</div>
				<div class="invalid-feedback" style="width: 100%;">
             		Gender is required.
            	</div>				
					
			</div>
			
						
			<div class="form-group mb-3">
				<label for="institute">Name of Institution</label>
				<input type="pass" class="form-control"  id="institute"  name="institute"  required>
				<div class="invalid-feedback" style="width: 100%;">
             		Institution is required.
            	</div>							
			</div>	
								
			<div class="form-group mb-3">
				<label for="address">Address</label>
				<input type="text" class="form-control"  id="address"  name="address"  required>
				<div class="invalid-feedback" style="width: 100%;">
             		Address is required.
            	</div>							
			</div>
			
			<div class="form-group mb-3">
				<label for="address">Email</label>
				<input type="email" class="form-control"  id="email"  name="email"  required>
				<div class="invalid-feedback" style="width: 100%;">
             		Email is required.
            	</div>							
			</div>	
					
						
			<div class="form-group mb-3">
				<label for="mobNo">Mobile Number</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">+880</span>
					</div>
					<input type="number" class="form-control" id="mobNo" name="mobNo" placeholder="1711998877" required>						
				</div>
				<div class="invalid-feedback" style="width: 100%;">
             		Mobile no is required.
            	</div>	
			</div>

			<div class="form-group mb-3">
				<label for="address">Password</label>
				<input type="password" class="form-control"  id="pass"  name="pass"  required>
				<div class="invalid-feedback" style="width: 100%;">
             		Password is required.
            	</div>							
			</div>	
														
			<div class="form-group mb-3">
				<label for="confPass">Confirm Password</label>
				<input type="password" class="form-control"  id="confPass"  name="confPass"  required>
				<div class="invalid-feedback" style="width: 100%;">
             		Re-type same Password.
            	</div>							
			</div>
			<div class="text-right">
				<button type="submit" class="btn btn-success">Register</button>	
			</div>
			
		</form>
	</div>

	
	<script>
		
	</script>
	<script src="js/reg_val.js"></script>
<?php include("includes/footer.php") ?>