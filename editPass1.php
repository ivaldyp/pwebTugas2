<?php
	include 'connect.php';
	session_start();

	$update_pass1 = $_POST['edit-pass1'];
	$logged_id = $_SESSION['logged_id'];

	$query_update_pass1 = "SELECT user_pass, user_id FROM users WHERE user_id = '$logged_id'";
   	$result_update_pass1 = mysql_query($query_update_pass1);

   	while($row_update_pass1 = mysql_fetch_array($result_update_pass1))
   	{
   		if($row_update_pass1['user_id'] == $logged_id && $row_update_pass1['user_pass'] == $update_pass1)
   		{
   			header('location: pageEditPass2.php');
   		}
   	}
   	echo "wrong OLD Password. Please retry . . .";
   	header('Refresh:3; URL=pageEditPass1.php');
?>