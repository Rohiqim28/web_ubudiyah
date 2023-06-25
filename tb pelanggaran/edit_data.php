
<?php
include ('../dasboard/header.php');
require 'koneksi.php';

$id_pelanggaran=$_GET['ID_PELANGGARAN'];



$query	=mysqli_query($conn, "SELECT * FROM tb_pelanggaran where ID_PELANGGARAN ='$id_pelanggaran'");
$row 	=mysqli_fetch_assoc($query);

?>
<div class="container" style="margin-top: 80px;">
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header bg-primary text-white">EDIT DATA PELANGGARAN</div>
      <div class="card-body">
        <form action="update_data.php" method="POST">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">ID PELANGGARAN</label>
            <div class="col-sm-10">
              <input readonly="" type="text" value="<?php echo $row ['ID_PELANGGARAN'] ?>" name=
              "id" class="form-control" >
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">NAMA PELANGGARAN</label>
            <div class="col-sm-10">
              <input type="text" value="<?php echo $row ['NAMA_PELANGGARAN'] ?>" name=
              "nama"class="form-control" >
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">SANKSI</label>
            <div class="col-sm-10">
              <input type="text" value="<?php echo $row ['SANKSI'] ?>" name=
              "sanksi" class="form-control" >
            </div>
          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-danger">Simpan</button>
              <a href="data_pelanggaran.php" class="btn btn-primary">Kembali</a>
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

