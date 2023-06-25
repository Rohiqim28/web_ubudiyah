<?php
	include ('../dasboard/header.php');

?>
<br><br>
<div class="container">
	<form action="simpan_data_pengontrol.php" method="POST">
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">ID PENGONTROL</label>
			<div class="col-sm-10">
				<input type="text" name="ID PENGONTROL" placeholder="Masukkan ID PENGONTROL" class="form-control">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">MATA KULIAH</label>
			<div class="col-sm-10">
				<input type="text" name="NAMA PENGONTROL" placeholder="MasukkaN NAMA PENGONTROL" class="form-control">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">SKS</label>
			<div class="col-sm-10">
				<input type="text" name="DAERAH KONTROL" placeholder="Masukkan DAERAH KONTROL" class="form-control">
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

<?php
	include ('../dasboard/footer.php');

?>