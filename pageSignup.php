<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="signup">
	<div id="buatsignup">
		<form action="signup.php" method="post">
			<center>
				<br>
				<br>
				<div style="font-family:Lucida Sans Unicode; margin:20px; margin-top:-20px; text-align:center; font-size:36px; font-weight:bold">
					Become a part of our happiness society
				</div>
				<div>
					<!-- <label for="signup-username" style="text-align:left">Username</label>
					<br> -->
					<input type="text" placeholder="Username (max 10 char)" class="form" maxlength="10" name="signup-username" id="signup-username" oninvalid="setCustomValidity('Username harus diisi')" required>
				</div>
				<br>
				<div>
					<!-- <label for="signup-password">Password</label>
					<br> -->
					<input type="password" placeholder="Password" class="form" name="signup-password" id="signup-password" oninvalid="setCustomValidity('Password harus diisi')" required>
				</div>
				<br>
				<div>
					<!-- <label for="signup-email">Email</label>
					<br> -->
					<input type="email" placeholder="Email" class="form" name="signup-email" id="signup-email" oninvalid="setCustomValidity('Email harus diisi')" required>
				</div>
				<br>
				<div>
					<!-- <label for="signup-telp">Phone Number</label>
					<br> -->
					<input type="tel" placeholder="Phone Number" class="form" name="signup-telp" id="signup-telp" oninvalid="setCustomValidity('Nomor Telepon harus diisi')" required>
				</div>
				<br>
				<div>
					<!-- <label for="signup-username" style="text-align:left">Username</label>
					<br> -->
					<input type="text" placeholder="Your Description (max 50 char)" class="form" maxlength="50" name="signup-desc" id="signup-desc" oninvalid="setCustomValidity('Deskripsi harus diisi')" required>
				</div>
				<br>
				<div>
					<button type="submit" id="signup_button">Sign Up</button>
				</div>
				<br>
				<div>
					Back to <a href="index.php" style="text-decoration:none">Log in</a>
				</div>
			</center>
		</form>
	</div>
</body>
</html>