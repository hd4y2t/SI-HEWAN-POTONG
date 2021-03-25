   <!-- Begin Page Content -->
        <div class="container-fluid">

        	

          <!-- Page Heading -->
     		<div class="row mt-3">
     			<div class="col-md-6">
     				<div class="card">
						<div class="card-header">
						    Form Proses Post Mortem
						  </div>
						  <div class="card-body">
						  	<?php if(validation_errors()) : ?>
						  	<div class="alert alert-danger" role="alert">
  							<?= validation_errors();?>
							</div>
						  	<?php endif; ?>
						    <form action="" method="post">
						    	<input type="hidden" name="txt_id_postmortem">
						    	<div class="form-group">
			    				<label for="id_antemortem">No Pemeriksaan Antemortem</label>
								<input type="text" name="id_antemortem" class="form-control" id="id_antemortem" value="<?= $sapi['id_antemortem'];?>">
						 		</div>
			     				<div class="form-group">
			    				<label for="no_telinga">Nomor Telinga</label>
								<input type="text" name="txt_notelinga" class="form-control" id="no_telinga" value="<?= $sapi['no_telinga'];?>">
						 		</div>
						 		<div class="form-group">
			    				<label for="ras">Ras</label>
								<input type="text" name="txt_ras" class="form-control" id="txt_ras" value="<?= $sapi['ras'];?>">
						 		</div>
						 		<div class="form-group">
			    				<label for="Berat">Berat</label>
								<input type="text" name="txt_berat" class="form-control" id="Berat" value="<?= $sapi['berat'];?>">
						 		</div>
						 		<div class="form-group">
			    				<label for="Gender">Gender</label>
								<select name="txt_gender" class="form-control" id="Gender">
									<option value="Jantan">Jantan</option>
									<option value="Betina">Betina</option>
								</select>
						 		</div>
						 		<div class="form-group">
			    				<label for="Username">Atas Nama</label>
								<input type="text" name="txt_username" class="form-control" id="Username" value="<?= $sapi['username'];?>">
						 		</div>
						 		<div class="form-group">
			    				<label for="tgl_masuk">Tanggal Masuk</label>
								<input type="date" name="txt_tanggal" class="form-control" id="txt_tanggal"value="<?= $sapi['tanggal_masuk'];?>">
						 		</div>
						 		<div class="form-group">
			    				<label for="tgl_masuk">Tanggal Pemeriksaan Antemortem</label>
								<input type="date" name="txt_tanggal_pemeriksaan" class="form-control" id="txt_tanggal_pemeriksaan"value="<?= $sapi['tanggal_pemeriksaan'];?>">
						 		</div>
						 		<div class="form-group">
			    				<label for="Gender">Kondisi Wajah</label>
								<select name="txt_wajah" class="form-control" id="txt_wajah">
									<option value="Baik">Baik</option>
									<option value="Cukup">Cukup</option>
									<option value="Kurang">Kurang</option>
								</select>
								<label for="Gender">Kondisi limpoglandula</label>
								<select name="txt_limpo" class="form-control" id="txt_limpo">
									<option value="Baik">Baik</option>
									<option value="Cukup">Cukup</option>
									<option value="Kurang">Kurang</option>
								</select>
								<label for="Gender">Kondisi Jantung</label>
								<select name="txt_jantung" class="form-control" id="txt_jantung">
									<option value="Baik">Baik</option>
									<option value="Cukup">Cukup</option>
									<option value="Kurang">Kurang</option>
								</select>	
								<label for="Gender">Kondisi Paru-Paru</label>
								<select name="txt_paru" class="form-control" id="txt_paru">
									<option value="Baik">Baik</option>
									<option value="Cukup">Cukup</option>
									<option value="Kurang">Kurang</option>
								</select>
								<label for="Gender">Kondisi Hati</label>
								<select name="txt_hati" class="form-control" id="txt_hati">
									<option value="Baik">Baik</option>
									<option value="Cukup">Cukup</option>
									<option value="Kurang">Kurang</option>
								</select>
								<label for="Gender">Kondisi Limpa</label>
								<select name="txt_limpa" class="form-control" id="txt_limpa">
									<option value="Baik">Baik</option>
									<option value="Cukup">Cukup</option>
									<option value="Kurang">Kurang</option>
								</select>
								<label for="Gender">Kondisi Usus & Lambung</label>
								<select name="txt_usus" class="form-control" id="txt_usus">
									<option value="Baik">Baik</option>
									<option value="Cukup">Cukup</option>
									<option value="Kurang">Kurang</option>
								</select>
								<label for="Gender">Kondisi Daging</label>
								<select name="txt_daging" class="form-control" id="txt_daging">
									<option value="Baik">Baik</option>
									<option value="Cukup">Cukup</option>
									<option value="Kurang">Kurang</option>
								</select>

								<div class="form-group">
			    				<label for="tgl_masuk">Tanggal Pemeriksaan Postmortem</label>
								<input type="text" name="txt_tanggal_postmortem" class="form-control" id="txt_tanggal_postmortem" value="<?= date("Y-m-d");?>">
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