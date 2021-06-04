<?php
	include('../config.php');

	$nama_teknisi=$_POST['nama_teknisi'];
	$telpon_teknisi=$_POST['telpon_teknisi'];
	$email_teknisi=$_POST['email_teknisi'];
	
	mysqli_query($conn, "insert into teknisi (nama_teknisi, telpon_teknisi, email_teknisi) 
							values 
							('$nama_teknisi', '$telpon_teknisi', '$email_teknisi')");
	header('location:teknisi.php');

?>