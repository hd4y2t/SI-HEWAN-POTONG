   

   <!-- Begin Page Content -->
        <div class="container-fluid">
        	<?php if($this->session->flashdata('flash')) : ?>
				<div class="row mt-3">
        		<div class="col-md-6">
            
        			
        		</div>
        	</div>
        <?php endif;?>

          <!-- Page Heading -->
      
 
	   			
			
          <table class="table table-bordered mt-3">
            <thead>
              <tr>
                <th scope="col">No Pengajuan</th>
                <th scope="col">Atas nama</th>
                <th scope="col">Surat Keterangan Asal Hewan</th>
                <th scope="col">Surat Kepemilikan Hewan</th>
                <th scope="col">Surat Keterangan Kesehatan Hewan</th>
                <th scope="col">Surat Keterangan Pengangkutan</th>
                <th scope="col">Surat Keterangan Tidak Produktif</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
             
             <?php foreach($pengajuan as $pgn) :?>

              <tr>
                <td><?= $pgn['id_pengajuan'];?></td>
                <td><?= $pgn['username'];?></td>
                <td><?= $pgn['asal_hewan'];?></td>
                <td><?= $pgn['kepemilikan_hewan'];?></td>
                <td><?= $pgn['ket_keswan'];?></td>
                <td><?= $pgn['ket_pengangkutan'];?></td>
                <td><?= $pgn['ket_tidakproduktif'];?></td>
               <td>
                <?php 
                if($pgn['status']==0){
                  echo "Ditolak";
                }elseif($pgn['status']==1){
                    echo "Pending";
                } else{
                  $pgn['status']==2;
                    echo "Diterima";
                }
              
              ?>
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