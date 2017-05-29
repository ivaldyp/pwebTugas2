<?php
	include 'connect.php';
	session_start();
	$update_phone = $_POST['edit-telp'];
	$logged_id = $_SESSION['logged_id'];
	$query_update_phone = "UPDATE users SET user_phone = '$update_phone' WHERE user_id = '$logged_id'";
	$result_update_phone = mysql_query($query_update_phone);
	
	echo "edit success. Going back to your home page . . .";
	header('Refresh:3; URL=pageMyPost.php')
?>