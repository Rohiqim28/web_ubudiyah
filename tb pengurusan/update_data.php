<?php 

$id		    =$_POST['id'];
$nama	      =$_POST['nama'];
$asrama			=$_POST['asrama'];
$alamat			=$_POST['alamat'];
$p_pagi			=$_POST['p_pagi'];
$p_sore			=$_POST['p_sore'];


require 'koneksi.php';
$sql ="UPDATE tb_santri SET NAMA_SANTRI = '$nama', ASRAMA_SANTRI= '$asrama', ALAMAT='$alamat', P_PAGI='$p_pagi', P_SORE='$p_sore'  where ID_SANTRI = '$id'";
$update = mysqli_query($conn, $sql);

header("location:data_santri.php");




?>