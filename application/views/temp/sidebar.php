

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('Dashboard/index')?>">
        <div class="sidebar-brand-icon rotate-n-15">
         
        </div>
        <div class="sidebar-brand-text mx-7">Sistem Informasi Hewan Potong</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Dashboard/index')?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
       Main Menu
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <?php if($this->session->userdata('level') == 1) {?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-user-plus"></i>
       
        <span>Kelola Data</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              
               <?php if($this->session->userdata('level') == 1) {?>
            <a class="collapse-item" href="<?= base_url('Sapi') ?>">Sapi</a>
                  <?php } ?>

             <?php if($this->session->userdata('level') == 4) {?>
            <a class="collapse-item" href="<?= base_url('Pemohon/GetDataSapiPemohon') ?>">Sapi</a>
                  <?php } ?>

                  <?php if($this->session->userdata('level') == 2) {?>
            <a class="collapse-item" href="<?= base_url('Sapi') ?>">Sapi</a>
                  <?php } ?>

            <?php if($this->session->userdata('level') == 1) {?>
            <a class="collapse-item" href="<?= base_url('Kauptd/index')?>">Karyawan</a>
            <?php } ?>

            <?php if($this->session->userdata('level') == 1) {?>
            <a class="collapse-item" href="<?= base_url('Kauptd/DataPemohon')?>">Data Pemohon</a>
            <?php } ?>

             <?php if($this->session->userdata('level') == 2) {?>
            <a class="collapse-item" href="<?= base_url('Kauptd/DataPemohon')?>">Data Pemohon</a>
            <?php } ?>
          </div>
        </div>
      </li>


    <?php } ?>

    <?php if($this->session->userdata('level') == 2) {?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-user-plus"></i>
       
        <span>Kelola Data</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              
               <?php if($this->session->userdata('level') == 1) {?>
            <a class="collapse-item" href="<?= base_url('Sapi') ?>">Sapi</a>
                  <?php } ?>

             <?php if($this->session->userdata('level') == 4) {?>
            <a class="collapse-item" href="<?= base_url('Pemohon/GetDataSapiPemohon') ?>">Sapi</a>
                  <?php } ?>

                  <?php if($this->session->userdata('level') == 2) {?>
            <a class="collapse-item" href="<?= base_url('Sapi') ?>">Sapi</a>
                  <?php } ?>

            <?php if($this->session->userdata('level') == 1) {?>
            <a class="collapse-item" href="<?= base_url('Kauptd/index')?>">Karyawan</a>
            <?php } ?>

            <?php if($this->session->userdata('level') == 1) {?>
            <a class="collapse-item" href="<?= base_url('Kauptd/DataPemohon')?>">Data Pemohon</a>
            <?php } ?>

             <?php if($this->session->userdata('level') == 2) {?>
            <a class="collapse-item" href="<?= base_url('Kauptd/DataPemohon')?>">Data Pemohon</a>
            <?php } ?>
          </div>
        </div>
      </li>


    <?php } ?>

     <?php if($this->session->userdata('level') == 4) {?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-user-plus"></i>
       
        <span>Kelola Data</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              
               <?php if($this->session->userdata('level') == 1) {?>
            <a class="collapse-item" href="<?= base_url('Sapi') ?>">Sapi</a>
                  <?php } ?>

             <?php if($this->session->userdata('level') == 4) {?>
            <a class="collapse-item" href="<?= base_url('Pemohon/GetDataSapiPemohon') ?>">Sapi</a>
                  <?php } ?>

                  <?php if($this->session->userdata('level') == 2) {?>
            <a class="collapse-item" href="<?= base_url('Sapi') ?>">Sapi</a>
                  <?php } ?>

            <?php if($this->session->userdata('level') == 1) {?>
            <a class="collapse-item" href="<?= base_url('Kauptd/index')?>">Karyawan</a>
            <?php } ?>

            <?php if($this->session->userdata('level') == 1) {?>
            <a class="collapse-item" href="<?= base_url('Kauptd/DataPemohon')?>">Data Pemohon</a>
            <?php } ?>

             <?php if($this->session->userdata('level') == 2) {?>
            <a class="collapse-item" href="<?= base_url('Kauptd/DataPemohon')?>">Data Pemohon</a>
            <?php } ?>
          </div>
        </div>
      </li>


    <?php } ?>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
         <i class="fas fa-microchip"></i>
          <span>Pemeriksaan</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">



               <?php if($this->session->userdata('level') == 1) {?>
            <a class="collapse-item" href="<?= base_url('Antemortem/index'); ?>">Ante Mortem</a>
                 <?php } ?>

                 <?php if($this->session->userdata('level') == 2) {?>
            <a class="collapse-item" href="<?= base_url('Antemortem/index'); ?>">Ante Mortem</a>
                 <?php } ?>

                 <?php if($this->session->userdata('level') == 4) {?>
            <a class="collapse-item" href="<?= base_url('Pemohon/getDataAntemortem'); ?>">Ante Mortem</a>
                 <?php } ?>

            <!--
            <?php if($this->session->userdata('level') == 1) {?>
             <a class="collapse-item" href="<?= base_url('Postmortem/index');?>">Post Mortem</a>   
              <?php } ?> 
               -->
              <?php if($this->session->userdata('level') == 3) {?>
             <a class="collapse-item" href="<?= base_url('Postmortem/index');?>">Post Mortem</a>   
              <?php } ?>   

                <?php if($this->session->userdata('level') == 4) {?>
             <a class="collapse-item" href="<?= base_url('Pemohon/getDataPostmortem');?>">Post Mortem</a>   
              <?php } ?>   
            
          </div>
        </div>
      </li>


       <!-- Halaman pengajuan untuk Admin -->
  <?php if($this->session->userdata('level') == 1) {?>
        <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="far fa-bookmark"></i>
          <span>Pengajuan</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              
            <a class="collapse-item" href="<?= base_url('Kauptd/Pengajuan');?>">Permohonan Pengajuan</a>     
            
            
            
          </div>
        </div>
      </li>
    <?php } ?>




      <!-- Halaman pengajuan untuk user -->
  <?php if($this->session->userdata('level') == 4) {?>
        <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="far fa-bookmark"></i>
          <span>Pengajuan</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              
            <a class="collapse-item" href="<?= base_url('Pemohon/Pengajuan');?>">Permohonan Pengajuan</a>     
            <a class="collapse-item" href="<?= base_url('Pemohon/Status_Pengajuan');?>">Status Pengajuan</a>
            
            
          </div>
        </div>
      </li>
    <?php } ?>


