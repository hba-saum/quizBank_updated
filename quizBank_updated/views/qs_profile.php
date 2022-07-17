<?php
	include("includes/header.php");
	head("QuizBank | Profile");
	require_once("../controller/logged_in.php");
	require_once("../controller/profile_con.php");
	$id = $_SESSION['id'];
	$user = get_qs_row($id);

?>
<body class="bgr-light" style="padding-bottom: 300px">
<?php include("includes/qs_nav.php") ?>

	<div class="container my-4 p-4 paper" style="max-width: 600px;">
		<?php //print_r($user); ?>
		<h3>Profile</h3><hr>
		<form action="../controller/setter_con.php" class="needs-validation" id="form" method="post" novalidate>
			<div class="row">
				<div class="form-group col-md-6 mb-3">
					<label for="firstName">First Name</label>
					<input type="text" class="form-control" id="firstName" name="firstName" value="<?php echo $user['firstname'] ?>" required>
					<div class="invalid-feedback">
						First Name is required.
					</div>
				</div>
				<div class="form-group col-md-6 mb-3">
					<label for="lastName">Last Name</label>
					<input type="text" class="form-control" id="lastName" name="lastName" value="<?php echo $user['lastname'] ?>" required>
					<div class="invalid-feedback">
						Last Name is required.
					</div>
				</div>				
			</div>
			
			<div class="form-group mb-3">
				<label for="username">Username</label>
				<h5>qs-<?php echo $user['username'] ?></h5>
			</div>
			
			
			<div class="form-group mb-3">
				<label for="dob">Date of Birth</label>
				<input type="date" class="form-control" name="dob" value="<?php echo $user['dob'] ?>" id="dob" required>
				<div class="invalid-feedback" style="width: 100%;">
             		Date of birth is required.
            	</div>							
			</div>
			
			<h5>Gender</h5>
			<div class="form-group mb-3">
				<div class="form-check">
					<input type="radio" class="form-check-input"  id="male"  name="gender" value="0" <?php if($user['gender']==0) echo "checked" ?>   required>
					<label for="male">Male</label>					
				</div>
				<div class="form-check">
					<input type="radio" class="form-check-input"  id="Female"  name="gender" value="1" <?php if($user['gender']==1) echo "checked" ?>  required>
					<label for="Female">Female</label>					
				</div>
				<div class="invalid-feedback" style="width: 100%;">
             		Gender is required.
            	</div>				
					
			</div>
			
								
			<h5>Type</h5>
			<div class="form-check">
				<input type="radio" class="form-check-input"  id="idie"  name="type" value="0" onClick="hide_view()" <?php if($user['type']==0) echo "checked" ?>  required>
				<label for="idie">Indie</label>					
			</div>
			<div class="form-check">
				<input type="radio" class="form-check-input"  id="institute"  name="type" value="1" onClick="hide_view()"  <?php if($user['type']==1) echo "checked" ?> required>
				<label for="institute">Institution</label>					
			</div>
			
			
			<div class="form-group mb-3" id="instituteDiv">
						
			</div>	
			
			<div class="form-group mb-3">
				<label for="address">Address</label>
				<input type="text" class="form-control"  id="address"  name="address" value="<?php echo $user['address'] ?>" required>
				<div class="invalid-feedback" style="width: 100%;">
             		Address is required.
            	</div>							
			</div>
			
						
			<div class="form-group mb-3">
				<label for="address">Email</label>
				<input type="email" class="form-control"  id="email"  name="email" value="<?php echo $user['email'] ?>"  required>
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
					<input type="number" class="form-control" id="mobNo" name="mobNo" value="<?php echo $user['mobno'] ?>" required>						
				</div>
				<div class="invalid-feedback" style="width: 100%;">
             		Mobile no is required.
            	</div>	
			</div>

			<div class="form-group mb-3">
				<label for="address">Password</label>
				<input type="password" class="form-control"  id="pass" value="<?php echo $user['pass'] ?>"  name="pass"  required>
				<div class="invalid-feedback" style="width: 100%;">
             		Password is required.
            	</div>							
			</div>	
						
														
			<div class="form-group mb-3">
				<label for="confPass">Confirm Password</label>
				<input type="password" class="form-control"  id="confPass" value="<?php echo $user['pass'] ?>" name="confPass"  required>
				<div class="invalid-feedback" style="width: 100%;">
             		Re-type same Password.
            	</div>							
			</div>
			
			<div class="text-right">
				<button type="submit" class="btn btn-success">Save</button>	
			</div>
			
		</form>
	</div>
	<script>
		let instituteInfo = '<label for="institute">Name of Institution(Currently working for)</label> <input type="text" class="form-control" value="<?php echo $user['institute'] ?>"  id="institute"  name="institute"  required>';
		
		
		function hide_view(){
			if(document.getElementById("institute").checked){
				document.getElementById("instituteDiv").innerHTML = instituteInfo;
			}
			else{
				document.getElementById("instituteDiv").innerHTML = "";
			}
		}
		
	</script>

	<script src="js/qsreg_val.js"></script>
<?php include("includes/footer.php") ?>