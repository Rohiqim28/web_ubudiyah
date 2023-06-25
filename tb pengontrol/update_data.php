<?php 

$id		    =$_POST['id'];
$nama	      =$_POST['nama'];
$daerah			=$_POST['daerah'];


require 'koneksi.php';
$sql ="UPDATE tb_pengontrol SET NAMA_PENGONTROL = '$nama', DAERAH_KONTROL = '$daerah' where ID_PENGONTROL = '$id'";
$update = mysqli_query($conn, $sql);

header("location:data_pengontrol.php");




?>