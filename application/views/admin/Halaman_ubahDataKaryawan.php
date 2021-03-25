   <!-- Begin Page Content -->
        <div class="container-fluid">

        	

          <!-- Page Heading -->
     		<div class="row mt-3">
     			<div class="col-md-6">
     				<div class="card">
						<div class="card-header">
						    Form Ubah Data Karyawan
						  </div>
						  <div class="card-body">
						  	
							 
						  	
						    <form action="" method="post">
						    	
						    	
			     				<div class="form-group">
			    				<label for="username">Username</label>
								<input type="text" name="txt_username" class="form-control" id="username" value="<?= $karyawan['username'];?>">
								<small  class="form-text text-danger"><?= form_error('txt_username') ?></small>
						 		</div>
						 		<div class="form-group">
			    				<label for="password">Password</label>
								<input type="password" name="txt_password" class="form-control" id="password" value="<?= $karyawan['password'];?>">
								<small  class="form-text text-danger"><?= form_error('txt_password') ?></small>
						 		</div>
						 		<div class="form-group">
			    				<label for="nama">Nama</label>
								<input type="text" name="txt_nama" class="form-control" id="nama" value="<?= $karyawan['nama'];?>">
								<small  class="form-text text-danger"><?= form_error('txt_nama') ?></small>
						 		</div>
						 		<div class="form-group">
			    				<label for="level">Level</label>
								<select name="txt_level" class="form-control" id="Level" value="<?= $karyawan['level'];?>">
									<?php foreach($level as $lvl) : ?>
										<?php if($lvl == $karyawan['level']) : ?>
										<option value="<?= $lvl; ?>" selected><?php echo $lvl;?></option>
										<?php else : ?>
											
										<option value="<?= $lvl; ?>" ><?php echo $lvl;?></option>
									<?php endif; ?>
									<?php endforeach; ?>
								</select>
						 		</div>
						 		<div class="form-group">
			    				<label for="nip">NIP</label>
								<input type="text" name="txt_nip" class="form-control" id="nip" placeholder="" value="<?= $karyawan['nip'];?>">
								<small  class="form-text text-danger"><?= form_error('txt_nip') ?></small>
						 		</div>
						 		<div class="form-group">
			    				<label for="gender">Gender</label>
								<select name="txt_gender" class="form-control" id="gender" value="<?= $karyawan['gender'];?>">
									<?php foreach($gender as $g) : ?>
										<?php if($g == $karyawan['gender']) : ?>
										<option value="<?= $g; ?>" selected><?php echo $g;?></option>
										<?php else : ?>
											
										<option value="<?= $g; ?>" ><?php echo $g;?></option>
									<?php endif; ?>
									<?php endforeach; ?>
									
								</select>
						 		</div>
						 		<div class="form-group">
			    				<label for="no_hp">Nomor HP</label>
								<input type="text" name="txt_nohp" class="form-control" id="no_hp" placeholder="" value="<?= $karyawan['no_hp'];?>">
								<small  class="form-text text-danger"><?= form_error('txt_nohp') ?></small>
						 		</div>
						 		<div class="form-group">
			    				<label for="ttl">Tanggal Lahir</label>
								<input type="date" name="txt_tanggal" class="form-control" id="txt_tanggal" value="<?= $karyawan['ttl'];?>">
								<small  class="form-text text-danger"><?= form_error('txt_tanggal') ?></small>
						 		</div>
						 		<button type="submit" name="Tambah" class="btn btn-primary float-right">Ubah Data</button>
						 	</form>
						  </div>

     				

     			</div>
     		</div>
     	</div>




			
			
		
		

			
			

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->