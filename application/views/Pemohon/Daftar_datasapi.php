   

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
                <th scope="col">No Telinga</th>
                <th scope="col">Ras</th>
                <th scope="col">Berat</th>
                <th scope="col">Gender</th>
                <th scope="col">Atas nama</th>
                <th scope="col">Tanggal Masuk</th>
            
              </tr>
            </thead>
              <?php foreach($sapi as $sapi_data) :?>

              <tr>
                <td><?= $sapi_data['no_telinga'];?></td>
                <td><?= $sapi_data['ras'];?></td>
                <td><?= $sapi_data['berat'];?></td>
                <td><?= $sapi_data['gender'];?></td>
                <td><?= $sapi_data['username'];?></td>
                <td><?= $sapi_data['tanggal_masuk'];?></td>
                
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

	   <!--<div class="row mt-3">
	   	&nbsp<a href="<?= base_url();?>Sapi/HapusDataSapi/<?= $sapi_data['no_telinga'];?>" class="badge badge-success ">Edit</a></td>
	   		<div class="col-md6">
	   			<h1>Data Sapi RPH Gandus</h1>

					<ul class="list-group">
						<?php foreach ($sapi as $sapi_data) : ?>
					  <li class="list-group-item"><?= $sapi_data['no_telinga'] ?></li>
					  <?php endforeach; ?>
					</ul>
	   		</div>

	   </div>

	
			-->
			
		
		

			
			

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->