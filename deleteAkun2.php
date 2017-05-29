<?php
	include 'connect.php';
	session_start();

	$logged_id = $_SESSION['logged_id'];

	$query_delete_akun1 = "DELETE FROM picture_data WHERE user_id = '$logged_id'";
	$result_delete_akun1 = mysql_query($query_delete_akun1);

	$query_delete_akun2 = "DELETE FROM users WHERE user_id = '$logged_id'";
	$result_delete_akun2 = mysql_query($query_delete_akun2);

	echo "Penghapusan Akun Berhasil";
	header('Refresh:3; URL=index.php');
?>