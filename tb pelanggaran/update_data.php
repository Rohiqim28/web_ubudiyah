<?php 

$id		    =$_POST['id'];
$nama	      =$_POST['nama'];
$sanksi			=$_POST['sanksi'];



require 'koneksi.php';
$sql ="UPDATE tb_pelanggaran SET NAMA_PELANGGARAN = '$nama', SANKSI= '$sanksi'  where ID_PELANGGARAN = '$id'";
$update = mysqli_query($conn, $sql);

header("location:data_pelanggaran.php");




?>