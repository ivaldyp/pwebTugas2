
<!DOCTYPE html>
<html>
<head>
	<title>
		<?php
			session_start();
			echo $_SESSION['logged_user'];
		?>
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="myPost">
	<ul class="ul" style="padding:0px; margin:0px">
	  	<li class="li"><a class="lia" href="pageTimeline.php">Timeline</a></li>
		<li class="li"><a class="lia" href="pageGallery.php">My Gallery</a></li>
	  	<li class="li" style="float: right;margin-right:15px"><a class="logout" href="logout.php">Logout</a></li>
		<li class="li" style="float: right;"><a class="lia" href="pageMyPost.php">
			<!-- My Post -->
			<?php
				// session_start();
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
	<div id="data-diri">
		<table id="tabel-data" width="100%">
			<tr>
				<th colspan="3">
					About
					<?php
						// session_start();
						echo $_SESSION['logged_user'];
					?>
				</th>
			</tr>
			<tr>
				<td width="30%">
					<?php
						// session_start();
						echo $_SESSION['logged_user'];
					?>
					's Post:
				</td>
				<td width="60%" colspan="2">
					<?php
						include 'connect.php';

						$logged_id = $_SESSION['logged_id'];
						$query_jmlhpost = "SELECT COUNT(pic_id) AS test FROM picture_data WHERE user_id = '$logged_id'";
						$result_jmlhpost = mysql_query($query_jmlhpost);
						
						while($row_post = mysql_fetch_array($result_jmlhpost))

						echo $row_post['test'];
					?>
				</td>
			</tr>
			<tr>
				<td width="30%">
					<?php
						// session_start();
						echo $_SESSION['logged_user'];
					?>
					's Phone Number:
				</td>
				<td width="60%">
					<?php
						include 'connect.php';

						$logged_id = $_SESSION['logged_id'];
						$query_jmlhpost = "SELECT user_phone FROM users WHERE user_id = '$logged_id'";
						$result_jmlhpost = mysql_query($query_jmlhpost);
						
						while($row_post = mysql_fetch_array($result_jmlhpost))

						echo $row_post['user_phone'];
					?>
				</td>
				<td>
					<a href="pageEditPhone.php" style="text-decoration:none">Edit</a> 
					<a href="deletePhone.php" style="text-decoration:none">Hapus</a>
				</td>
			</tr>
			<tr>
				<td width="30%">
					<?php
						// session_start();
						echo $_SESSION['logged_user'];
					?>
					's Description:
				</td>
				<td width="60%">
					<?php
						include 'connect.php';

						$logged_id = $_SESSION['logged_id'];
						$query_jmlhpost = "SELECT user_email FROM users WHERE user_id = '$logged_id'";
						$result_jmlhpost = mysql_query($query_jmlhpost);
						
						while($row_post = mysql_fetch_array($result_jmlhpost))

						echo $row_post['user_email'];
					?>
				</td>
				<td>
					<a href="pageEditEmail.php" style="text-decoration:none">Edit</a>
					<a href="deleteEmail.php" style="text-decoration:none">Hapus</a>
				</td>
			</tr>
			<tr>
				<td width="30%">
					<?php
						// session_start();
						echo $_SESSION['logged_user'];
					?>
					's Description:
				</td>
				<td width="60%">
					<?php
						include 'connect.php';

						$logged_id = $_SESSION['logged_id'];
						$query_jmlhpost = "SELECT user_desc FROM users WHERE user_id = '$logged_id'";
						$result_jmlhpost = mysql_query($query_jmlhpost);
						
						while($row_post = mysql_fetch_array($result_jmlhpost))

						echo $row_post['user_desc'];
					?>
				</td>
				<td>
					<a href="pageEditDesc.php" style="text-decoration:none">Edit</a>
					<a href="deleteDesc.php" style="text-decoration:none">Hapus</a>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<a href="pageEditPass1.php" style="text-decoration:none">Edit Password</a>
				</td>
			</tr>
		</table>
		<center><a href="deleteAkun1.php" style="color:red; text-decoration:none; font-weight:bold; border-style:fill">HAPUS AKUN INI</a></center>	
	</div>
</body>
</html>