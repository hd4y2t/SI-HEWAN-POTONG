   <!-- Begin Page Content -->
        <div class="container-fluid">

          

          <!-- Page Heading -->
        <div class="row mt-3">
          <div class="col-md-6">
            <div class="card">
            <div class="card-header">
                Form Pengajuan Permohonan Pemotongan Sapi
              </div>
              <div class="card-body">
                
               
                
               <?= form_open_multipart('Pemohon/tambah_pengajuan'); ?>
                  <div class="form-group">
                  <label for="username">Atas Nama</label>
                <input type="text" name="username" class="form-control" id="username" value="<?= $user['username'] ;?>" >
                <small  class="form-text text-danger"><?= form_error('txt_username') ?></small>
                </div>


                <div class="form-group">
                  <label for="username">Email</label>
                <input type="text" name="email" class="form-control" id="email" value="<?= $user['email'] ;?>" >
                <small  class="form-text text-danger"><?= form_error('email') ?></small>
                </div>


                  <div class="form-group">
                      <label for="txt_asalhewan">Surat Keterangan Asal Hewan</label>
                      <input type="file" class="form-control-file" name="txt_asalhewan" id="txt_asalhewan">
                    </div>

                    <div class="form-group">
                      <label for="txt_kepemilikanhewan">Surat Keterangan Kepemilikan Hewan</label>
                      <input type="file" class="form-control-file" name="txt_kepemilikanhewan" id="txt_kepemilikanhewan">
                    </div>

                    <div class="form-group">
                      <label for="txt_keswan">Surat Keterangan Kesehatan Hewan</label>
                      <input type="file" class="form-control-file" name="txt_keswan" id="txt_keswan">
                    </div>

                    <div class="form-group">
                      <label for="txt_pengangkutan">Surat Keterangan Pengankutan Hewan</label>
                      <input type="file" class="form-control-file" name="txt_pengangkutan" id="txt_pengangkutan">
                    </div>

                    <div class="form-group">
                      <label for="txt_tidakproduktif">Surat Keterangan Betina Tidak Produktif</label>
                      <input type="file" class="form-control-file" name="txt_tidakproduktif" id="txt_tidakproduktif">
                    </div>

                    <input type="hidden" name="txt_status" value="1">
               
                <button type="submit" name="Tambah" class="btn btn-primary float-right">Tambah Data</button>
              <?= form_close();?>
              </div>

            

          </div>
        </div>
      </div>




      
      
    
    

      
      

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->  