<?php
  include ('../dasboard/header.php');
  require 'koneksi.php';
?>
<a href="form_tambah.php" class="btn btn-danger">Tambah Data</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID SANTRI</th>
      <th scope="col">NAMA SANTRI</th>
      <th scope="col">ASRAMA SANTRI</th>
      <th scope="col">ALAMAT</th>
      <th scope="col">PEND. PAGI</th>
      <th scope="col">PEND. SORE</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $query =mysqli_query($conn, 'SELECT * FROM tb_santri');
     while ($row =mysqli_fetch_assoc($query)) :
    ?>
    <tr>
      <td><?php echo $row ['ID_SANTRI'];?></td>
      <td><?php echo $row ['NAMA_SANTRI']?></td>
      <td><?php echo $row ['ASRAMA_SANTRI']?></td>
      <td><?php echo $row ['ALAMAT']?></td>
      <td><?php echo $row ['P_PAGI']?></td>
      <td><?php echo $row ['P_SORE']?></td>
      <td><a href="edit_data.php?ID_SANTRI=<?php echo $row['ID_SANTRI']?>" 
        class='btn btn-sm btn-primary'>EDIT</a> 
        <a href="hapus.php?ID_SANTRI=<?php echo $row['ID_SANTRI']?>" 
        class='btn btn-sm btn-danger'>DELETE</a></td>
    </tr>
    <?php endwhile; ?>
    
  </tbody>
</table>
<?php
  include ('../dasboard/footer.php');
?>