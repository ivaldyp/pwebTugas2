<?php
	include 'connect.php';

	$user_signup = $_POST['signup-username'];
	$pass_signup = $_POST['signup-password'];
	$email_signup = $_POST['signup-email'];
	$telp_signup = $_POST['signup-telp'];
	$desc_signup = $_POST['signup-desc'];

	$query_signup = "SELECT user_name FROM users";
   	$result_signup = mysql_query($query_signup);

	while($row_signup = mysql_fetch_array($result_signup))
   	{   
      	if ($row_signup['user_name'] == $user_signup){
        	echo "Username already exist. Redirecting back to Sign Up page . . .";
        	mysql_close($conn);
        	header('Refresh: 3; URL=pageSignup.php');
        	break;
    	}
    }

    $sql_signup = "INSERT INTO users " . "VALUES(NULL, '$user_signup', '$telp_signup', '$email_signup', '$pass_signup', '$desc_signup')";

	$retval_signup = mysql_query($sql_signup, $conn);

	if (!$retval_signup){
		die('could not connect db: ' . mysql_error());
	}

	echo "Signing Up Success, Going back to Login Page . . .";

	mysql_close($conn);
	header('Refresh: 3; URL=index.php');
?>