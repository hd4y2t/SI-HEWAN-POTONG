   <!-- Begin Page Content -->
        <div class="container-fluid">

        	

          <!-- Page Heading -->
     		<div class="row mt-3">
     			<div class="col-md-6">
     				<div class="card">
						<div class="card-header">
						    Form Proses Pengajuan
						  </div>
						  <div class="card-body">
						  	<?php if(validation_errors()) : ?>
						  	<div class="alert alert-danger" role="alert">
  							<?= validation_errors();?>
							</div>
						  	<?php endif; ?>
						    <form action="" method="post">
						    	
			     				<div class="form-group">
			    				<label for="id_pengajuan">Id Pengajuan</label>
								<input type="text" name="txt_id_pengajuan" class="form-control" id="id_pengajuan" value="<?= $pengajuan['id_pengajuan'];?>">
						 		</div>

						 		<div class="form-group">
			    				<label for="Status">Status</label>
								<select name="txt_status" class="form-control" id="txt_status">
									<option value="2">Diterima</option>
									<option value="0">Ditolak</option>
								</select>
						 		</div>

						 		<div class="form-group">
			    				<label for="Email">Email</label>
								<input type="text" name="txt_email" class="form-control" id="email"  value="<?= $pengajuan['email'];?>">
						 		</div>
						 		<div class="form-group">
			    				<label for="Username">Username</label>
								<input type="text" name="txt_username" class="form-control" id="Username" value="<?= $pengajuan['username'];?>">
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