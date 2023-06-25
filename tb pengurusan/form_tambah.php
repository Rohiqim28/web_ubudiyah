<?php
	include ('../dasboard/header.php');

?>
<br><br>
<div class="container">
	<form action="simpan_data_santri.php" method="POST">
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">ID SANTRI</label>
			<div class="col-sm-10">
				<input type="text" name="ID_SANTRI" placeholder="Masukkan ID SANTRI" class="form-control">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">NAMA SANTRI</label>
			<div class="col-sm-10">
				<input type="text" name="NAMA_SANTRI" placeholder="MasukkaN NAMA SANTRI" class="form-control">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">ASRAMA</label>
			<div class="col-sm-10">
				<input type="text" name="ASRAMA_SANTRI" placeholder="Masukkan ASRAMA" class="form-control">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">ALAMAT</label>
			<div class="col-sm-10">
				<input type="text" name="ALAMAT_SANTRI" placeholder="Masukkan ALAMAT" class="form-control">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">PEND. PAGI</label>
			<div class="col-sm-10">
				<input type="text" name="PEND_PAGI" placeholder="Masukkan PEND. PAGI" class="form-control">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">PEND. SORE</label>
			<div class="col-sm-10">
				<input type="text" name="PEND_SORE" placeholder="Masukkan PEND. SORE" class="form-control">
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

<?php
	include ('../dasboard/footer.php');

?>