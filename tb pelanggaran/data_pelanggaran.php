<?php
  include ('../dasboard/header.php');
  require 'koneksi.php';
?>
<a href="form_tambah.php" class="btn btn-danger">Tambah Data</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID PELANGGARAN</th>
      <th scope="col">NAMA PELANGGARAN</th>
      <th scope="col">SANKSI</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $query =mysqli_query($conn, 'SELECT * FROM tb_pelanggaran');
     while ($row =mysqli_fetch_assoc($query)) :
    ?>
    <tr>
      <td><?php echo $row ['ID_PELANGGARAN'];?></td>
      <td><?php echo $row ['NAMA_PELANGGARAN']?></td>
      <td><?php echo $row ['SANKSI']?></td>
      <td><a href="edit_data.php?ID_PELANGGARAN=<?php echo $row['ID_PELANGGARAN']?>" 
        class='btn btn-sm btn-primary'>EDIT</a> 
        <a href="hapus.php?ID_PELANGGARAN=<?php echo $row['ID_PELANGGARAN']?>" 
        class='btn btn-sm btn-danger'>DELETE</a></td>
    </tr>
    <?php endwhile; ?>
    
  </tbody>
</table>
<?php
  include ('../dasboard/footer.php');
?>