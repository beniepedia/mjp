  	</div>
      <!-- End of Main Content -->
 			<!-- Footer -->
      <footer class="sticky-footer bg-white shadow-lg">
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



  <!-- Bootstrap core JavaScript-->
 <!--  <script src="<?= base_url() ?>assets/backend/vendor/jquery/jquery.min.js"></script> -->
  <script src="<?= base_url() ?>assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('') ?>assets/backend/vendor/jquery-easing/jquery.easing.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/backend/vendor/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('') ?>assets/backend/js/sb-admin-2.js" type="text/javascript"></script>

  <!-- Page level plugins -->
  <script src="<?= base_url('') ?>assets/backend/vendor/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
  <script src="<?= base_url('') ?>assets/backend/vendor/datatables/dataTables.bootstrap4.min.js" type="text/javascript"></script>

  <script src="<?= base_url('') ?>assets/backend/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>

  <!-- Page level custom scripts -->
  <script src="<?= base_url('') ?>assets/backend/js/demo/datatables-demo.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js" type="text/javascript"></script>
  <!-- Jquery File Input -->
  <script src="<?= base_url() ?>assets/backend/vendor/bootstrap-fileinput/js/fileinput.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/backend/vendor/bootstrap-fileinput/js/plugins/piexif.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/backend/vendor/bootstrap-fileinput/js/plugins/sortable.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/backend/vendor/bootstrap-fileinput/themes/fas/theme.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/backend/vendor/bootstrap-fileinput/themes/explorer-fas/theme.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/backend/vendor/chart.js/Chart.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/backend/vendor/waypoints/jquery.waypoints.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/backend/vendor/jquery-counterup/jquery.counterup.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/backend/vendor/MKnotif/src/js/mk-notifications.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/backend/vendor/bootstrap-toggle-master/js/bootstrap-toggle.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/backend/js/dropify.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/backend/vendor/token-field/dist/bootstrap-tokenfield.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/backend/js/myscript.js"></script>

  <?php if($this->check->is_admin()->role_id == 1) : ?>

    <script>
      $(document).ready(function(){
          var pusher = new Pusher('64116644fe77e7ebfb2f', {
            cluster: 'ap1',
            forceTLS: true
          });

          var channel = pusher.subscribe('my-channel');
          channel.bind('my-event', function(data) {
            var config = {max: 6};

            mkNotifications(config);
            var options = {
              status: 'success',
              link: {
                 url: '<?php echo base_url('admin/message/inbox'); ?>'
              }, 
              sound: true,
              duration: 8000
            };
            mkNoti(
                data['nama'],
                data['pesan'],
                options
            );
            load_notif();
          });

          $('.message-button').on('click', function(){
              load_notif();
          });

          load_notif();

          function load_notif(view = '') {
            $.ajax({
                url: '<?php echo base_url('admin/message/get_message'); ?>',
                type: 'POST',
                data: {view:view},
                dataType: 'json',
                success: function (data) {
                  $('.badge-counter').html(data.notif);
                  $('.message').html(data.message);
                }
              });
          }

            
      });
    </script>
  <?php endif; ?>


</body>
</html>