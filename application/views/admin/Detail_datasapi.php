<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
			  <div class="card-header">
			    Detail Data Sapi
			  </div>
			  <div class="card-body">
			  	 <form action="" method="get">
			     				<div class="form-group ">
			    				<label for="no_telinga">Nomor Telinga</label>
								<input type="text" name="txt_notelinga" class="form-control disabled" id="no_telinga" placeholder="<?= $sapi['no_telinga'];?>">
						 		</div>
						 		<div class="form-group">
			    				<label for="Ras">Ras</label>
								<input type="text" name="txt_ras" class="form-control" id="Ras" placeholder="<?= $sapi['ras'];?>">
						 		</div>
						 		<div class="form-group">
			    				<label for="Berat">Berat</label>
								<input type="text" name="txt_berat" class="form-control" id="Berat" placeholder="<?= $sapi['berat'];?>">
						 		</div>
						 		<div class="form-group">
			    				<label for="Gender">Gender</label>
								<input type="text" name="txt_gender" class="form-control" id="Gender" placeholder="<?= $sapi['gender'] ?>">
						 		</div>
						 		<div class="form-group">
			    				<label for="Username">Atas Nama</label>
								<input type="text" name="txt_username" class="form-control" id="Username" placeholder="<?= $sapi['username'];?>">
						 		</div>
						 		<div class="form-group">
			    				<label for="tgl_masuk">Tanggal Masuk</label>
								<input type="text" name="txt_tanggal" class="form-control" id="txt_tanggal" placeholder="<?= $sapi['tanggal_masuk'];?>">
						 		</div>
						 		<a class="btn btn-primary" href="<?= base_url('Sapi/Index'); ?>">Kembali</a>
						 	</form>
						  </div>
			   
			    
			</div>
		</div>
	</div>
</div>