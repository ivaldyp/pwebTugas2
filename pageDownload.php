<!DOCTYPE html>
<html>
<head>
	<title>Download</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="uploadPic">
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
		<h1 style="font-family:Lucida Sans Unicode; ">Download</h1>
	</center>

	<center><div style="margin:50px">
		<form action="download.php" method="GET">
			<input type="text" placeholder="Nama Foto" class="form" name="download" id="download" maxlength="15">
			<br><br>
			<div>
			<button type="submit" id="download_button">Download</button>
			</div>
		</form>
	</div></center>

</body>
</html>

