
<?php
include ('../dasboard/header.php');
require 'koneksi.php';

$id_pengontrol=$_GET['ID_PENGONTROL'];



$query	=mysqli_query($conn, "SELECT * FROM tb_pengontrol where ID_PENGONTROL ='$id_pengontrol'");
$row 	=mysqli_fetch_assoc($query);

?>
<div class="container" style="margin-top: 80px;">
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header bg-primary text-white">EDIT DATA PENGONTROL</div>
      <div class="card-body">
        <form action="update_data.php" method="POST">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">ID PENGONTROL</label>
            <div class="col-sm-10">
              <input readonly="" type="text" value="<?php echo $row ['ID_PENGONTROL'] ?>" name=
              "id" class="form-control" >
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Mata Kuliah</label>
            <div class="col-sm-10">
              <input type="text" value="<?php echo $row ['NAMA_PENGONTROL'] ?>" name=
              "nama"class="form-control" >
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">SKS</label>
            <div class="col-sm-10">
              <input type="text" value="<?php echo $row ['DAERAH_KONTROL'] ?>" name=
              "daerah" class="form-control" >
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-danger">Simpan</button>
              <a href="data_pengontrol.php" class="btn btn-primary">Kembali</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<?php
include ('../dasboard/footer.php');
?>

