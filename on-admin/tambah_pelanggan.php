<?php
	include('../config.php');

	$nama_pelanggan=$_POST['nama_pelanggan'];
	$alamat_pelanggan=$_POST['alamat_pelanggan'];
	$telepon_pelanggan=$_POST['telepon_pelanggan'];
	$email_pelanggan=$_POST['email_pelanggan'];
	
	$insert = mysqli_query($conn, "insert into pelanggan (nama_pelanggan, alamat_pelanggan, telepon_pelanggan, email_pelanggan) 
							values 
							( '$nama_pelanggan', '$alamat_pelanggan', '$telepon_pelanggan', '$email_pelanggan')");
				
	header('location:pelanggan.php');
?>