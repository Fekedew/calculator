<?php
	session_start();
	if(!ISSET($_SESSION['user_id'])){
		header('location: index.php');
	}
?>
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
		<div class="col-md-12">
			<div class="alert alert-info">Update your account.</div>
			<form action="" method="POST">
				
				<input type="hidden" name="user_id"  value="<?php echo $_SESSION['user_id']; ?> "/>
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
					<input type="password" name="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />
				</div>
		
				<center><button name="register" class="btn btn-success">Update</button></center>
				
			</form>
			<br />
			<?php include'register.php'?>
		</div>
	</div>

</body>	
</html>