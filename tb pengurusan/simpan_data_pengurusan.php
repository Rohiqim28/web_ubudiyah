<?php
include 'koneksi.php';

	$id	=$_POST['ID_SANTRI'];
	$nama =$_POST['NAMA_SANTRI'];
	$asrama	=$_POST['ASRAMA_SANTRI'];
	$alamat	=$_POST['ALAMAT'];
	$p_pagi	=$_POST['P_PAGI'];
	$p_sore	=$_POST['P_SORE'];
	
	$sql = "INSERT INTO tb_santri set ID_SANTRI ='$id',
                                        NAMA_SANTRI ='$nama',
                                        ASRAMA_SANTRI ='$asrama',
																				ALAMAT  ='$alamat',
																				P_PAGI ='$p_pagi',
																				P_SORE ='$p_sore'";
	$insert = mysqli_query($conn,$sql);
	header("location:data_santri.php");

?>