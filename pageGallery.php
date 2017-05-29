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
		<h1 style="font-family:Lucida Sans Unicode; margin-top:-50px;">My Post</h1>
	</center>

	<span style="font-family:Lucida Sans Unicode">
	<?php
		include 'connect.php';

		$logged_id = $_SESSION['logged_id'];
		$sql_image  = "SELECT pic_name, pic_time FROM picture_data WHERE user_id = '$logged_id'";
		$result_image = mysql_query($sql_image);
		

		while($rows = mysql_fetch_assoc($result_image))
		{
		    $image = $rows['pic_name'];
		    $time = $rows['pic_time'];
		    echo "<center>";
		    echo "<img src= $image width='400px'>";
		    echo "<br> Date of upload: $time";
		    // echo "<br>";
		    // echo "<a href='delete.php' style='text-decoration:none'>Hapus</a>";
		    echo "<br><br>";
		    echo "</center>";
		} 
	?>
	</span>
</body>
</html>