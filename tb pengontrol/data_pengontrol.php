<?php
  include ('../dasboard/header.php');
  require 'koneksi.php';
?>
<a href="form_tambah.php" class="btn btn-danger">Tambah Data</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID PENGONTROL</th>
      <th scope="col">NAMA NAMA PENGONTROL</th>
      <th scope="col">DAERAH KONTROL</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $query =mysqli_query($conn, 'SELECT * FROM tb_pengontrol');
     while ($row =mysqli_fetch_assoc($query)) :
    ?>
    <tr>
      <td><?php echo $row ['ID_PENGONTROL'];?></td>
      <td><?php echo $row ['NAMA_PENGONTROL']?></td>
      <td><?php echo $row ['DAERAH_KONTROL']?></td>
      <td><a href="edit_data.php?ID_PENGONTROL=<?php echo $row['ID_PENGONTROL']?>" 
        class='btn btn-sm btn-primary'>EDIT</a> 
        <a href="hapus.php?ID_PENGONTROL=<?php echo $row['ID_PENGONTROL']?>" 
        class='btn btn-sm btn-danger'>DELETE</a></td>
    </tr>
    <?php endwhile; ?>
    
  </tbody>
</table>
<?php
  include ('../dasboard/footer.php');
?>