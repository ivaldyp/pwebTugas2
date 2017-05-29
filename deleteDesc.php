<?php
	include 'connect.php';
	session_start();

	$logged_id = $_SESSION['logged_id'];

	$query_delete_desc = "UPDATE users SET user_desc = NULL WHERE user_id = '$logged_id'";
	$result_delete_desc = mysql_query($query_delete_desc);

	echo "Delete success. Going back to your Home Page . . .";
	header('Refresh:3; URL=pageMyPost.php');
?>