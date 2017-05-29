<!DOCTYPE html>
<html>
<head>
	<title>Edit Email</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="halaman-edit">
	<ul class="ul" style="padding:0px; margin:0px">
		<li class="li"><a class="lia" href="pageTimeline.php">Timeline</a></li>
		<li class="li"><a class="lia" href="pageGallery.php">My Gallery</a></li>
	  	<li class="li" style="float: right;margin-right:15px"><a class="logout" href="logout.php">Logout</a></li>
		<li class="li" style="float: right;"><a class="lia" href="pageMyPost.php">
			<!-- My Post -->
			<?php
				session_start();
				echo $_SESSION['logged_user'];
			?>
		</a></li>
	</ul>

	<center>
		<form action="editEmail.php" method="post">
			<div style="margin:50px; font-family:Lucida Sans Unicode; font-size:20px">
				Insert you new Email Address<br>
				<input type="email" placeholder="Email" class="form" name="edit-email" id="edit-email" oninvalid="setCustomValidity('Email harus diisi')" required>
			</div>
			<div>
				<button type="submit" class="submit_button">Submit</button>
			</div>
		</form>
	</center>
</body>
</html>