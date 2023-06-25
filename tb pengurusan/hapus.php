<?php 
	$id		=$_GET['ID_SANTRI'];
	
	require 'koneksi.php';
	$sql ="DELETE FROM tb_santri where ID_SANTRI = '$id'";
	$update = mysqli_query($conn, $sql);
	header("location:data_pengontrol.php");

?>