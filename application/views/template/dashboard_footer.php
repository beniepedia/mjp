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

  <!-- Page level custom scripts -->
  <script src="<?= base_url('') ?>assets/backend/js/demo/datatables-demo.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/backend/vendor/summernote/summernote-bs4.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/backend/vendor/summernote/lang/summernote-id-ID.js" type="text/javascript"></script>

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
  <script src="<?= base_url() ?>assets/backend/vendor/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/backend/js/myscript.js"></script>


  <script>
      $(document).ready(function(){
        <?php if($this->check->is_admin()->role_id == 1) : ?>
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
    <?php endif; ?>

    <?php if($this->generalset->all()->general_set_autologout == 1) : ?>
          var time = '<?= $this->generalset->web()->site_login_timeout ?>';
          var idleMax = 60 * time;
          var idleTime = 0;

          var idleInterval = setInterval(function() {
              timerIncrement();
              $(this).mousemove(function(e) {
                  idleTime = 0;
              });
              $(this).keypress(function(e) {
                  idleTime = 0;
              });
          }, 1000);

          function timerIncrement() {
              idleTime = idleTime + 1;
              // console.log(idleTime);
              if (idleTime >= idleMax) {
                  $.ajax({
                      url: '<?= base_url('logout'); ?>',
                      type: 'POST',
                      cache: false,
                      success: function() {
                          // alert('Sesi anda sudah berakhir, silahkan login kembali!');
                         
                          // window.location = '<?= base_url('login') ?>';

                          const swalWithBootstrapButtons = Swal.mixin({
                            customClass: {
                              confirmButton: 'btn btn-success ',
                              cancelButton: 'btn btn-danger mr-2'
                            },
                            buttonsStyling: false
                          })

                          swalWithBootstrapButtons.fire({
                            title: 'SESI HABIS!',
                            text: "Sesi anda sudak berakhir, apakah ingin login kembali ?",
                            type: 'info',
                            showCancelButton: true,
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                            confirmButtonText: 'Ya, login kembali',
                            cancelButtonText: 'kembali ke home',
                            reverseButtons: true
                          }).then((result) => {
                            if (result.value) {
                              window.location = '<?= base_url('login') ?>'
                            
                            } else if (
                              /* Read more about handling dismissals below */
                              result.dismiss === Swal.DismissReason.cancel
                            ) {
                              window.location = '<?= base_url('/') ?>'
                            }
                          })
                      }
                  })
              clearInterval(idleInterval);
              }
          }
          <?php endif; ?>  

        var audioUrl = '<?= base_url('assets/sound/click.mp3') ?>';
        var audio2 = [new Audio(audioUrl), new Audio(audioUrl), new Audio(audioUrl), new Audio(audioUrl), new Audio(audioUrl)];
        var soundNb = 0;
        $('a[href]').click( () => audio2[ soundNb++ % audio2.length ].play());


      });
    </script>


</body>
</html>