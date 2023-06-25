<?php
include 'koneksi.php';

	$id	=$_POST['ID_PELANGGARAN'];
	$nama =$_POST['NAMA_PELANGGARAN'];
	$sanksi	=$_POST['SANKSI'];
	
	$sql = "INSERT INTO tb_pelanggaran set ID_PELANGGARAN ='$id',
                                        NAMA_PELANGGARAN ='$nama',
                                        SANKSI ='$sanksi'
																				";
	$insert = mysqli_query($conn,$sql);
	header("location:data_pelanggaran.php");

?>