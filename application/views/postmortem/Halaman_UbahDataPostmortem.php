   <!-- Begin Page Content -->
        <div class="container-fluid">

        	

          <!-- Page Heading -->
     		<div class="row mt-3">
     			<div class="col-md-6">
     				<div class="card">
						<div class="card-header">
						    Form Proses Postmortem
						  </div>
						  <div class="card-body">
						  	<?php if(validation_errors()) : ?>
						  	<div class="alert alert-danger" role="alert">
  							<?= validation_errors();?>
							</div>
						  	<?php endif; ?>
						    <form action="" method="post">

						    <input type="hidden" name="txt_idpostmortem" value="<?= $sapi['id_postmortem'];?>">	
						    
						    	<div class="form-group">
			    				<label for="id_antemortem">No Pemeriksaan Antemortem</label>
								<input type="text" name="id_antemortem" class="form-control" id="id_antemortem" value="<?= $sapi['id_antemortem'];?>">
						 		</div>
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
			    				<label for="tgl_masuk">Tanggal Pemeriksaan</label>
								<input type="date" name="txt_tanggal_antemortem" class="form-control" id="txt_tanggal_antemortem"  value="<?= $sapi['tanggal_pemeriksaan'];?>">

								<div class="form-group">
			    				<label for="wajah">Wajah</label>
								<select name="txt_wajah" class="form-control" id="txt_wajah"  value="<?= $sapi['wajah'];?>">
									<?php foreach($wajah as $wjh) : ?>
									<?php if($wjh == $sapi['wajah']) : ?>
									<option value="<?= $wjh; ?>" selected><?php echo $wjh;?></option>
									<?php else : ?>
											
									<option value="<?= $wjh; ?>" ><?php echo $wjh;?></option>
									<?php endif; ?>
									<?php endforeach; ?>
								</select>
						 		</div>

						 		<div class="form-group">
			    				<label for="limpoglandula">Limpoglandula</label>
								<select name="txt_limpoglandula" class="form-control" id="txt_limpoglandula"  value="<?= $sapi['limpoglandula'];?>">
									<?php foreach($limpoglandula as $limpo) : ?>
									<?php if($limpo == $sapi['limpoglandula']) : ?>
									<option value="<?= $limpo; ?>" selected><?php echo $limpo;?></option>
									<?php else : ?>
											
									<option value="<?= $limpo; ?>" ><?php echo $limpo;?></option>
									<?php endif; ?>
									<?php endforeach; ?>
								</select>
						 		</div>

						 		<div class="form-group">
			    				<label for="Jantung">Jantung</label>
								<select name="txt_jantung" class="form-control" id="Jantung"  value="<?= $sapi['jantung'];?>">
									<?php foreach($jantung as $jtg) : ?>
									<?php if($jtg == $sapi['jantung']) : ?>
									<option value="<?= $jtg; ?>" selected><?php echo $jtg;?></option>
									<?php else : ?>
											
									<option value="<?= $jtg; ?>" ><?php echo $jtg;?></option>
									<?php endif; ?>
									<?php endforeach; ?>
								</select>
						 		</div>


						 		<div class="form-group">
			    				<label for="Paru">Paru-paru</label>
								<select name="txt_paru" class="form-control" id="Paru"  value="<?= $sapi['paru'];?>">
									<?php foreach($paru as $pru) : ?>
									<?php if($pru == $sapi['paru']) : ?>
									<option value="<?= $pru; ?>" selected><?php echo $pru;?></option>
									<?php else : ?>
											
									<option value="<?= $pru; ?>" ><?php echo $pru;?></option>
									<?php endif; ?>
									<?php endforeach; ?>
								</select>
						 		</div>


						 		<div class="form-group">
			    				<label for="Hati">Hati</label>
								<select name="txt_hati" class="form-control" id="Hati"  value="<?= $sapi['hati'];?>">
									<?php foreach($hati as $hti) : ?>
									<?php if($hti == $sapi['hati']) : ?>
									<option value="<?= $hti; ?>" selected><?php echo $hti;?></option>
									<?php else : ?>
											
									<option value="<?= $hti; ?>" ><?php echo $hti;?></option>
									<?php endif; ?>
									<?php endforeach; ?>
								</select>
						 		</div>


						 		<div class="form-group">
			    				<label for="Limpa">Limpa</label>
								<select name="txt_limpa" class="form-control" id="Limpa"  value="<?= $sapi['limpa'];?>">
									<?php foreach($limpa as $lmp) : ?>
									<?php if($lmp == $lmp['jantung']) : ?>
									<option value="<?= $lmp; ?>" selected><?php echo $lmp;?></option>
									<?php else : ?>
											
									<option value="<?= $lmp; ?>" ><?php echo $lmp;?></option>
									<?php endif; ?>
									<?php endforeach; ?>
								</select>
						 		</div>

						 		<div class="form-group">
			    				<label for="txt_usus">Usus & Lambung</label>
								<select name="txt_usus" class="form-control" id="txt_usus"  value="<?= $sapi['usus_lambung'];?>">
									<?php foreach($usus_lambung as $lbg) : ?>
									<?php if($lbg == $sapi['usus_lambung']) : ?>
									<option value="<?= $lbg; ?>" selected><?php echo $lbg;?></option>
									<?php else : ?>
											
									<option value="<?= $lbg; ?>" ><?php echo $lbg;?></option>
									<?php endif; ?>
									<?php endforeach; ?>
								</select>
						 		</div>

						 		

						 		<div class="form-group">
			    				<label for="daging">Daging</label>
								<select name="txt_daging" class="form-control" id="txt_daging"  value="<?= $sapi['daging'];?>">
									<?php foreach($daging as $dg) : ?>
									<?php if($dg == $sapi['daging']) : ?>
									<option value="<?= $dg; ?>" selected><?php echo $dg;?></option>
									<?php else : ?>
											
									<option value="<?= $dg; ?>" ><?php echo $dg;?></option>
									<?php endif; ?>
									<?php endforeach; ?>
								</select>
						 		</div>

						 		<div class="form-group">
			    				<label for="tgl_postmortem">Tanggal Pemeriksaan Postmortem</label>
								<input type="date" name="txt_tanggal_postmortem" class="form-control" id="txt_tanggal_postmortem"  value="<?= $sapi['tanggal_postmortem'];?>">

						 		

						 		<button type="submit" name="Tambah" class="btn btn-primary float-right" mt-5>Proses</button>
						 	</form>
						  </div>

     				

     			</div>
     		</div>
     	</div>




			
			
		
		

			
			

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->s