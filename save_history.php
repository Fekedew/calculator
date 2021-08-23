<?php
	require_once'conn.php';
	if(ISSET($_POST['expression'])){
		$expression=$_POST['expression'];
		$result=$_POST['result'];
 
		$query="INSERT INTO `history` (expression, result ) VALUES('$expression', '$result' )";
 
		if($conn->exec($query)){
            echo "saved";
        }else{
            echo "error";
        }
 
	}
?>