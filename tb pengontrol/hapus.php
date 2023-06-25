<?php 
	$id		=$_GET['ID_PENGONTROL'];
	
	require 'koneksi.php';
	$sql ="DELETE FROM tb_pengontrol where ID_PENGONTROL = '$id'";
	$update = mysqli_query($conn, $sql);
	header("location:data_pengontrol.php");

?>