<?php 
	$id		=$_GET['ID_PELANGGARAN'];
	
	require 'koneksi.php';
	$sql ="DELETE FROM tb_pelanggaran where ID_PELANGGARAN = '$id'";
	$update = mysqli_query($conn, $sql);
	header("location:data_pelanggaran.php");

?>