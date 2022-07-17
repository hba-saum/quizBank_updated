<?php
include("includes/header.php");
head("Registration Failed!");
?>
<body style="background: #DDFCDD">
	<div class="container mt-5">
		<div class="alert alert-danger" role="alert">
		  <h4 class="alert-heading">Registration failed!</h4>
		  <p>Please try again. Error from <?php echo $_GET['err'] ?> Goto <a href="index.php">Home</a> or <a href="login.php">Login</a></p>
		</div>	
	</div>
<?php include("includes/footer.php") ?>