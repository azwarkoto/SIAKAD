<div class="container-fluid" onclick="test3()" onmousewheel="test3()" onmouseover="test3()">
<div class="col-md-10 offset-md-1" >
<div class="row" style="margin-bottom: 50px;">
		<h3>Semua Murid</h3>
		<hr>
</div>
	<div class="container-fluid" style="background: white;padding-top: 20px;margin-left: -10px;" >
		<div class="row">
			<div class="col-md-12">
				<h4>Daftar Semua Murid</h4>
			</div>
		</div>
	<div class="row">
		<div class="col-md-12">
			<div class="row" style="margin-bottom: 10px;">
					<div class="col-md-4">
						<form method="post">
							<input  class="form-control" style="max-width: 200px;" placeholder="Cari Nama" type="text" name="cari" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }" name="cari">&nbsp;
						</form>
					</div>
					<div class="col-md-4">
						<form method="post">
							<input  class="form-control" style="max-width: 200px;" placeholder="Cari TahunAngkatan" type="text" name="angkatan" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }" name="angkatan">
						</form>
					</div>
					<?php 

					if (isset($_POST['cari'])) {
						$s=$_POST['cari'];
						redirect("/admin/murid/$s/nama",location);
					}
					if (isset($_POST['angkatan'])) {
						$w=$_POST['angkatan'];
						redirect("/admin/murid/$w/angkatan",location);
					}
					
					 ?>
					<div class="col-md-1" style="margin-right: 50px;">
						<form method="post" >
						<button class="btn btn-primary" name="tampil">Tampil Semua</button>
						</form>
						<?php if (isset($_POST['tampil'])) {
							redirect("/admin/murid", location);
						} ?>
					</div>
					<div class="col-md-2" style="text-align: right;">
						<form action="<?php echo base_url() ?>admin/rMurid">
						<button class="btn btn-primary" type="submit">Tambah Murid</button>
						</form>
					</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table table-bordered table-striped">
						<tr>
							<th>NIS</th><th>Nama</th><th>Kelas</th><th>Jurusan</th><th>Angkatan</th><th>Perintah</th>
						</tr>
						<?php 
							$batas = 0;
						foreach ($muridtam as $key => $v) {
						$batas++;
						echo "<tr>
						<th>".$v->nis."</th><th>".$v->nama."</th><th>".$v->kelas."</th><th>".$v->jurusan."</th><th>".$v->tahun."</th><th><form method='post' action='".base_url()."admin/info'><input type='text' hidden name='nis' value='".$v->nis."'><button type='submit' class='btn btn-warning'>Info</button></form></th>
							</tr>";
							if ($batas==10) {
							break;
							}	
						} ?>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
