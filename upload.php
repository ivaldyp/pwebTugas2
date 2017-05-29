<?php
include 'connect.php';
session_start();
$target_dir="imageOrang/";
$target_File= $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk=1;
$FileType=pathinfo($target_File,PATHINFO_EXTENSION);

if(isset($_POST["submit"]))
{
	$check=filesize($_FILES["fileToUpload"]["tmp_name"]);
	if($check!== false)
	{
		echo "File is valid, " .$check["mime"]."";
		$uploadOk=1;
	}
	else
	{
		echo "File is not valid <br>";
		$uploadOk=0;
	}
}

//file checking
// if(file_exists($target_File))
// {
// 	echo "sorry, file already exist <br>";
// 	$uploadOk=0;
// }

// //check file size
// if($_FILES["fileToUpload"]["size"]>500000)
// {
// 	echo"sorry, your file is too large <br>";
// 	$uploadOk=0;
// }

//limit filetype
if($FileType != "jpg" && $FileType !="png" && $FileType!="jpeg")
{
	echo "sorry only jpg, png and jpeg files are allowed <br>";
	$uploadOk=0;
}

//file uploading
if($uploadOk==0)
{
	echo "sorry your file is not uploaded <br>";
	header('Refresh: 3; URL=pageUpload.php');
}
else
{
	if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_File))
	{
		$flag = 0;

		$pic_name = $_POST['upload-name'];

		$query_pic = "SELECT pic_name_nama FROM picture_data";	
   		$result_pic = mysql_query($query_pic);

		while($row_pic = mysql_fetch_array($result_pic))
	   	{   
	      	if ($row_pic['pic_name_nama'] == $pic_name){
	      		$flag = 1;
	    	}
	    }

	    if ($flag == 1)
	    {
	    	echo "BUT PICTURE NAME ALREADY EXIST, PLEASE CHANGE IT.<br> Redirecting back to Upload page . . .";
	        $flag = 0;
	        mysql_close($conn);
	       	header('Refresh: 3; URL=pageUpload.php');
	    }
	    else
	    {
	    	// echo "the picture " . basename($_FILES["fileToUpload"]["name"]) ." has been uploaded <br> ";
	    	echo "the picture <b>$pic_name</b> has been uploaded <br> ";
			$logged_id = $_SESSION['logged_id'];
			$sql_upload = "INSERT INTO picture_data " . "VALUES(NULL, '$logged_id', '$target_File', '$pic_name', NOW())";
			$retval_upload = mysql_query($sql_upload, $conn);

			if (!$retval_upload){
				die('could not connect db: ' . mysql_error());
			}

			echo "Upload Success . . .";
			$flag = 0;

			mysql_close($conn);
			// header('Refresh: 3; URL=pageMyPost.php');
			header('Refresh: 3; URL=index.php');
	    }
		
	}
	else
	{
		echo "sorry file not uploaded";
		header('Refresh: 3; URL=pageUpload.php');
	}
}

?>

