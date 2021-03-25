   <!-- Begin Page Content -->
        <div class="container-fluid">

        	

          <!-- Page Heading -->
     		<div class="row mt-3">
     			<div class="col-md-6">
     				<div class="card">
						<div class="card-header">
						    Halaman Detail Antemortem
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
								<input type="text" name="txt_notelinga" class="form-control" id="no_telinga" value="<?= $sapi['no_telinga'];?>" disabled>
						 		</div>
						 		<div class="form-group">
			    				<label for="Ras">Ras</label>
								<input type="text" name="txt_ras" class="form-control" id="Ras"  value="<?= $sapi['ras'];?>" disabled>
						 		</div>
						 		<div class="form-group">
			    				<label for="Berat">Berat</label>
								<input type="text" name="txt_berat" class="form-control" id="Berat" value="<?= $sapi['berat'];?>" disabled>
						 		</div>
						 		<div class="form-group">
			    				<label for="Gender">Gender</label>
								<select name="txt_gender" class="form-control" id="Gender"  value="<?= $sapi['gender'];?>" disabled>
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
								<input type="text" name="txt_username" class="form-control" id="Username"  value="<?= $sapi['username'];?>" disabled>
						 		</div>
						 		<div class="form-group">
			    				<label for="tgl_masuk">Tanggal Masuk</label>
								<input type="date" name="txt_tanggal" class="form-control" id="txt_tanggal"  value="<?= $sapi['tanggal_masuk'];?>" disabled>
						 		</div>
						 		

						 		<div class="form-group">
			    				<label for="Gender">Kesehatan Mata</label>
								<select name="txt_mata" class="form-control" id="txt_mata" disabled>
									<?php foreach($mata as $mt) : ?>
										<?php if($mt == $sapi['mata']) : ?>
										<option value="<?= $mt; ?>" selected><?php echo $mt;?></option>
										<?php else : ?>
											
										<option value="<?= $mt; ?>" ><?php echo $mt;?></option>
									<?php endif; ?>
									<?php endforeach; ?>
								</select>
						 		</div>
						 		<div class="form-group">
			    				<label for="Gender">Kesehatan Hidung </label>
								<select name="txt_hidung" class="form-control" id="txt_hidung" disabled>
								<?php foreach($hidung as $hdg) : ?>
										<?php if($hdg == $sapi['hidung']) : ?>
										<option value="<?= $hdg; ?>" selected><?php echo $hdg;?></option>
										<?php else : ?>
											
										<option value="<?= $hdg; ?>" ><?php echo $hdg;?></option>
									<?php endif; ?>
									<?php endforeach; ?>
								</select>
						 		</div>
						 		<div class="form-group">
			    				<label for="Gender">Kesehatan Mulut</label>
								<select name="txt_mulut" class="form-control" id="txt_mulut" disabled>
									<?php foreach($mulut as $mlt) : ?>
										<?php if($mlt == $sapi['mulut']) : ?>
										<option value="<?= $mlt; ?>" selected><?php echo $mlt;?></option>
										<?php else : ?>
											
										<option value="<?= $mlt; ?>" ><?php echo $mlt;?></option>
									<?php endif; ?>
									<?php endforeach; ?>
								</select>
						 		</div>
						 		<div class="form-group">
			    				<label for="Gender">Kesehatan Selaput Lendir</label>
								<select name="txt_selaput" class="form-control" id="txt_selaput" disabled>
									<?php foreach($selaput_lendir as $selaput) : ?>
										<?php if($selaput == $sapi['selaput_lendir']) : ?>
										<option value="<?= $selaput; ?>" selected><?php echo $selaput;?></option>
										<?php else : ?>
											
										<option value="<?= $selaput; ?>" ><?php echo $selaput;?></option>
									<?php endif; ?>
									<?php endforeach; ?>
								</select>
						 		</div>
						 		<div class="form-group">
			    				<label for="Gender">Kebersihan Sapi</label>
								<select name="txt_bersih" class="form-control" id="txt_bersih" disabled>
									<?php foreach($kebersihan_sapi as $bersih) : ?>
										<?php if($bersih == $sapi['kebersihan_sapi']) : ?>
										<option value="<?= $bersih; ?>" selected><?php echo $bersih;?></option>
										<?php else : ?>
										<option value="<?= $bersih; ?>" ><?php echo $bersih;?></option>
									<?php endif; ?>
									<?php endforeach; ?>
								</select>
						 		</div>
						 		<div class="form-group">
			    				<label for="Gender">Kesehatan Gizi</label>
								<select name="txt_gizi" class="form-control" id="txt_gizi" disabled>
									<?php foreach($gizi as $gz) : ?>
										<?php if($gz == $sapi['gizi']) : ?>
										<option value="<?= $gz; ?>" selected><?php echo $gz;?></option>
										<?php else : ?>
											
										<option value="<?= $gz; ?>" ><?php echo $gz;?></option>
									<?php endif; ?>
									<?php endforeach; ?>
								</select>
						 		</div>
						 		<div class="form-group">
			    				<label for="Gender">Kesehatan Kulit</label>
								<select name="txt_kulit" class="form-control" id="txt_kulit" disabled>
									<?php foreach($kulit as $kul) : ?>
										<?php if($kul == $sapi['kulit']) : ?>
										<option value="<?= $kul; ?>" selected><?php echo $kul;?></option>
										<?php else : ?>
											
										<option value="<?= $kul; ?>" ><?php echo $kul;?></option>
									<?php endif; ?>
									<?php endforeach; ?>
								</select>
						 		</div>
						 		<div class="form-group">
			    				<label for="Gender">Kesehatan Bulu</label>
								<select name="txt_bulu" class="form-control" id="txt_bulu" disabled>
									<?php foreach($bulu as $bul) : ?>
										<?php if($bul == $sapi['bulu']) : ?>
										<option value="<?= $bul; ?>" selected><?php echo $bul;?></option>
										<?php else : ?>
											
										<option value="<?= $bul; ?>" ><?php echo $bul;?></option>
									<?php endif; ?>
									<?php endforeach; ?>
								</select>
						 		</div>
						 		<div class="form-group">
			    				<label for="Gender">Kesehatan Anus</label>
								<select name="txt_anus" class="form-control" id="txt_anus" disabled>
									<?php foreach($anus as $ans) : ?>
										<?php if($ans == $sapi['anus']) : ?>
										<option value="<?= $ans; ?>" selected><?php echo $ans;?></option>
										<?php else : ?>
											
										<option value="<?= $ans; ?>" ><?php echo $ans;?></option>
									<?php endif; ?>
									<?php endforeach; ?>
								</select>
						 		</div>
						 			
						 		<div class="form-group">
			    				<label for="Gender">Keadaan Sapi</label>
								<select name="txt_keadaan" class="form-control" id="txt_keadaan" disabled>
									<?php foreach($keadaan_sapi as $keadaan) : ?>
										<?php if($keadaan == $sapi['keadaan_sapi']) : ?>
										<option value="<?= $keadaan; ?>" selected><?php echo $keadaan;?></option>
										<?php else : ?>
											
										<option value="<?= $keadaan; ?>" ><?php echo $keadaan;?></option>
									<?php endif; ?>
									<?php endforeach; ?>
								</select>
								<br>
								<a href="<?= base_url('Antemortem/tampil_antemortem');?>" type="submit" name="Tambah" class="btn btn-primary float-right">Kembali</a>
						 	</form>
						  </div>

     				

     			</div>
     		</div>
     	</div>




			
			
		
		

			
			

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->