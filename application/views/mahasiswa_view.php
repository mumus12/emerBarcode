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
			<center><h1>Selamat Datang di <small style="color:black;background-color:red;border-radius: 6px;">| EmerQR-code |</small></h1></center><br>
		</div>
		<br><br>

			<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#myModal">Tambah Baru</button>
			
			<a href="<?php echo site_url('mahasiswa/cetak'); ?>"><button type="button" class="btn btn-light">Cetak Semua QR-Code</button></a></br></br>
<div class="row">
<?php foreach($data->result() as $row):	?>
<div class="col-sm-4">
		<div class='pane' style="background-color:#f7f7f7;width:100%;">
		
			<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal_edit<?php echo $row->nim;?>"><img src="<?php echo base_url().'assets2/icon/baseline_create_black_18dp.png'?>" /></button>
			<a href="<?php echo site_url('mahasiswa/hapus/'.$row->nim); ?>"><button type="button" class="btn btn-danger"><img src="<?php echo base_url().'assets2/icon/baseline_delete_sweep_black_18dp.png'?>" /></button></a>
		<a href="<?php echo base_url().'assets/images/'.$row->qr_code;?>" target="_BLANK"><button type="button" class="btn btn-success"><img src="<?php echo base_url().'assets2/icon/baseline_print_black_18dp.png'?>" /></button></a>
			
		</div>
	<div class="card"><br>
		<center><img class="card-img-top" style="width: 250px;" src="<?php echo base_url().'assets/images/'.$row->qr_code;?>" alt="Card image cap"></center>
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

	<!-- Modal add new barcode-->
	<form action="<?php echo base_url().'index.php/mahasiswa/simpan'?>" method="post">
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Tambah Data Baru</h4>
		      </div>
		      <div class="modal-body">
		    
		          <div class="form-group">
		            <label for="nim" class="control-label">Kode:</label>
		            <input type="text" name="nim" class="form-control" id="nim">
		          </div>
		          <div class="form-group">
		            <label for="nama" class="control-label">NAMA:</label>
		            <input type="text" name="nama" class="form-control" id="nama">
		          </div>
	       		  <div class="form-group">
		            <label for="prodi" class="control-label">Lokasi:</label>
		            <input type="text" name="prodi" class="form-control" id="prodi">
		          </div>
	       		  <div class="form-group">
		            <label for="klasifikasi" class="control-label">Klasifikasi:</label>
		            <input type="text" name="klasifikasi" class="form-control" id="klasifikasi">
		          </div>
	       		  <div class="form-group">
		            <label for="deskripsi" class="control-label">Deskripsi:</label>
					<textarea rows="4" cols="50" name="deskripsi" class="form-control" id="deskripsi" >Tulis disini...</textarea>
		          </div>
	       		  <div class="form-group">
		            <label for="indukan" class="control-label">Indukan:</label>
		            <input type="text" name="indukan" class="form-control" id="indukan">
		          </div>
	       		  <div class="form-group">
		            <label for="riwayat" class="control-label">Riwayat:</label>
		            <input type="text" name="riwayat" class="form-control" id="riwayat">
		          </div>
					
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
		        <button type="submit" class="btn btn-primary">Simpan</button>
		      </div>
		    </div>
		  </div>
		</div>
	</form>
	
	 <!-- ============ MODAL EDIT =============== -->
    <?php 
        foreach($data->result_array() as $i):
            $nim=$i['nim'];
            $nama=$i['nama'];
            $prodi=$i['prodi'];
            $klasifikasi=$i['klasifikasi'];
			$deskripsi=$i['deskripsi'];
            $indukan=$i['indukan'];
            $riwayat=$i['riwayat'];
        ?>
        <div class="modal fade" id="modal_edit<?php echo $nim;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Edit Data </h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/mahasiswa/update'?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Kode</label>
                        <div class="col-xs-8">
                            <input name="nim" value="<?php echo $nim;?>" class="form-control" type="text" placeholder="Kode ..." readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama</label>
                        <div class="col-xs-8">
                            <input name="nama" value="<?php echo $nama;?>" class="form-control" type="text" placeholder="Nama ..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Lokasi</label>
                        <div class="col-xs-8">
                            <input name="prodi" value="<?php echo $prodi;?>" class="form-control" type="text" placeholder="Lokasi..." required>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-xs-3" >Klasifikasi</label>
                        <div class="col-xs-8">
                            <input name="klasifikasi" value="<?php echo $klasifikasi;?>" class="form-control" type="text" placeholder="Klasifikasi..." required>
                        </div>
                    </div>
					
					 <div class="form-group">
					 <label class="control-label col-xs-3" >Deskripsi</label>
                        <div class="col-xs-8">
                            <textarea rows="4" cols="50" name="deskripsi" value="<?php echo $deskripsi;?>" class="form-control" type="text" placeholder="<?php echo $deskripsi;?>" required><?php echo $deskripsi;?></textarea>
							
                        
								</div> 
		           </div>
					
					<div class="form-group">
                        <label class="control-label col-xs-3" >Indukan</label>
                        <div class="col-xs-8">
                            <input name="indukan" value="<?php echo $indukan;?>" class="form-control" type="text" placeholder="Lokasi..." required>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-xs-3" >Riwayat</label>
                        <div class="col-xs-8">
                            <input name="riwayat" value="<?php echo $riwayat;?>" class="form-control" type="text" placeholder="Lokasi..." required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Update</button>
                </div>
            </form>
            </div>
            </div>
        </div>

    <?php endforeach;?>
	
	<script src="<?php echo base_url().'assets2/js/jquery-3.3.1.slim.min.js'?>" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="<?php echo base_url().'assets2/js/popper.min.js'?>" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="<?php echo base_url().'assets2/bootstrap4.3.1//bootstrap.min.js'?>" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>