<?php
	require_once'conn.php';
	if(ISSET($_POST['register'])){
		$name=$_POST['name'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$msg = "Error";
		if(ISSET($_POST['user_id'])){
			$user_id = $_POST['user_id'];
			$query="UPDATE `user` SET name='$name', username='$username', password='$password' WHERE user_id='$user_id';";
 
			$conn->exec($query);
			$msg = "Successfully updated!";


		}else{
			$query="INSERT INTO `user` (name, username, password) VALUES('$name', '$username', '$password')";
 
			$conn->exec($query);
			$msg = "Successfully registered!";
 
		}
		
		echo "<center><h4 class='text-success'>".$msg."</h4></center>";
	}
?>