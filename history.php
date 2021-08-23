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
		<center><h1>Your saved calculation</h1></center>
		<div class=" col-md-10 col-sm-10">
			Expression
		</div>
		<div class="col-md-2 col-sm-2">
			Result
		</div>
		<hr />
		<hr />
		<?php		
		require_once'conn.php';
		$returned_set=$conn->query("SELECT * FROM `history` WHERE 1");
		$count = 1;
		while($result = $returned_set->fetchArray()) {?>
		<div class=" col-md-10 col-sm-10">
			<?php echo $count.", "; ?>
			<?php echo $result["expression"]; ?>
		</div>
		<div class="col-md-2 col-sm-2">
			<?php echo $result["result"]; ?>
		</div>
		<?php
		$count++;
		}

		?>
	</div>

</body>	
</html>