   

   <!-- Begin Page Content -->
        <div class="container-fluid">
          <?php if($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
            
              
            </div>
          </div>
        <?php endif;?>

          <!-- Page Heading -->
      
 
          
       <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Daftar Data Permohonan Pemotongan</h6>
               
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 
                   
 
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
                <th scope="col">Proses</th>
                    </tr>

                  </thead>
                 
                  <tbody>
                     <?php foreach($pengajuan as $pgn) :?>

              <tr>
                <td><?= $pgn['id_pengajuan'];?></td>
                <td><?= $pgn['username'];?></td>
                <td><a href="<?php echo base_url();?>Kauptd/download/<?php echo $pgn['id_pengajuan'];?>">Download</a></td>
                <td><a href="<?php echo base_url();?>Kauptd/download_kepemilikan/<?php echo $pgn['id_pengajuan'];?>">Download</a></td>
                <td><a href="<?php echo base_url();?>Kauptd/download_keswan/<?php echo $pgn['id_pengajuan'];?>">Download</a></td>
                <td><a href="<?php echo base_url();?>Kauptd/download_pengangkutan/<?php echo $pgn['id_pengajuan'];?>">Download</a></td>
                <td><a href="<?php echo base_url();?>Kauptd/download_tidakproduktif/<?php echo $pgn['id_pengajuan'];?>">Download</a></td>
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
            </td>
               
                

                <td><a href="<?= base_url();?>Kauptd/ubah_terima/<?= $pgn['id_pengajuan'];?>" class="badge badge-success">Proses</a>
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