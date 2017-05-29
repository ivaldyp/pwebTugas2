<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
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
		<h1 style="font-family:Lucida Sans Unicode; ">Upload</h1>
	</center>

	<center><div style="margin:50px">
		<form action="upload.php" method="post" enctype="multipart/form-data">
			<input type="text" placeholder="Nama Foto (max 15 char)" class="form" name="upload-name" maxlength="15" oninvalid="setCustomValidity('Nama harus diisi')" required>
			<br>
			<input type="file" name="fileToUpload" id="fileToUpload">
			<br><br><br>
			<input type="submit" name="submit" value="Upload File">
		</form>
	</div></center>

</body>
</html>