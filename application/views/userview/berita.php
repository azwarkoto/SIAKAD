<div class="container" style="border-width:0px; background-color:#DCDDE1; padding-top: 10px; padding-bottom: 20px;">
	<div class="container" style="border-width:1px; background-color:#DCDDE1;">
		<div style="background-color:#DCDDE1; width:200px; height:30px; margin-left:350px; margin-top:-15px;">
			<h5 align="center"><b>Berita</b></h5>	
		</div>
		<div class="row"><?php foreach ($mama as $key => $v): ?>
			
		<?php endforeach ?>
			<div class="col-md-12">
				<div class="row" align="center" style="padding-top: 2em;padding-left: 10px;">
					<table>
						<tr>
							<td><h2><?php echo $v->judul ?></h2></td>
						</tr>
						<tr>
							<td><h5>Penulis :</h5></td>
							<td><h5><?php echo $v->penulis ?></h5></td>
							<td><h5>|</h5></td>
							<td><h5><?php echo $v->waktu ?></h5></td>
						</tr>
					</table>
				</div>
				<div class="row" style="padding-top: 2em">
					<?php echo $v->isi ?>
				</div>
			</div>
		</div>
	</div>
</div>