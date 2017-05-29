<?php
	include 'connect.php';
	session_start();
	$update_email = $_POST['edit-email'];
	$logged_id = $_SESSION['logged_id'];
	$query_update_email = "UPDATE users SET user_email = '$update_email' WHERE user_id = '$logged_id'";
	$result_update_email = mysql_query($query_update_email);
	
	echo "edit success. Going back to your home page . . .";
	header('Refresh:3; URL=pageMyPost.php');
?>