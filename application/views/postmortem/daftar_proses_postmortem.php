   

   <!-- Begin Page Content -->
        <div class="container-fluid">
        	<?php if($this->session->flashdata('flash')) : ?>
				<div class="row mt-3">
        		<div class="col-md-6">
              <?php if(empty($sapi)):?>
                <div class="alert alert-danger" role="alert"> Data Tidak Ditemukan!</div>
              <?php endif; ?>
        			<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data Sapi<strong>Berhasil</strong> <?= $this->session->flashdata('flash');?>.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>
        		</div>
        	</div>
        <?php endif;?>

          <!-- Page Heading -->
      <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Daftar Data Pemeriksaan Postmortem</h6>
              
              </a>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 
                   
 
                  <thead>

                    <tr>
                <th scope="col">No Pemeriksaan Post mortem</th>
                <th scope="col">No Telinga</th>
                
                <th scope="col">Atas nama</th>
                           
                <th scope="col">Action</th>
                    </tr>

                  </thead>
                 
                  <tbody>
                     <?php foreach($sapi as $sapi_data) :?>
                    <tr>
                <td><?= $sapi_data['id_antemortem'];?></td>
                <td><?= $sapi_data['no_telinga'];?></td>
                
                <td><?= $sapi_data['username'];?></td>
              
                   <td><a href="<?= base_url();?>Postmortem/HapusData/<?= $sapi_data['id_postmortem'];?>" class="badge badge-danger" onclick="return confirm('Data Akan Dihapus');">Hapus</a>
                  <a href="<?= base_url();?>Postmortem/detail_data_postmortem/<?= $sapi_data['id_postmortem'];?>" class="badge badge-primary">Detail</a>
                <a href="<?= base_url();?>Postmortem/ubah_dataPostmortem/<?= $sapi_data['id_postmortem'];?>" class="badge badge-success">Ubah</a>
              </tr>
                      
                </tr>        
                  <?php endforeach; ?>
                  </tbody>
                
                </table>

              </div>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->