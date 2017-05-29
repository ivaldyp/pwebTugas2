<?php
include 'connect.php';
// $nama_tes =  $_GET['download'];
// echo $_GET['download'];

$nama_file_download = $_GET['download'];
$query_download = "SELECT pic_name FROM picture_data WHERE pic_name_nama = '$nama_file_download'";
$result_download = mysql_query($query_download);
$row_download = mysql_fetch_array($result_download);

$lokasi_pic = $row_download['pic_name'];
echo "$lokasi_pic";


$file_download = $lokasi_pic;
// $file_download="imageOrang/".$row_download.".png";

if($fd=fopen($file_download,"r"))
{
	$fsize=filesize($file_download);
	$path_parts=pathinfo($file_download);

	header("Content-type:application/octet-stream");
	header("Content-Disposition:filename=\"".$path_parts["basename"]."\"");
	header("Content-length:$fsize");

	while(!feof($fd))
	{
		$buffer=fread($fd,2048);
		echo $buffer;
	}
}
fclose($fd);
exit;
?>