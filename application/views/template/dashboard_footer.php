  	</div>
      <!-- End of Main Content -->
 			<!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Created <?= date('Y'); ?> By Ahmad Qomaini</span>
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
          <h5 class="modal-title" id="exampleModalLabel">Yakin ingin logout?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Logout sekarang.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/backend/') ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/backend/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/backend/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/backend/') ?>js/sb-admin-2.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/backend/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?= base_url('assets/backend/') ?>vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url('assets/backend/') ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?= base_url('assets/backend/') ?>js/demo/datatables-demo.js"></script>

  <script>
    $(document).ready(function(){
      const sosial_check = $('#checkbox_sosial');
      const input_id = $('#fbid, #fbkey, #gid, #gkey');
      if($(sosial_check).is(':checked'))
      {
        $(input_id).attr('readonly', false);
      } else {
        $(input_id).attr('readonly', true);
      }

      $(sosial_check).on('click', function(){
       if($(sosial_check).is(':checked'))
        {
          $(input_id).attr('readonly', false);
        } else {
          $(input_id).attr('readonly', true);
        }
      });
    });
  </script>

</body>
</html>