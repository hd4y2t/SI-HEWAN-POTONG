   <!-- Begin Page Content -->
        <div class="container-fluid">

        	

          <!-- Page Heading -->
     		<div class="row mt-3">
     			<div class="col-md-6">
     				<div class="card">
						<div class="card-header">
						    Form Tambah Data Sapi
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
								<input type="text" name="txt_notelinga" class="form-control" id="no_telinga" placeholder="No Telinga">
						 		</div>
						 		<div class="form-group">
			    				<label for="Ras">Ras</label>
								<input type="text" name="txt_ras" class="form-control" id="Ras" placeholder="Ras Sapi">
						 		</div>
						 		<div class="form-group">
			    				<label for="Berat">Berat</label>
								<input type="text" name="txt_berat" class="form-control" id="Berat" placeholder="Berat Sapi">
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
								<input type="text" name="txt_username" class="form-control" id="Username" placeholder="">
						 		</div>
						 		<div class="form-group">
			    				<label for="tgl_masuk">Tanggal Masuk</label>
								<input type="text" name="txt_tanggal" class="form-control" id="txt_tanggal" value="<?= date("Y-m-d");?>">
						 		</div>
						 		<button type="submit" name="Tambah" class="btn btn-primary float-right">Tambah Data</button>
						 	</form>
						  </div>

     				

     			</div>
     		</div>
     	</div>




			
			
		
		

			
			

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->