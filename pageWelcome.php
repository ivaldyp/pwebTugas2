<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="welcome" style="font-family:Lucida Sans Unicode">
	<center>
	<?php
		session_start();
		if (isset($_SESSION['logged_user']))
		{
			$logged_user = $_SESSION['logged_user'];
			echo "<h1>Welcome, $logged_user!!</h1>";
			header('refresh:2; URL=pageMyPost.php');
		}
	?>
	</center>
</body>
</html>
