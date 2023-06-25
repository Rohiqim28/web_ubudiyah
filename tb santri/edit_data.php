
<?php
include ('../dasboard/header.php');
require 'koneksi.php';

$id_santri=$_GET['ID_SANTRI'];



$query	=mysqli_query($conn, "SELECT * FROM tb_santri where ID_SANTRI ='$id_santri'");
$row 	=mysqli_fetch_assoc($query);

?>
<div class="container" style="margin-top: 80px;">
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header bg-primary text-white">EDIT DATA SANTRI</div>
      <div class="card-body">
        <form action="update_data.php" method="POST">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">ID SANTRI</label>
            <div class="col-sm-10">
              <input readonly="" type="text" value="<?php echo $row ['ID_SANTRI'] ?>" name=
              "id" class="form-control" >
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">NAMA</label>
            <div class="col-sm-10">
              <input type="text" value="<?php echo $row ['NAMA_SANTRI'] ?>" name=
              "nama"class="form-control" >
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">ASRAMA</label>
            <div class="col-sm-10">
              <input type="text" value="<?php echo $row ['ASRAMA_SANTRI'] ?>" name=
              "asrama" class="form-control" >
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">ALAMAT</label>
            <div class="col-sm-10">
              <input type="text" value="<?php echo $row ['ALAMAT'] ?>" name=
              "alamat" class="form-control" >
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">PEND. PAGI</label>
            <div class="col-sm-10">
              <input type="text" value="<?php echo $row ['P_PAGI'] ?>" name=
              "p_pagi" class="form-control" >
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">P_SORE</label>
            <div class="col-sm-10">
              <input type="text" value="<?php echo $row ['P_SORE'] ?>" name=
              "p_sore" class="form-control" >
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-danger">Simpan</button>
              <a href="data_santri.php" class="btn btn-primary">Kembali</a>
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

