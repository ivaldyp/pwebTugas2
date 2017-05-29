<?php
	include 'connect.php';
	session_start();
	$update_desc = $_POST['edit-desc'];
	$logged_id = $_SESSION['logged_id'];
	$query_update_desc = "UPDATE users SET user_desc = '$update_desc' WHERE user_id = '$logged_id'";
	$result_update_desc = mysql_query($query_update_desc);
	
	echo "edit success. Going back to your home page . . .";
	header('Refresh:3; URL=pageMyPost.php')
?>