   <!-- Begin Page Content -->
        <div class="container-fluid">

        	

          <!-- Page Heading -->
     		<div class="row mt-3">
     			<div class="col-md-6">
     				<div class="card">
						<div class="card-header">
						    Form Proses Antemortem
						  </div>
						  <div class="card-body">
						  	<?php if(validation_errors()) : ?>
						  	<div class="alert alert-danger" role="alert">
  							<?= validation_errors();?>
							</div>
						  	<?php endif; ?>
						    <form action="" method="post">
						    	
			     				<div class="form-group">
			    				<label for="no_telinga">Nomor Telinga</label>
								<input type="text" name="txt_notelinga" class="form-control" id="no_telinga" value="<?= $sapi['no_telinga'];?>">
						 		</div>
						 		<div class="form-group">
			    				<label for="Ras">Ras</label>
								<input type="text" name="txt_ras" class="form-control" id="Ras"  value="<?= $sapi['ras'];?>">
						 		</div>
						 		<div class="form-group">
			    				<label for="Berat">Berat</label>
								<input type="text" name="txt_berat" class="form-control" id="Berat" value="<?= $sapi['berat'];?>">
						 		</div>
						 		<div class="form-group">
			    				<label for="Gender">Gender</label>
								<select name="txt_gender" class="form-control" id="Gender"  value="<?= $sapi['gender'];?>">
									<?php foreach($gender as $g) : ?>
										<?php if($g == $sapi['gender']) : ?>
										<option value="<?= $g; ?>" selected><?php echo $g;?></option>
										<?php else : ?>
											
										<option value="<?= $g; ?>" ><?php echo $g;?></option>
									<?php endif; ?>
									<?php endforeach; ?>
								</select>
						 		</div>
						 		<div class="form-group">
			    				<label for="Username">Atas Nama</label>
								<input type="text" name="txt_username" class="form-control" id="Username"  value="<?= $sapi['username'];?>">
						 		</div>
						 		<div class="form-group">
			    				<label for="tgl_masuk">Tanggal Masuk</label>
								<input type="date" name="txt_tanggal" class="form-control" id="txt_tanggal"  value="<?= $sapi['tanggal_masuk'];?>">
						 		</div>
						 		<div class="form-group">
			    				<label for="Gender">Kesehatan Mata</label>
								<select name="txt_mata" class="form-control" id="txt_mata">
									<option value="Baik">Baik</option>
									<option value="Cukup">Cukup</option>
									<option value="Kurang">Kelainan</option>
								</select>
						 		</div>
						 		<div class="form-group">
			    				<label for="Gender">Kesehatan Hidung</label>
								<select name="txt_hidung" class="form-control" id="txt_hidung">
									<option value="Baik">Baik</option>
									<option value="Cukup">Cukup</option>
									<option value="Kurang">Kelainan</option>
								</select>
						 		</div>
						 		<div class="form-group">
			    				<label for="Gender">Kesehatan Mulut</label>
								<select name="txt_mulut" class="form-control" id="txt_mulut">
									<option value="Baik">Baik</option>
									<option value="Cukup">Cukup</option>
									<option value="Kurang">Kelainan</option>
								</select>
						 		</div>
						 		<div class="form-group">
			    				<label for="Gender">Kesehatan Selaput Lendir</label>
								<select name="txt_selaput" class="form-control" id="txt_selaput">
									<option value="Baik">Baik</option>
									<option value="Cukup">Cukup</option>
									<option value="Kurang">Kelainan</option>
								</select>
						 		</div>
						 		<div class="form-group">
			    				<label for="Gender">Kebersihan Sapi</label>
								<select name="txt_bersih" class="form-control" id="txt_bersih">
									<option value="Baik">Baik</option>
									<option value="Cukup">Cukup</option>
									<option value="Kurang">Kelainan</option>
								</select>
						 		</div>
						 		<div class="form-group">
			    				<label for="Gender">Kesehatan Gizi</label>
								<select name="txt_gizi" class="form-control" id="txt_gizi">
									<option value="Baik">Baik</option>
									<option value="Cukup">Cukup</option>
									<option value="Kurang">Kelainan</option>
								</select>
						 		</div>
						 		<div class="form-group">
			    				<label for="Gender">Kesehatan Kulit</label>
								<select name="txt_kulit" class="form-control" id="txt_kulit">
									<option value="Baik">Baik</option>
									<option value="Cukup">Cukup</option>
									<option value="Kurang">Kelainan</option>
								</select>
						 		</div>
						 		<div class="form-group">
			    				<label for="Gender">Kesehatan Bulu</label>
								<select name="txt_bulu" class="form-control" id="txt_bulu">
									<option value="Baik">Baik</option>
									<option value="Cukup">Cukup</option>
									<option value="Kurang">Kelainan</option>
								</select>
						 		</div>
						 		<div class="form-group">
			    				<label for="Gender">Kesehatan Anus</label>
								<select name="txt_anus" class="form-control" id="txt_anus">
									<option value="Baik">Baik</option>
									<option value="Cukup">Cukup</option>
									<option value="Kurang">Kelainan</option>
								</select>
						 		</div>
						 		<div class="form-group">
			    				<label for="Gender">Keadaan Sapi</label>
								<select name="txt_keadaan" class="form-control" id="txt_keadaan">
									<option value="Baik">Baik</option>
									<option value="Cukup">Cukup</option>
									<option value="Cacat">Cacat</option>
								</select>
						 		</div>
						 		<div class="form-group">
			    				<label for="tgl_pemeriksaan">Tanggal Pemeriksaan</label>
								<input type="text" name="txt_tanggal_pemeriksaan" class="form-control" id="txt_tanggal_pemeriksaan" value="<?= date("Y-m-d");?>">
						 		</div>
						 		<div class="form-group">
			    				<label for="status">Status</label>
								<select name="txt_status" class="form-control" id="txt_status">
									<option value="Layak Potong">Layak Potong</option>
									<option value="Tidak Layak Potong">Tidak Layak Potong</option>
									
								</select>
						 		</div>



						 		<button type="submit" name="Tambah" class="btn btn-primary float-right">Proses</button>
						 	</form>
						  </div>

     				

     			</div>
     		</div>
     	</div>




			
			
		
		

			
			

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->