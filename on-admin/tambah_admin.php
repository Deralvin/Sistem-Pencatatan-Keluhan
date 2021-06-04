<?php
	include('../config.php');

	$nama_admin=$_POST['nama_admin'];
	$kata_sandi=md5($_POST['kata_sandi']);
	$level_user=$_POST['level_user'];
	
	
	mysqli_query($conn, "insert into admin (nama_admin, kata_sandi,level_user) 
							values 
							('$nama_admin', '$kata_sandi', '$level_user')");
	header('location:admin.php');

?>