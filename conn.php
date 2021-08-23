<?php
	$conn=new SQLite3('db/db_user') or die("Unable to open database!");
	$query="CREATE TABLE IF NOT EXISTS `user`(user_id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, username TEXT, password TEXT, name TEXT)";	
	
	$query2="CREATE TABLE IF NOT EXISTS `history`(his_id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, expression TEXT, result TEXT )";	
	$conn->exec($query);
	$conn->exec($query2);
?>