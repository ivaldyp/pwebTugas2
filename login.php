<?php
	include 'connect.php';

	if (isset($_POST['login-username']) && isset($_POST['login-password'])) 
	{
		session_start();

		$user_login = $_POST['login-username'];
		$pass_login = $_POST['login-password'];

		$query_login = "SELECT * FROM users";
   		$result_login = mysql_query($query_login);

		while($row_login = mysql_fetch_array($result_login))
		{
			if ($row_login['user_name'] == $user_login && $row_login['user_pass'] == $pass_login) 
			{
				$_SESSION['logged_user'] = $user_login;
				$_SESSION['logged_id'] = $row_login['user_id'];
				$_SESSION['logged_phone'] = $row_login['user_phone'];
				$_SESSION['logged_desc'] = $row_login['user_desc'];
				header('location: pageWelcome.php');
			}
		}
		//session_destroy();
		echo "wrong username or password / account not exist. Going back to Login page . . .";
		header('refresh:3; URL=index.php');
	}
?>