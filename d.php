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
		<center><h1>WELCOME USER</h1></center>
	</div>
</body>	
</html>