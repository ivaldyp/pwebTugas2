<!DOCTYPE html>

<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="menu">
	<div id="buatlogin">
		<form method="post" action="login.php">
			<div>
				<img src="image/logo1.png" width="450px">

				<div>
					<input type="text" placeholder="Username" class="form" name="login-username" oninvalid="setCustomValidity('Username harus diisi')" required>
				</div>
				<br>
				<div>
					<input type="password" placeholder="Password" class="form" name="login-password" oninvalid="setCustomValidity('Password harus diisi')" required>
				</div>
				<label>Remember Me <input type="checkbox" name="me"></label>
				<br>
				<div>
					<button type="submit" id="login_button">Log in</button>
				</div>
				<br>
				
			</div>
		</form>
		<div>
			Don't have an account yet? <a href="pageSignup.php" style="text-decoration:none">Sign Up</a>
		</div>
	</div>
</body>
</html>