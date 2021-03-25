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
                  <input type="hidden" name="txt_id" value="<?= $pengajuan['id_pengajuan'];?>">
                  <div class="form-group">
                  <label for="username">Atas Nama</label>
                <input type="text" name="username" class="form-control" id="username" value="<?= $pengajuan['username'];?>" disabled>
                
                </div>

                  <div class="form-group">
                      <label for="txt_asalhewan">Surat Keterangan Asal Hewan</label>
                      <input type="file" class="form-control-file" name="txt_asalhewan" id="txt_asalhewan" value="<?= $pengajuan['asal_hewan'];?>">
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

                    <div class="form-group">
                  <label for="txt_status">Status</label>
                <input type="text" name="txt_status" class="form-control" id="txt_status" value="<?= $pengajuan['status'];?>">
                
                </div>

                    
               
                <button type="submit" name="Tambah" class="btn btn-primary float-right">Peoses</button>
              <?= form_close();?>
              </div>

            

          </div>
        </div>
      </div>




      
      
    
    

      
      

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->  