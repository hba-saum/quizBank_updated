<?php 
	$valid = "";
	if(isset($_GET['valid']) && isset($_GET['valid'])){
		if($_GET['valid']==0){
			$valid = "not valid";
		}
	}

		if(isset($_GET['login']) && isset($_GET['login'])){
		if($_GET['login']==0){
			$valid = "Please Login First!";
		}
	}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/changes.css">
	
    <title>QuizBank | Login</title>
    
    <style>
		.container{
			margin-top: 10%;
			border-radius: 10px;
			box-shadow: 1px 1px 1px 1px #ccc;
		}
		.top-round{
			border-radius: 10px 10px 0 0;
		}
		.bottom-round{
			border-radius: 0 0 10px 10px;
		}
	</style>
  </head>
<body style="background: #DDFCDD">
	<div class="container p-0" style="max-width: 500px; background: #FFF">
		<div class="bgr-red top-round">
			
			<a href="index.php"><img class="mx-auto d-block p-1" src="img/logo.png" height="50px" width="auto"></a>
		</div>
		
		<h4 class="text-center m-2">Login</h4>

		<div>
			<div>
				<b class="text-center"><?php echo $valid ?></b>
			</div>		
			<form class="p-3" action="../controller/login_con.php" method="post">
				<div class="form-group mb-3">
					<input type="text" class="form-control" name="username" placeholder="Username" required>						
				</div>
				<div class="form-group mb-3">
					<input type="password" class="form-control" name="pass" placeholder="password" required>						
				</div>
				<button type="submit" class="btn btn-success col-12 ">Login</button>	
			</form>			
		</div>

	</div>
<?php include("includes/footer.php") ?>