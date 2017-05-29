<!DOCTYPE html>
<html>
<head>
	<title>Gallery</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="gallery">
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

	<div style="height:50px; width:150px">
		<a href="pageUpload.php" style="text-decoration:none">
			<p class="uploadbutton"><span style="font-weight:bolder; font-size:24px">+</span> Upload</p>
		</a>
	</div>
	<div style="height:50px; width:150px">
		<a href="pageDownload.php" style="text-decoration:none">
			<p class="uploadbutton"><span style="font-weight:bolder; font-size:24px"></span> Download</p>
		</a>
	</div>
	<center>
		<h1 style="font-family:Lucida Sans Unicode; margin-top:-50px;">TIMELINE</h1>
	</center>

	<span style="font-family:Lucida Sans Unicode">
	<?php
		include 'connect.php';

		$logged_id = $_SESSION['logged_id'];
		$sql_image  = "SELECT pic_name, pic_time, user_id, pic_name_nama FROM picture_data ORDER BY pic_time";
		$result_image = mysql_query($sql_image);
		
		while($rows_image = mysql_fetch_assoc($result_image))
		{
		    $image = $rows_image['pic_name'];
		    $time = $rows_image['pic_time'];
		    $orang = $rows_image['user_id'];
		    $nama = $rows_image['pic_name_nama'];

		    echo "<center>";
		    echo "<img src= $image width='400px'>";
		    echo "<br><b>$nama</b>";
		    echo "<br> Date of upload: $time";

		    $sql_orang  = "SELECT user_name FROM users WHERE user_id = '$orang'";
			$result_orang = mysql_query($sql_orang);
			echo "<br>";
			while($rows_orang = mysql_fetch_assoc($result_orang))
			{
				$nama_orang = $rows_orang['user_name'];
				echo "Uploaded by:<b> $nama_orang </b>";
				break;
			}

		    echo "<br><br>";
		    echo "</center>";
		} 
	?>
	</span>
</body>
</html>