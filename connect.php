<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	mysql_select_db('test');

	if(!$conn) {
	    die("Connection failed: " . $conn->connect_error);
	}
?>