<!DOCTYPE html>
<html>
<head>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh3IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/script/css/lel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/script/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>script/css/admin.css">
<script type="text/javascript" src="<?php echo base_url() ?>/script/js/test.js"></script>
	<title>Siakad</title>
</head>
<body style="background: #EAEDF2">
	<?php $this->load->view('layout/navbar2') ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/script/css/admin.css">
		<div id="nav" class="navkiri" >
		<a  style="background: transparent;" href="javascript:void(0)" class="closebtn" onclick="test2()">&times;</a>
		<a class="active" href="">Dashboard</a>
		<a class="<?php echo $murid ?>" href="">Murid</a>
		<a class="<?php echo $guru ?>" href="">Guru</a>
		<a class="<?php echo $kelas ?>" href="">Kelas</a>
		<a href="">Keluar</a>
		</div>
	<div class="row">
		<div class="container-fluid" id="main" style="transition: margin-left .5s;margin-left: 40px;margin-right: 40px;">
			<?php $this->load->view($page) ?>
		</div>
	</div>
		<?php $this->load->view("admin/home") ?>
</body>
<script type="text/javascript" src="<?php echo $base_url() ?>script/main.js"></script>
</html>