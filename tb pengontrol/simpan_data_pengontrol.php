<?php
include 'koneksi.php';

	$id	=$_POST['ID_PENGONTROL'];
	$nama =$_POST['NAMA_PENGONTROL'];
	$daerah	=$_POST['DAERAH_KONTROL'];
	
	$sql = "INSERT INTO tb_pengontrol set ID_PENGONTROL ='$id',
                                        NAMA_PENGONTROL ='$nama',
                                        DAERAH_KONTROL ='$daerah'";
	$insert = mysqli_query($conn,$sql);
	header("location:data_pengontrol.php");

?>