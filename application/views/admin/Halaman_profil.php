   <!-- Begin Page Content -->

        <div class="container-fluid">
        		<?php if($this->session->flashdata('flash')) : ?>

        			<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data Profil<strong>Berhasil</strong> <?= $this->session->flashdata('flash');?>.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>
        		
        		<?php endif; ?>
        		<div class="row mt-3">
     			<div class="col-md-6">

     				
     				<div class="card">
						<div class="card-header">
						    Form Profil
						  </div>
						  <div class="card-body">

        	

          <!-- Page Heading -->

						  	
							 
						  	
						    <form action="" method="post">
						    	<div class="form-group">
			    				<label for="nip">NIP</label>
								<input type="text" name="txt_nip" class="form-control" id="nip" placeholder="" value="<?= $user['nip'] ;?>">
								<small  class="form-text text-danger"><?= form_error('txt_nip') ?></small>
						 		</div>

			     				<div class="form-group">
			    				<label for="username">Username</label>
								<input type="text" name="username" class="form-control" id="username" value="<?= $user['username'] ;?>"  >
								<small  class="form-text text-danger"><?= form_error('username') ?></small>
						 		</div>

						 		<div class="form-group">
			    				<label for="password">Password</label>
								<input type="password" name="txt_password" class="form-control" id="password" value="<?= $user['password'] ;?>">
								<small  class="form-text text-danger"><?= form_error('txt_password') ?></small>
						 		</div>

						 		<div class="form-group">
			    				<label for="nama">Nama</label>
								<input type="text" name="txt_nama" class="form-control" id="nama" value="<?= $user['nama'] ;?>">
								<small  class="form-text text-danger"><?= form_error('txt_nama') ?></small>
						 		</div>

						 		<div class="form-group">
			    				<label for="level">Level</label>
								<input type="text" name="txt_level" class="form-control" id="Level" value="<?= $user['level'] ;?>"disabled>
								
						 		</div>

						 		
						 		<div class="form-group">
			    				<label for="gender">Gender</label>
								<select name="txt_gender" class="form-control" id="gender" value="<?= $user['gender'] ;?>">
									<?php foreach($gender as $g) : ?>
										<?php if($g == $user['gender']) : ?>
										<option value="<?= $g; ?>" selected><?php echo $g;?></option>
										<?php else : ?>
											
										<option value="<?= $g; ?>" ><?php echo $g;?></option>
									<?php endif; ?>
									<?php endforeach; ?>
									
								</select>
						 		</div>

						 		<div class="form-group">
			    				<label for="no_hp">Nomor HP</label>
								<input type="text" name="txt_nohp" class="form-control" id="no_hp" placeholder="" value="<?= $user['no_hp'] ;?>">
								<small  class="form-text text-danger"><?= form_error('txt_nohp') ?></small>
						 		</div>

						 		<div class="form-group">
			    				<label for="ttl">Tanggal Lahir</label>
								<input type="date" name="txt_tanggal" class="form-control" id="txt_tanggal" value="<?= $user['ttl'] ;?>">
								<small  class="form-text text-danger"><?= form_error('txt_tanggal') ?></small>
						 		</div>

						 		<button type="submit" name="Tambah" class="btn btn-primary float-right">Ubah Data</button>
						 		<a href="<?= base_url('Dashboard/Index'); ?>" class="btn btn-danger float-right">Kembali</a>
						 	</form>
						  </div>

     				

     			</div>
     		</div>
     	</div>




			
			
		
		

			
			

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->