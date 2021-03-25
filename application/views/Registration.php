<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Halaman Registrasi</title>

  <!-- Custom fonts for this template-->
<link href="<?php echo base_url('vendor/sbadmin2/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">  

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('vendor/sbadmin2/css/sb-admin-2.min.css') ?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
             
              <div class="col">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Halaman Registrasi</h1>
                  </div>
                <form action="" method="post">
                  <div class="form-group">
                  <label for="username">Username</label>
                <input type="text" name="txt_username" class="form-control" id="username" placeholder="Username">
                <small  class="form-text text-danger"><?= form_error('txt_username') ?></small>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Email">
                <small  class="form-text text-danger"><?= form_error('email') ?></small>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                <input type="password" name="txt_password" class="form-control" id="password">
                <small  class="form-text text-danger"><?= form_error('txt_password') ?></small>
                </div>
                <div class="form-group">
                  <label for="nama">Nama</label>
                <input type="text" name="txt_nama" class="form-control" id="nama" placeholder="Nama">
                <small  class="form-text text-danger"><?= form_error('txt_nama') ?></small>
                </div>
                <div class="form-group">
                 <input type="hidden" name="txt_level" value="4">
                </div>
                <div class="form-group">
                  <label for="nip">NIK</label>
                <input type="text" name="txt_nip" class="form-control" id="nip" placeholder="">
                <small  class="form-text text-danger"><?= form_error('txt_nip') ?></small>
                </div>
                <div class="form-group">
                  <label for="gender">Gender</label>
                <select name="txt_gender" class="form-control" id="gender">
                  <option value="Pria">Pria</option>
                  <option value="Wanita">Wanita</option>
                </select>
                </div>
                <div class="form-group">
                  <label for="no_hp">Nomor HP</label>
                <input type="text" name="txt_nohp" class="form-control" id="no_hp" placeholder="">
                <small  class="form-text text-danger"><?= form_error('txt_nohp') ?></small>
                </div>
                <div class="form-group">
                  <label for="ttl">Tanggal Lahir</label>
                <input type="date" name="txt_tanggal" class="form-control" id="txt_tanggal">
                <small  class="form-text text-danger"><?= form_error('txt_tanggal') ?></small>
                </div>
                <div class="text-center">
                <button type="submit" name="regis" class="btn btn-primary">Daftar</button>
              </div>
              </form>
                   
                  <hr>
                 
                  <div class="text-center">
                    <a class="small" href="<?= base_url('Home/index')?>">Kembali</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
   <script src=<?php echo base_url('vendor/sbadmin2/vendor/jquery/jquery.min.js')  ?>></script>
  <script src=<?php echo base_url('vendor/sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>></script>

  <!-- Core plugin JavaScript-->
  <script src=<?php echo base_url('vendor/sbadmin2/vendor/jquery-easing/jquery.easing.min.js') ?>></script>

  <!-- Custom scripts for all pages-->
  <script src=<?php echo base_url('js/sb-admin-2.min.js') ?>></script>

</body>

</html>
