   

   <!-- Begin Page Content -->
        <div class="container-fluid">
        	<?php if($this->session->flashdata('flash')) : ?>
				<div class="row mt-3">
        		<div class="col-md-6">
              
        			<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data Karyawan<strong>Berhasil</strong> <?= $this->session->flashdata('flash');?>
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
              <h6 class="m-0 font-weight-bold text-primary">Daftar Data Karyawan</h6>
               <a class="btn btn-primary float-right  " href="<?= base_url('Kauptd/tambah_dataKaryawan')?> " role="button"><i class="fas fa-plus">
          Tambah Data Karyawan</i></a>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 
                   
 
                  <thead>

                    <tr>

                      <th>Username</th>
                      <th>Password</th>
                      <th>Nama</th>
                      <th>Level</th>
                      <th>Nip</th>
                      <th>Gender</th>
                      <th>No Hp</th>
                      <th>TTL</th>
                      <th>Proses</th>
                    </tr>

                  </thead>
                 
                  <tbody>
                     <?php foreach($karyawan as $karyawan_data) :?>
                    <tr>
                      <td><?= $karyawan_data['username'];?></td>
                <td><?= $karyawan_data['password'];?></td>
                <td><?= $karyawan_data['nama'];?></td>
                
                <td>
                  <?php
                  if($karyawan_data['level']==1){
                    echo "Kauptd";
                  }elseif ($karyawan_data['level']==2) {
                    echo "Staff";
                  }else{
                    echo "dr. Hewan";
                  }
                  ?>
                </td>
                <td><?= $karyawan_data['nip'];?></td>
                <td><?= $karyawan_data['gender'];?></td>
                <td><?= $karyawan_data['no_hp'];?></td>
                <td><?= $karyawan_data['ttl'];?></td>
                 <td><a href="<?= base_url();?>Kauptd/HapusKaryawan/<?= $karyawan_data['nip'];?>" class="badge badge-danger" onclick="return confirm('Data Akan Dihapus');">Hapus</a>
                <a href="<?= base_url();?>Kauptd/ubah_dataKaryawan/<?= $karyawan_data['nip'];?>" class="badge badge-success" >Edit</a></td>
                      
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