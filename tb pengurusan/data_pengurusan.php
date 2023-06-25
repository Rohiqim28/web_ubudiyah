<?php
  include ('../dasboard/header.php');
  require 'koneksi.php';
?>
<a href="form_tambah.php" class="btn btn-danger">Tambah Data</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID PENGURUSAN</th>
      <th scope="col">NAMA SANTRI</th>
      <th scope="col">ASRAMA SANTRI</th>
      <th scope="col">PELANGGARAN</th>
      <th scope="col">SANKSI</th>
      <th scope="col">TGL PENGURUSAN</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $query = mysqli_query($conn, "SELECT * FROM tb_pengurusan_skor INNER JOIN tb_pelanggaran ON 
      tb_pengurusan_skor.id_pelanggaran = tb_pelanggaran.id_pelanggaran INNER JOIN tb_santri ON tb_pengurusan_skor.id_santri = tb_santri.id_santri");
     while ($row =mysqli_fetch_assoc($query)) :
      var_dump($row);;
      exit;
    ?>
    <tr>
      <td><?php echo $row ['ID_PENGURUSAN'];?></td>
      <td><?php echo $row ['ID_PELANGGARAN']?></td>
      <td><?php echo $row ['ID_SANTRI']?></td>
      <td><?php echo $row ['ID_PENGONTROL']?></td>
      <td><?php echo $row ['PELANGGARAN']?></td>
      <td><?php echo $row ['TGL_PENGURUSAN']?></td>
      <td><?php echo $row ['KETERANGAN']?></td>
      <td><a href="edit_data.php?ID_SANTRI=<?php echo $row['ID_PENGURUSAN']?>" 
        class='btn btn-sm btn-primary'>EDIT</a> 
        <a href="hapus.php?ID_SANTRI=<?php echo $row['ID_PENGURUSAN']?>" 
        class='btn btn-sm btn-danger'>DELETE</a></td>
    </tr>
    <?php endwhile; ?>
    
  </tbody>
</table>
<?php
  include ('../dasboard/footer.php');
?>