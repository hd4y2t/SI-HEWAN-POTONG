<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login Page</title>

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
                    <h1 class="h4 text-gray-900 mb-4">Silahkan Login!</h1>
                    <?php if($this->session->flashdata('flash')) : ?>
                       <div class="alert alert-success alert-dismissible fade show" role="alert">
          Data <strong>Berhasil</strong> <?= $this->session->flashdata('flash');?>
             <?php endif;?>
                  </div>

                 <form class="user" action="<?php echo base_url('Home/index')?>" method="post">
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user" id="username" aria-describedby="emailHelp" placeholder="Enter Username" value="<?= set_value('username')  ?>">
                        <?= form_error('username','<small class="text-danger pl-3">','</small>');?>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Password">
                      <?= form_error('password','<small class="text-danger pl-3">','</small>');?>
                    </div>
                 
                     <button type="submit" name="login" class="btn btn-primary btn-user btn-block" >
                      Login
                    </button>
                   
                  <hr>
                 
                  <div class="text-center">
                    <a class="small" href="<?= base_url('Home/Registrasi') ?>">Daftar Sebagai Pemohon</a>
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
