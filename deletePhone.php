<?php
	include 'connect.php';
	session_start();

	$logged_id = $_SESSION['logged_id'];

	$query_delete_phone = "UPDATE users SET user_phone = NULL WHERE user_id = '$logged_id'";
	$result_delete_phone = mysql_query($query_delete_phone);

	echo "Delete success. Going back to your Home Page . . .";
	header('Refresh:3; URL=pageMyPost.php');
?>