<?php
	require_once'conn.php';
	session_start();
	if(ISSET($_POST['expression'])){
		$expression=$_POST['expression'];
		$result=$_POST['result'];
		$user_id = $_SESSION['user_id'];
 
		$query="INSERT INTO `history` (user_id, expression, result ) VALUES($user_id, '$expression', '$result' )";
 
		if($conn->exec($query)){
            echo "saved";
        }else{
            echo "error";
        }
 
	}
?>