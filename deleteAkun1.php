<!DOCTYPE html>
<html>
<head>
	<title>Hapus Akun</title>
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

	<div style="padding:100px; font-family:Lucida Sans Unicode; font-size:36px; ">
		<center>
			<b style="color:red">PIKIRKAN BAIK-BAIK SEBELUM MENGHAPUS</b>
			<br><br>
			<a href="deleteAkun2.php" style="text-decoration:none; color:white">
				<div style="background-color:red; margin-left:450px; margin-right:450px; border-radius:5px; ">HAPUS</div>
			</a>
			<br>
			<a href="pageMyPost.php" style="text-decoration:none; color:white">
				<div style="background-color:blue; margin-left:450px; margin-right:450px; border-radius:5px; ">Kembali</div>
			</a>
		</center>
		
	</div>
</body>
</html>