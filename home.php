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
		<div class="form-inline" >
			<div class="form-group">
				<label for="expression">Expression:</label>
				<input type="text" class="form-control " id="expression" placeholder="Enter expression">
			</div>
			<div class="form-group">
				<label for="result">= </label>
				<input type="text" class="form-control" id="result" placeholder="Result" >
			</div>
			<button  class="btn btn-default" onclick="calculate()">Calculate</button>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script>
		function calculate(e){
			var expression = document.getElementById('expression').value;
			try {
				var result = eval(document.getElementById('expression').value);
			}catch(error){
				result = "something went wrong";
			}
			document.getElementById("result").value = result;
			$.ajax({
				url: "save_history.php",
				method: "post",
				
				data: {
					expression: expression,
					result: result
				},
				success: function( result ) {
					console.log(result);
				}
			});
						}
	</script>
</body>	
</html>