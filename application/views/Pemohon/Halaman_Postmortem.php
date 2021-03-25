   

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
      
    
	   			
			
          <table class="table table-bordered mt-3">
            <thead>
              <tr>
                <th scope="col">No Pemeriksaan Post mortem</th>
                <th scope="col">No Telinga</th>
                
                <th scope="col">Atas nama</th>
                           
                <th scope="col">Action</th>
              </tr>
            </thead>
              <?php foreach($sapi as $sapi_data) :?>

              <tr>
                <td><?= $sapi_data['id_postmortem'];?></td>
                <td><?= $sapi_data['no_telinga'];?></td>
                
                <td><?= $sapi_data['username'];?></td>
                
                
                <td>
                  <a href="<?= base_url();?>Antemortem/detail_data_antemortem/<?= $sapi_data['id_antemortem'];?>" class="badge badge-primary">Detail</a>
               
              </tr>
                  

            
            <?php endforeach; ?>    
                
            
          </table>

 				       
              <ul class="pagination float-right mt-5">
                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
              </nav>

	   
			
		
		

			
			

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->