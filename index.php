<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	

<?php include "./nav.php"; ?>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - Smart calculator</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-5">
			<form action="" method="POST">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control" required="required"/>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" required="required"/>
				</div>
				
				<center><button name="login" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> Login</button></center>
				
			</form>
			<br />
			<?php include 'login.php'?>
		</div>
		<div class="col-md-2"></div>
		<div class="col-md-5">
			<div class="alert alert-info">No account yet? Register here...</div>
			<form action="" method="POST">
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control" required="required"/>
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control" required="required"/>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
				</div>
		
				<center><button name="register" class="btn btn-success">Register</button></center>
				
			</form>
			<br />
			<?php include'register.php'?>
		</div>
	</div>

</body>	
</html>