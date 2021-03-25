<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          

          <!-- DataTales Example -->

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
                    </tr>

                  </thead>
                 
                  <tbody>
                     <?php foreach($karyawan as $karyawan_data) :?>
                    <tr>
                      <td><?= $karyawan_data['username'];?></td>
                      <td><?= $karyawan_data['username'];?></td>
                      <td><?= $karyawan_data['username'];?></td>
                      <td><?= $karyawan_data['username'];?></td>
                      <td><?= $karyawan_data['username'];?></td>
                      <td><?= $karyawan_data['username'];?></td>
                      <td><?= $karyawan_data['username'];?></td>
                      <td><?= $karyawan_data['username'];?></td>
                      
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