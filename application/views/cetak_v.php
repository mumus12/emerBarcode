<!DOCTYPE html>
<html>
<head>
	<title>emerQR-code</title>
	<link rel="stylesheet" href="<?php echo base_url().'assets2/bootstrap4.3.1/bootstrap.min.css'?>" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="<?php echo base_url().'assets2/bootstrap3.3.7/bootstrap.min.css'?>">
    <script src="<?php echo base_url().'assets2/js/jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'assets2/bootstrap3.3.7/bootstrap.min.js'?>"></script>
	<link rel="shortcut icon" href="<?php echo base_url().'assets/favicon/icon.png'?>">
	
</head>
<body style="background-color:#28a7456e;">
	<div class="container">
		<div class="atas" style="color:white;background-color:#28a745;border-radius: 5px;">
		<br>
			<center><h1>Daftar QR-Code <small style="color:black;background-color:red;border-radius: 6px;">| EmerQR-code |</small></h1></center><br>
		</div>
		<br><br>

			<a href="<?php echo site_url('mahasiswa'); ?>"><button type="button" class="btn btn-info"><img src="<?php echo base_url().'assets2/icon/baseline_home_black_18dp.png'?>" /> Kembali</button></a>
			
			<button type="button" class="btn btn-light">Untuk Cetak Semua QR-Code silahkan klik<small style="color:red;font-size: 20px;"><b> ctrl + p</b></small></button></br></br>

<div class="row">
<?php foreach($data->result() as $row):	?>
<div class="col-sm-4">
	
	<div class="card">
  
		<center><img class="card-img-top" style="width: 130px;" src="<?php echo base_url().'assets/images/'.$row->qr_code;?>" alt="Card image cap"></center>
		<div class="card-body">
			<center><h5 class="card-title"><b><?php echo $row->nama;?></b></h5></center>
		</div>
		<div class="card-footer">
			<small class="text-muted">Kode :<?php echo $row->nim;?></small>
		</div>
	</center></div>
	<br></div>
	<?php endforeach;?>
	
</div>			
	</div>

	
	<script src="<?php echo base_url().'assets2/js/jquery-3.3.1.slim.min.js'?>" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="<?php echo base_url().'assets2/js/popper.min.js'?>" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="<?php echo base_url().'assets2/bootstrap4.3.1//bootstrap.min.js'?>" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>