<?php if($this->session->userdata('level') == 1) {?>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Laporan
      </div>

      <!-- Nav Item - Pages Collapse Menu -->


       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse_Utilities" aria-expanded="true" aria-controls="collapseUtilities">
         <i class="fas fa-fw fa-folder"></i>
          <span>Cetak Laporan</span>
        </a>
        <div id="collapse_Utilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <?php if($this->session->userdata('level') == 1) {?>
                 
            <a class="collapse-item" href="<?= base_url('Laporan/Cetak_sapi')?>">Sapi</a>
             <?php } ?>

              <?php if($this->session->userdata('level') == 2) {?>
             <a class="collapse-item" href="<?= base_url('Laporan/Cetak_sapi')?>">Sapi</a>   
              <?php } ?>       

              <?php if($this->session->userdata('level') == 1) {?>
              <a class="collapse-item" href="<?= base_url('Laporan/cetak_Antemortem');?>">Ante Mortem</a>
            <?php } ?>
            <?php if($this->session->userdata('level') == 1) {?>
            <a class="collapse-item" href="<?= site_url('Laporan/cetak_Postmortem');?>">Post Mortem</a>
            <?php } ?>

             <?php if($this->session->userdata('level') == 2) {?>
              <a class="collapse-item" href="<?= base_url('Laporan/cetak_Antemortem');?>">Ante Mortem</a>
            <?php } ?>
            <?php if($this->session->userdata('level') == 2) {?>
            <a class="collapse-item" href="<?= site_url('Laporan/cetak_Postmortem');?>">Post Mortem</a>
            <?php } ?>
            
            
          </div>
        </div>
      </li>
         <?php } ?>



<?php if($this->session->userdata('level') == 2) {?>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Laporan
      </div>

      <!-- Nav Item - Pages Collapse Menu -->


       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse_Utilities" aria-expanded="true" aria-controls="collapseUtilities">
         <i class="fas fa-fw fa-folder"></i>
          <span>Cetak Laporan</span>
        </a>
        <div id="collapse_Utilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <?php if($this->session->userdata('level') == 1) {?>
                 
            <a class="collapse-item" href="<?= base_url('Laporan/Cetak_sapi')?>">Sapi</a>
             <?php } ?>

              <?php if($this->session->userdata('level') == 2) {?>
             <a class="collapse-item" href="<?= base_url('Laporan/Cetak_sapi')?>">Sapi</a>   
              <?php } ?>       

              <?php if($this->session->userdata('level') == 1) {?>
              <a class="collapse-item" href="<?= base_url('Laporan/cetak_Antemortem');?>">Ante Mortem</a>
            <?php } ?>
            <?php if($this->session->userdata('level') == 1) {?>
            <a class="collapse-item" href="<?= site_url('Laporan/cetak_Postmortem');?>">Post Mortem</a>
            <?php } ?>

             <?php if($this->session->userdata('level') == 2) {?>
              <a class="collapse-item" href="<?= base_url('Laporan/cetak_Antemortem');?>">Ante Mortem</a>
            <?php } ?>
            <?php if($this->session->userdata('level') == 2) {?>
            <a class="collapse-item" href="<?= site_url('Laporan/cetak_Postmortem');?>">Post Mortem</a>
            <?php } ?>
            
            
          </div>
        </div>
      </li>
         <?php } ?>

     
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->