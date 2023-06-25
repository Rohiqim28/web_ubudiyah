<?php
	include ('../dasboard/header.php');

?>
<br><br>
<div class="container">
	<form action="simpan_data_pelanggaran.php" method="POST">
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">ID PELANGGARAN</label>
			<div class="col-sm-10">
				<input type="text" name="ID_PELANGGARAN" placeholder="Masukkan ID PELANGGARAN" class="form-control">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">NAMA SANTRI</label>
			<div class="col-sm-10">
				<input type="text" name="NAMA_PELANGGARAN" placeholder="Masukkan NAMA PELANGGARAN" class="form-control">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">SANKSI</label>
			<div class="col-sm-10">
				<input type="text" name="SANKSI" placeholder="Masukkan SANKSI" class="form-control">
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-10">
				<button type="submit" class="btn btn-danger">Simpan</button>
				<a href="data_pelanggaran.php" class="btn btn-primary">Kembali</a>
			</div>
		</div>
	</form>
	
</div>

<?php
	include ('../dasboard/footer.php');

?>