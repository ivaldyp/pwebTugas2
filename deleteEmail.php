<?php
	include 'connect.php';
	session_start();

	$logged_id = $_SESSION['logged_id'];

	$query_delete_email = "UPDATE users SET user_email = NULL WHERE user_id = '$logged_id'";
	$result_delete_email = mysql_query($query_delete_email);

	echo "Delete success. Going back to your Home Page . . .";
	header('Refresh:3; URL=pageMyPost.php');
?>