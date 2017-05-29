<?php
	include 'connect.php';
	session_start();
	$update_pass2 = $_POST['edit-pass2'];
	$logged_id = $_SESSION['logged_id'];
	$query_update_pass2 = "UPDATE users SET user_pass = '$update_pass2' WHERE user_id = '$logged_id'";
	$result_update_pass2 = mysql_query($query_update_pass2);
	
	echo "edit success. Going back to your home page . . .";
	header('Refresh:3; URL=pageMyPost.php')
?>