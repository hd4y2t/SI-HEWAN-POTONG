

      <!-- Footer -->
      <footer class="sticky-footer bg-white mt-3">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Dinas Pertanian Dan Ketahanan Pangan Kota Palembang <?= date("Y");?></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tinggalkan sistem?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Anda akan keluar dari sistem, lanjutkan?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= base_url('Home/logout') ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

   <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('vendor/sbadmin2/vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?= base_url('vendor/sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('vendor/sbadmin2/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('vendor/sbadmin2/js/sb-admin-2.min.js')?>"></script>

  <!-- Page level plugins -->
  <!-- Page level plugins -->
  <script src="<?= base_url('vendor/sbadmin2/vendor/datatables/jquery.dataTables.min.js');?>"></script>
  <script src="<?= base_url('vendor/sbadmin2/vendor/datatables/dataTables.bootstrap4.min.js');?>"></script>
 

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url('vendor/sbadmin2/js/demo/chart-area-demo.js')?>"></script>
  <script src="<?php echo base_url('vendor/sbadmin2/js/demo/chart-pie-demo.js')?>"></script>
  <script src="<?= base_url('vendor/sbadmin2/js/demo/datatables-demo.js');?>"></script>

</body></html>
